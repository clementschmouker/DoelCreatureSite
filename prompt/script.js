const userPrompt = document.querySelector('#userPrompt');
const promptLines = document.querySelector('#credentialLines');
let LOADING = false;
let ISIDOK = false;
let ISPASSWORDOK = false;
let credentials = {
  username: '',
  password: '',
};


const loadingLine = document.createElement('li');
loadingLine.classList.add('loading');
const span = document.createElement('span');
span.innerHTML = '.';
loadingLine.appendChild(span);
loadingLine.appendChild(span.cloneNode(true));
loadingLine.appendChild(span.cloneNode(true));

userPrompt.focus();


function checkID(value) {
  const newLine = document.createElement('li');
  credentials.username = value;
  newLine.innerHTML = 'Entrez votre mot de passe:';
  promptLines.appendChild(newLine);
  ISIDOK = true;
}

function checkPWD(value) {
  ISPASSWORDOK = true;
  credentials.password = value;
  console.log('logged in');
  window.location.href = 'getId.php?username=' + credentials.username + '&password=' + credentials.password + '&submit=submit';
}

document.addEventListener('click', () => {
    userPrompt.focus();
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' && LOADING === false) {
      LOADING = true;
      promptLines.appendChild(loadingLine);
      const value = userPrompt.value;
      userPrompt.value = '';

      setTimeout(() => {
        LOADING = false;
        loadingLine.remove();
        const newLine = document.createElement('li');
        newLine.textContent = value;
        promptLines.appendChild(newLine);
        if (!ISIDOK) {
          checkID(value);
        } else if (!ISPASSWORDOK) {
          checkPWD(value);
        }

        promptLines.scrollTop = promptLines.scrollHeight;
      }, 1000);
    }
});

userPrompt.addEventListener('input', (e) => {
  if (LOADING) {
    e.preventDefault();
    return;
  }
});

