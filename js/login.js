const loginBtn = document.getElementById("loginbtn");
const registerBtn = document.getElementById("registerbtn");
const loginContainer = document.getElementById("loginform");
const registerContainer = document.getElementById("registerform");

registerBtn.addEventListener("click", function () {
  loginContainer.style.display = "none";
  registerContainer.style.display = "block";
});

loginBtn.addEventListener("click", function () {
  loginContainer.style.display = "block";
  registerContainer.style.display = "none";
});
