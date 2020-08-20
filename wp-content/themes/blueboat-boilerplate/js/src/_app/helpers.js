export function toTitleCase(str) {
	str = str.toLowerCase().split(' ');
	for (var i = 0; i < str.length; i++) {
		str[i] = str[i].charAt(0).toUpperCase() + str[i].slice(1);
	}
	return str.join(' ');
}

export var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
	  if (!uniqueId) {
		uniqueId = "Don't call this twice without a uniqueId";
	  }
	  if (timers[uniqueId]) {
		clearTimeout (timers[uniqueId]);
	  }
	  timers[uniqueId] = setTimeout(callback, ms);
	};
  })();
