// Get the modal
var modal = document.getElementById("table-row-detail-modal");

// Get the <span> element that closes the modal
var modalClose = document.getElementsByClassName("modal-close")[0];

// When the user clicks on <span> (x), close the modal
modalClose.onclick = function() {
  modal.style.display = "none";
  document.cookie = "detailed-id=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  window.location.reload()
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.cookie = "detailed-id=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    window.location.reload()
  }
}

function myFunc(element) {
  document.cookie = "detailed-id="+element+"; path=/;";
}
console.log(document.cookie.indexOf('detailed-id='));


var ifCookieExist = document.cookie.indexOf('detailed-id=')
if (ifCookieExist == -1) {
  console.log("cookie dont exist");
} else {
  modal.style.display = "block";
}

// check if cookie exist
function readCookie(cookieName, htmlElement) {
  var ifCookieExist = document.cookie.indexOf(cookieName);
  if (ifCookieExist == -1) {
    console.log("cookie dont exist");
  } else {
    console.log("cookie exist. Yuppiii!!");
    let cookieValue = getCookie(cookieName);
    document.getElementById(htmlElement).value = cookieValue;
  }
}

// get cookie by name
window.getCookie = function(cookieName) {
  var matchedCookie = document.cookie.match(new RegExp('(^| )' + cookieName + '=([^;]+)'));
  if (matchedCookie) return matchedCookie[2];
}

readCookie("saveBreedName", "breed_name");
readCookie("saveMinWeight", "minWeight");
readCookie("saveMaxWeight", "maxWeight");
readCookie("saveMinHeight", "minHeight");
readCookie("saveMaxHeight", "maxHeight");
readCookie("saveTemperament", "temperament");