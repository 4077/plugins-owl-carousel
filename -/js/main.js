// head {
var __nodeId__ = "plugins_owlCarousel__main";
// }

(function (__nodeId__) {
    window[__nodeId__] = {
        bind: function (data) {
            $(data.selector).owlCarousel(data.options);
        }
    };
})(__nodeId__);
