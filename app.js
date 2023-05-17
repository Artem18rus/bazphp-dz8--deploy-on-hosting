let form = document.querySelector('.form');

let funcEvent = (e) => {
  let inputLogin = form.querySelector('.inputLogin');
  if(inputLogin.value.length === 0) {
    event.preventDefault();
    inputLogin.style.background = '#fdbcb4';
  } else {
    inputLogin.style.background = '#FFFFFF';
  }
}
form.addEventListener('submit', funcEvent);

form.addEventListener('input', (e) => {
  let inputLogin = form.querySelector('.inputLogin');
  if(inputLogin.value.length > 0) {
    inputLogin.style.background = '#FFFFFF';
  }
})