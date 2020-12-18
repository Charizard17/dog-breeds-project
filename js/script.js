// $(function() {
//     if (!window.location.hash) {
//         window.location = window.location + '#loaded';
//         window.location.reload();
//     }
// });


// Get the modal
var modal = document.getElementById("table-row-detail-modal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("open-modal")[0];

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("modal-close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
$(function() {

  $(document).on("click", ".dog-breeds-table-details", function() {
    //Do whatever you want to do
    var clickedSmiley = $(this);
    alert(clickedSmiley);
  });

});