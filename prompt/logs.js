const promptLines = document.querySelector('#credentialLines');
const lines = document.querySelectorAll('li');
let index = 0;

const loadingLine = document.createElement('li');
loadingLine.classList.add('loading');
const span = document.createElement('span');
span.innerHTML = '.';
loadingLine.appendChild(span);
loadingLine.appendChild(span.cloneNode(true));
loadingLine.appendChild(span.cloneNode(true));

lines.forEach((line) => {
    line.style.display = 'none';
});

promptLines.appendChild(loadingLine);

const interval = setInterval(() => {
    lines[index].style.display = 'block';
    // scroll to the bottom of the page
    window.scrollTo(0, document.body.scrollHeight);

    index++;

    if (index === lines.length) {
        loadingLine.remove();
        clearInterval(interval);
    }
}, 500);

document.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowUp') {
        document.querySelector('.promptLines').scrollBy(0, -50);
    }

    if (event.key === 'ArrowDown') {
        document.querySelector('.promptLines').scrollBy(0, 50);
    }
});