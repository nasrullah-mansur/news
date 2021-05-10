(function($) {
  "use strict";

  jQuery(document).ready(function(){
    /*-------------------------------------------
    js scrollup
    --------------------------------------------- */
    $.scrollUp({
      scrollText: '<i class="fa fa-angle-up"></i>',
      easingType: 'linear',
      scrollSpeed: 900,
      animation: 'fade'
    });
    /*-------------------------------------------
    slider active
    --------------------------------------------- */


    /*---------------------------------
    mobile header activation
    -----------------------------------*/
    $(".search-bar").on('click', function(e) {
      e.preventDefault();
      $(".mobile-search").toggleClass("is-active");
    });
    $(".menu-bar").on('click', function(e) {
      e.preventDefault();
      $(".sidebar-area").toggleClass("is-active");
    });
    /*---------------------------------
    venobox Popup active
    -----------------------------------*/
    $('.popup-video').venobox();
    /*---------------------------------
    google map activation
    -----------------------------------*/


    // Dropdown on hover;
        const $dropdown = $(".main-menu .dropdown");
        const $dropdownToggle = $(".main-menu .dropdown-toggle");
        const $dropdownMenu = $(".main-menu .dropdown-menu");
        const showClass = "show";

        $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 768px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
        });



  });

})(jQuery);
