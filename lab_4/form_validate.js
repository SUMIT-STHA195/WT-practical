function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var age = document.getElementById("age").value;

  // Validate Name (non-empty)
  if (name === "") {
    alert("Name cannot be empty.");
    return false;
  }

  // Validate Email (valid email format)
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  // Validate Password (at least 6 characters)
  if (password.length < 6) {
    alert("Password must be at least 6 characters long.");
    return false;
  }

  // Validate Age (between 8 and 60)
  if (age < 8 || age > 60) {
    alert("Age must be between 8 and 60.");
    return false;
  }

  return true;
}
