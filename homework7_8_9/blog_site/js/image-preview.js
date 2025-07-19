
// <!-- instant image preview (with help of the AI) -->


    document.getElementById('imageInput').addEventListener('change', function(event) {
        const imageFile = event.target.files[0];
        const preview = document.getElementById('previewImage');

        if (imageFile) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(imageFile);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    });

