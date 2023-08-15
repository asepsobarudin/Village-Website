<div class="h-[300px] md:h-[500px] w-full overflow-hidden relative z-0 select-none">
    @foreach ($slideshow as $slide)
        <div class="carousel-container">
            <div
                class="carousel-image relative flex justify-center items-center h-[300px] md:h-[500px] overflow-hidden">
                <img class="object-cover relative z-0 w-full flex justify-center items-center" src="{{ $slide['image'] }}" alt="Image 1">
                <div class="absolute z-10 bottom-0 flex items-end justify-center w-full h-full bg-black/40 py-3">
                    <a href="{{ $slide['link'] }}"
                        class="text-[16px] cursor-pointer my-3 md:text-[20px] lg:text-[25px] text-white font-medium w-1/2 text-center">{{ $slide['title'] }}</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    var currentImageIndex = 0;
    var images = document.querySelectorAll(".carousel-image");
    var prevButton = document.getElementById("prevBtn");
    var nextButton = document.getElementById("nextBtn");

    function showImage(index) {
        images[currentImageIndex].classList.remove('block');
        images[currentImageIndex].classList.add('hidden');
        images[index].classList.remove('hidden');
        images[index].classList.add('block');
        currentImageIndex = index;
    }

    function showNextImage() {
        var nextIndex = (currentImageIndex + 1) % images.length;
        showImage(nextIndex);
    }

    showImage(0);
    setInterval(showNextImage, 5000);
</script>
