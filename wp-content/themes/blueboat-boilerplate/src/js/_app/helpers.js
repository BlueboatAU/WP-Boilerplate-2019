export var waitForFinalEvent = (function () {
  var timers = {}
  return function (callback, ms, uniqueId) {
	  if (!uniqueId) {
      uniqueId = "Don't call this twice without a uniqueId"
	  }
	  if (timers[uniqueId]) {
      clearTimeout(timers[uniqueId])
	  }
	  timers[uniqueId] = setTimeout(callback, ms)
  }
})()

export const matches = (target) => {
  return event.target.matches ? event.target.matches(target) : event.target.msMatchesSelector(target)
}
