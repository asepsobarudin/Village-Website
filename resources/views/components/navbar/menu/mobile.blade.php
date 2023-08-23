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
            @component('components.navbar.dropdown.dropdown_mobile', ['title' => 'Profile', 'active' => $active, 'menu' => $menu['dropProfile']])
            @endcomponent
        </li>
        <li class="flex justify-center items-center my-1 w-full">
            @component('components.navbar.dropdown.dropdown_mobile', ['title' => 'Layanan', 'active' => $active, 'menu' => $menu['dropLayanan']])
            @endcomponent
        </li>
    </ul>

    <a href="#"
        class="text-color1 mx-5 flex justify-center items-center bg-color4 hover:bg-color2 rounded-md ease-in-out duration-100 p-3">
        <ion-icon class="text-[30px]" name="person-outline"></ion-icon>
        <h2 class="text-[18px] mx-2">Login</h2>
    </a>
</div>
