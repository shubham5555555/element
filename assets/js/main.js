$(function() {

    var siteSticky = function() {
          $(".js-sticky-header").sticky({topSpacing:0});
      };
      siteSticky();

      var siteDropdown = function() {

          $('nav .dropdown').hover(function(){
              var $this = $(this);
              $this.addClass('show');
              $this.find('> a').attr('aria-expanded', true);
              $this.find('.dropdown-menu').addClass('show');
          }, function(){
              var $this = $(this);
                  $this.removeClass('show');
                  $this.find('> a').attr('aria-expanded', false);
                  $this.find('.dropdown-menu').removeClass('show');
          });


          $('#dropdown04').on('show.bs.dropdown', function () {
            console.log('show');
          });

        $('.navbar .dropdown > a').click(function(){
          location.href = this.href;
        });
      };
      siteDropdown();

  });

//   carousel js start

$(function () {
    $(".ldmore").slice(0, 0).show();
    $("body").on('click touchstart', '.load-more', function (e) {
        e.preventDefault();
        $(".ldmore:hidden").slice(0, 3).slideDown();
        if ($(".ldmore:hidden").length == 0) {
            $(".load-more").css('visibility', 'hidden');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top - $(window).height()/2
         }, 1000);
    });
});

//   carousel js end

// portfolio js start

