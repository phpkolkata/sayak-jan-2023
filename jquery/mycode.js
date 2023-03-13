$("document").ready(function () {

$("h1").click(function(){
  // alert("test");
  // $("p").hide();
  // $(this).next().hide();
  //   $(this).next().slideUp(2000,function(){alert("done")});
//   $(this).next().slideToggle(1000); //slideUp, slideDown
  $(this).next().fadeToggle(1000); //fadeIn, fadeOut
});

});
