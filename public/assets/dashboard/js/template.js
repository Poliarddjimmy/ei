(function ($) {
    "use strict";
    $(function () {
        var body = $("body");
        var mainWrapper = $(".main-wrapper");
        var footer = $("footer");
        var sidebar = $(".sidebar");
        var navbar = $(".navbar").not(".top-navbar");
        feather.replace();
        if ($(".btn-clipboard").length) {
            $(".btn-clipboard")
                .attr("data-bs-toggle", "tooltip")
                .attr("title", "Copy to clipboard");
            var clipboard = new ClipboardJS(".btn-clipboard");
            clipboard.on("success", function (e) {
                console.log(e);
                e.trigger.innerHTML = "copied";
                setTimeout(function () {
                    e.trigger.innerHTML = "copy";
                    e.clearSelection();
                }, 700);
            });
        }
        var tooltipTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="tooltip"]')
        );
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
        var popoverTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="popover"]')
        );
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
        if ($(".sidebar .sidebar-body").length) {
            const sidebarBodyScroll = new PerfectScrollbar(".sidebar-body");
        }
        $(".sidebar-toggler").on("click", function (e) {
            e.preventDefault();
            $(".sidebar-header .sidebar-toggler").toggleClass(
                "active not-active"
            );
            if (window.matchMedia("(min-width: 992px)").matches) {
                e.preventDefault();
                body.toggleClass("sidebar-folded");
            } else if (window.matchMedia("(max-width: 991px)").matches) {
                e.preventDefault();
                body.toggleClass("sidebar-open");
            }
        });
        $(".settings-sidebar-toggler").on("click", function (e) {
            $("body").toggleClass("settings-open");
        });
        $("input:radio[name=sidebarThemeSettings]").click(function () {
            $("body").removeClass("sidebar-light sidebar-dark");
            $("body").addClass($(this).val());
        });
        function addActiveClass(element) {
            if (current === "") {
                if (element.attr("href").indexOf("index.html") !== -1) {
                    element.parents(".nav-item").last().addClass("active");
                    if (element.parents(".sub-menu").length) {
                        element.closest(".collapse").addClass("show");
                        element.addClass("active");
                    }
                }
            } else {
                if (element.attr("href").indexOf(current) !== -1) {
                    element.parents(".nav-item").last().addClass("active");
                    if (element.parents(".sub-menu").length) {
                        element.closest(".collapse").addClass("show");
                        element.addClass("active");
                    }
                    if (element.parents(".submenu-item").length) {
                        element.addClass("active");
                    }
                }
            }
        }
        var current = location.pathname
            .split("/")
            .slice(-1)[0]
            .replace(/^\/|\/$/g, "");
        $(".nav li a", sidebar).each(function () {
            var $this = $(this);
            addActiveClass($this);
        });
        $(".horizontal-menu .nav li a").each(function () {
            var $this = $(this);
            addActiveClass($this);
        });
        $(".sidebar .sidebar-body").hover(
            function () {
                if (body.hasClass("sidebar-folded")) {
                    body.addClass("open-sidebar-folded");
                }
            },
            function () {
                if (body.hasClass("sidebar-folded")) {
                    body.removeClass("open-sidebar-folded");
                }
            }
        );
        $(document).on("click touchstart", function (e) {
            e.stopPropagation();
            if (!$(e.target).closest(".sidebar-toggler").length) {
                var sidebar = $(e.target).closest(".sidebar").length;
                var sidebarBody = $(e.target).closest(".sidebar-body").length;
                if (!sidebar && !sidebarBody) {
                    if ($("body").hasClass("sidebar-open")) {
                        $("body").removeClass("sidebar-open");
                    }
                }
            }
        });
        $('[data-toggle="horizontal-menu-toggle"]').on("click", function () {
            $(".horizontal-menu .bottom-navbar").toggleClass("header-toggled");
        });
        var navItemClicked = $(".horizontal-menu .page-navigation >.nav-item");
        navItemClicked.on("click", function (event) {
            if (window.matchMedia("(max-width: 991px)").matches) {
                if (!$(this).hasClass("show-submenu")) {
                    navItemClicked.removeClass("show-submenu");
                }
                $(this).toggleClass("show-submenu");
            }
        });
        $(window).scroll(function () {
            if (window.matchMedia("(min-width: 992px)").matches) {
                var header = $(".horizontal-menu");
                if ($(window).scrollTop() >= 60) {
                    $(header).addClass("fixed-on-scroll");
                } else {
                    $(header).removeClass("fixed-on-scroll");
                }
            }
        });
        $(".sidebar .sidebar-body").hover(
            function () {
                $("body").addClass("overflow-hidden");
            },
            function () {
                $("body").removeClass("overflow-hidden");
            }
        );
    });
})(jQuery);
