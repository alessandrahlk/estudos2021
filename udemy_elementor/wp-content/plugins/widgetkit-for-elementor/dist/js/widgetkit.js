jQuery(document).ready(function(t){t(".border").length&&jQuery(window).load(function(){$portfolio_selectors=t(".border>li>a"),$portfolio_selectors.on("click",function(){t(this).attr("data-filter");return!1})}),t(".slash").length&&jQuery(window).load(function(){$portfolio_selectors=t(".slash>li>a"),$portfolio_selectors.on("click",function(){t(this).attr("data-filter");return!1})}),t(".round").length&&jQuery(window).load(function(){$portfolio_selectors=t(".round>li>a"),$portfolio_selectors.on("click",function(){t(this).attr("data-filter");return!1})}),[1,2,3,4].forEach(function(o){t(".hover-"+o).length&&t(".hover-"+o).mixItUp({})}),jQuery(document).ready(function(){t("#hover-1 .portfolio-item").each(function(){t(this).hoverdir()})}),t("#tgx-hero-unit .carousel-inner .item").css({height:t(window).height()+"px"}),t(window).resize(function(){t("#tgx-hero-unit .carousel-inner .item").css({height:t(window).height()+"px"})}),t(".tgx-project").length&&jQuery(".tgx-project").addClass("owl-carousel").owlCarousel({pagination:!0,center:!0,margin:100,dots:!1,loop:!0,items:2,nav:!0,navClass:["owl-carousel-left","owl-carousel-right"],navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],autoHeight:!0,autoplay:!1,responsive:{0:{items:1},600:{items:1},1000:{items:2}}}),t(".wkfe-click-to-tweet .wkfe-tweet").on("click",function(){var o=window.location.href.split("?")[0],e=t(this).parentsUntil(".wkfe-click-to-tweet").find(".tweet-text").text().trim(),n="https://twitter.com/share?url="+encodeURIComponent(o)+"&text="+encodeURIComponent(e);window.open(n,"_blank","toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=100,width=720,height=500")})}),jQuery(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/widgetkit-for-elementor-lottie-animation.default",function(t,o){let e=t.find(".lottie-animation-wrapper");if(e.length){let t;t="autoplay"==e.data("animation-play");var n=lottie.loadAnimation({container:e[0],renderer:e.data("animation-renderer"),loop:e.data("animation-loop"),autoplay:t,path:e.data("animation-path")});if(e.on("mouseenter",function(){"onhover"==e.data("animation-play")&&n.goToAndPlay(0)}),e.on("click",function(){"onclick"==e.data("animation-play")&&n.goToAndPlay(0)}),"viewport"==e.data("animation-play")){function i(t){var e=o(window).scrollTop(),n=e+o(window).height(),i=o(t).offset().top;return i+o(t).height()<=n&&i>=e}i(e)&&n.play(),o(window).scroll(function(){i(e)&&n.play()})}e.data("animation-speed")&&n.setSpeed(parseInt(e.data("animation-speed"))),e.data("animation-reverse")&&n.setDirection(-1)}})});