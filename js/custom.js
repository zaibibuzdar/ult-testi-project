$(window).on('scroll', function() { var scrollTop = $(window).scrollTop();
    if(scrollTop > 480) {
      $('.fixed_bar').css('position', 'fixed');
      $('.fixed_bar').css('z-index', '999999'); 
      $('.fixed_bar').css('top', '0px');  
      $('.fixed_bar').css('right', '0px');  
      $('.fixed_bar').css('left', '0px');  
      $('.fixed_bar').css('background', '#343a40');  
      $('.fixed_bar').css('-webkit-transition', '0.9s');  
  	}
    else {
      $('.fixed_bar').css('position', 'static'); 
      $('.fixed_bar').css('top', '0px'); 
      $('.fixed_bar').css('background', '#33784f'); 
  } 
  });
