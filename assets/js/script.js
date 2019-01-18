console.log('script loaded')

document.addEventListener('click',function(event){
var navigation= document.getElementById('navigation')
var menuButton= document.getElementById('menuButton')

switch(event.target.id){
  case ('menuButton'):
    navigation.classList.toggle('closed');
    menuButton.classList.toggle('open');
    break;
  case ('navigation'):
    navigation.classList.toggle('closed');
    menuButton.classList.toggle('open');
    break;
  default:
    break;
}
}, false);

$(document).mousemove(function(event) {
    $("video").css({top: event.pageY, left: event.pageX});
});

$(document.links) .filter(function() { return this.hostname != window.location.hostname; }) .attr('target', '_blank');
