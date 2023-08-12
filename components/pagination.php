<!DOCTYPE html>
<html>

<head>
    <title>Gallery Pagination</title>

</head>

<body>
    <div id="galleryContainer"></div>
    <div id="pagination"></div>

    <script>
        // Fungsi untuk membuat permintaan Ajax
        function loadJSON(url, callback) {
            var xhr = new XMLHttpRequest();
            xhr.overrideMimeType("application/json");
            xhr.open('GET', url, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    callback(JSON.parse(xhr.responseText));
                }
            };
            xhr.send(null);
        }

        // Fungsi untuk menampilkan galeri gambar dan informasi dalam <div> dengan ID "galleryContainer"
        function displayGallery(images, userData) {
            var galleryDiv = document.getElementById('galleryContainer');
            galleryDiv.innerHTML = '';

            images.forEach(function(image, index) {
                var imgElement = document.createElement('img');
                imgElement.src = image;
                imgElement.alt = 'Gambar';
                galleryDiv.appendChild(imgElement);

                var textDiv = document.createElement('div');
                textDiv.className = 'text-center mt-5';
                galleryDiv.appendChild(textDiv);

                var userNama = document.createElement('p');
                userNama.textContent = userData[index]['user_nama'];
                textDiv.appendChild(userNama);

                var jabatan = document.createElement('p');
                jabatan.textContent = userData[index]['jabatan'];
                textDiv.appendChild(jabatan);

                var bidang = document.createElement('p');
                bidang.textContent = userData[index]['bidang'];
                textDiv.appendChild(bidang);
            });
        }

        // Panggil fungsi untuk menampilkan galeri gambar saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            loadJSON('../process/gambar.php?page=1', function(data) {
                displayGallery(data.images, data.userData);
                displayPagination(data.totalImages, 1);
            });
        });
    </script>
</body>

</html>