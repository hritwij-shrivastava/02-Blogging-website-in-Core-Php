
var $uploadCrop,
    tempFilename,
    rawImg,
    imageId;
function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.upload-demo').addClass('ready');
            $('#cropImagePop').modal('show');
            rawImg = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
    else {
        swal("Sorry - you're browser doesn't support the FileReader API");
    }
}

$uploadCrop = $('#upload-demo').croppie({
    viewport: {
        width: 150,
        height: 250,
    },
    // boundary: { width: 350, height: 450 },
    enforceBoundary: false,
    enableExif: true
});
$('#cropImagePop').on('shown.bs.modal', function () {
    // alert('Shown pop');
    $uploadCrop.croppie('bind', {
        url: rawImg
    }).then(function () {
        console.log('jQuery bind complete');
    });
});

$('#upl').on('change', function () {
    imageId = $(this).data('id'); tempFilename = $(this).val();
    $('#cancelCropBtn').data('id', imageId); readFile(this);
});
$('#cropImageBtn').on('click', function (ev) {
    $uploadCrop.croppie('result', {
        type: 'base64',
        format: 'jpeg',
        size: { width: 350, height: 450 }
    }).then(function (resp) {
        $('#item-img-output').attr('src', resp);
        // $('#cropImagePop').modal('hide');
        $.ajax({
            url: "../../resources/config_files/update_profile.php",
            type: "POST",
            data: {"image":resp},
            success: function (data) {
                html = '<img src="' + resp + '" />';
                $("#upload-image-i").html(html);
                $('#cropImagePop').modal('hide');
                $("#upl").val('');
                location.reload(true);
                alert("Profile picture updated successfully");
            }
        });
        $('#cropImagePop').modal('hide');
       
    });
});
                







