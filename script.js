$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
$('#myBtn').on({
  mouseenter: function() {
    $('.modal-dialog').show();
  },
  mouseleave: function() {
    timeout = setTimeout(function() {
      $('.modal-dialog').hide();
    }, 2000);
  }
});
$('#modal-dialog').on({
  mouseenter: function() {
    clearTimeout(timeout);
  },
  mouseleave: function() {
    $('.modal-dialog').hide();
  }
});
function ImgChange(id, img){
  document.getElementById(id).src = img;
}
