const form = document.querySelector('#contact');
const formPopup = document.querySelector('.form__popup');
const acceptCguButton = document.querySelector('#acceptCgu');
const cguCheckbox = document.querySelector('#cgu');


form.addEventListener('submit', (e) => {
    e.preventDefault();
    formPopup.classList.remove('hidden');
});

acceptCguButton.addEventListener('click', () => {
    if (cguCheckbox.checked) {
        formPopup.classList.add('hidden');
    }
});
