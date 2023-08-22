<div class="bg-color4 flex lg:flex lg:absolute lg:top-0 left-0 right-0 z-50 justify-center items-center select-none ease-in-out duration-300" id="navbar_top">
    <div class="container py-2 text-white flex justify-center md:justify-between items-center mx-4">
        <div class="flex justify-center items-center">
            <div class="flex justify-center items-center text-[14px] lg:text-[16px]">
                <ion-icon name="call"></ion-icon>
                <a href="#" class="mx-1">08xx xxxx xxxx</a>
            </div>
            <div class="mx-1">|</div>
            <div class="flex justify-center items-center text-[14px] lg:text-[16px]">
                <ion-icon name="mail"></ion-icon>
                <a href="#" class="mx-1">your@email.com</a>
            </div>
        </div>

        <div class="hidden md:flex justify-center items-center text-[16px]">
            <ion-icon name="earth"></ion-icon>
            <a href="#" class="mx-1">Kabupaten Kuningan</a>
        </div>
    </div>
</div>

<nav class="bg-color1 lg:bg-color1 p-4 select-none flex flex-col justify-center items-center relative lg:fixed lg:top-[40px] z-10 w-full ease-in-out duration-500"
    id="navbar">
    <div class="flex justify-between items-center container">
        <a href="#" class="flex justify-center items-center">
            <img src="{{ asset('assets/image/logo_website.png') }}" alt="logo_website" class="w-[80px] lg:w-[100px]">
            <div class="flex flex-col justify-center items-start text-color5">
                <div class="text-[16px] lg:text-[20px] font-medium">Desa Selajambe </div>
                <div class="text-[14px] lg:text-[18px] font-normal">Kabupaten Kuningan </div>
            </div>
        </a>

        <x-menu.desktop :active="$active" :menu="$menu" />

        <label for="hamburger"
            class="text-color2 hover:text-color4 bg-black/10 p-2 rounded-full text-[30px] flex lg:hidden justify-center items-center mr-3">
            <ion-icon name="grid"></ion-icon>
        </label>
        <input type="checkbox" class="hidden" name="hamburger" id="hamburger">
    </div>

    <x-menu.mobile :active="$active" :menu="$menu" />
</nav>
