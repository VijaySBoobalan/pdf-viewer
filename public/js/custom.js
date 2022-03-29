function resetFiles(e)
{
    document.getElementById(e).value = "";
}

//Disable form button on submit to prevent multiple submission
$(function () {
    $('form').submit(function (event) {
        //var submitButton = $(this).find("input[type=submit]:focus");
        if ($(this).hasClass('submitted')) {
            event.preventDefault();
        }
        else {
            $(this).find(':focus').html('<i class="fa fa-spinner fa-spin"></i>');
            $(this).addClass('submitted');
        }
    });
});

//scroll to first div with error class
var errorDivClassName = $('.is-invalid');
if (errorDivClassName.length) {
    $('html, body').animate({
        scrollTop: $('.is-invalid:visible:first').offset().top - 30
    }, 1000);
}

function UploadImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            //$('.building-image').attr('src', e.target.result).width(358).height(338);
            $('.building-image').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}