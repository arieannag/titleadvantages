var dropbtn = document.getElementById("dropbtn");
var userDropdown = document.getElementById("userDropdown");
var repNameTop = document.getElementById("repNameTop");
repNameTop.innerHTML = "<p>" + agName + "</p>";
document.getElementById("dropRepName").innerHTML = repInfo.repName;
document.getElementById("companyLogo").innerHTML =
  '<img src="img/TA-' + ocodeString + '.png"></img>';
if (repInfo.photo == undefined || repInfo.photo == "") {
  document.getElementById("dropRepPhoto").remove();
  document.getElementById("dropRepName").classList.add("noPhotoStyle");
} else {
  document.getElementById("dropRepPhoto").innerHTML =
    '<img src="https://www.titleadvantage.com/repphotos/' +
    repInfo.photo +
    '"></img>';
}
function dropdown() {
  document.getElementById("userDropdown").classList.add("show");
}
function hideDropdown() {
  document.getElementById("userDropdown").classList.remove("show");
}
dropbtn.onmouseover = function () {
  dropdown();
};
userDropdown.onmouseover = function () {
  dropdown();
};
dropbtn.onmouseout = function () {
  hideDropdown();
};
userDropdown.onmouseout = function () {
  hideDropdown();
};
repNameTop.onmouseover = function () {
  dropdown();
};
repNameTop.onmouseover = function () {
  dropdown();
};
repNameTop.onmouseout = function () {
  hideDropdown();
};
repNameTop.onmouseout = function () {
  hideDropdown();
};
window.addEventListener("click", function (event) {
  matches = event.target.matches
    ? event.target.matches(".dropbtn")
    : event.target.msMatchesSelector(".dropbtn");
  if (!matches) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
});
dropRepBtn.onmouseover = function () {
  dropRepCont.style.background = "#383838";
  dropRepBtn.style.background = "#383838";
};
dropRepBtn.onmouseout = function () {
  dropRepCont.style.background = "#8D8D8D";
  dropRepBtn.style.background = "#8D8D8D";
};
dropRepCont.onmouseover = function () {
  dropRepBtn.style.background = "#383838";
  dropRepCont.style.background = "#383838";
};
dropRepCont.onmouseout = function () {
  dropRepBtn.style.background = "#8D8D8D";
  dropRepCont.style.background = "#8D8D8D";
};
