(function ($) {
  window["cozyBlockDateTimeInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyDateTime_${n}`];
    const dateTimeClass = `#cozyBlock_${n}`;
    const cozyDateTime = document.querySelector(dateTimeClass);

    const dateTimeStyles = [
      {
        property: "--cozyDateTimePadding",
        value: `${blockOptions.layout.padding.top}px ${blockOptions.layout.padding.right}px ${blockOptions.layout.padding.bottom}px ${blockOptions.layout.padding.left}px`,
      },
      {
        property: "--cozyDateTimeDisplay",
        value: blockOptions.layout.display,
      },
      {
        property: "--cozyDateTimeFlexGap",
        value: `${blockOptions.layout.gap}px`,
      },
      {
        property: "--cozyDateTimeTextAlign",
        value: blockOptions.layout.textAlign,
      },
      {
        property: "--cozyDateTimeFontFamily",
        value: blockOptions.layout.styles.fontFamily,
      },
      {
        property: "--cozyDateTimeFontSize",
        value: `${blockOptions.layout.styles.fontSize}px`,
      },
      {
        property: "--cozyDateTimeFontWeight",
        value: blockOptions.layout.styles.fontWeight,
      },
      {
        property: "--cozyDateTimeBorderRadius",
        value: `${blockOptions.layout.borderRadius.topL}px ${blockOptions.layout.borderRadius.topR}px ${blockOptions.layout.borderRadius.bottomR}px ${blockOptions.layout.borderRadius.bottomL}px`,
      },
      {
        property: "--cozyDateTimeColor",
        value: blockOptions.layout.styles.color,
      },
      {
        property: "--cozyDateTimeBgColor",
        value: blockOptions.layout.styles.bgColor,
      },
    ];

    if (blockOptions.date.enabled && blockOptions.time.enabled) {
      dateTimeStyles.push({
        property: "--cozyDateTimeMarginBottom",
        value: `${blockOptions.layout.marginBottom}px`,
      });
    }

    if (cozyDateTime !== null) {
      dateTimeStyles.forEach((style) => {
        cozyDateTime.style.setProperty(style.property, style.value);
      });
    }

    const timeStyles = [
      {
        property: "--cozyTimePadding",
        value: `${blockOptions.time.padding.top}px ${blockOptions.time.padding.right}px ${blockOptions.time.padding.bottom}px ${blockOptions.time.padding.left}px`,
      },
      {
        property: "--cozyTimeFontSize",
        value: `${blockOptions.time.styles.fontSize}px`,
      },
      {
        property: "--cozyTimeFontWeight",
        value: blockOptions.time.styles.fontWeight,
      },
      {
        property: "--cozyTimeBorderRadius",
        value: `${blockOptions.time.borderRadius.topL}px ${blockOptions.time.borderRadius.topR}px ${blockOptions.time.borderRadius.bottomR}px ${blockOptions.time.borderRadius.bottomL}px`,
      },
      {
        property: "--cozyTimeColor",
        value: blockOptions.time.styles.color,
      },
      {
        property: "--cozyTimeBgColor",
        value: blockOptions.time.styles.bgColor,
      },
    ];

    const cozyTime = cozyDateTime.querySelector(".cozy-time");
    if (cozyTime !== null) {
      timeStyles.forEach((style) => {
        cozyTime.style.setProperty(style.property, style.value);
      });
    }

    function updateTime(blockOptions, cozyDateTime) {
      var now = new Date();
      if (cozyDateTime) {
        const date = cozyDateTime.querySelector(".cozy-date");
        const time = cozyDateTime.querySelector(".cozy-time");

        const months = [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December",
        ];

        const daysInWeek = [
          "Sunday",
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
        ];

        const month = months[now.getMonth()];
        const day = now.getDate();
        const year = now.getFullYear();
        const week = daysInWeek[now.getDay()];

        if (blockOptions.date.enabled) {
          if (blockOptions.date.format === "m-d-y") {
            date.innerHTML = `${
              blockOptions.week.enabled
                ? blockOptions.abbr
                  ? week.slice(0, 3) + " "
                  : week + " "
                : ""
            }${blockOptions.abbr ? month.slice(0, 3) : month} ${day}, ${year}`;
          } else {
            date.innerHTML = `${
              blockOptions.week.enabled
                ? blockOptions.abbr
                  ? week.slice(0, 3) + " "
                  : week + " "
                : ""
            }${day} ${blockOptions.abbr ? month.slice(0, 3) : month}, ${year}`;
          }
        }

        if (blockOptions.time.enabled) {
          time.innerHTML = now.toLocaleTimeString("en-US", {
            hour12: blockOptions.time.timeFormat,
          });
        }
      }

      setTimeout(() => updateTime(blockOptions, cozyDateTime), 1000);
    }

    updateTime(blockOptions, cozyDateTime);
  };
})(jQuery);
