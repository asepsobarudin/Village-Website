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

<div class="h-[400px] md:h-[486px] lg:mt-[146px] w-full overflow-hidden relative z-0 select-none ease-in-out duration-200"
    id="slideshow">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($slideshow as $slide)
                <div class="swiper-slide">
                    <div class="carousel-container">
                        <div
                            class="carousel-image relative flex justify-center items-center h-[400px] md:h-[486px] overflow-hidden">
                            <img class="object-cover relative z-0 w-full h-full flex justify-center items-center"
                                src="{{ $slide['image'] }}" alt="Image 1">
                            <div
                                class="absolute z-10 bottom-0 flex items-end justify-center w-full h-full bg-color5/40 py-10">
                                <a href="{{ $slide['link'] }}"
                                    class="text-[16px] cursor-pointer md:text-[20px] lg:text-[25px] text-color1 font-medium w-1/2 text-center">{{ $slide['title'] }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="absolute hidden lg:block top-[40%] bottom-[50%] left-0 z-10 btn-prev cursor-pointer">
            <ion-icon name="chevron-back-outline" class="text-[50px] text-color4/50"></ion-icon>
        </div>
        <div class="absolute hidden lg:block top-[40%] bottom-[50%] right-0 z-10 btn-next cursor-pointer">
            <ion-icon name="chevron-forward-outline" class="text-[50px] text-color4/50"></ion-icon>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<script src="{{ asset('dist/js/swiper.js') }}"></script>
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
            nextEl: ".btn-next",
            prevEl: ".btn-prev",
        },
    });
</script>
