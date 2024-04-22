/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/showA.js ***!
  \*******************************/
document.addEventListener('DOMcontentLoaded', function () {
  var tabs = document.getElementsByClassName('tab_name');
  for (var i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabsSwitch, false);
  }
  function tabSwitch() {
    document.getElementsByClassNmae('is-active')[0].classList.remove('is-active');
    this.classList.add('is-active');
    document.getElementsByClassName('is-show')[0].classList.remove('is-show');
    var arrayTabs = Array.prototype.slice.call(tabs);
    var index = arrayTabs.indexOf(this);
    document.getElementsByClassNmae('tab_content')[index].classList.add('is-show');
  }
  ;
}, false);
/******/ })()
;