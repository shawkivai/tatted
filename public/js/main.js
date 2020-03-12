! function(e) {
    "use strict";
    var a = window.THE_TATTOOIST || {};
    a.pageLoader = function() {
        setTimeout(function() {
            e(".content-loader").fadeOut(800, function() {
                e(this).remove()
            }), e("#video-background").trigger("play")
        }, 400)
    }, a.magnificPopup = function() {
        e(".zoom").magnificPopup({
            type: "image"
        }), e(".btn-popup").magnificPopup({
            type: "inline",
            midClick: true,
            mainClass: 'mfp-fade',
            closeOnBgClick: false
        })
    }, a.toggle = function() {
        e(".open .content-toggle").show(), e(".title-toggle").on("click", function(a) {
            a.preventDefault();
            var n = e(this),
                t = n.parent(),
                o = n.next(),
                i = n.parents(".accordion");
            i.length > 0 ? (i.find(".content-toggle").slideUp("normal", function() {
                e(this).parent().removeClass("open")
            }), n.next().is(":hidden") && o.slideDown("normal", function() {
                t.addClass("open")
            })) : o.slideToggle("normal", function() {
                t.toggleClass("open")
            })
        })
    }, a.tabs = function() {
        e(".title-tab:first-child").addClass("selected-tab"), e(".title-tab").on("click", function(a) {
            a.preventDefault();
            var n = e(this),
                t = n.parents(".tabs"),
                o = n.find("a").attr("href");
            n.hasClass("selected-tab") || (t.find(".tab").hide().removeClass("open"), t.find(".title-tab").removeClass("selected-tab"), n.addClass("selected-tab"), e(o).fadeIn().addClass("open"))
        })
    }, a.portfolio = {
        init: function() {
            this.layout(), this.filters(), this.infoItems()
        },
        layout: function() {
            e(".works").imagesLoaded(function() {
                e(".works").isotope()
            })
        },
        filters: function() {
            e(".filters").on("click", "a", function(a) {
                a.preventDefault();
                var n = e(this),
                    t = n.attr("data-filter");
                e(".filters a").removeClass("light"), n.addClass("light"), e(".works").isotope({
                    filter: t
                })
            })
        },
        infoItems: function() {
            e(".info-link").on("click", function(a) {
                a.preventDefault();
                var n = e(this).parents(".work-thumb").next(".info-work");
                n.length > 0 && n.slideToggle(200, function() {
                    e(this).parents(".work").toggleClass("opened"), e(".works").isotope("layout")
                })
            })
        }
    }, a.scrollToSection = function() {
        e('.one-page #nav-menu a[href^="#"]').on("click", function(a) {
            a.preventDefault();
            var n = this.hash,
                t = e(n);
            e(this).parent().addClass("selected"), e("html, body").stop().animate({
                scrollTop: t.offset().top - 79
            }, 900, "swing", function() {
                window.location.hash = n.replace(/^#/, "#!")
            }), e("body").removeClass("open"), e("#nav-menu").find("li").removeClass("show")
        })
    }, a.scrollHighlight = function() {
        var a = e(window).scrollTop();
        e("body").hasClass("one-page") && (a >= 200 ? e(".section").each(function() {
            var n = e('#nav-menu a[href="#' + e(this).attr("id") + '"');
            n.length && e(this).position().top <= a + 80 && (e("#nav-menu li").removeClass("selected"), n.parent().addClass("selected"))
        }) : e("#nav-menu li").removeClass("selected"))
    }, a.mobileMenu = {
        init: function() {
            this.toggleMenu(), this.addClassParent(), this.addRemoveClasses()
        },
        toggleMenu: function() {
            var a = this,
                n = e("body");
            e("#nav-toggle").click(function(t) {
                t.preventDefault(), n.hasClass("open") ? (n.removeClass("open"), e("#nav-menu").find("li").removeClass("show")) : (n.addClass("open"), a.showSubmenu())
            })
        },
        addClassParent: function() {
            e("#nav-menu").find("li > ul").each(function() {
                e(this).parent().addClass("parent")
            })
        },
        addRemoveClasses: function() {
            var a = e("#nav-menu");
            e(window).width() < 992 ? a.addClass("mobile") : (e("body").removeClass("open"), a.removeClass("mobile").find("li").removeClass("show"))
        },
        showSubmenu: function() {
            e("#nav-menu").find("a").each(function() {
                var a = e(this);
                a.next("ul").length && a.one("click", function(a) {
                    a.preventDefault(), e(this).parent().addClass("show")
                })
            })
        }
    }, a.stickyMenu = function() {
        e(window).scrollTop() > 50 ? e("body").addClass("sticky") : e("body").removeClass("sticky")
    }, a.contactsBar = function() {
        e(window).scrollTop() + e(window).height() > e("footer").offset().top ? e("#contacts-bar").fadeOut("fast") : e("#contacts-bar").fadeIn("fast")
    }, a.backgrounds = function() {
        e.each(config.backgrouns, function(a, n) {
            var t = e(a),
                o = e('<div class="bg-overlay"></div>');
            null != n.img && t.addClass("bg").css("background-image", "url(" + n.img + ")").prepend(o), null == n.overlay || n.disableOverlay || t.find(".bg-overlay").remove(), null != n.overlayOpacity && t.find(".bg-overlay").css("opacity", n.overlayOpacity), null != n.overlayColor && t.find(".bg-overlay").css("background-color", n.overlayColor), null != n.pattern && n.pattern && t.addClass("pattern"), null != n.position && t.css("background-position", n.position), null != n.bgCover && t.css("background-size", n.bgCover), null != n.parallax && n.parallax && t.addClass("plx")
        })
    }, a.parallax = function() {
        e(".plx").each(function() {
            e(this).parallax("50%", .5)
        })
    }, a.flexslider = function() {
        e(".flexslider").each(function() {
            var a = e(this),
                n = void 0 !== a.data("animation") ? a.data("animation") : "slide",
                t = void 0 !== a.data("autoplay") && a.data("autoplay");
            a.flexslider({
                slideshow: t,
                pauseOnHover: !0,
                animation: n,
                prevText: "",
                nextText: ""
            })
        })
    }, a.youtubeBg = function() {
        var a = e(".youtube-player");
        a.mb_YTPlayer(), e("#toggle-volume").click(function(n) {
            n.preventDefault();
            var t = e(this).find("i");
            t.hasClass("fa-volume-off") ? t.removeClass("fa fa-volume-off").addClass("fa fa-volume-up") : t.removeClass("fa fa-volume-up").addClass("fa fa-volume-off"), a.toggleVolume()
        })
    }, a.forms = function() {
        var a = function(e) {
            return new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i).test(e)
        };
        e("form").submit(function(n) {
            if($('#email').val() !=''){
                console.log('fgbf');
                return true;
            }else {
                n.preventDefault();
            }
        })
    }, a.instagram = {
        globalObjs: {
            instagramBar: e(".instagram-bar"),
            cacheResult: []
        },
        init: function() {
            this.globalObjs.instagramBar.hasClass("feed-bg") && this.getPicsUrls()
        },
        getPics: function(a) {
            var n = this.globalObjs;
            n.instagramBar.prepend('<span class="pics-container"></span>');
            var t = n.instagramBar.find(".pics-container"),
                o = n.instagramBar.outerWidth(),
                i = n.instagramBar.outerHeight(),
                s = parseInt(o / i);
            o % i > 0 && s++, t.css("width", o * s).empty(), e.each(a, function(e, a) {
                e < s && t.append('<img src="' + a + '" alt="">')
            }), t.imagesLoaded(function() {
                t.fadeIn()
            })
        },
        getPicsUrls: function() {
            var a = this,
                n = a.globalObjs;
            e.getJSON("instagram/instagram.php", function(e) {
                n.cacheResult = e, a.getPics(n.cacheResult)
            }, "json")
        },
        delayFunction: function() {
            var e = 0;
            return function(a, n) {
                clearTimeout(e), e = setTimeout(a, n)
            }
        }(),
        reload: function() {
            var a = this;
            e(".pics-container").fadeOut("400", function() {
                e(this).remove()
            }), a.delayFunction(function() {
                a.getPics(a.globalObjs.cacheResult)
            }, 1e3)
        }
    }, a.goToSection = function() {
        var a = window.location.hash.replace(/^#!/, "#");
        e('.one-page #nav-menu a[href="' + a + '"]').trigger("click")
    }, e(document).ready(function() {
        a.magnificPopup(), a.toggle(), a.tabs(), a.portfolio.init(), a.scrollToSection(), a.mobileMenu.init(), a.forms(), a.backgrounds(), a.parallax(), a.youtubeBg()
    }), e(window).load(function() {
        a.pageLoader(), a.flexslider(), a.instagram.init()
    }), e(window).resize(function() {
        a.portfolio.layout(), a.mobileMenu.addRemoveClasses(), /Mobi/.test(navigator.userAgent) || a.instagram.reload()
    }), e(window).on("orientationchange", function(e) {
        a.instagram.reload()
    }), e(window).scroll(function() {
        a.stickyMenu(), a.scrollHighlight(), a.contactsBar()
    })
}(jQuery);
