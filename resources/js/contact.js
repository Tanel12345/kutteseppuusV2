document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("form").addEventListener("submit", function (event) {
      if (!validateForm()) {
          console.log("Form validation failed, preventing submission.");
          event.preventDefault(); // Stop form submission if validation fails
      }
  });
});

function validateForm() {
  let sinunimi = document.getElementById("sinunimi");
  let email = document.getElementById("email");
  let teade = document.getElementById("teade");
  let nimierror = document.getElementById("nimierror");
  let emailerror = document.getElementById("emailerror");
  let teadeerror = document.getElementById("teadeerror");

  // Clear previous errors
  nimierror.innerHTML = "";
  emailerror.innerHTML = "";
  teadeerror.innerHTML = "";

  const sinunimivaartus = sinunimi.value.trim();
  const emailvaartus = email.value.trim();
  const teadevaartus = teade.value.trim();
  const mailformat = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

  let valid = true;

  if (sinunimivaartus === "") {
      nimierror.innerHTML = "Nimi on kohustuslik";
      valid = false;
  }
  if (emailvaartus === "") {
      emailerror.innerHTML = "Email on kohustuslik";
      valid = false;
  } else if (!emailvaartus.match(mailformat)) {
      emailerror.innerHTML = "Email kirjuta õigesti";
      valid = false;
  }
  if (teadevaartus === "") {
      teadeerror.innerHTML = "Kirjuta teade";
      valid = false;
  }

  return valid;
}














