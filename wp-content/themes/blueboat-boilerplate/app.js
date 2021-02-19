(function () {
  'use strict';

  // for each
  if (!Array.prototype.forEach) {
    Array.prototype.forEach = function (callback, thisArg) {
      thisArg = thisArg || window;
      for (var i = 0; i < this.length; i++) {
        callback.call(thisArg, this[i], i, this);
      }
    };
  }

  if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = function (callback, thisArg) {
      thisArg = thisArg || window;
      for (var i = 0; i < this.length; i++) {
        callback.call(thisArg, this[i], i, this);
      }
    };
  }
  // closest
  if (!Element.prototype.closest) {
    if (!Element.prototype.matches) {
      Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
    }
    Element.prototype.closest = function (s) {
      var el = this;
      var ancestor = this;
      if (!document.documentElement.contains(el)) return null
      do {
        if (ancestor.matches(s)) return ancestor
        ancestor = ancestor.parentElement;
      } while (ancestor !== null)
      return null
    };
  }

  // matches
  if (!Element.prototype.matches) {
    Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
  }

  var waitForFinalEvent = (function () {
    var timers = {};
    return function (callback, ms, uniqueId) {
  	  if (!uniqueId) {
        uniqueId = "Don't call this twice without a uniqueId";
  	  }
  	  if (timers[uniqueId]) {
        clearTimeout(timers[uniqueId]);
  	  }
  	  timers[uniqueId] = setTimeout(callback, ms);
    }
  })();

  // cont donk = 'donk';

  // run all init scripts
  const loadHandler = () => {
    console.log('doc loaded');
  };
  document.addEventListener('DOMContentLoaded', loadHandler);

  // run all scripts on resize
  const resizeHandler = () => waitForFinalEvent(() => {
    console.log('window resize');
  }, 500, 'dont resize again');
  window.addEventListener('resize', resizeHandler);

  // event bubbling click handler
  const clickHandler = (event) => {
    // click checker
    if (event.target.matches('p')) {
      console.log('click paragraph');
    }
  };
  document.addEventListener('click', clickHandler, false);

}());
