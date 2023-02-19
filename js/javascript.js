$( document ).ready(function() {



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
});
