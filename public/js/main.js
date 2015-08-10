jQuery.fn.preventDoubleSubmission = function() {

    var last_clicked, time_since_clicked;

    $(this).bind('submit', function(event){

    if(last_clicked) 
      time_since_clicked = event.timeStamp - last_clicked;

    last_clicked = event.timeStamp;

    if(time_since_clicked < 2000)
      return false;

    return true;
  });   
    
};


function notificacion(mensaje){

	$.notify(mensaje, {
	  clickToHide: true,
	  autoHide: true,
	  autoHideDelay: 5000,
	  arrowShow: true,
	  globalPosition: 'top center',
	  className: 'success',
	  showAnimation: 'slideDown',
	  showDuration: 400,
	  hideAnimation: 'slideUp',
	  hideDuration: 200,
	  gap: 20
	});

}
