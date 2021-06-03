(function ($) {
  "use strict";
  var is_scroll = false;
  var is_resize = false;
  var myscroll, myresize;

  //Run function when document ready
  jQuery(document).ready(function ($) {
    init_full_height();
    init_pageloader();
    init_typed();
    init_menu_toggle();
    init_inner_link();
    init_chart_circle();
    init_portfolio_details();
  });

  //Run function when window on scroll
  jQuery(window).on("scroll", function ($) {
    init_scroll();
    is_scroll = true;
    clearTimeout(myscroll);
    myscroll = setTimeout(function ($) {
      is_scroll = false;
      init_update_uikit();
    }, 300);
  });

  //Run function when window on resize
  jQuery(window).on("resize", function ($) {
    is_resize = true;
    clearTimeout(myresize);
    myresize = setTimeout(function ($) {
      is_resize = false;
      init_full_height();
      init_scroll();
    }, 300);
  });

  //============================================
  //initial functions
  //============================================

  function init_chart_circle() {
    jQuery(".circle-progress").each(function (i, el) {
      var $el = $(el);
      jQuery($el).circleProgress({
        value: $el.data("value")
      });
    });
  }

  function init_update_uikit() {
    //sometimes sticky nav oveflow
    if (!is_scroll) {
      if (jQuery("#resume-nav-wrapper").length) {
        UIkit.update(jQuery("#resume-nav-wrapper"), "update");
      }

      if (jQuery("#portfolio-nav-wrapper").length) {
        UIkit.update(jQuery("#portfolio-nav-wrapper"), "update");
      }
    }
  }

  function init_menu_toggle() {
    jQuery(".yb-menu-togggle").on("click", function ($) {
      jQuery("#body-app").toggleClass("yb-menu-open");
    });

    jQuery("#btn-menu-toggle").on("click", function ($) {
      jQuery("#main-menu").toggleClass("open-menu");
      return false;
    });

    jQuery("#menucollapse .uk-navbar-nav a").on("click", function ($) {
      jQuery("#main-menu").toggleClass("open-menu");
    });
  }

  function init_scroll() {
    if (!is_resize) {
      var window_height =
        jQuery("#main-header").height() - (jQuery("#main-menu").height() + 1);
      var current_scroll = Math.round(jQuery(window).scrollTop());
      if (current_scroll >= window_height) {
        jQuery("#main-menu").addClass("fixed");
      } else {
        jQuery("#main-menu").removeClass("fixed");
      }
    }
  }

  function init_full_height() {
    if (!is_resize) {
      let vh = window.innerHeight * 0.01;
      jQuery(":root").css("--vh", vh + "px");
    }
  }

  function init_pageloader() {
    var $pageloader = jQuery("#pageloader");
    setTimeout(function () {
      $pageloader.addClass("uk-transition-fade");
      setTimeout(function () {
        $pageloader.addClass("page-is-loaded");
        init_check_hash_url();
      }, 400);
    }, 300);
  }

  function init_inner_link() {
    jQuery(".yb-inner-link").on("click", function ($) {
      var $el = jQuery(this).attr("href");
      var ofsset = parseInt(jQuery(this).attr("data-offset"));
      if (jQuery($el).length) {
        ofsset = ofsset > 0 ? ofsset : 79;
        init_scroll_to(jQuery($el), 1500, ofsset);
        return false;
      }
    });
  }

  function init_check_hash_url() {
    if (window.location.hash && window.location.hash != "" && $(window.location.hash).length) {
      var speed = window.location.hash == "#home" ? 0 : 700;
      console.log(window.location.hash)
      init_scroll_to(jQuery(window.location.hash), speed, 79);
    }
  }

  function init_scroll_to($el, speed, offset) {
    jQuery("html, body").animate({
      scrollTop: $el.offset().top - offset
    }, {
      duration: speed,
      easing: "easeInOutExpo"
    });
  }

  function init_typed() {
    var $typed = jQuery("#typed");
    if ($typed.length) {
      var typed = new Typed("#typed", {
        strings: ["developer", "designer", "freelancer", "photographer"],
        loop: true,
        typeSpeed: 70
      });
    }
  }

  function init_btn_loading($btn, is_loading) {
    if (is_loading) {
      $btn.attr("disabled", "disabled");
      $btn.find(".btn-text-wrap").text("Please Wait . . .");
      $btn.find(".uk-icon").attr("hidden", "hidden");
      $btn.append("<div uk-spinner></div>");
    } else {
      $btn.removeAttr("disabled");
      $btn.find(".btn-text-wrap").text($btn.attr("data-textreset"));
      $btn.find(".uk-icon").removeAttr("hidden");
      $btn.find("div[uk-spinner]").remove();
    }
  }

  function init_alert(id, msg, classname, icon) {
    var alert =
      '<div id="' +
      id +
      '" class="' +
      classname +
      '  uk-border-rounded" data-uk-alert>' +
      '<a class="uk-alert-close" data-uk-close></a>' +
      '<div class="uk-flex uk-flex-middle">' +
      '<div><span data-uk-icon="' +
      icon +
      '" class="uk-margin-small-right"></span></div>' +
      "<div>" +
      msg +
      "</div>" +
      "</div>" +
      "</div>";
    return alert;
  }

  function init_portfolio_details() {
    jQuery(".show-portfolio").on("click", function ($) {
      var $this = jQuery(this);
      var $el = jQuery("#show-portofolio-details");
      var $wrap = jQuery("#portofolio-details");
      $wrap.addClass('uk-animation-toggle');
      UIkit.modal($el).show();

      //show loading first
      $wrap.html(
        '<div class="uk-position-center  uk-text-center">' +
        "<div data-uk-spinner></div> " +
        "</div>"
      );

      $.post($this.attr("href"), function (data) {
        $wrap.html(data);
        $wrap.removeClass('uk-animation-toggle');
      });
      return false;
    });
  }
})(jQuery);