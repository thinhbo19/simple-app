document
  .getElementById("reloadLink")
  .addEventListener("click", function (event) {
    event.preventDefault();
    location.reload();
  });
document.getElementById("logomain").addEventListener("click", function (event) {
  event.preventDefault();
  window.location.href = "../index.php";
});
document
  .getElementById("BTN-github")
  .addEventListener("click", function (event) {
    event.preventDefault();
    window.location.href = "https://github.com/thinhbo19/simple-app.git";
  });
