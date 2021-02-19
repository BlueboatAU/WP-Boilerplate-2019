// for each
if (!Array.prototype.forEach) {
  Array.prototype.forEach = function (callback, thisArg) {
    thisArg = thisArg || window
    for (var i = 0; i < this.length; i++) {
      callback.call(thisArg, this[i], i, this)
    }
  }
}

if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = function (callback, thisArg) {
    thisArg = thisArg || window
    for (var i = 0; i < this.length; i++) {
      callback.call(thisArg, this[i], i, this)
    }
  }
}
// closest
if (!Element.prototype.closest) {
  if (!Element.prototype.matches) {
    Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector
  }
  Element.prototype.closest = function (s) {
    var el = this
    var ancestor = this
    if (!document.documentElement.contains(el)) return null
    do {
      if (ancestor.matches(s)) return ancestor
      ancestor = ancestor.parentElement
    } while (ancestor !== null)
    return null
  }
}

// matches
if (!Element.prototype.matches) {
  Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector
}
