// Get the modal
$(function () {

    $('#open').on('click',function () {


        $('#exampleModal').modal('show');
    });

    $('#close').on('click',function () {
        $('#myModal').modal('close');
    });
});
function view(name){
    //$('#myModal').modal.style.display = "block";
    $('#imagenModal').attr('src',$('#'+name).attr('src'));
    $('#exampleModal').modal('show');

    //modalImg.src = $('#'+name).attr('src');

    //captionText.innerHTML = "Test";
}

function cierra() {
    $('#exampleModal').modal('');
}