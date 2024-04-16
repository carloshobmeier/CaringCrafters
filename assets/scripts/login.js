const loginForm = document.getElementById("loginForm");
loginForm.addEventListener("submit", function (event) {
  if (!validateFormLogin()) {
    // Prevent default form submission if validation fails
    event.preventDefault();
  } else {
    loginForm.submit();
  }
});

function validateFormLogin() {
  const feedbackMessages = document.querySelectorAll(".invalid-feedback");
  const email = document.getElementById("form-email").value;
  const password = document.getElementById("form-password").value;

  if (!isValidEmail(email)) {
    feedbackMessages[0].classList.add("d-block");
    return false;
  } else {
    feedbackMessages[0].classList.remove("d-block");
  }

  if (!isValidPassword(password)) {
    feedbackMessages[1].classList.add("d-block");
    return false;
  } else {
    feedbackMessages[1].classList.remove("d-block");
  }

  return true;
}

function isValidEmail(email) {
  const regex =
    /^[\w-]+(\.[\w-]+)*@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*(\.[a-zA-Z]{2,})$/;
  return regex.test(email);
}

function isValidPassword(password) {
  const regex = /^(?=.*[!@#$%^&*()-_+=|{}[\]:;<>,.?])(?=.*[A-Z]).{8,}$/;
  return regex.test(password);
}
