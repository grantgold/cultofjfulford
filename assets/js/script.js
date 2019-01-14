console.log('script.js loaded')

document.addEventListener('click',function(event){
var navigation= document.getElementById('navigation')
var menuButton= document.getElementById('menuButton')
console.log(event)

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
