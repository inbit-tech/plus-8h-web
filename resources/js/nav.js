/*
|--------------------------------------------------------------------------
|    Nav menu click event
|--------------------------------------------------------------------------
|
|    @navbarBtnId 
|    @navbarTitle
|    1.Get click menu btn id
|    2.Get need to be changed text node
|    3.Add mouse click event
|
*/


const navbarBtnId = document.getElementById('navbarClickSection');

let navbarTitle = document.getElementById('navbarTitle')


/*
*    when user click 'MENU' toggle this text 
*/

if (navbarBtnId) {
  navbarBtnId.addEventListener('click', function (e) {
    let navbarDropdownContainer = document.getElementById('navbarDropdownContainer').classList
    if (navbarDropdownContainer.contains("uk-open")) {
      navbarTitle.textContent = 'menu'
    } else {
      navbarTitle.textContent = 'close'
    }
  })
}

/* 
*    when user click window other section,toggle 'MENU' text
*    add third parameter 'true',this click event capture phase execution
*/

document.addEventListener('click', function (e) {
  let navbarDropdownContainer = document.getElementById('navbarDropdownContainer').classList
  if (navbarDropdownContainer.contains("uk-open")) {
    navbarTitle.textContent = 'close'
  } else {
    navbarTitle.textContent = 'menu'
  }
}, true)