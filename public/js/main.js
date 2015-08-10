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
