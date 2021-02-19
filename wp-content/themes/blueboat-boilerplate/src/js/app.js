import './_app/polyfils'
import { waitForFinalEvent } from './_app/helpers.js'

const test = () => console.log('welcome!')

// run all init scripts
const loadHandler = () => {

  console.log('doc loaded')

}
document.addEventListener('DOMContentLoaded', loadHandler)

// run all scripts on resize
const resizeHandler = () => waitForFinalEvent(() => {

  console.log('window resize')

}, 500, 'dont resize again')
window.addEventListener('resize', resizeHandler)

// event bubbling click handler
const clickHandler = (event) => {

  // click checker
  if (event.target.matches('p')) {
    console.log('click paragraph')
  }
  
}
document.addEventListener('click', clickHandler, false)
