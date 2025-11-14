#!/usr/bin/env python3
"""
Extract text and images from a PDF and produce a simple summary.
Usage: python scripts/extract_verdea.py "Verdea Magazine.pdf" extracted_output_dir
"""
import sys
import os
import json
try:
    import fitz  # PyMuPDF
    from PIL import Image
except Exception as e:
    print("Missing required packages. Install PyMuPDF and Pillow.")
    raise


def save_pixmap(pix, path):
    if pix.n < 5:  # GRAY or RGB
        pix.save(path)
    else:  # CMYK: convert to RGB first
        pix0 = fitz.Pixmap(fitz.csRGB, pix)
        pix0.save(path)
        pix0 = None


def analyze_pdf(pdf_path, out_dir):
    doc = fitz.open(pdf_path)
    os.makedirs(out_dir, exist_ok=True)
    text_path = os.path.join(out_dir, "verdea_text.txt")
    summary = {
        "file": os.path.basename(pdf_path),
        "page_count": doc.page_count,
        "pages": []
    }

    images_dir = os.path.join(out_dir, "images")
    os.makedirs(images_dir, exist_ok=True)

    with open(text_path, "w", encoding="utf-8") as tf:
        for i, page in enumerate(doc, start=1):
            tf.write(f"--- PAGE {i} ---\n")
            # Extract plain text
            text = page.get_text()
            tf.write(text + "\n\n")

            # Extract structured text to find large-font headings
            page_dict = page.get_text("dict")
            spans = []
            for block in page_dict.get("blocks", []):
                for line in block.get("lines", []):
                    for span in line.get("spans", []):
                        spans.append({
                            "text": span.get("text", "").strip(),
                            "size": span.get("size", 0),
                            "font": span.get("font", "")
                        })

            # heuristically pick top font sizes on the page as headings
            top_spans = sorted([s for s in spans if s["text"]], key=lambda s: -s["size"])[:6]
            headings = [s["text"] for s in top_spans if len(s["text"]) > 3]

            # Extract images on the page
            image_list = page.get_images(full=True)
            saved_images = []
            for img_index, img in enumerate(image_list, start=1):
                xref = img[0]
                try:
                    pix = fitz.Pixmap(doc, xref)
                    img_name = f"page{i}_img{img_index}.png"
                    img_path = os.path.join(images_dir, img_name)
                    save_pixmap(pix, img_path)
                    saved_images.append(img_name)
                    pix = None
                except Exception as e:
                    print(f"Failed to save image xref={xref} on page {i}: {e}")

            summary["pages"].append({
                "page": i,
                "headings": headings,
                "image_count": len(image_list),
                "saved_images": saved_images
            })

    # write JSON summary
    summary_path = os.path.join(out_dir, "summary.json")
    with open(summary_path, "w", encoding="utf-8") as sf:
        json.dump(summary, sf, indent=2, ensure_ascii=False)

    print(f"Extraction complete. Text -> {text_path}; images -> {images_dir}; summary -> {summary_path}")


if __name__ == "__main__":
    if len(sys.argv) < 2:
        print("Usage: python extract_verdea.py <pdf-path> [out-dir]")
        sys.exit(2)
    pdf_path = sys.argv[1]
    out_dir = sys.argv[2] if len(sys.argv) > 2 else "extracted_verdea"
    analyze_pdf(pdf_path, out_dir)
