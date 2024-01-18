(function ($) {    
      $('.text-rotate', function() {		  
        var $slider = $('.text-rotate'),
            text = ['Explore', 'Branding', 'Design'],
            output = '';
        $.each(text, function(idx, val) {
          var spans = $.map(val.split(''), function(char) {
            return '<span>' + char + '</span>';
          });
          output += '<div class="slide">' + spans.join('') + '</div>';
        });
        $slider.html(output);
        var TextSlider = (function($) {
          var Sldr;
          var init = function() {
            Sldr = new SliderProps($slider,$(''), 0, 0, 0);
            Sldr.total = Sldr.element.find('.slide').length - 1;
            Sldr.element.find('.slide').each(function(index) {
              if(index == 0) $(this).addClass('active');
            });
            autoRotate();
          };

          var previous = function() {
            Sldr.current = Sldr.next;
            Sldr.next = Sldr.next == 0 ? Sldr.total : Sldr.next - 1;
            animate();
          };

          var next = function() {
            Sldr.current = Sldr.next;
            Sldr.next = Sldr.next == Sldr.total ? 0 : Sldr.next + 1;
            animate();
          };

          var autoRotate = function() {
            setTimeout(function() {
              next();
              autoRotate();
            }, 4000);
          };

          var animate = function() {
            Sldr.element.find('.slide').removeClass('active');
            setTimeout(function() {
              Sldr.element.find('.slide:eq(' + Sldr.next + ')').addClass('active');
            }, 1000);
          };

          return {
            init: init,
            next: next,
            previous: previous
          };

        }(jQuery));

        function SliderProps(element, navigation, total, next, current) {
          this.element = element;
          this.navigation = navigation;
          this.total = total;
          this.next = next;
          this.current = current;
        }
        TextSlider.init();
      });
    
  })(jQuery);