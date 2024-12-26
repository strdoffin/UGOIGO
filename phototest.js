document.getElementById('imageInput').addEventListener('change', function () {
    var previewImage = document.getElementById('previewImage');
    var imageInput = this;

    var reader = new FileReader();
    reader.onload = function () {
        previewImage.src = reader.result;
    };

    reader.readAsDataURL(imageInput.files[0]);
});
