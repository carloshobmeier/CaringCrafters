function toggleForm(formId) {
    var volunteerRadio = document.getElementById("volunteer_radio");
    var institutionRadio = document.getElementById("institution_radio");
    var volunteerForm = document.getElementById("volunteer");
    var institutionForm = document.getElementById("institution");
    document.getElementById("radioButtons").classList.add("hidden")
    document.getElementById("foot").classList.add("footerActive")
    if (volunteerRadio.checked && formId === "volunteer") {
      volunteerForm.classList.remove("hidden");
      institutionForm.classList.add("hidden");
    } else if (institutionRadio.checked && formId === "institution") {
      institutionForm.classList.remove("hidden");
      volunteerForm.classList.add("hidden"); 
    }}

    function validateForm() {
      // Get input values
      const institutionName = document.getElementById('institution_name').value;
      const institutionCnpj = document.getElementById('institution_username').value;
      const institutionEmail = document.getElementById('institution_email').value;
      const institutionPhonenumber = document.getElementById('institution_phonenumber').value;
      const institutionAddress = document.getElementById('institution_address').value;
      const institutionCity = document.getElementById('institution_city').value;
      const foundingDate = document.getElementById('founding_date').value;
      const socialCapital = document.getElementById('social_capital').value;
      const administratorName = document.getElementById('administrator_name').value;
      const workingHours = document.getElementById('working_hours').value;
  
      // Check if any required field is empty
      if (
          institutionName === '' ||
          institutionCnpj === '' ||
          institutionEmail === '' ||
          institutionPhonenumber === '' ||
          institutionAddress === '' ||
          institutionCity === '' ||
          foundingDate === '' ||
          socialCapital === '' ||
          administratorName === '' ||
          workingHours === ''
      ) {
          // Prevent form submission
          alert('Please fill out all required fields.');
          return false;
      }
  
      // Check if at least one area of volunteering is selected
      const volunteeringAreas = document.querySelectorAll('input[type="checkbox"]:checked');
      if (volunteeringAreas.length === 0) {
          alert('Please select at least one area of volunteering.');
          return false;
      }
  
      // All fields are filled, allow form submission
      return true;
  }

  function validateFormVol() {
    // Get input values
    const name = document.getElementById('name').value;
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const phonenumber = document.getElementById('phonenumber').value;
    const cep = document.getElementById('cep').value;
    const city = document.getElementById('city').value;
    const birthdate = document.getElementById('birthdate').value;
    const gender = document.getElementById('gender').value;
    const maritalstatus = document.getElementById('maritalstatus').value;
    const education = document.getElementById('education').value;
    const nationality = document.getElementById('nationality').value;
    const occupation = document.getElementById('occupation').value;
    const volunteering_experience = document.getElementById('volunteering_experience').value;
    const interest1 = document.getElementById('interest1').checked;
    const interest2 = document.getElementById('interest2').checked;
    const interest3 = document.getElementById('interest3').checked;

    let camposVol = document.getElementById('volunteer').querySelectorAll('input')
    camposVol.forEach((element)=>{
      console.log(element)
    })
    // Check if any required field is empty
    if (
        name === '' ||
        username === '' ||
        email === '' ||
        phonenumber === '' ||
        cep === '' ||
        city === '' ||
        birthdate === '' ||
        gender === '' ||
        maritalstatus === '' ||
        education === '' ||
        nationality === '' ||
        occupation === '' ||
        volunteering_experience === '' ||
        (!interest1 && !interest2 && !interest3)
    ) {
        // Prevent form submission
        alert('Please fill out all required fields.');
        return false;
    }

    // All fields are filled, allow form submission
    return true;
}

  document.getElementById('volunteer').addEventListener('submit', function(event) {
    console.log("oi ")
      if (!validateFormVol()) {
          // Prevent default form submission if validation fails
          event.preventDefault();
      }
      else{
        alert("foi")
      }
  });
  