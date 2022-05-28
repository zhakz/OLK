const find = (selector) => {
    return document.querySelector(selector);
}

const toggle = (clickElement, targetElement) => {
    clickElement.addEventListener('click', (e) => {
        e.preventDefault();
        targetElement.classList.toggle('visible');
    });
}

toggle(find('#menu'), find('#menuList'));
toggle(find('#userIcon'), find('#authMenu'));
toggle(find('#searchButton'), find('#searchBar'));

document.querySelectorAll('#signCloseBtn').forEach(el => {
    el.addEventListener('click', () => {
        find('#signinmodal').style.display = "none";
    });
});

find('#signinBtn').addEventListener('click', (e) => {
    e.preventDefault();
    find('#signinmodal').style.display = "flex";
    find('#authMenu').classList.toggle('visible');
});

document.querySelectorAll('#signUpCloseBtn').forEach(el => {
    el.addEventListener('click', () => {
        find('#signupmodal').style.display = "none";
    });
});

find('#signupBtn').addEventListener('click', (e) => {
    e.preventDefault();
    find('#signupmodal').style.display = "flex";
    find('#authMenu').classList.toggle('visible');
});
const searchFocus = document.getElementById('search-focus');
const keys = [
  { keyCode: 'AltLeft', isTriggered: false },
  { keyCode: 'ControlLeft', isTriggered: false },
];

window.addEventListener('keydown', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = true;
    }
  });

  const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

  if (shortcutTriggered) {
    searchFocus.focus();
  }
});

window.addEventListener('keyup', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = false;
    }
  });
});