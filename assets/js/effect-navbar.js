/*
$(window).scroll(function (event) {
  var scroll = $(window).scrollTop();
  
  effect_text("text")
  effect_text("text2")
  effect_text("text3")
  effect_text("title_about_us")
  effect_text("title_mission")
  effect_text("title_vision")
  effect_text("title_services")
  
});
*/

$("a").on('click', function(event) {
    if (this.hash !== "") {

      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 'slow', function(){
 
        window.location.hash = hash;

      });

    } 
  });



  function effect_text(id){
    //Start Effect Code
var text = document.getElementById(id);
var newDom = '';
var animationDelay = 6;

for (let i = 0; i < text.innerText.length; i++) {
    newDom += '<span class="char">' + (text.innerText[i] == ' ' ? '&nbsp;' : text.innerText[i]) + '</span>';
}

text.innerHTML = newDom;
var length = text.children.length;

for (let i = 0; i < length; i++) {
    text.children[i].style['animation-delay'] = animationDelay * i + 'ms';
}
//Finish Effect Code

  }