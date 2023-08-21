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
                <div class="text-[16px] lg:text-[20px] font-semibold">Desa Selajambe </div>
                <div class="text-[14px] lg:text-[18px] font-medium">Kabupaten Kuningan </div>
            </div>
        </a>

        <div class="hidden lg:flex justify-center items-center">
            <ul class="flex justify-center items-center text-color3 font-medium text-[14px] lg:text-[16px]">
                <li class="flex justify-center items-center mx-3">
                    <a href="#"
                        class="p-3 hover:bg-color2 hover:text-color1 hover:skew-x-[-12deg] {{ $active == 'Home' ? 'text-color4' : '' }} rounded-md ease-in-out duration-100">Home</a>
                </li>
                <li class="flex justify-center items-center mx-3">
                    <a href="#"
                        class="p-3 hover:bg-color2 hover:text-color1 hover:skew-x-[-12deg] {{ $active == 'Berita' ? 'text-color4' : '' }} rounded-md ease-in-out duration-100">Berita</a>
                </li>
                <li class="relative flex flex-col mx-3">
                    <x-dropdown title="Profile" :active="$active" :menu="$menuprofile" />
                </li>
                <li class="relative flex flex-col mx-3">
                    <x-dropdown title="Layanan" :active="$active" :menu="$menulayanan" />
                </li>
            </ul>

            <a href="#"
                class="group text-color1 w-[50px] h-[50px] hover:w-[150px] mx-5 flex justify-center items-center bg-color4 rounded-full p-3 relative ease-in-out duration-150">
                <ion-icon class="text-[25px] bg-color4 relative z-10" name="person-outline"></ion-icon>
                <h2 class="text-[18px] mx-2 font-medium ease-in-out duration-150 opacity-0 group-hover:opacity-100 absolute group-hover:relative z-0">Login</h2>
            </a>
        </div>

        <label for="hamburger"
            class="text-color2 hover:text-color4 bg-black/10 p-2 rounded-full text-[30px] flex lg:hidden justify-center items-center mr-3">
            <ion-icon name="grid"></ion-icon>
        </label>
        <input type="checkbox" class="hidden" name="hamburger" id="hamburger">
    </div>

    <div class="w-full hidden lg:hidden" id="value_hamburger">
        <ul class="flex flex-col justify-center items-center text-color2 font-medium w-full">
            <li class="flex justify-center items-center my-2 w-full">
                <a href="#"
                    class="p-3 w-full hover:bg-color2 hover:text-color1 {{ $active == 'Home' ? 'text-color4' : '' }} rounded-md ease-in-out duration-100 text-center">Home</a>
            </li>
            <li class="flex justify-center items-center my-2 w-full">
                <a href="#"
                    class="p-3 w-full hover:bg-color2 hover:text-color1 {{ $active == 'Berita' ? 'text-color4' : '' }} rounded-md ease-in-out duration-100 text-center">Berita</a>
            </li>
            <li class="flex justify-center items-center my-1 w-full">
                <x-dropdown_mobile title="Profile" :active="$active" :menu="$menuprofile" />
            </li>
            <li class="flex justify-center items-center my-1 w-full">
                <x-dropdown_mobile title="Layanan" :active="$active" :menu="$menulayanan" />
            </li>
        </ul>

        <a href="#"
            class="text-color1 mx-5 flex justify-center items-center bg-color4 hover:bg-color2 rounded-md ease-in-out duration-100 p-3">
            <ion-icon class="text-[30px]" name="person-outline"></ion-icon>
            <h2 class="text-[18px] mx-2">Login</h2>
        </a>
    </div>
</nav>

<script>
    var navbar = document.getElementById('navbar');
    var navbar_top = document.getElementById('navbar_top');
    var hamburger = document.getElementById('hamburger');
    var value_hamburger = document.getElementById('value_hamburger');

    function hamburger_menu() {
        if (hamburger.checked) {
            value_hamburger.classList.remove('hidden');
            value_hamburger.classList.add('block');
        } else {
            value_hamburger.classList.remove('block');
            value_hamburger.classList.add('hidden');
        }
    }

    hamburger.addEventListener('click', () => {
        hamburger_menu();
    });

    window.addEventListener("resize", () => {
        if (hamburger.checked) {
            hamburger.checked = false;
            hamburger_menu();
        }
    });

    window.addEventListener("scroll", function() {
        if (window.pageYOffset >= 50) {
            navbar_top.classList.remove('lg:top-0');
            navbar_top.classList.add('lg:top-[-40px]');

            navbar.classList.remove('lg:bg-color1');
            navbar.classList.remove('lg:top-[40px]');
            navbar.classList.add('lg:bg-color1/80');
            navbar.classList.add('lg:top-0');
        } else {
            navbar_top.classList.remove('lg:top-[-40px]');
            navbar_top.classList.add('lg:top-0');

            navbar.classList.remove('lg:top-0');
            navbar.classList.remove('lg:bg-color1/80');
            navbar.classList.add('lg:top-[40px]');
            navbar.classList.add('lg:bg-color1');
        }
    });
</script>
