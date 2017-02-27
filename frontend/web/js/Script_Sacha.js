$.fx.speeds._default = 1000;

$(document).ready(function() { 
	
// Плавная прокрутка ---------------------------------------------------------------------------------->
	$('a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();
		
		var target = this.hash,
		$target = $(target);
		
		$('html, body').stop().animate({
		'scrollTop': $target.offset().top
		}, 700, 'swing', function () {
		window.location.hash = target;
		});
	});	

	// demonctration  statistic

	$( "#statistic1" ).slideUp(); 

	  $( ".demonctration #Save1" ).toggle(function() {

	  	 $( "#statistic1" ).slideDown(400); 
	  }, function() {
	  	
	  	$( "#statistic1" ).slideUp(400); 

	  });


	    $('.balert_aspect').viewportChecker({
      classToAdd: 'balert_aspect_active',
      classToRemove: 'balert_aspect_active',
      offset: 190,
      invertBottomOffset: true,
      repeat: true,
      callbackFunction: function(elem, action){},
      scrollHorizontal: false
	  });

	
	// profil_page datepicker

    if ($(".all").hasClass('profil_page')){

	    var $start = $('#start'),
		$end = $('#end');

		$start.datepicker({
			onSelect: function (fd, date) {
				$end.data('datepicker')
					.update('minDate', date)
			}
		})

		$end.datepicker({
			onSelect: function (fd, date) {
				$start.data('datepicker')
					.update('maxDate', date)
			}
		})
    }

    // custom-statistic

	 $( "#statistic2" ).slideUp(); 

	  $( "#tab_for_custom_statistic_content input[type='submit']" ).toggle(function() {

	  	 $( "#statistic2" ).slideDown(400); 

	  	 $("html, body").animate({scrollTop:$(document).height()},"500")

	  }, function() {
	  	
	  	$( "#statistic2" ).slideUp(400); 

	  });
	  
}); //Конец ready