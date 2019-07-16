// BUGS
// adding css scrolls to header in initial opening break window scrolling
// if closed when scrolled to bottom, remains at bottom on next opening


const msgrScrollWindow = document.querySelector('.scrollable');
const msgrHeader = document.querySelector('.header');

msgrScrollWindow.addEventListener('scroll', function() {
  msgrHeader.style.opacity = 1 - (msgrScrollWindow.scrollTop / 200);
  msgrHeader.style.transform = `translateY(${msgrScrollWindow.scrollTop / 2}px)`;
});