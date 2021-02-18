import {toTitleCase, waitForFinalEvent, matches} from "./_app/helpers.js"

let test = () => console.log('welcome!');

//run all init scripts
const loadHandler = () => {

  console.log('doc loaded');

}
document.addEventListener("DOMContentLoaded", loadHandler)


//run all scripts on resize
const resizeHandler = () => waitForFinalEvent(() => {

  console.log('window resize');

}, 500, 'dont resize again');
window.addEventListener('resize', resizeHandler)


//event bubbling click handler
const clickHandler = () => {

    //close video popovers
    if(matches('p')){
      console.log('click paragraph');
    }
  

}
document.addEventListener('click', clickHandler, false);