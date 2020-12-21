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