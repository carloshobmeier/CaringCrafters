function toggleForm(formId) {
    var volunteerForm = document.getElementById("volunteer");
    var institutionForm = document.getElementById("institution");
    document.getElementById("radioButtons").classList.add("hidden")
    document.getElementById("foot").classList.add("footerActive")
    if (document.getElementById("volunteer_radio").checked && formId === "volunteer") {
      volunteerForm.classList.remove("hidden");
      institutionForm.classList.add("hidden");
    } else if (document.getElementById("institution_radio").checked && formId === "institution") {
      institutionForm.classList.remove("hidden");
      volunteerForm.classList.add("hidden"); 
    }}

  function validateFormVol(id) {

    let camposVol = document.getElementById(id).querySelectorAll('input')
    camposVol.forEach((element)=>{
      switch (element.dataset.type){
        case "plainText":
          isValidText(element.value)?element.classList.remove("wrong"):element.classList.add("wrong")
          break
        case "cpf":
          isValidCPF(element.value)?element.classList.remove("wrong"):element.classList.add("wrong")
          break
        case "number":
          isValidNumber(element.value)?element.classList.remove("wrong"):element.classList.add("wrong")
          break
        case "cep":
          isValidCEP(element.value)?element.classList.remove("wrong"):element.classList.add("wrong")
          break
        case "email":
          isValidEmail(element.value)?element.classList.remove("wrong"):element.classList.add("wrong")
          break
        case "dateOfBirth":
          isValidDateOfBirth(element.value)?element.classList.remove("wrong"):element.classList.add("wrong")
          break
        case "password":
          isValidPassword(element.value)?element.classList.remove("wrong"):element.classList.add("wrong")
          break
        case "repeatPassword":
          console.log("ta aqui")
          let password = id=="volunteer"?document.getElementById("pass1").value:"oi"
          let result = passwordsMatch(element.value,password)
          result?element.classList.remove("wrong"):element.classList.add("wrong")
      }
    })
    // Check if any required field is empty
    if (containsWrongClass('input',id)) {
        // Prevent form submission
        alert('Please fill out all required fields.');
        return false;
    }

    // All fields are filled, allow form submission
    return true;
}

  document.getElementById('volunteer').addEventListener('submit', function(event) {
      if (!validateFormVol('volunteer')) {
          // Prevent default form submission if validation fails
          event.preventDefault();
      }
      else{
        alert("foi")
      }
  });

function isValidEmail(email) {
    const regex = /^[\w-]+(\.[\w-]+)*@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*(\.[a-zA-Z]{2,})$/;
    return regex.test(email);
}

function isValidNumber(input) {
  const regex = /^\d+$/;
  return regex.test(input);
}

function isValidText(input) {
  const regex = /^[a-zA-Z\s]+$/;
  return regex.test(input);
}

function isValidCEP(cep) {
  const regex = /^(\d{5}-\d{3}|\d{2}\.\d{3}-\d{3}|\d{8})$/;
  return regex.test(cep);
}

function isValidDateOfBirth(dateOfBirth) {
  const regex = /^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/;
  if (!regex.test(dateOfBirth)) {
      return false; // Invalid date format
  }
  
  const today = new Date();
  const birthDate = new Date(dateOfBirth);
  const age = today.getFullYear() - birthDate.getFullYear();
  const monthDiff = today.getMonth() - birthDate.getMonth();
  
  if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
      age--;
  }
  
  return age >= 18;
}

function isValidCPF(cpf) {
  const regex = /^\d{3}\.?\d{3}\.?\d{3}-?\d{2}$/;
  return regex.test(cpf);
} 

function containsWrongClass(selector,id) {
  const elements = document.getElementById(id).querySelectorAll(selector);
  for (const element of elements) {
      if (element.classList.contains('wrong')) {
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
  console.log(confirmPassword)
  return password === confirmPassword;
}
