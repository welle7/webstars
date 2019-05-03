$(document).ready(function(){
    $(".fb").click(function(){
      $("h2").css("color", "orange");
      $(".color").css("background", "silver");
    });
    $( ".toggle" ).click(function() {
      
      $( ".divtoggle" ).slideToggle( "slow", function() {
        $(".toggle").text("Ein / Ausblenden");
      });
    });
    $(".orange").click(function(){
      $("h2").css("color", "black");
      $(".color").css("background", "orange");
    });
  });