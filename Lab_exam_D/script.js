// registration data session ontime array hold
let registrations = [];

// Input fields
let nameInput = document.getElementById("name");
let emailInput = document.getElementById("email");
let companyInput = document.getElementById("company");

// Error fields
let nameError = document.getElementById("nameError");
let emailError = document.getElementById("emailError");
let companyError = document.getElementById("companyError");
let attendanceError = document.getElementById("attendanceError");

// Other elements
let form = document.getElementById("registrationForm");
let successMessage = document.getElementById("successMessage");

let analyticsBtn = document.getElementById("analyticsBtn");
let analyticsPanel = document.getElementById("analyticsPanel");

let totalCount = document.getElementById("totalCount");
let virtualCount = document.getElementById("virtualCount");
let inPersonCount = document.getElementById("inPersonCount");


// --------------------
// Name Validation
// --------------------
function validateName() {
  let name = nameInput.value.trim();

  if (name.length < 6 || name.length > 100) {
    nameError.textContent = "Name must be between 6 and 100 characters.";
    return false;
  } else {
    nameError.textContent = "";
    return true;
  }
}


// --------------------
// Email Validation
// --------------------
function validateEmail() {
  let email = emailInput.value.trim();

  // Basic email check
  let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailPattern.test(email)) {
    emailError.textContent = "Please enter a valid professional email address.";
    return false;
  } else {
    emailError.textContent = "";
    return true;
  }
}


// --------------------
// Company Validation
// Optional field
// --------------------
function validateCompany() {
  let company = companyInput.value.trim();

  if (company.length > 100) {
    companyError.textContent = "Company / Institution must not exceed 100 characters.";
    return false;
  } else {
    companyError.textContent = "";
    return true;
  }
}


// --------------------
// Attendance Validation
// --------------------
function validateAttendance() {
  let selectedAttendance = document.querySelector('input[name="attendance"]:checked');

  if (selectedAttendance === null) {
    attendanceError.textContent = "Please select your attendance type.";
    return false;
  } else {
    attendanceError.textContent = "";
    return true;
  }
}


// --------------------
// Validate Full Form
// --------------------
function validateForm() {
  let isNameValid = validateName();
  let isEmailValid = validateEmail();
  let isCompanyValid = validateCompany();
  let isAttendanceValid = validateAttendance();

  if (isNameValid && isEmailValid && isCompanyValid && isAttendanceValid) {
    return true;
  } else {
    return false;
  }
}


// --------------------
// Clear Form
// --------------------
function clearForm() {
  form.reset();
  nameError.textContent = "";
  emailError.textContent = "";
  companyError.textContent = "";
  attendanceError.textContent = "";
}


// --------------------
// Update Analytics
// --------------------
function updateAnalytics() {
  let total = registrations.length;
  let virtual = 0;
  let inPerson = 0;

  // Loop through registrations array
  for (let i = 0; i < registrations.length; i++) {
    if (registrations[i].attendance === "Virtual") {
      virtual++;
    } else if (registrations[i].attendance === "In-Person") {
      inPerson++;
    }
  }

  totalCount.textContent = total;
  virtualCount.textContent = virtual;
  inPersonCount.textContent = inPerson;
}


// --------------------
// Toggle Analytics Panel
// --------------------
function toggleAnalytics() {
  if (analyticsPanel.classList.contains("hidden")) {
    analyticsPanel.classList.remove("hidden");
    analyticsBtn.textContent = "Hide Event Analytics";
    updateAnalytics();
  } else {
    analyticsPanel.classList.add("hidden");
    analyticsBtn.textContent = "Show Event Analytics";
  }
}


// --------------------
// Real-time validation
// --------------------
nameInput.addEventListener("input", validateName);
nameInput.addEventListener("blur", validateName);

emailInput.addEventListener("input", validateEmail);
emailInput.addEventListener("blur", validateEmail);

companyInput.addEventListener("input", validateCompany);
companyInput.addEventListener("blur", validateCompany);

// radio button change event
let attendanceRadios = document.querySelectorAll('input[name="attendance"]');
for (let i = 0; i < attendanceRadios.length; i++) {
  attendanceRadios[i].addEventListener("change", validateAttendance);
}


// --------------------
// Form Submit
// --------------------
form.addEventListener("submit", function (event) {
  event.preventDefault();

  successMessage.textContent = "";

  let formIsValid = validateForm();

  if (formIsValid) {
    let selectedAttendance = document.querySelector('input[name="attendance"]:checked').value;

    // Create registration object
    let registrationData = {
      name: nameInput.value.trim(),
      email: emailInput.value.trim(),
      company: companyInput.value.trim(),
      attendance: selectedAttendance
    };

    // Store in array
    registrations.push(registrationData);

    // Update analytics if panel is open
    if (!analyticsPanel.classList.contains("hidden")) {
      updateAnalytics();
    }

    // Clear form
    clearForm();

    // Success message
    successMessage.textContent = "Registration successful!";
  }
});


// --------------------
// Analytics Button Click
// --------------------
analyticsBtn.addEventListener("click", toggleAnalytics);