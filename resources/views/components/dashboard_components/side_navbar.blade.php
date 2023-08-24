<nav class="bg-color1 border-r-2 flex w-60 h-full p-4 select-none rounded-r-lg ease-in-out duration-100" id="navbar">
    <div class="container">
        <div class="flex justify-center items-center w-full">
            <label for="hamburger"
                class="flex justify-center w-full items-center border-2 rounded-md p-2 mb-5 cursor-pointer">
                <ion-icon name="chevron-forward-outline" class="text-color5 text-[30px] rotate-180 ease-in-out duration-100" id="arrow"></ion-icon>
                <input type="checkbox" name="hamburger" id="hamburger" class="hidden">
            </label>
        </div>
        <div class="hidden justify-center items-center gap-2">
            <div class="w-12 h-12">
                <img src="{{ asset('assets/image/logo_website.png') }}" alt=""
                    class="w-full h-full object-cover">
            </div>
            <div class="text-color5">
                <h2 class="font-medium">Desa Selajambe</h2>
                <h2 class="text-xs">Kabupaten Kuningan</h2>
            </div>
        </div>

        <div class="w-full my-5">
            <ul class="flex flex-col justify-center items-start gap-2 w-full">
                <li class="w-full">
                    <a href="#" id="item_menu"
                        class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 text-color4 relative overflow-hidden w-[200px]">
                        <ion-icon name="scale-outline" class="text-[30px] relative"></ion-icon>
                        <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">Dashboard</h3>
                    </a>
                </li>
                <li class="w-full">
                    <a href="#" id="item_menu"
                        class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 text-color4 relative overflow-hidden w-[200px]">
                        <ion-icon name="newspaper-outline" class="text-[30px] relative"></ion-icon>
                        <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">Berita</h3>
                    </a>
                </li>
                <li class="w-full">
                    <a href="#" id="item_menu"
                        class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 text-color4 relative overflow-hidden w-[200px]">
                        <ion-icon name="calendar-outline" class="text-[30px] relative"></ion-icon>
                        <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">Kegiatan</h3>
                    </a>
                </li>
                <li class="w-full">
                    <a href="#" id="item_menu"
                        class="flex justify-start items-center border-2 border-color6/30 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color6 hover:text-color1 text-color6 relative overflow-hidden w-[200px]">
                        <ion-icon name="log-out-outline" class="text-[30px] relative"></ion-icon>
                        <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">LOGOUT</h3>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    var navbar = document.getElementById("navbar");
    var hamburger = document.getElementById("hamburger");
    var arrow = document.getElementById("arrow");
    var item_menu = document.querySelectorAll("#item_menu");

    function hamburger_menu() {
        if (hamburger.checked) {
            navbar.classList.remove("w-60");
            navbar.classList.add("w-[80px]");

            arrow.classList.remove("rotate-180");

            item_menu.forEach((item) => {
                item.classList.remove("w-[200px]");
                item.classList.add("w-[50px]");
            });
        } else {
            navbar.classList.remove("w-[80px]");
            navbar.classList.add("w-60");

            arrow.classList.add("rotate-180");

            item_menu.forEach((item) => {
                item.classList.remove("w-[50px]");
                item.classList.add("w-[200px]");
            });
        }
    }

    hamburger.addEventListener("click", () => {
        hamburger_menu();
    });

    const availScreenWidth  = window.screen.availWidth;
    if(availScreenWidth <= 640){
        hamburger.checked = true;
        hamburger_menu();
    }
</script>
