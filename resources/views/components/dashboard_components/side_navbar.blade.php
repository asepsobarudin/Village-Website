<div class="relative w-full md:w-[360px] lg:w-[300px]" id="navbar_container">
    <nav class="bg-color1 border-2 w-full md:w-[250px] flex h-full select-none p-4 rounded-r-lg ease-in-out duration-100 fixed z-50"
        id="navbar">
        <div class="container h-full flex flex-col justify-between">
            <div>
                <div class="flex justify-center my-2 items-center w-full h-max">
                    <label for="hamburger"
                        class="flex justify-center w-full items-center border-2 rounded-md p-2 mb-5 cursor-pointer bg-color1">
                        <ion-icon name="chevron-forward-outline"
                            class="text-color5 text-[30px] rotate-180 ease-in-out duration-100"
                            id="arrow"></ion-icon>
                        <input type="checkbox" name="hamburger" id="hamburger" class="hidden">
                    </label>
                </div>
                <div class="w-full my-5">
                    <ul class="flex flex-col justify-center items-start gap-2 w-full">
                        <li class="w-full">
                            <a href="/dashboard" id="item_menu"
                                class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 relative overflow-hidden w-full {{ $title === "Dashboard" ? "bg-color2 text-color1" : "text-color4" }}">
                                <ion-icon name="scale-outline" class="text-[30px] relative"></ion-icon>
                                <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">
                                    Dashboard</h3>
                            </a>
                        </li>
                        <li class="w-full">
                            <a href="/dashboard/news" id="item_menu"
                                class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 relative overflow-hidden w-full {{ $title === "Berita" ? "bg-color2 text-color1" : "text-color4" }}">
                                <ion-icon name="newspaper-outline" class="text-[30px] relative"></ion-icon>
                                <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">
                                    Berita
                                </h3>
                            </a>
                        </li>
                        <li class="w-full">
                            <a href="#" id="item_menu"
                                class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 relative overflow-hidden w-full {{ $title === "Jadwal Kegiatan" ? "bg-color2 text-color1" : "text-color4" }}">
                                <ion-icon name="calendar-outline" class="text-[30px] relative"></ion-icon>
                                <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">
                                    Jadwal Kegiatan</h3>
                            </a>
                        </li>
                        <li class="w-full">
                            <a href="#" id="item_menu"
                                class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 relative overflow-hidden w-full {{ $title === "Users" ? "bg-color2 text-color1" : "text-color4" }}">
                                <ion-icon name="people-outline" class="text-[30px] relative"></ion-icon>
                                <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">
                                    Users</h3>
                            </a>
                        </li>
                        <li class="w-full">
                            <a href="#" id="item_menu"
                                class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 relative overflow-hidden w-full {{ $title === "Profile" ? "bg-color2 text-color1" : "text-color4" }}">
                                <ion-icon name="person-outline" class="text-[30px] relative"></ion-icon>
                                <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">
                                    Profile</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <a href="#" id="item_menu"
                    class="flex justify-start items-center border-2 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color2 hover:text-color1 text-color4 relative overflow-hidden w-full">
                    <ion-icon name="settings-outline" class="text-[30px] relative"></ion-icon>
                    <h3 class="font-medium absolute left-[50px] ease-in-out duration-100" id="title_menu">
                        Settings</h3>
                </a>
                <a href="#" id="item_menu"
                    class="flex justify-start items-center border-2 border-color6/30 rounded-md p-2 cursor-pointer gap-2 ease-in-out duration-100 hover:bg-color6 hover:text-color1 text-color6 relative overflow-hidden w-full">
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
            navbar.classList.remove("md:w-[250px]");
            navbar.classList.add("w-[80px]");

            navbar_container.classList.remove("w-full");
            navbar_container.classList.remove("md:w-[360px]");
            navbar_container.classList.remove("lg:w-[300px]");
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
            navbar.classList.add("md:w-[250px]");

            navbar_container.classList.remove("w-[90px]");
            navbar_container.classList.add("w-full");
            navbar_container.classList.add("md:w-[360px]");
            navbar_container.classList.add("lg:w-[300px]");

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
