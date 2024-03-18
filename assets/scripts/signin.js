function toggleForm(formId) {
    var volunteerRadio = document.getElementById("volunteer_radio");
    var institutionRadio = document.getElementById("institution_radio");
    var volunteerForm = document.getElementById("volunteer");
    var institutionForm = document.getElementById("institution");
    document.getElementById("radioButtons").classList.add("hidden")
    if (volunteerRadio.checked && formId === "volunteer") {
      volunteerForm.classList.remove("hidden");
      institutionForm.classList.add("hidden");
    } else if (institutionRadio.checked && formId === "institution") {
      institutionForm.classList.remove("hidden");
      volunteerForm.classList.add("hidden"); 
    }}