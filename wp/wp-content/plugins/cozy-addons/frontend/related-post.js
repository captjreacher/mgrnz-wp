(function ($) {
  window["cozyBlockRelatedPostsInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyRelatedPosts_${n}`];
    const relatedPostsClass = `#cozyBlock_${n}`;
    const cozyRelatedPosts = document.querySelector(relatedPostsClass);

    const gridStyles = [
      {
        property: "--cozyGridTemplateColumns",
        value: blockOptions.gridOptions.displayColumn,
      },
      {
        property: "--cozyGridGap",
        value: `${blockOptions.gridOptions.columnGap}px`,
      },
    ];

    gridStyles.forEach((style) => {
      cozyRelatedPosts.style.setProperty(style.property, style.value);
    });
  };
})(jQuery);
