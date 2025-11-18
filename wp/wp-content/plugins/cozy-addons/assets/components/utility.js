import { __ } from "@wordpress/i18n";

export function getFontOptions(googleFonts) {
	let fontOptions = [{ label: "Default", value: "" }];

	if (typeof googleFonts === "object") {
		// Loop through the array of objects using for...of
		for (let key in googleFonts) {
			fontOptions.push({
				label: googleFonts[key],
				value: key,
			});
		}
	}
	return fontOptions;
}

export const fontWeights = [
	{ label: __("Thin", "cozy-addons"), value: 100 },
	{
		label: __("Extra Light", "cozy-addons"),
		value: 200,
	},
	{ label: __("Light", "cozy-addons"), value: 300 },
	{
		label: __("Normal", "cozy-addons"),
		value: 400,
	},
	{
		label: __("Medium", "cozy-addons"),
		value: 500,
	},
	{
		label: __("Semi Bold", "cozy-addons"),
		value: 600,
	},
	{ label: __("Bold", "cozy-addons"), value: 700 },
	{
		label: __("Extra Bold", "cozy-addons"),
		value: 800,
	},
	{
		label: __("Black", "cozy-addons"),
		value: 900,
	},
];

export function stripTags(html) {
	var doc = new DOMParser().parseFromString(html, "text/html");
	return doc.body.textContent || "";
}

export function stripShortcodes(content) {
	return content.replace(/\[.*?\]/g, ""); // This removes any shortcodes enclosed in square brackets.
}

export function createExcerpt(text, maxLength = 40) {
	// Strip HTML tags and shortcodes
	text = stripTags(stripShortcodes(text));

	// Split the text into words
	var words = text.split(" ");

	// Truncate to the specified length
	if (words.length > maxLength) {
		text = words.slice(0, maxLength).join(" ") + "...";
	} else {
		text = words.join(" ");
	}

	return text;
}

export function renderTRBL(type, attr) {
	if (attr && Object.keys(attr).length < 4) {
		if (Object.keys(attr).length === 1) {
			return `
      ${type}: ${attr};
    `;
		}
		return `
      ${type}: ${attr.width} ${attr.style} ${attr.color};
    `;
	} else if (attr && Object.keys(attr).length === 4) {
		if (type === "border") {
			return `
        border-top: ${attr.top.width} ${attr.top.style} ${attr.top.color};
        border-right: ${attr.right.width} ${attr.right.style} ${attr.right.color};
        border-bottom: ${attr.bottom.width} ${attr.bottom.style} ${attr.bottom.color};
        border-left: ${attr.left.width} ${attr.left.style} ${attr.left.color};
      `;
		}
		return `
    ${type}: ${attr.top} ${attr.right} ${attr.bottom} ${attr.left};
  `;
	} else {
		return "";
	}
}
