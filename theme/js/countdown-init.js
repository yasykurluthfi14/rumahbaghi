(function($) { 

       
          /*  var date = $('#countdown_dashboard').attr('data-date');
			var date_components = date.split("/");
			var options = "'day':"+date_components[2]+",'month':"+date_components[1]+",'year':"+date_components[0]+",'hour':0,'min':0,'sec':0";
			$('#countdown_dashboard').countDown({
				targetOffset:{options},
				omitWeeks:!0
			});*/
       
		
		
	$("#countdown_dashboard").countDown({
		targetDate:{day:1,month:4,year:2017,hour:0,min:0,sec:0},
		omitWeeks:!0
	})	
    
})(jQuery);
    
