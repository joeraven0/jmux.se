$( document ).ready(function() {
  //var link = "https://cdn.coverr.co/videos/coverr-robot-vacuum-cleaner-8823/1080p.mp4"
  //var video = document.getElementById("myVideo");
  //video.setAttribute("src", link);
});


function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')!== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 1000);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.visibility = visible ? 'visible' : 'hidden';
}

onReady(function() {
  $("#loading").fadeOut(500);

    $(".page").fadeIn(500);
    setTimeout(lightson,1000); 
    setTimeout(showheader,2000);
     
});

function lightson(){
  $(".headerbg").css({
    transition: '0.8s linear',
    filter: 'brightness(0.8)'
});
}
function showheader(){
  $(".headerbgTextContent").fadeIn(500);
}


window.addEventListener("scroll", function() {

  const maxHeight = document.body.scrollHeight - window.innerHeight;
  const percentage = ((window.pageYOffset * 100) / maxHeight);
  var a = 10;
  var b = 80;
  console.log(percentage);
  var pos = $(window).scrollTop();
  pos = percentage
  console.log(pos);
  if((pos > a) && (pos < b)) {
    
    //document.getElementsByTagName(".headerbg").style.transition = "2s";
    //document.getElementsByTagName(".headerbg").style.filter = "brightness(0.4)";

      //This function was removed 2023-05-13 due to dark bg image jr
        /*$(".headerbg").css({
          transition: '0.4s linear',
          filter: 'brightness(0.2)'
      });*/
  }
  else if((pos>b)) {
    $(".headerbg").css({
      filter: 'brightness(0.5)'
  });
  }
  else {
      $(".headerbg").css({
                  filter: 'brightness(0.8)'
              });
  }
});

$(window).scroll(function(){ 


  });
