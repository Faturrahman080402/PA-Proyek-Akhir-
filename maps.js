// Ambil semua input checkbox rating
var ratingInputs = document.querySelectorAll('.rating-star input[type="checkbox"]');

// Loop melalui setiap input checkbox
for (var i = 0; i < ratingInputs.length; i++) {
    // Tambahkan event listener untuk setiap input checkbox
    ratingInputs[i].addEventListener('click', function () {
        // Ambil rating yang dipilih
        var selectedRating = this.getAttribute('id').substr(-1);

        // Loop melalui semua input checkbox dan beri warna sesuai rating yang dipilih
        for (var j = 1; j <= 5; j++) {
            var label = document.querySelector('.rating-star label[for="star' + j + '"]');
            if (j <= selectedRating) {
                label.style.color = '#ffce00';
            } else {
                label.style.color = '#ddd';
            }
        }
    });
}

function openModal() {
    document.getElementById("myModal").style.display = "block";
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}