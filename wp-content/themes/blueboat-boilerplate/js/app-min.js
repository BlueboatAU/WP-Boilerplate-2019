!function(){"use strict";var e,t=(e={},function(t,n,o){o||(o="Don't call this twice without a uniqueId"),e[o]&&clearTimeout(e[o]),e[o]=setTimeout(t,n)}),n=function(){return console.log("welcome!")};jQuery((function(e){setInterval(n,3e3);var t=e("p").text(),o=function(e){e=e.toLowerCase().split(" ");for(var t=0;t<e.length;t++)e[t]=e[t].charAt(0).toUpperCase()+e[t].slice(1);return e.join(" ")}(t);console.log(t,o)}));document.addEventListener("DOMContentLoaded",(function(){console.log("doc loaded")}));window.addEventListener("resize",(function(){return t((function(){console.log("window resize")}),500,"dont resize again")}));document.addEventListener("click",(function(){var e;e="p",(event.target.matches?event.target.matches(e):event.target.msMatchesSelector(e))&&console.log("click paragraph")}),!1)}();