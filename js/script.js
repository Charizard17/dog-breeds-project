// i tried too much about to using jquery functions
// but i get everytime problems like this= 
// "Uncaught ReferenceError: $ is not defined at script.js:XXX"
// because of this error, i can't use jquery which start with $ dollar sign
// i also tried to save jquery a local js file. but it didn't work also

//--------------------------------------//
// Get the modal
var modal = document.getElementById("table-row-detail-modal");

// Get the <span> element that closes the modal
var modalClose = document.getElementsByClassName("modal-close")[0];

// When the user clicks on <span> (x), close the modal
modalClose.onclick = function() {
  modal.style.display = "none";
  document.cookie = "detailed-id=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  window.location.reload();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.cookie = "detailed-id=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    window.location.reload();
  }
}

// open model after clicking view details
function myFunc(element) {
  document.cookie = "detailed-id="+element+"; path=/;";
}
if (document.cookie.indexOf('detailed-id=') !== -1) {
  modal.style.display = "block";
}

//--------------------------------------//
// if cookie exist, fill html input values with cookie values
function fillInput(cookieName, htmlElement) {
  var ifSearchInput = document.cookie.indexOf(cookieName);
  if (ifSearchInput == 0) {
    let cookieValue = getCookie(cookieName);
    document.getElementById(htmlElement).value = cookieValue;
    document.cookie = cookieName+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }
}

// get cookie by name
window.getCookie = function(cookieName) {
  var matchedCookie = document.cookie.match(new RegExp('(^| )' + cookieName + '=([^;]+)'));
  if (matchedCookie) return matchedCookie[2];
}

//--------------------------------------//
fillInput("saveBreedName", "breed_name");
fillInput("saveMinWeight", "minWeight");
fillInput("saveMaxWeight", "maxWeight");
fillInput("saveMinHeight", "minHeight");
fillInput("saveMaxHeight", "maxHeight");
fillInput("saveTemperament", "temperament");

//--------------------------------------//
// for bookmark - create bookmark array if doesnt exist
var ifBookmarksExist = document.cookie.indexOf('bookmarks=');
if (ifBookmarksExist == -1) {
  var bookmarks = new Array();
} else {
  var cookieBookmark = getCookie("bookmarks");
  bookmarks = JSON.parse(cookieBookmark);
}
// for bookmark - clicked element add to bookmark array in cookies
function myFavourite(elem) {
  let myID = elem.id.replace("star", "");
  let ifInclude = bookmarks.includes(myID);
  if (ifInclude == true) {
    const index = bookmarks.indexOf(myID);
    if (index > -1) {
      bookmarks.splice(index, 1);
    elem.classList.remove("favourite-star-active");
    }
  } else {
    bookmarks.unshift(myID);
    elem.classList.add("favourite-star-active");
  }
  bookmarks.sort(function(a, b){return a-b});
  cookieBookmark = JSON.stringify(bookmarks);
  document.cookie = "bookmarks="+cookieBookmark+"; path=/;";
}
// to bookmark - change background image if bookmark array include from the beginning
for (var j = 0; j < bookmarks.length; ++j) {
  if (document.getElementById("star"+bookmarks[j])) {
    document.getElementById("star"+bookmarks[j]).classList.add("favourite-star-active");
  }
}

if (document.cookie.indexOf('showBookmarks=') == -1) {
  var empty = "false"
  document.cookie = "showBookmarks="+empty+"; path=/;";
}
function showOnlyBookmarkedElements() {
  let getcookie = getCookie("showBookmarks");
  if (getcookie == "false") {
  document.cookie = "showBookmarks=true; path=/;";
  } else {
  document.cookie = "showBookmarks=false; path=/;";
  }
}