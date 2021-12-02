$(document).ready(function(){
	$('.chefer').hover(
		//trigger when mouse hover
		function(){
			$(this).animate({
				marginTop: "-=2%",
			},200);
		},
		//trigger when mouse out
		function(){
			$(this).animate({
				marginTop: "0%",
			},200);
		}
	);
	$('.counter').counterUp({
        delay: 40,
        time: 4000
    });
	$(window).scroll(function(){
          var positiontop = $(document).scrollTop();
          console.log(positiontop);
          if ((positiontop > 469) && (positiontop < 810)) {
          	
          }
      });
});