
; /* Start:"a:4:{s:4:"full";s:82:"/local/templates/html/components-template/general-plan/script.min.js?1607604082520";s:6:"source";s:68:"/local/templates/html/components-template/general-plan/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";window.addEventListener("load",function(a){var e=$(".js_picnav-item");e.on("click",function(){var a=$(this).parents(".general-plan__box").find(".general-plan__picplan-overlay img"),n=$(this).parents(".general-plan__box").find(".general-plan__picplan-main img"),i=$(this).data("pic");a.attr("src",i),$(this).parents(".general-plan__box").find(e).removeClass("active"),$(this).addClass("active");i=$(this).parents(".general-plan__box").find(".general-plan__picplan-main").data("gray-pic");n.attr("src",i)})});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:74:"/local/templates/html/components-template/tabs/script.min.js?1673342871269";s:6:"source";s:60:"/local/templates/html/components-template/tabs/script.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";
window.addEventListener("load", function (e) {
    window.vendorLoader({
        name: "tab",
        path: "/local/templates/html/js/vendor/tab.min.js",
        event: {scroll: !0, click: !0, mouseover: {trigger: '[data-toggle="tab"]'}}
    })
});
/* End */
;; /* /local/templates/html/components-template/general-plan/script.min.js?1607604082520*/
; /* /local/templates/html/components-template/tabs/script.min.js?1673342871269*/
