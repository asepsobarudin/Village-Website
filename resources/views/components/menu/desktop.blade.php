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
            <x-dropdown.dropdown title="Profile" :active="$active" :menu="$menu['dropProfile']" />
        </li>
        <li class="relative flex flex-col mx-3">
            <x-dropdown.dropdown title="Layanan" :active="$active" :menu="$menu['dropLayanan']" />
        </li>
    </ul>

    <a href="#"
        class="group text-color1 w-[50px] h-[50px] hover:w-[150px] mx-5 flex justify-center items-center bg-color4 rounded-full p-3 relative ease-in-out duration-150">
        <ion-icon class="text-[25px] bg-color4 relative z-10" name="person-outline"></ion-icon>
        <h2
            class="text-[18px] mx-2 font-medium ease-in-out duration-150 opacity-0 group-hover:opacity-100 absolute group-hover:relative z-0">
            Login</h2>
    </a>
</div>
