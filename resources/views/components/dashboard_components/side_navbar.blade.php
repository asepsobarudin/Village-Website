<div class="relative w-full md:w-[320px] lg:w-[280px]" id="navbar_container">
    <nav class="bg-color1 border-r-2 w-full md:w-[230px] flex h-full select-none p-4 rounded-r-lg ease-in-out duration-100 fixed z-50"
        id="navbar">
        <div class="container h-full flex flex-col justify-between">
            <div>
                <div class="flex justify-center items-center w-full">
                    <label for="hamburger"
                        class="flex justify-center w-full items-center border-2 rounded-md p-2 mb-5 cursor-pointer">
                        <ion-icon name="chevron-forward-outline"
                            class="text-color5 text-[30px] rotate-180 ease-in-out duration-100"
                            id="arrow"></ion-icon>
                        <input type="checkbox" name="hamburger" id="hamburger" class="hidden">
                    </label>
                </div>
                <div class="flex justify-center items-center gap-2">
                    <div class="w-[50px] h-max">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Seal_of_Kuningan_Regency.svg/1814px-Seal_of_Kuningan_Regency.svg.png" alt="image_logo"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="text-color5 block" id="title_logo">
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
                                <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">
                                    Dashboard</h3>
                            </a>
                        </li>
                        <li class="w-full">
                            <a href="#" id="item_menu"
                                class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 text-color4 relative overflow-hidden w-[200px]">
                                <ion-icon name="newspaper-outline" class="text-[30px] relative"></ion-icon>
                                <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">
                                    Berita
                                </h3>
                            </a>
                        </li>
                        <li class="w-full">
                            <a href="#" id="item_menu"
                                class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 text-color4 relative overflow-hidden w-[200px]">
                                <ion-icon name="calendar-outline" class="text-[30px] relative"></ion-icon>
                                <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">
                                    Kegiatan</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <a href="#" id="item_menu"
                    class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 text-color4 relative overflow-hidden w-[200px]">
                    <ion-icon name="settings-outline" class="text-[30px] relative"></ion-icon>
                    <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">
                        Settings</h3>
                </a>
                <a href="#" id="item_menu"
                    class="flex justify-start items-center border-2 border-color6/30 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color6 hover:text-color1 text-color6 relative overflow-hidden w-[200px]">
                    <ion-icon name="log-out-outline" class="text-[30px] relative"></ion-icon>
                    <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">LOGOUT
                    </h3>
                </a>
            </div>
        </div>
    </nav>
</div>

<script>
    var navbar_container = document.getElementById("navbar_container");
    var navbar = document.getElementById("navbar");
    var hamburger = document.getElementById("hamburger");
    var arrow = document.getElementById("arrow");
    var title_logo = document.getElementById("title_logo");
    var item_menu = document.querySelectorAll("#item_menu");

    function hamburger_menu() {
        if (hamburger.checked) {
            navbar.classList.remove("w-full");
            navbar.classList.remove("md:w-[230px]");
            navbar.classList.add("w-[80px]");

            navbar_container.classList.remove("w-full");
            navbar_container.classList.remove("md:w-[320px]");
            navbar_container.classList.remove("lg:w-[280px]");
            navbar_container.classList.add("w-[90px]");

            arrow.classList.remove("rotate-180");

            item_menu.forEach((item) => {
                item.classList.remove("w-full");
                item.classList.add("w-[50px]");
            });

            title_logo.classList.remove("block");
            title_logo.classList.add("hidden");
        } else {
            navbar.classList.remove("w-[80px]");
            navbar.classList.add("w-full");
            navbar.classList.add("md:w-[230px]");

            navbar_container.classList.remove("w-[90px]");
            navbar_container.classList.add("w-full");
            navbar_container.classList.add("md:w-[320px]");
            navbar_container.classList.add("lg:w-[280px]");

            arrow.classList.add("rotate-180");

            item_menu.forEach((item) => {
                item.classList.remove("w-[50px]");
                item.classList.add("w-full");
            });

            title_logo.classList.remove("hidden");
            title_logo.classList.add("block");
        }
    }

    hamburger.addEventListener("click", () => {
        hamburger_menu();
    });

    const availScreenWidth = window.screen.availWidth;
    if (availScreenWidth <= 640) {
        hamburger.checked = true;
        hamburger_menu();
    }
</script>
