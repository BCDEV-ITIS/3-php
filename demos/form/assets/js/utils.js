/**
 * Check email format
 * @param {string} email
 * @returns boolean
 */
function isValidEmail(email) {
  return /^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/.test(email);
}

/**
 *
 * @param {string} name
 * @returns {boolean}
 */
function isValidFirstname(name) {
    return name.length >=2
}

/**
 *
 * @param {string} pwd
 * @returns {boolean}
 */
function isValidPassword(pwd) {
    return /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){16,32}$/.test(pwd)
}

/**
 *
 * @param {number} age
 * @returns {boolean}
 */
function isValidAge(age) {
    age = parseInt(age)
    return age >= 18 && age <= 120
}

/**
 *
 * @param {string} name
 * @param {string} email
 * @param {string} pwd
 * @param {number} age
 * @returns {boolean}
 */
function isValidForm(name, email, pwd, age) {
  return (
    isValidFirstname(name) &&
    isValidEmail(email) &&
    isValidAge(age) &&
    isValidPassword(pwd)
  );
}

/**
 * Add list of errors to body
 * @param {string[]} errors Array of string
 * @returns {string[]}
 */
function showErrors(errors) {
  let ul = document.querySelector("ul");
  if (ul) ul.innerHTML = "";
  else ul = document.createElement("ul");
  errors.forEach((message) => {
    const li = document.createElement("li");
    li.innerText = message;
    li.classList.add("alert-info");
    ul.append(li);
  });
  document.querySelector("body").prepend(ul);
}

/**
 * Submit form if no errors
 * @returns {void}
 */
export function submitForm() {
  const form = document.querySelector("form");
  form.addEventListener("submit", function (e) {
    const firstname = form.firstname.value;
    const email = form.email.value;
    const pwd = form.password.value;
    const age = form.age.value;
    if (!isValidForm(firstname, email, pwd, age)) {
      e.preventDefault();
      const errors = [];
      if (!isValidEmail(email))
        errors.push(`L'email ${email} est incorrecte, exemple john@doe.com`);
      if (!isValidAge(age))
        errors.push(`L'âge ${age} est incorrecte, valeur attendu entre 18 et 120`);
      if (!isValidPassword(pwd))
        errors.push(
          `Mot de passe doit contenir au moins 1 lettre min, 1 lettre maj, 1 chiffre, un caractère spécial, pas d'espace et entre 16 et 32 caractères`
        );
      if (!isValidFirstname(firstname))
        errors.push(`Le prénom ${firstname} doit avoir au moins 2 caractères alphabétiques`);
      showErrors(errors);
    }
  });
}
