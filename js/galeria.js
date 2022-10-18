$(function() {
    var selectedClass = "";
    $(".filter").click(function(){
      selectedClass = $(this).attr("data-rel");
      $("#gallery").fadeTo(100, 0.1);
      $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
      setTimeout(function() {
        $("."+selectedClass).fadeIn().addClass('animation');
        $("#gallery").fadeTo(300, 1);
      }, 300);
    });
  });

const fulImgBox = document.getElementById("fulImgBox"),
fulImg = document.getElementById("fulImg");

function openFulImg(reference){
    fulImgBox.style.display = "flex";
    fulImg.src = reference;

}

function closeImg(){
    fulImgBox.style.display = "none";
}