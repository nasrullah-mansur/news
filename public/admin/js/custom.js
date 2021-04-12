// AJAX SETUP;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content')
    }
});


// IMAGE PREVIEW;
function readURL(input, preview) {
if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
        preview.attr('src', e.target.result);
    }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

// Summer_note add;
if($('.summernote').length > 0) {
    $(document).ready(function() {
        $('.summernote').summernote();
    });
}

// Tag input;
if($('.tagging').length > 0) {
    $(document).ready(function() {
        $(".tagging").tagging();
    });
}



