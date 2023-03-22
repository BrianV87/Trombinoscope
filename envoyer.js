document.addEventListener("DOMContentLoaded", function () {
  const contactForm = document.getElementById("contactForm");
  const submitButton = contactForm.querySelector("button");

  contactForm.addEventListener("submit", function (event) {
    event.preventDefault();

    if (!validateForm(contactForm)) {
      // Formulaire invalide
    } else {
      // Ajoutez l'effet de vibration sur le bouton Envoyer lorsqu'il est cliqué et le formulaire est correctement rempli
      submitButton.classList.add("vibrate");
      setTimeout(() => {
        submitButton.classList.remove("vibrate");
      }, 900);

      // Soumettez le formulaire ou traitez les données ici
      // Réinitialisez le formulaire
      contactForm.reset();
    }
  });
});

function validateForm(form) {
  // Vérifiez si le formulaire est entièrement et correctement rempli
  // Retournez true si le formulaire est valide, sinon retournez false

  const inputs = form.querySelectorAll("input");
  const textarea = form.querySelector("textarea");
  const select = form.querySelector("select");

  let isValid = true;

  inputs.forEach((input) => {
    if (input.value.trim() === "") {
      isValid = false;
    }
  });

  if (textarea.value.trim() === "" || select.value === "") {
    isValid = false;
  }

  return isValid;
}