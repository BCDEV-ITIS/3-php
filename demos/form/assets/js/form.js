/**
 * Check email format
 * @param {string} email
 * @returns boolean
 */
function isValidEmail(email) {
  return /^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/.test(email);
}

function isValidName(name) {}

function isValidPassword(pwd) {}

function isValidAge(age) {}

function isValidForm(name, email, pwd, age) {
  return (
    isValidName(name) &&
    isValidEmail(email) &&
    isValidAge(age) &&
    isValidPassword(pwd)
  );
}

/**
 * Add list of errors to body
 * @param {Array} errors Array of string
 * @returns Array
 */
function showErrors(errors) {
  const ul = document.createElement("ul");
  errors.forEach((message) => {
    const li = document.createElement("li");
    li.innerText = message
    li.classList.add('alert-info')
    ul.append(li)
  });
  document.querySelector('body').prepend(ul)
}

function submitForm() {
    /**
     * Empecher la validation du formulaire s'il y a une erreur
     * dans le format des données à envoyer
     * 
     */

    const form = document.querySelector('form')
    form.addEventListener('submit', function(e) {
        // Pour empecher la soumission
        e.preventDefault()
        console.log('soumission empeché')
    })
}

showErrors(['format email incorrect', 'Age non comprise entre 18 et 120 ans'])
submitForm()

