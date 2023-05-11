const togglePassword = document.querySelector(".toggle");
const password = document.querySelector("input");

togglePassword.addEventListener('click', () => {
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  togglePassword.classList.toggle('uil-eye-slash');
});
