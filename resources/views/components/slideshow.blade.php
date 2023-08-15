<style>
    .swiper-pagination-bullet {
        width: 15px;
        height: 15px;
        text-align: center;
        line-height: 15px;
        color: #000;
        opacity: 1;
        background: rgba(0, 0, 0, 0.2);
      }
    .swiper-pagination-bullet-active {
        color: #fff;
        background: rgba(0, 0, 0, 0.8);
    }
</style>

<div class="h-[300px] md:h-[486px] lg:mt-[146px] w-full overflow-hidden relative z-0 select-none ease-in-out duration-200" id="slideshow">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($slideshow as $slide)
                <div class="swiper-slide">
                    <div class="carousel-container">
                        <div
                            class="carousel-image relative flex justify-center items-center h-[300px] md:h-[486px] overflow-hidden">
                            <img class="object-cover relative z-0 w-full h-full flex justify-center items-center"
                                src="{{ $slide['image'] }}" alt="Image 1">
                            <div
                                class="absolute z-10 bottom-0 flex items-end justify-center w-full h-full bg-black/40 py-3">
                                <a href="{{ $slide['link'] }}"
                                    class="text-[16px] cursor-pointer my-3 md:text-[20px] lg:text-[25px] text-white font-medium w-1/2 text-center">{{ $slide['title'] }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var slideshow = document.getElementById("slideshow");

    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

