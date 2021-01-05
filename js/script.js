// i tried too much about to using jquery functions
// but i get everytime problems like this= 
// "Uncaught ReferenceError: $ is not defined at script.js:XXX"
// because of this error, i can't use jquery which start with $ dollar sign
// i also tried to save jquery a local js file. but it didn't work also


//--------------------------------------//
// get cookie by name
window.getCookie = function(cookieName) {
  var matchedCookie = document.cookie.match(new RegExp('(^| )' + cookieName + '=([^;]+)'));
  if (matchedCookie) return matchedCookie[2];
}


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
function openModal(element) {
  document.cookie = "detailed-id="+element+"; path=/;";
}
if (document.cookie.indexOf('detailed-id=') !== -1) {
  modal.style.display = "block";
}


//--------------------------------------//
// if cookie exist, fill html input values with cookie values
var searchInputArray = [
  ["saveBreedName", "breed_name"],
  ["saveMinWeight", "minWeight"],
  ["saveMaxWeight", "maxWeight"],
  ["saveMinHeight", "minHeight"],
  ["saveMaxHeight", "maxHeight"],
  ["saveTemperament", "temperament"]
]
for (var k = 0; k < searchInputArray.length; ++k) {
  if (document.cookie.indexOf(searchInputArray[k][0]) !== -1) {
    let cookieValue = getCookie(searchInputArray[k][0]);
    document.getElementById(searchInputArray[k][1]).value = cookieValue;
    document.cookie = searchInputArray[k][0]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }
}


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
    alertify.error('Dog breed removed from favourite.');
    }
  } else {
    bookmarks.unshift(myID);
    elem.classList.add("favourite-star-active");
    alertify.success('Dog breed added to favourite.');
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

// create showBookmarks cookie, if not exist
if (getCookie("showBookmarks") == "true") {
  document.getElementById("th-bookmark").classList.add("th-bookmark-active");
}

// select table head elements by id
var thBookmark = document.getElementById("th-bookmark");
var thID = document.getElementById("th-id");
var thWeight = document.getElementById("th-weight");
var thHeight = document.getElementById("th-height");

// append onclick function to table head elements
thBookmark.onclick = createAndUpdateCookie;
thID.onclick = createAndUpdateCookie;
thWeight.onclick = createAndUpdateCookie;
thHeight.onclick = createAndUpdateCookie;

// create and update cookie by clicked element
function createAndUpdateCookie(element) {
  elementID = element.path[0].id;
  if (document.cookie.indexOf(elementID) == -1) {
    var empty = "false"
    document.cookie = elementID+"="+empty+"; path=/;";
  }
  let getcookie = getCookie(elementID);
  if (getcookie == "false") {
    document.cookie = elementID+"=true; path=/;";
  } else {
    document.cookie = elementID+"=false; path=/;";
  }
  window.location.reload();
}