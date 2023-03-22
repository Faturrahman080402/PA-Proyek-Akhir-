const emailInput = document.querySelector('input[type="email"]');
const passwordInput = document.querySelector('input[type="password"]');
const loginForm = document.querySelector('form');

loginForm.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent form from submitting

  // Validate email and password inputs
  if (!validateEmail(emailInput.value)) {
    alert('Invalid email address!');
    return;
  }

  if (passwordInput.value.length < 8) {
    alert('Password must be at least 8 characters!');
    return;
  }

  // If validation passes, submit the form to the server
  alert('Form submitted successfully!');
  loginForm.submit();
});

function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
