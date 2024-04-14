function toggleForm(formId) {
  var volunteerForm = document.getElementById("volunteer");
  var institutionForm = document.getElementById("institution");
  document.getElementById("radioButtons").classList.add("hidden");
  document.getElementById("foot").classList.add("footerActive");
  if (
    document.getElementById("volunteer_radio").checked &&
    formId === "volunteer"
  ) {
    volunteerForm.classList.remove("d-none");
    institutionForm.classList.add("d-none");
  } else if (
    document.getElementById("institution_radio").checked &&
    formId === "institution"
  ) {
    institutionForm.classList.remove("d-none");
    volunteerForm.classList.add("d-none");
  }
}

function validateFormVol(id) {
  let camposVol = document.getElementById(id).querySelectorAll("input");
  camposVol.forEach((element) => {
    switch (element.dataset.type) {
      case "plainText":
        isValidText(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        break;
      case "cpf":
        isValidCPF(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        break;
      case "number":
        isValidNumber(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        break;
      case "cep":
        isValidCEP(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        break;
      case "email":
        isValidEmail(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        break;
      case "dateOfBirth":
        isValidDateOfBirth(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        break;
      case "password":
        isValidPassword(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        break;
      case "cnpj":
        isValidCNPJ(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        break;
      case "date":
        isDateNotInFuture(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        break;
      case "repeatPassword":
        let password =
          id == "volunteer"
            ? document.getElementById("pass1").value
            : document.getElementById("pass3").value;
        let result = passwordsMatch(element.value, password);
        result
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        break;
    }
  });

  // Check if any required field is empty
  if (containsWrongClass("input", id)) {
    // Prevent form submission
    //alert("Please fill out all required fields.");
    return false;
  }

  if (
    !document.getElementById("accept_terms").checked &&
    !document.getElementById("accept_terms_institution").checked
  ) {
    //alert("Please accept our terms and conditions");
    return false;
  }
  // All fields are filled, allow form submission
  return true;
}

document
  .getElementById("volunteer")
  .addEventListener("submit", function (event) {
    if (!validateFormVol("volunteer")) {
      // Prevent default form submission if validation fails
      event.preventDefault();
    } else {
      event.submit();
    }
  });

document
  .getElementById("institution")
  .addEventListener("submit", function (event) {
    if (!validateFormVol("institution")) {
      // Prevent default form submission if validation fails
      event.preventDefault();
    } else {
      event.submit();
    }
  });

function isValidEmail(email) {
  const regex =
    /^[\w-]+(\.[\w-]+)*@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*(\.[a-zA-Z]{2,})$/;
  return regex.test(email);
}

function isValidNumber(input) {
  const regex = /^\d+$/;
  return regex.test(input);
}

function isValidText(input) {
  const regex = /^[a-zA-Z\s]{3,}$/;
  return regex.test(input);
}

function isValidCEP(cep) {
  const regex = /^(\d{5}-\d{3}|\d{2}\.\d{3}-\d{3}|\d{8})$/;
  return regex.test(cep);
}

function isValidDateOfBirth(dateOfBirth) {
  const regex = /^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/;
  console.log(dateOfBirth)
  console.log(regex.test(dateOfBirth))
  if (!regex.test(dateOfBirth)) {
    return false; // Invalid date format
  }

  const today = new Date();
  console.log(today)
  const birthDate = new Date(dateOfBirth);
  console.log(birthDate)
  let age = today.getFullYear() - birthDate.getFullYear();
  let monthDiff = today.getMonth() - birthDate.getMonth();

  if (
    monthDiff < 0 ||
    (monthDiff === 0 && today.getDate() < birthDate.getDate())
  ) {
    age--;
  }

  return age >= 18;
}

function isValidCPF(cpf) {
  const regex = /^\d{3}\.?\d{3}\.?\d{3}-?\d{2}$/;
  return regex.test(cpf);
}

function isValidCNPJ(cnpj) {
  const regex = /^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/;
  return regex.test(cnpj);
}

function containsWrongClass(selector, id) {
  const elements = document.getElementById(id).querySelectorAll(selector);
  for (const element of elements) {
    if (element.classList.contains("wrong")) {
      return true;
    }
  }
  return false;
}

function isValidPassword(password) {
  const regex = /^(?=.*[!@#$%^&*()-_+=|{}[\]:;<>,.?])(?=.*[A-Z]).{8,}$/;
  return regex.test(password);
}

function passwordsMatch(password, confirmPassword) {
  return password === confirmPassword;
}

function isDateNotInFuture(dateString) {
  // Convert the input string to a Date object
  const inputDate = new Date(dateString);

  // Get the current date
  const currentDate = new Date();

  // Compare the input date with the current date
  return inputDate <= currentDate;
}

document.querySelectorAll("input").forEach((element) => {
  element.addEventListener("focusout", () => {
    let errorPhrase = "";
    switch (element.dataset.type) {
      case "plainText":
        isValidText(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        errorPhrase = "Please add only letters to this field.";
        break;
      case "cpf":
        isValidCPF(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        errorPhrase = "This is not a valid CPF. Ex: 000.000.000-00.";
        break;
      case "number":
        isValidNumber(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        errorPhrase = "Please add only numbers to this field.";
        break;
      case "cep":
        isValidCEP(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        errorPhrase = "This is not a valid CEP. Ex: 00000-00.";
        break;
      case "email":
        isValidEmail(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        errorPhrase = "This is not a valid email. Ex: test@test.com.";
        break;
      case "dateOfBirth":
        isValidDateOfBirth(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        errorPhrase =
          "This is not a valid birthday. You must be older than 18 years old.";
        break;
      case "password":
        isValidPassword(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        errorPhrase =
          "This is not a valid password. It needs to be at least 8 letters and an uppercase letter.";
        break;
      case "cnpj":
        isValidCNPJ(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        errorPhrase = "This is not a valid CNPJ. Ex: 00.000.000/0000-00.";
        break;
      case "date":
        isDateNotInFuture(element.value)
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
        errorPhrase =
          "This is not a valid date. It must not be set in the future.";
        break;
      case "repeatPassword":
        let password = id == "volunteer" ? document.getElementById("pass1").value : "oi";
        let result = passwordsMatch(element.value, password);
        errorPhrase = "The passwords do not match.";
        result
          ? element.classList.remove("wrong")
          : element.classList.add("wrong");
    }
    let identifier = element.getAttribute("id");
    let divError = document.getElementsByClassName(identifier);
    if (element.classList.contains("wrong")) {
      divError[0].innerHTML = errorPhrase;
    } else {
      divError[0].innerHTML = "";
    }
  });
});
