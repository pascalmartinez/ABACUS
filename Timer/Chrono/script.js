$(document).ready(function(){
  var secondes = 0;
  var minutes = 0;
  var on = false;
  var reset = false;

  $("#play").click(function(){
    Start();
  });
  $("#pause").click(function(){
    Stop();
  });
  $("#reset").click(function(){
    Reset();
  });

  function chrono(){
    secondes += 1;

    if(secondes>59){
      minutes += 1;
      secondes = 0;
    }

    if(minutes<10 && secondes<10){
      $("#timer").html("0"+minutes+" : 0"+secondes);
    }
      else if(minutes<10 && secondes>=10){
        $("#timer").html("0"+minutes+" : "+secondes);
    }
    else if(minutes>=10 && secondes<10){
        $("#timer").html(+minutes+" : 0"+secondes);
    }
    else if(minutes>=10 && secondes>10){
        $("#timer").html(+minutes+" : "+secondes);
    }
  }

  function Start(){
    if(on===false){
      timerID = setInterval(chrono, 1000);
      on = true;
      reset = false;
    }
  }

  function Stop(){
    if(on===true){
      on = false;
      clearTimeout(timerID);
    }
  }

  function Reset(){
    if(reset===false)
    {
      clearInterval(timerID);
      secondes = 0;
      minutes = 0;
      $("#timer").html("00 : 00");
      reset = true;
    }
  }

}); 
