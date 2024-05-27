/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/showA.js":
/*!*******************************!*\
  !*** ./resources/js/showA.js ***!
  \*******************************/
/***/ (() => {

eval("document.addEventListener('DOMContentLoaded', function () {\n  // タブに対してクリックイベントを適用\n  var tabs = document.getElementsByClassName('tab');\n  for (var i = 0; i < tabs.length; i++) {\n    tabs[i].addEventListener('click', tabSwitch, false);\n  }\n\n  // タブをクリックすると実行する関数\n  function tabSwitch() {\n    // タブのclassの値を変更\n    document.getElementsByClassName('is-active')[0].classList.remove('is-active');\n    this.classList.add('is-active');\n    // コンテンツのclassの値を変更\n    document.getElementsByClassName('is-show')[0].classList.remove('is-show');\n    var arrayTabs = Array.prototype.slice.call(tabs);\n    var index = arrayTabs.indexOf(this);\n    document.getElementsByClassName('panel')[index].classList.add('is-show');\n  }\n  ;\n}, false);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2hvd0EuanMiLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJ0YWJzIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImkiLCJsZW5ndGgiLCJ0YWJTd2l0Y2giLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJhZGQiLCJhcnJheVRhYnMiLCJBcnJheSIsInByb3RvdHlwZSIsInNsaWNlIiwiY2FsbCIsImluZGV4IiwiaW5kZXhPZiJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3Nob3dBLmpzPzk4ZmIiXSwic291cmNlc0NvbnRlbnQiOlsiZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uICgpIHtcbiAgICAvLyDjgr/jg5bjgavlr77jgZfjgabjgq/jg6rjg4Pjgq/jgqTjg5njg7Pjg4jjgpLpgannlKhcbiAgICBjb25zdCB0YWJzID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgndGFiJyk7XG4gICAgZm9yIChsZXQgaSA9IDA7IGkgPCB0YWJzLmxlbmd0aDsgaSsrKSB7XG4gICAgICAgIHRhYnNbaV0uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCB0YWJTd2l0Y2gsIGZhbHNlKTtcbiAgICB9XG5cbiAgICAvLyDjgr/jg5bjgpLjgq/jg6rjg4Pjgq/jgZnjgovjgajlrp/ooYzjgZnjgovplqLmlbBcbiAgICBmdW5jdGlvbiB0YWJTd2l0Y2goKSB7XG4gICAgICAgIC8vIOOCv+ODluOBrmNsYXNz44Gu5YCk44KS5aSJ5pu0XG4gICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2lzLWFjdGl2ZScpWzBdLmNsYXNzTGlzdC5yZW1vdmUoJ2lzLWFjdGl2ZScpO1xuICAgICAgICB0aGlzLmNsYXNzTGlzdC5hZGQoJ2lzLWFjdGl2ZScpO1xuICAgICAgICAvLyDjgrPjg7Pjg4bjg7Pjg4Tjga5jbGFzc+OBruWApOOCkuWkieabtFxuICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdpcy1zaG93JylbMF0uY2xhc3NMaXN0LnJlbW92ZSgnaXMtc2hvdycpO1xuICAgICAgICBjb25zdCBhcnJheVRhYnMgPSBBcnJheS5wcm90b3R5cGUuc2xpY2UuY2FsbCh0YWJzKTtcbiAgICAgICAgY29uc3QgaW5kZXggPSBhcnJheVRhYnMuaW5kZXhPZih0aGlzKTtcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgncGFuZWwnKVtpbmRleF0uY2xhc3NMaXN0LmFkZCgnaXMtc2hvdycpO1xuICAgIH07XG59LCBmYWxzZSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBQSxRQUFRLENBQUNDLGdCQUFnQixDQUFDLGtCQUFrQixFQUFFLFlBQVk7RUFDdEQ7RUFDQSxJQUFNQyxJQUFJLEdBQUdGLFFBQVEsQ0FBQ0csc0JBQXNCLENBQUMsS0FBSyxDQUFDO0VBQ25ELEtBQUssSUFBSUMsQ0FBQyxHQUFHLENBQUMsRUFBRUEsQ0FBQyxHQUFHRixJQUFJLENBQUNHLE1BQU0sRUFBRUQsQ0FBQyxFQUFFLEVBQUU7SUFDbENGLElBQUksQ0FBQ0UsQ0FBQyxDQUFDLENBQUNILGdCQUFnQixDQUFDLE9BQU8sRUFBRUssU0FBUyxFQUFFLEtBQUssQ0FBQztFQUN2RDs7RUFFQTtFQUNBLFNBQVNBLFNBQVNBLENBQUEsRUFBRztJQUNqQjtJQUNBTixRQUFRLENBQUNHLHNCQUFzQixDQUFDLFdBQVcsQ0FBQyxDQUFDLENBQUMsQ0FBQyxDQUFDSSxTQUFTLENBQUNDLE1BQU0sQ0FBQyxXQUFXLENBQUM7SUFDN0UsSUFBSSxDQUFDRCxTQUFTLENBQUNFLEdBQUcsQ0FBQyxXQUFXLENBQUM7SUFDL0I7SUFDQVQsUUFBUSxDQUFDRyxzQkFBc0IsQ0FBQyxTQUFTLENBQUMsQ0FBQyxDQUFDLENBQUMsQ0FBQ0ksU0FBUyxDQUFDQyxNQUFNLENBQUMsU0FBUyxDQUFDO0lBQ3pFLElBQU1FLFNBQVMsR0FBR0MsS0FBSyxDQUFDQyxTQUFTLENBQUNDLEtBQUssQ0FBQ0MsSUFBSSxDQUFDWixJQUFJLENBQUM7SUFDbEQsSUFBTWEsS0FBSyxHQUFHTCxTQUFTLENBQUNNLE9BQU8sQ0FBQyxJQUFJLENBQUM7SUFDckNoQixRQUFRLENBQUNHLHNCQUFzQixDQUFDLE9BQU8sQ0FBQyxDQUFDWSxLQUFLLENBQUMsQ0FBQ1IsU0FBUyxDQUFDRSxHQUFHLENBQUMsU0FBUyxDQUFDO0VBQzVFO0VBQUM7QUFDTCxDQUFDLEVBQUUsS0FBSyxDQUFDIiwiaWdub3JlTGlzdCI6W119\n//# sourceURL=webpack-internal:///./resources/js/showA.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/showA.js"]();
/******/ 	
/******/ })()
;