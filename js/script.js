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
if (document.cookie.indexOf('bookmarks=') == -1) {
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
    alertify.error('Dog breed removed from favourites.');
    }
    elem.title="Add to favourites";
  } else {
    bookmarks.unshift(myID);
    elem.classList.add("favourite-star-active");
    alertify.success('Dog breed added to favourites.');
    elem.title="Remove from favourites";
  }
  bookmarks.sort(function(a, b){return a-b});
  cookieBookmark = JSON.stringify(bookmarks);
  document.cookie = "bookmarks="+cookieBookmark+"; path=/;";

  console.log(elem);
  console.log(myID);
}
// to bookmark - change background image if bookmark array include from the beginning
for (var j = 0; j < bookmarks.length; ++j) {
  if (document.getElementById("star"+bookmarks[j])) {
    document.getElementById("star"+bookmarks[j]).classList.add("favourite-star-active");
  }
}

// create showBookmarks cookie, if not exist
if (getCookie("th-bookmark") == "true") {
  document.getElementById("th-bookmark").classList.add("th-bookmark-active");
}

//////////////////////////////////////////////////////////

// select table head elements by id
var thBookmark = document.getElementById("th-bookmark");
var thName = document.getElementById("th-name");

// append onclick function to table head elements
thBookmark.onclick = createAndUpdateCookie;
thName.onclick = createAndUpdateCookie;

// create and update cookie by clicked element
function createAndUpdateCookie(element) {
  elementID = element.path[0].id;
  // Check, if cookie already exists
  if (document.cookie.indexOf(elementID) == -1) {
    // cookie doesn't exist
    document.cookie = elementID+"=false; path=/;";
  } else {
    // cookie exists
    let getcookie = getCookie(elementID);
    // turn around true/false of the cookie
    if (getcookie == "false") {
      document.cookie = elementID+"=true; path=/;";
    } else {
      document.cookie = elementID+"=false; path=/;";
    }
  }
  window.location.reload();
}

//////////////////////////////////////////////////////////

// select table head elements by id
var thWeight = document.getElementById("th-weight");
var thHeight = document.getElementById("th-height");

// append onclick function to table head elements
thWeight.onclick = createAndUpdateCookieByWeightAndHeight;
thHeight.onclick = createAndUpdateCookieByWeightAndHeight;


// create and update cookie by clicked elements weight and height
function createAndUpdateCookieByWeightAndHeight(element) {
  elementID = element.path[0].id;
  // Check, if cookie already exists
  if (document.cookie.indexOf(elementID) == -1) {
    // cookie doesn't exist
    document.cookie = elementID+"=false"+elementID+"; path=/;";
  } else {
    // cookie exists
    let getcookie = getCookie(elementID);
    // turn around true/false of the cookie
    if (getcookie == "false"+elementID) {
      document.cookie = elementID+"=true"+elementID+"; path=/;";
    } else if (getcookie == "true"+elementID) {
      document.cookie = elementID+"=minMin"+elementID+"; path=/;";
    } else if (getcookie == "minMin"+elementID) {
      document.cookie = elementID+"=minMax"+elementID+"; path=/;";
    } else if (getcookie == "minMax"+elementID) {
      document.cookie = elementID+"=maxMin"+elementID+"; path=/;";
    } else if (getcookie == "maxMin"+elementID) {
      document.cookie = elementID+"=maxMax"+elementID+"; path=/;";
    } else if (getcookie == "maxMax"+elementID) {
      document.cookie = elementID+"=false"+elementID+"; path=/;";
    }
  }
  window.location.reload();
}


// change arrow up to down/down to up when sort function used in name
var arrowUp = document.getElementById("th-name-arrow-up");
var arrowDown = document.getElementById("th-name-arrow-down");
if (getCookie("th-name") == "true") {
  arrowUp.classList.remove("arrow-active");
  arrowDown.classList.add("arrow-active");
} else {
  arrowDown.classList.remove("arrow-active");
  arrowUp.classList.add("arrow-active");
}

// change arrow up to down/down to up when sort function used in weight and height
function changeArrowWeightAndHeight(elem) {
  var arrowUp = document.getElementById("th-"+ elem +"-arrow-up");
  var arrowDown = document.getElementById("th-"+ elem +"-arrow-down");
  if ((getCookie("th-"+ elem) == "minMinth-"+ elem) || (getCookie("th-"+ elem) == "maxMinth-"+ elem)) {
    arrowUp.classList.remove("arrow-active");
    arrowDown.classList.add("arrow-active");
  } else if ((getCookie("th-"+ elem) == "minMaxth-"+ elem) || (getCookie("th-"+ elem) == "maxMaxth-"+ elem)) {
    arrowDown.classList.remove("arrow-active");
    arrowUp.classList.add("arrow-active");
  }
}
changeArrowWeightAndHeight("weight");
changeArrowWeightAndHeight("height");


// random dog bark after clicking modal image
var modalImg = document.getElementById("modal-img");
var barkSoundIndex = Math.floor(Math.random() * 7);
modalImg.onclick = function() {
  var dogBark = new Audio("../sound/bark"+barkSoundIndex+".mp3");
  dogBark.play();
}


// get content of temperament class elements
//ar temp = document.getElementsByClassName("temperament");

// 
// var test = temp[0].innerHTML.split(', ');

// temp[0].onclick = function() {
//   console.log(test);
//   console.log(test[0]);
// }


// $(".clickable").click(function(e) {
//   s = window.getSelection();
//   var range = s.getRangeAt(0);
//   var node = s.anchorNode;
//   while (range.toString().indexOf(' ') != 0) {
//     range.setStart(node, (range.startOffset - 1));
//   }
//   range.setStart(node, range.startOffset + 1);
//   do {
//     range.setEnd(node, range.endOffset + 1);

//   }
//   while (range.toString().indexOf(' ') == -1 && range.toString().trim() != '');
//   var str = range.toString().trim();
//   console.log(str);
// });


// autoSelectText = () => {
//   const s = window.getSelection();
//   var range = s.getRangeAt(0);
//   var node = s.anchorNode;

//   while (range.toString().indexOf(' ') != 0) {
//     range.setStart(node, range.startOffset - 1);
//   }

//   range.setStart(node, range.startOffset + 1);

//   while (
//     range.toString().indexOf(' ') == -1 &&
//     range.toString().trim() != '' &&
//     range.endOffset + 1 < s.baseNode.wholeText.length
//   ) {
//     range.setEnd(node, range.endOffset + 1);
//   }

//   // remove extra space
//   range.setEnd(node, range.endOffset - 1);

//   // remove last selection if is not letter or number
//   const lastChar = range.toString().charAt(range.toString().length - 1);
//   if (!/^[a-zA-Z0-9]*$/.test(lastChar)) {
//     range.setEnd(node, range.endOffset - 1);
//   }
//   return range.toString().trim();
// };

var temperamentArray = [];

// find elements
$(function () {
  $('.temperament').each(function (index, ele) {
      $(ele).html($(ele).text().split(', ').map(function (word) {
          return ['<span class=\'clickable\'>', word, '</span>'].join('')
      }).join(',&nbsp;'))

  })
  $('.clickable').click(function (e) {
      //console.log(this.innerHTML);
      temperamentArray.unshift(this.innerHTML);
      //console.log(temperamentArray);
      document.getElementById("temperament").value = temperamentArray[0];
  })
})

