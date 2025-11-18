<?php

/**
 * Title: PRO: Featured Product Showcase Tabs
 * Slug: cozy-essential-addons/storemate-categort-tabs
 * Categories: storemate
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"className":"storemate-slide-up","layout":{"type":"constrained","contentSize":"1340px"}} -->
<div class="wp-block-group storemate-slide-up" style="padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:cozy-block/product-tab {"blockClientId":"43202db2-b63a-41a8-8f41-edfef9cffe14","title":"Featured Products","typography":{"fontFamily":"\u0022Montserrat\u0022","fontSize":24,"color":"#000","fontWeight":"600"}} -->
    <style>
        #cozyBlock_43202db2_b63a_41a8_8f41_edfef9cffe14 .product-tab-title {
            font-weight: 600;
            font-size: 24px;
            font-family: "Montserrat";
            color: #000;
        }
    </style>
    <div class="cozy-block-product-tab" id="cozyBlock_43202db2_b63a_41a8_8f41_edfef9cffe14"><!-- wp:cozy-block/advanced-tab {"blockClientId":"ab386a4e-7998-49a2-b152-29bd26a99f2e","tabAlign":"right","columnGap":12,"innerBlocks":[{"clientId":"3c16096a-9e71-49de-8fd7-8125048d87e5","name":"cozy-block/advanced-tab-item","isValid":true,"originalContent":"\u003cdiv class=\u0022cozy-block-advanced-tab-item\u0022 id=\u0022cozyBlock_b88845ca_80ff_462d_9831_885774b78051\u0022 data-client-id=\u0022b88845ca-80ff-462d-9831-885774b78051\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"blockClientId":"3c16096a-9e71-49de-8fd7-8125048d87e5","tabTitle":"Latest Products","enableIcon":false,"iconViewBox":{"vx":0,"vy":0,"vw":25,"vh":19},"iconPath":"M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"},"innerBlocks":[{"clientId":"40ce634c-f17d-4269-89de-c1682a253570","name":"cozy-block/product-carousel","isValid":true,"originalContent":"\u003cstyle\u003e\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617.layout-grid .cozy-layout-grid {\n      row-gap: 30px;\n      column-gap: 30px;\n      grid-template-columns: repeat(4, auto);\n    }\n    @media screen and (max-width: 1024px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          3,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 767px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          2,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 400px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          1,\n          auto\n        ) !important;\n      }\n    }\n\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617.on-sale .cozy-sale-badge {\n      padding: 10px 6px 10px 6px;\n      border: 1px none #000;\n      border-radius: 50px;\n      background-color: #5566ca;\n      rotate: 0deg;\n      top: 10px;\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: #fff;\n    }\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617.on-sale.sale-badge-display-block .cozy-sale-badge * {\n      margin-bottom: 0px;\n    }\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617.on-sale.sale-badge-display-flex .cozy-sale-badge {\n      gap: 0px;\n    }\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617.on-sale.sale-badge-position-left .cozy-sale-badge{\n      left: 0px;\n    }\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617.on-sale.sale-badge-position-right .cozy-sale-badge{\n      right: 10px;\n    }\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617.on-sale .cozy-sale-badge .label-before, #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617.on-sale .cozy-sale-badge .label-after {\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: ;\n    }\n\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .cozy-template-two .wp-block-read-more:hover, #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button, #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a{\n      background-color: #5566ca !important;\n      color: #fff !important;\n      opacity: 1 !important;\n    } \n\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .wc-block-components-product-rating__stars {\n      font-size: 14px;\n      color: ;\n    }\n\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .swiper-button-prev::after,\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .swiper-button-next::after {\n        font-size: 15px;\n    }\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .swiper-button-prev,\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .swiper-button-next {\n        width: 35px;\n        height: 35px;\n        border-radius: 50px;\n        color: #007cba;\n        background-color: #fff;\n    }\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .swiper-button-prev:hover,\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .swiper-button-next:hover {\n        color: #fff;\n        background-color: #007cba;\n    }\n\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .swiper-pagination {\n        bottom: 0px;\n    }\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .swiper-pagination .swiper-pagination-bullet {\n        width: 10px;\n        height: 10px;\n        border-radius: 10px;\n        background-color: #252525;\n    }\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .swiper-pagination .swiper-pagination-bullet-active {\n        width: 10px;\n        border-radius: 10px;\n        background-color: #007cba;\n    }\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .swiper-pagination .swiper-pagination-bullet:hover {\n        background-color: #a5a5a5;\n    }\n    #cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617 .swiper-pagination .swiper-pagination-bullet-active:hover {\n        background-color: #164861;\n    }\n  \u003c/style\u003e\u003cdiv class=\u0022cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  \u0022 id=\u0022cozyBlock_481da31f_25b9_4535_ac94_e07e28dd5617\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"cover":"","blockClientId":"40ce634c-f17d-4269-89de-c1682a253570","namespace":"cozy-block/product-carousel","currencySymbol":"","currencyPosition":"","quickView":false,"layout":"grid","template":"default","buttonHoverColor":{"background":"#5566ca","text":"#fff"},"productGroup":"latest","productCategory":[],"imageScale":true,"saleBadge":{"enabled":true,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"default","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"hoverShow":true,"gridOptions":{"displayColumn":4,"columnGap":30},"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","verticalPosition":0},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700},"reviewStyles":{"fontSize":14,"color":""}},"innerBlocks":[{"clientId":"8904e28b-9c41-4f99-b222-2397622bdf23","name":"core/query","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-query cozy-query cozy-product-carousel__swiper-container\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"queryId":1,"query":{"perPage":"4","postType":"product"},"tagName":"div","namespace":"cozy-block/cozy-woo-query","enhancedPagination":false,"lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"},"innerBlocks":[{"clientId":"52aa7c3f-d53c-46dc-8c9b-4c47ff39064a","name":"core/post-template","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"},"innerBlocks":[{"clientId":"4d187138-a616-4af6-a2c8-2654c827f63e","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-box\u0022\u003e\n\n\n\n\n\n\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"blockGap":"0"}},"className":"storemate-product-box","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"6be54339-4834-4b0a-a589-d6564d5b66c0","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-image\u0022 style=\u0022margin-bottom:14px\u0022\u003e\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"storemate-product-image","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"e148ba9f-3806-4bea-b236-7785b62ad323","name":"core/post-featured-image","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"isLink":true,"height":"380px","scale":"cover","rel":"","linkTarget":"_self","dimRatio":0,"style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]},{"clientId":"d6d7049d-f31f-4a82-8185-16361d975ced","name":"core/columns","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-columns storemate-product-buttons\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"storemate-product-buttons"},"innerBlocks":[{"clientId":"01d370e1-803e-4abc-adaa-1aeee3ee3603","name":"core/column","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-column\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{},"innerBlocks":[{"clientId":"92ed3420-f275-404e-b339-d548b75077e4","name":"woocommerce/product-button","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"textAlign":"center","width":100,"isDescendentOfSingleProductBlock":false,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]}]}]}]},{"clientId":"d7f93dc5-f2d6-4e57-9956-a863832f3b36","name":"core/post-terms","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"term":"product_cat","textAlign":"center","separator":", ","prefix":"","suffix":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"},"innerBlocks":[]},{"clientId":"971d55e6-3c03-4493-b7e5-001bd7b7a138","name":"core/post-title","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"textAlign":"center","level":3,"isLink":true,"rel":"","linkTarget":"_self","style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"},"innerBlocks":[]},{"clientId":"bbcc3de2-f5c3-4eb8-82d6-4d6f2089ad2d","name":"woocommerce/product-rating","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductBlock":false,"isDescendentOfSingleProductTemplate":false,"style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}},"innerBlocks":[]},{"clientId":"f7f1f3f4-b6cf-4ab6-af0b-e755ce3f534a","name":"woocommerce/product-price","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductTemplate":false,"isDescendentOfSingleProductBlock":false,"style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}},"innerBlocks":[]}]}]}]}]}]},{"clientId":"e6f78903-f93a-47c6-b61d-24ebb61e4329","name":"cozy-block/advanced-tab-item","isValid":true,"originalContent":"\u003cdiv class=\u0022cozy-block-advanced-tab-item\u0022 id=\u0022cozyBlock_638dab89_9740_4023_a623_63a984bc235f\u0022 data-client-id=\u0022638dab89-9740-4023-a623-63a984bc235f\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"blockClientId":"e6f78903-f93a-47c6-b61d-24ebb61e4329","tabTitle":"Top Selling","enableIcon":false,"iconViewBox":{"vx":0,"vy":0,"vw":25,"vh":19},"iconPath":"M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"},"innerBlocks":[{"clientId":"4225ac26-b581-456d-bcd5-2dc20006189d","name":"cozy-block/product-carousel","isValid":true,"originalContent":"\u003cstyle\u003e\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454.layout-grid .cozy-layout-grid {\n      row-gap: 30px;\n      column-gap: 30px;\n      grid-template-columns: repeat(4, auto);\n    }\n    @media screen and (max-width: 1024px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          3,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 767px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          2,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 400px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          1,\n          auto\n        ) !important;\n      }\n    }\n\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454.on-sale .cozy-sale-badge {\n      padding: 10px 6px 10px 6px;\n      border: 1px none #000;\n      border-radius: 50px;\n      background-color: #5566ca;\n      rotate: 0deg;\n      top: 10px;\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: #fff;\n    }\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454.on-sale.sale-badge-display-block .cozy-sale-badge * {\n      margin-bottom: 0px;\n    }\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454.on-sale.sale-badge-display-flex .cozy-sale-badge {\n      gap: 0px;\n    }\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454.on-sale.sale-badge-position-left .cozy-sale-badge{\n      left: 0px;\n    }\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454.on-sale.sale-badge-position-right .cozy-sale-badge{\n      right: 10px;\n    }\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454.on-sale .cozy-sale-badge .label-before, #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454.on-sale .cozy-sale-badge .label-after {\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: ;\n    }\n\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .cozy-template-two .wp-block-read-more:hover, #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button, #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a{\n      background-color: #5566ca !important;\n      color: #fff !important;\n      opacity: 1 !important;\n    } \n\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .wc-block-components-product-rating__stars {\n      font-size: 14px;\n      color: ;\n    }\n\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .swiper-button-prev::after,\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .swiper-button-next::after {\n        font-size: 15px;\n    }\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .swiper-button-prev,\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .swiper-button-next {\n        width: 35px;\n        height: 35px;\n        border-radius: 50px;\n        color: #007cba;\n        background-color: #fff;\n    }\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .swiper-button-prev:hover,\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .swiper-button-next:hover {\n        color: #fff;\n        background-color: #007cba;\n    }\n\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .swiper-pagination {\n        bottom: 0px;\n    }\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .swiper-pagination .swiper-pagination-bullet {\n        width: 10px;\n        height: 10px;\n        border-radius: 10px;\n        background-color: #252525;\n    }\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .swiper-pagination .swiper-pagination-bullet-active {\n        width: 10px;\n        border-radius: 10px;\n        background-color: #007cba;\n    }\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .swiper-pagination .swiper-pagination-bullet:hover {\n        background-color: #a5a5a5;\n    }\n    #cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454 .swiper-pagination .swiper-pagination-bullet-active:hover {\n        background-color: #164861;\n    }\n  \u003c/style\u003e\u003cdiv class=\u0022cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  \u0022 id=\u0022cozyBlock_17306852_3250_4c7d_b73a_56c0136d8454\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"cover":"","blockClientId":"4225ac26-b581-456d-bcd5-2dc20006189d","namespace":"cozy-block/product-carousel","currencySymbol":"","currencyPosition":"","quickView":false,"layout":"grid","template":"default","buttonHoverColor":{"background":"#5566ca","text":"#fff"},"productGroup":"best_selling","productCategory":[],"imageScale":true,"saleBadge":{"enabled":true,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"default","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"hoverShow":true,"gridOptions":{"displayColumn":4,"columnGap":30},"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","verticalPosition":0},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700},"reviewStyles":{"fontSize":14,"color":""}},"innerBlocks":[{"clientId":"e604e379-1ce6-4cd7-9a92-d21e0550aafd","name":"core/query","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-query cozy-query cozy-product-carousel__swiper-container\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"queryId":1,"query":{"perPage":"4","postType":"product"},"tagName":"div","namespace":"cozy-block/cozy-woo-query","enhancedPagination":false,"lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"},"innerBlocks":[{"clientId":"6a465a32-10ee-4b1e-92d3-fb837a9bc393","name":"core/post-template","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"},"innerBlocks":[{"clientId":"2e41b0d6-4c49-49f5-be03-27b2bf015213","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-box\u0022\u003e\n\n\n\n\n\n\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"blockGap":"0"}},"className":"storemate-product-box","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"bde2651c-ba33-4cfe-983a-8bc39e0f2521","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-image\u0022 style=\u0022margin-bottom:14px\u0022\u003e\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"storemate-product-image","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"775ba8df-c560-47fb-ba65-ca51488cd0af","name":"core/post-featured-image","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"isLink":true,"height":"380px","scale":"cover","rel":"","linkTarget":"_self","dimRatio":0,"style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]},{"clientId":"24cd85c6-9572-432f-9a29-aa1550153f3e","name":"core/columns","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-columns storemate-product-buttons\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"storemate-product-buttons"},"innerBlocks":[{"clientId":"fc632dcb-f3fb-4322-b673-22623e5f941d","name":"core/column","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-column\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{},"innerBlocks":[{"clientId":"182cbfa3-9900-413a-b1f0-87c98ac72ac3","name":"woocommerce/product-button","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"textAlign":"center","width":100,"isDescendentOfSingleProductBlock":false,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]}]}]}]},{"clientId":"6070278f-1161-4709-952f-912b80964f7b","name":"core/post-terms","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"term":"product_cat","textAlign":"center","separator":", ","prefix":"","suffix":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"},"innerBlocks":[]},{"clientId":"07e9b858-6b23-451d-94e1-c3b5afcadcd4","name":"core/post-title","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"textAlign":"center","level":3,"isLink":true,"rel":"","linkTarget":"_self","style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"},"innerBlocks":[]},{"clientId":"35789c1d-982a-47f7-942a-8933ec71deb7","name":"woocommerce/product-rating","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductBlock":false,"isDescendentOfSingleProductTemplate":false,"style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}},"innerBlocks":[]},{"clientId":"621a21f1-bd7f-44b6-9d8c-f1732e8f3c8b","name":"woocommerce/product-price","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductTemplate":false,"isDescendentOfSingleProductBlock":false,"style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}},"innerBlocks":[]}]}]}]}]}]},{"clientId":"33b30f92-0357-485e-a2d2-14e48da3b2cd","name":"cozy-block/advanced-tab-item","isValid":true,"originalContent":"\u003cdiv class=\u0022cozy-block-advanced-tab-item\u0022 id=\u0022cozyBlock_88ccf62f_1909_4db6_b97f_d25729d73b5e\u0022 data-client-id=\u002288ccf62f-1909-4db6-b97f-d25729d73b5e\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"blockClientId":"33b30f92-0357-485e-a2d2-14e48da3b2cd","tabTitle":"Onsale","enableIcon":false,"iconViewBox":{"vx":0,"vy":0,"vw":25,"vh":19},"iconPath":"M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"},"innerBlocks":[{"clientId":"65f27aed-23f3-40a0-aba2-8cf3d2c93207","name":"cozy-block/product-carousel","isValid":true,"originalContent":"\u003cstyle\u003e\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9.layout-grid .cozy-layout-grid {\n      row-gap: 30px;\n      column-gap: 30px;\n      grid-template-columns: repeat(4, auto);\n    }\n    @media screen and (max-width: 1024px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          3,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 767px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          2,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 400px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          1,\n          auto\n        ) !important;\n      }\n    }\n\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9.on-sale .cozy-sale-badge {\n      padding: 10px 6px 10px 6px;\n      border: 1px none #000;\n      border-radius: 50px;\n      background-color: #5566ca;\n      rotate: 0deg;\n      top: 10px;\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: #fff;\n    }\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9.on-sale.sale-badge-display-block .cozy-sale-badge * {\n      margin-bottom: 0px;\n    }\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9.on-sale.sale-badge-display-flex .cozy-sale-badge {\n      gap: 0px;\n    }\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9.on-sale.sale-badge-position-left .cozy-sale-badge{\n      left: 0px;\n    }\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9.on-sale.sale-badge-position-right .cozy-sale-badge{\n      right: 10px;\n    }\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9.on-sale .cozy-sale-badge .label-before, #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9.on-sale .cozy-sale-badge .label-after {\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: ;\n    }\n\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .cozy-template-two .wp-block-read-more:hover, #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button, #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a{\n      background-color: #5566ca !important;\n      color: #fff !important;\n      opacity: 1 !important;\n    } \n\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .wc-block-components-product-rating__stars {\n      font-size: 14px;\n      color: ;\n    }\n\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .swiper-button-prev::after,\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .swiper-button-next::after {\n        font-size: 15px;\n    }\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .swiper-button-prev,\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .swiper-button-next {\n        width: 35px;\n        height: 35px;\n        border-radius: 50px;\n        color: #007cba;\n        background-color: #fff;\n    }\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .swiper-button-prev:hover,\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .swiper-button-next:hover {\n        color: #fff;\n        background-color: #007cba;\n    }\n\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .swiper-pagination {\n        bottom: 0px;\n    }\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .swiper-pagination .swiper-pagination-bullet {\n        width: 10px;\n        height: 10px;\n        border-radius: 10px;\n        background-color: #252525;\n    }\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .swiper-pagination .swiper-pagination-bullet-active {\n        width: 10px;\n        border-radius: 10px;\n        background-color: #007cba;\n    }\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .swiper-pagination .swiper-pagination-bullet:hover {\n        background-color: #a5a5a5;\n    }\n    #cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9 .swiper-pagination .swiper-pagination-bullet-active:hover {\n        background-color: #164861;\n    }\n  \u003c/style\u003e\u003cdiv class=\u0022cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  \u0022 id=\u0022cozyBlock_96fc59c7_c277_4354_b648_f13b96b1fcc9\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"cover":"","blockClientId":"65f27aed-23f3-40a0-aba2-8cf3d2c93207","namespace":"cozy-block/product-carousel","currencySymbol":"","currencyPosition":"","quickView":false,"layout":"grid","template":"default","buttonHoverColor":{"background":"#5566ca","text":"#fff"},"productGroup":"sale","productCategory":[],"imageScale":true,"saleBadge":{"enabled":true,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"default","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"hoverShow":true,"gridOptions":{"displayColumn":4,"columnGap":30},"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","verticalPosition":0},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700},"reviewStyles":{"fontSize":14,"color":""}},"innerBlocks":[{"clientId":"eed86f7f-2370-498f-9a6d-e94c2004d9db","name":"core/query","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-query cozy-query cozy-product-carousel__swiper-container\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"queryId":1,"query":{"perPage":"4","postType":"product"},"tagName":"div","namespace":"cozy-block/cozy-woo-query","enhancedPagination":false,"lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"},"innerBlocks":[{"clientId":"b2ef18c4-5767-47c4-9982-a740bc8846e3","name":"core/post-template","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"},"innerBlocks":[{"clientId":"e6b5253b-f403-41f2-af26-9b943624b500","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-box\u0022\u003e\n\n\n\n\n\n\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"blockGap":"0"}},"className":"storemate-product-box","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"e0833b65-be5d-4a45-8917-16094e1df6b9","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-image\u0022 style=\u0022margin-bottom:14px\u0022\u003e\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"storemate-product-image","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"47ca388c-5ee5-4582-8131-e5e55d6df52f","name":"core/post-featured-image","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"isLink":true,"height":"380px","scale":"cover","rel":"","linkTarget":"_self","dimRatio":0,"style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]},{"clientId":"657d02fc-72bd-4ebc-8209-063f87061fa5","name":"core/columns","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-columns storemate-product-buttons\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"storemate-product-buttons"},"innerBlocks":[{"clientId":"ba548c82-bfbb-486f-89ed-aeb9e807189b","name":"core/column","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-column\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{},"innerBlocks":[{"clientId":"43592f99-f486-46b2-bbf6-bf190603e715","name":"woocommerce/product-button","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"textAlign":"center","width":100,"isDescendentOfSingleProductBlock":false,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]}]}]}]},{"clientId":"b97570f1-7400-49f2-b2b3-7c76dc5d292b","name":"core/post-terms","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"term":"product_cat","textAlign":"center","separator":", ","prefix":"","suffix":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"},"innerBlocks":[]},{"clientId":"553f55c7-ca0f-4b2b-9749-8384eb9e4fc9","name":"core/post-title","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"textAlign":"center","level":3,"isLink":true,"rel":"","linkTarget":"_self","style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"},"innerBlocks":[]},{"clientId":"bcf51681-5a35-4bc0-bd0b-6720a7946977","name":"woocommerce/product-rating","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductBlock":false,"isDescendentOfSingleProductTemplate":false,"style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}},"innerBlocks":[]},{"clientId":"46de301a-0535-4ae9-a66e-b29572f4f2cd","name":"woocommerce/product-price","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductTemplate":false,"isDescendentOfSingleProductBlock":false,"style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}},"innerBlocks":[]}]}]}]}]}]}],"parentAttributes":{"cover":"","blockClientId":"43202db2-b63a-41a8-8f41-edfef9cffe14","namespace":"cozy-block/product-tab","enableTitle":true,"title":"Featured Products","typography":{"fontFamily":"\u0022Montserrat\u0022","fontSize":24,"color":"#000","fontWeight":"600"}},"separatorStyles":{"padding":{"top":0,"right":0,"bottom":0,"left":0},"border":{"width":{"top":0,"right":0,"bottom":1,"left":0},"type":"none","color":"#e2e2e2"}},"tabStyles":{"padding":{"top":5,"right":10,"bottom":5,"left":10},"border":{"width":{"top":1,"right":1,"bottom":1,"left":1},"type":"none","color":"","colorActive":"#E6E8F4"},"borderRadius":{"top":0,"right":0,"bottom":0,"left":0},"bgColor":"","bgColorActive":""},"contentStyles":{"padding":{"top":20,"right":10,"bottom":10,"left":10},"border":{"width":{"top":1,"right":1,"bottom":1,"left":1},"type":"none","color":"#000"},"borderRadius":{"top":0,"right":0,"bottom":0,"left":0},"bgColor":""},"typography":{"fontFamily":"sans-serif","fontSize":16,"color":"#a5a5a5","colorActive":"#5566ca","fontWeight":400}} -->
        <style>
            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e {
                padding: 0px 0px 0px 0px;
                border-style: none;
                border-width: 1px 1px 1px 1px;
                border-color: #000;
                border-radius: 0px 0px 0px 0px;
                background-color: ;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e .advanced-tab-title {
                font-weight: 400;
                font-size: 16px;
                font-family: sans-serif;
                color: #000;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e .cozy-tab-title {
                padding: 0px 0px 0px 0px;
                border-style: none;
                border-width: 0px 0px 1px 0px;
                border-color: #e2e2e2;
                font-weight: 400;
                font-size: 16px;
                font-family: sans-serif;
                color: #a5a5a5;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e.layout-horizontal .cozy-tab-title {
                gap: 12px;
                justify-content: right;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e .cozy-tab-title .cozy-tab-button {
                padding: 5px 10px 5px 10px;
                border-style: none;
                border-width: 1px 1px 1px 1px;
                border-color: ;
                border-radius: 0px 0px 0px 0px;
                background-color: ;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e.layout-vertical .cozy-tab-title .cozy-tab-button {
                width: undefinedpx;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e .cozy-tab-title .cozy-tab-button .display-flex {
                gap: 10px;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e .cozy-tab-title .cozy-tab-button.active {
                border-color: #E6E8F4;
                background-color: ;
                color: #5566ca;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e .cozy-tab-title .cozy-tab-button.active:after {
                height: 1px;
                bottom: -1px;
                background-color: ;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
                width: 16px;
                height: 16px;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e.icon-layout-fill .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
                fill: #a5a5a5;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e.icon-layout-outline .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
                stroke: #a5a5a5;
                fill: none;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e.icon-layout-fill .cozy-tab-title .cozy-tab-button.active .cozy-tab-icon {
                fill: #5566ca;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e.icon-layout-outline .cozy-tab-title .cozy-tab-button.active .cozy-tab-icon {
                stroke: #5566ca;
                fill: none;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e.layout-vertical {
                gap: 12px;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e.layout-vertical .cozy-tab-title {
                gap: 10px;
            }

            #cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e .cozy-advanced-tab-wrapper {
                padding: 20px 10px 10px 10px;
                border-style: none;
                border-width: 1px 1px 1px 1px;
                border-color: #000;
                border-radius: 0px 0px 0px 0px;
                background-color: ;
            }
        </style>
        <div class="cozy-block-advanced-tab layout-horizontal icon-layout-fill" id="cozyBlock_ab386a4e_7998_49a2_b152_29bd26a99f2e">
            <div style="display:flex;align-items:center">
                <div class="product-tab-title">Featured Products</div>
                <div class="cozy-tab-title">
                    <div class="cozy-tab-button active" id="3c16096a-9e71-49de-8fd7-8125048d87e5" data-index="0">
                        <div class="display-flex justify-center align-items-center"><span>Latest Products</span></div>
                    </div>
                    <div class="cozy-tab-button " id="e6f78903-f93a-47c6-b61d-24ebb61e4329" data-index="1">
                        <div class="display-flex justify-center align-items-center"><span>Top Selling</span></div>
                    </div>
                    <div class="cozy-tab-button " id="33b30f92-0357-485e-a2d2-14e48da3b2cd" data-index="2">
                        <div class="display-flex justify-center align-items-center"><span>Onsale</span></div>
                    </div>
                </div>
            </div>
            <div class="cozy-advanced-tab-wrapper"><!-- wp:cozy-block/advanced-tab-item {"blockClientId":"3c16096a-9e71-49de-8fd7-8125048d87e5","tabTitle":"Latest Products","enableIcon":false} -->
                <div class="cozy-block-advanced-tab-item" id="cozyBlock_3c16096a_9e71_49de_8fd7_8125048d87e5" data-client-id="3c16096a-9e71-49de-8fd7-8125048d87e5"><!-- wp:cozy-block/product-carousel {"blockClientId":"40ce634c-f17d-4269-89de-c1682a253570","namespace":"cozy-block/product-carousel","gridOptions":{"displayColumn":4,"columnGap":30}} -->
                    <style>
                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570.layout-grid .cozy-layout-grid {
                            row-gap: 30px;
                            column-gap: 30px;
                            grid-template-columns: repeat(4, auto);
                        }

                        @media screen and (max-width: 1024px) {
                            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                                grid-template-columns: repeat(3,
                                        auto) !important;
                            }
                        }

                        @media screen and (max-width: 767px) {
                            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                                grid-template-columns: repeat(2,
                                        auto) !important;
                            }
                        }

                        @media screen and (max-width: 400px) {
                            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                                grid-template-columns: repeat(1,
                                        auto) !important;
                            }
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570.on-sale .cozy-sale-badge {
                            padding: 10px 6px 10px 6px;
                            border: 1px none #000;
                            border-radius: 50px;
                            background-color: #5566ca;
                            rotate: 0deg;
                            top: 10px;
                            font-size: 10px;
                            font-weight: 400;
                            font-family: sans-serif;
                            color: #fff;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570.on-sale.sale-badge-display-block .cozy-sale-badge * {
                            margin-bottom: 0px;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570.on-sale.sale-badge-display-flex .cozy-sale-badge {
                            gap: 0px;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570.on-sale.sale-badge-position-left .cozy-sale-badge {
                            left: 0px;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570.on-sale.sale-badge-position-right .cozy-sale-badge {
                            right: 10px;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570.on-sale .cozy-sale-badge .label-before,
                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570.on-sale .cozy-sale-badge .label-after {
                            font-size: 10px;
                            font-weight: 400;
                            font-family: sans-serif;
                            color: ;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .cozy-template-two .wp-block-read-more:hover,
                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
                            background-color: #5566ca !important;
                            color: #fff !important;
                            opacity: 1 !important;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .wc-block-components-product-rating__stars {
                            font-size: 14px;
                            color: ;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .swiper-button-prev::after,
                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .swiper-button-next::after {
                            font-size: 15px;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .swiper-button-prev,
                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .swiper-button-next {
                            width: 35px;
                            height: 35px;
                            border-radius: 50px;
                            color: #007cba;
                            background-color: #fff;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .swiper-button-prev:hover,
                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .swiper-button-next:hover {
                            color: #fff;
                            background-color: #007cba;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .swiper-pagination {
                            bottom: 0px;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .swiper-pagination .swiper-pagination-bullet {
                            width: 10px;
                            height: 10px;
                            border-radius: 10px;
                            background-color: #252525;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .swiper-pagination .swiper-pagination-bullet-active {
                            width: 10px;
                            border-radius: 10px;
                            background-color: #007cba;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .swiper-pagination .swiper-pagination-bullet:hover {
                            background-color: #a5a5a5;
                        }

                        #cozyBlock_40ce634c_f17d_4269_89de_c1682a253570 .swiper-pagination .swiper-pagination-bullet-active:hover {
                            background-color: #164861;
                        }
                    </style>
                    <div class="cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_40ce634c_f17d_4269_89de_c1682a253570"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
                        <div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"storemate-product-box","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group storemate-product-box"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"storemate-product-image","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group storemate-product-image" style="margin-bottom:14px"><!-- wp:post-featured-image {"isLink":true,"height":"380px","style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

                                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"storemate-product-buttons"} -->
                                    <div class="wp-block-columns storemate-product-buttons"><!-- wp:column -->
                                        <div class="wp-block-column"><!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
                                        <!-- /wp:column -->
                                    </div>
                                    <!-- /wp:columns -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-terms {"term":"product_cat","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} /-->

                                <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

                                <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}} /-->

                                <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}} /-->
                            </div>
                            <!-- /wp:group -->
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->
                    </div>
                    <!-- /wp:cozy-block/product-carousel -->
                </div>
                <!-- /wp:cozy-block/advanced-tab-item -->

                <!-- wp:cozy-block/advanced-tab-item {"blockClientId":"e6f78903-f93a-47c6-b61d-24ebb61e4329","tabTitle":"Top Selling","enableIcon":false} -->
                <div class="cozy-block-advanced-tab-item" id="cozyBlock_e6f78903_f93a_47c6_b61d_24ebb61e4329" data-client-id="e6f78903-f93a-47c6-b61d-24ebb61e4329"><!-- wp:cozy-block/product-carousel {"blockClientId":"4225ac26-b581-456d-bcd5-2dc20006189d","namespace":"cozy-block/product-carousel","productGroup":"best_selling","gridOptions":{"displayColumn":4,"columnGap":30}} -->
                    <style>
                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d.layout-grid .cozy-layout-grid {
                            row-gap: 30px;
                            column-gap: 30px;
                            grid-template-columns: repeat(4, auto);
                        }

                        @media screen and (max-width: 1024px) {
                            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                                grid-template-columns: repeat(3,
                                        auto) !important;
                            }
                        }

                        @media screen and (max-width: 767px) {
                            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                                grid-template-columns: repeat(2,
                                        auto) !important;
                            }
                        }

                        @media screen and (max-width: 400px) {
                            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                                grid-template-columns: repeat(1,
                                        auto) !important;
                            }
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d.on-sale .cozy-sale-badge {
                            padding: 10px 6px 10px 6px;
                            border: 1px none #000;
                            border-radius: 50px;
                            background-color: #5566ca;
                            rotate: 0deg;
                            top: 10px;
                            font-size: 10px;
                            font-weight: 400;
                            font-family: sans-serif;
                            color: #fff;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d.on-sale.sale-badge-display-block .cozy-sale-badge * {
                            margin-bottom: 0px;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d.on-sale.sale-badge-display-flex .cozy-sale-badge {
                            gap: 0px;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d.on-sale.sale-badge-position-left .cozy-sale-badge {
                            left: 0px;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d.on-sale.sale-badge-position-right .cozy-sale-badge {
                            right: 10px;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d.on-sale .cozy-sale-badge .label-before,
                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d.on-sale .cozy-sale-badge .label-after {
                            font-size: 10px;
                            font-weight: 400;
                            font-family: sans-serif;
                            color: ;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .cozy-template-two .wp-block-read-more:hover,
                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
                            background-color: #5566ca !important;
                            color: #fff !important;
                            opacity: 1 !important;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .wc-block-components-product-rating__stars {
                            font-size: 14px;
                            color: ;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .swiper-button-prev::after,
                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .swiper-button-next::after {
                            font-size: 15px;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .swiper-button-prev,
                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .swiper-button-next {
                            width: 35px;
                            height: 35px;
                            border-radius: 50px;
                            color: #007cba;
                            background-color: #fff;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .swiper-button-prev:hover,
                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .swiper-button-next:hover {
                            color: #fff;
                            background-color: #007cba;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .swiper-pagination {
                            bottom: 0px;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .swiper-pagination .swiper-pagination-bullet {
                            width: 10px;
                            height: 10px;
                            border-radius: 10px;
                            background-color: #252525;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .swiper-pagination .swiper-pagination-bullet-active {
                            width: 10px;
                            border-radius: 10px;
                            background-color: #007cba;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .swiper-pagination .swiper-pagination-bullet:hover {
                            background-color: #a5a5a5;
                        }

                        #cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d .swiper-pagination .swiper-pagination-bullet-active:hover {
                            background-color: #164861;
                        }
                    </style>
                    <div class="cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_4225ac26_b581_456d_bcd5_2dc20006189d"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
                        <div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"storemate-product-box","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group storemate-product-box"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"storemate-product-image","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group storemate-product-image" style="margin-bottom:14px"><!-- wp:post-featured-image {"isLink":true,"height":"380px","style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

                                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"storemate-product-buttons"} -->
                                    <div class="wp-block-columns storemate-product-buttons"><!-- wp:column -->
                                        <div class="wp-block-column"><!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
                                        <!-- /wp:column -->
                                    </div>
                                    <!-- /wp:columns -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-terms {"term":"product_cat","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} /-->

                                <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

                                <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}} /-->

                                <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}} /-->
                            </div>
                            <!-- /wp:group -->
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->
                    </div>
                    <!-- /wp:cozy-block/product-carousel -->
                </div>
                <!-- /wp:cozy-block/advanced-tab-item -->

                <!-- wp:cozy-block/advanced-tab-item {"blockClientId":"33b30f92-0357-485e-a2d2-14e48da3b2cd","tabTitle":"Onsale","enableIcon":false} -->
                <div class="cozy-block-advanced-tab-item" id="cozyBlock_33b30f92_0357_485e_a2d2_14e48da3b2cd" data-client-id="33b30f92-0357-485e-a2d2-14e48da3b2cd"><!-- wp:cozy-block/product-carousel {"blockClientId":"65f27aed-23f3-40a0-aba2-8cf3d2c93207","namespace":"cozy-block/product-carousel","productGroup":"sale","gridOptions":{"displayColumn":4,"columnGap":30}} -->
                    <style>
                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207.layout-grid .cozy-layout-grid {
                            row-gap: 30px;
                            column-gap: 30px;
                            grid-template-columns: repeat(4, auto);
                        }

                        @media screen and (max-width: 1024px) {
                            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                                grid-template-columns: repeat(3,
                                        auto) !important;
                            }
                        }

                        @media screen and (max-width: 767px) {
                            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                                grid-template-columns: repeat(2,
                                        auto) !important;
                            }
                        }

                        @media screen and (max-width: 400px) {
                            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                                grid-template-columns: repeat(1,
                                        auto) !important;
                            }
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207.on-sale .cozy-sale-badge {
                            padding: 10px 6px 10px 6px;
                            border: 1px none #000;
                            border-radius: 50px;
                            background-color: #5566ca;
                            rotate: 0deg;
                            top: 10px;
                            font-size: 10px;
                            font-weight: 400;
                            font-family: sans-serif;
                            color: #fff;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207.on-sale.sale-badge-display-block .cozy-sale-badge * {
                            margin-bottom: 0px;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207.on-sale.sale-badge-display-flex .cozy-sale-badge {
                            gap: 0px;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207.on-sale.sale-badge-position-left .cozy-sale-badge {
                            left: 0px;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207.on-sale.sale-badge-position-right .cozy-sale-badge {
                            right: 10px;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207.on-sale .cozy-sale-badge .label-before,
                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207.on-sale .cozy-sale-badge .label-after {
                            font-size: 10px;
                            font-weight: 400;
                            font-family: sans-serif;
                            color: ;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .cozy-template-two .wp-block-read-more:hover,
                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
                            background-color: #5566ca !important;
                            color: #fff !important;
                            opacity: 1 !important;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .wc-block-components-product-rating__stars {
                            font-size: 14px;
                            color: ;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .swiper-button-prev::after,
                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .swiper-button-next::after {
                            font-size: 15px;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .swiper-button-prev,
                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .swiper-button-next {
                            width: 35px;
                            height: 35px;
                            border-radius: 50px;
                            color: #007cba;
                            background-color: #fff;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .swiper-button-prev:hover,
                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .swiper-button-next:hover {
                            color: #fff;
                            background-color: #007cba;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .swiper-pagination {
                            bottom: 0px;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .swiper-pagination .swiper-pagination-bullet {
                            width: 10px;
                            height: 10px;
                            border-radius: 10px;
                            background-color: #252525;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .swiper-pagination .swiper-pagination-bullet-active {
                            width: 10px;
                            border-radius: 10px;
                            background-color: #007cba;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .swiper-pagination .swiper-pagination-bullet:hover {
                            background-color: #a5a5a5;
                        }

                        #cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207 .swiper-pagination .swiper-pagination-bullet-active:hover {
                            background-color: #164861;
                        }
                    </style>
                    <div class="cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_65f27aed_23f3_40a0_aba2_8cf3d2c93207"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
                        <div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"storemate-product-box","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group storemate-product-box"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"storemate-product-image","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group storemate-product-image" style="margin-bottom:14px"><!-- wp:post-featured-image {"isLink":true,"height":"380px","style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

                                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"storemate-product-buttons"} -->
                                    <div class="wp-block-columns storemate-product-buttons"><!-- wp:column -->
                                        <div class="wp-block-column"><!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
                                        <!-- /wp:column -->
                                    </div>
                                    <!-- /wp:columns -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-terms {"term":"product_cat","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} /-->

                                <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

                                <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}} /-->

                                <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}} /-->
                            </div>
                            <!-- /wp:group -->
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->
                    </div>
                    <!-- /wp:cozy-block/product-carousel -->
                </div>
                <!-- /wp:cozy-block/advanced-tab-item -->
            </div>
        </div>
        <!-- /wp:cozy-block/advanced-tab -->
    </div>
    <!-- /wp:cozy-block/product-tab -->
</div>
<!-- /wp:group -->