import {toTitleCase, waitForFinalEvent} from "./_app/helpers.js"


let test = () => console.log('welcome!');

jQuery(function($){

  setInterval(test, 3000);

  let text = $('p').text();

  let trans = toTitleCase(text);

  console.log(text, trans);

})
