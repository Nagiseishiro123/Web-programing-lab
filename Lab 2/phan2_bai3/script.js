function showAlert(message) {
  alert(message);
}

function showCompletionMessage() {
  alert("Complete!");
}

function validateLength(value, minLength, maxLength, errorMessage) {
  if (value.length < minLength || value.length > maxLength) {
    showAlert(errorMessage);
    return false;
  }
  return true;
}

function validateEmail(email) {
  var validRegex =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (!email.match(validRegex)) {
    showAlert("Invalid email!");
    return false;
  }
  return true;
}

function validateForm() {
  const firstName = document.getElementById("fname").value;
  const lastName = document.getElementById("lname").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const dateOfBirth = document.getElementById("dob").value;

  if (
    !validateLength(firstName, 2, 30, "First Name should have 2-30 characters") ||
    !validateLength(lastName, 2, 30, "Last Name should have 2-30 characters") ||
    !validateEmail(email) ||
    !validateLength(password, 2, 39, "Password should have 2-30 characters" ) ||
    dateOfBirth === ""
  ) {
    showAlert("Please choose your birthday!");
    return false;
  }

  const genderEle = document.getElementsByName("gender");
  var flag = false;
  var gender = "";

  for (let index = 0; index < genderEle.length; index++) {
    if (genderEle[index].checked) {
      gender = genderEle[index].value;
      flag = true;
      break;
    }
  }

  if (!flag) {
    showAlert("Please choose gender!");
    return false;
  }

  const country = document.getElementById("country").value;
  if (country === "Choose country") {
    showAlert("Please choose your country!");
    return false;
  }

  const about = document.getElementById("about").value;
  if (about.length > 10000) {
    showAlert("Maximum 10000 characters!");
    return false;
  }

  // All data is valid
  showCompletionMessage();
  document.getElementById("sign-up").reset();
  return true;
}

document.getElementById("submit").onclick = validateForm;
document.getElementById("reset-button").onclick = () => {
  document.getElementById("sign-up").reset();
};
