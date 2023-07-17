function redirectToPage() {
  var selectElement = document.getElementById("mySelect");
  var selectedValue = selectElement.value;

  if (selectedValue === "Leagues Cup") {
    window.location.href = "leaguescup23.html";
  }
}
document.getElementById("mySelect").addEventListener("change", redirectToPage);
