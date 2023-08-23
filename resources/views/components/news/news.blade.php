<div class="my-4 p-2">
    <div class="flex justify-center items-center h-[300px] lg:h-[500px] w-full overflow-hidden rounded-t-md">
        <img src="https://source.unsplash.com/random/?cat" alt="cat" class="h-full w-full object-cover">
    </div>
    <div class="shadow-lg shadow-black/20 p-4 rounded-b-md">
        <h2 class="text-[25px] font-medium mb-4 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, aliquid?
        </h2>
        <h3 class="mb-2 text-[16px] font-medium text-color6">Kamis, 17 Agustus 2023</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta incidunt quisquam maxime est. Aspernatur dignissimos blanditiis quidem ad ratione vero odit autem, ipsam quod voluptas deserunt pariatur nobis, neque, corporis cum at illum animi similique fugit corrupti minima repellendus nisi! Ex, nemo suscipit reiciendis similique ut rerum quod doloribus esse qui, labore odio eum! Nemo, molestias. Fugit debitis odit illum!</p>
        <div class="mt-3 flex justify-center">
            <a href="#"
                class="p-3 bg-color4 w-full text-center rounded-md text-color1 hover:bg-color4/80 ease-in-out duration-100">Lihat
                Selengkapnya</a>
        </div>
    </div>
</div>
<div class="py-10">
    <div class="flex justify-between items-center px-3">
        <h2 class="text-[25px] font-medium text-color4">{{ $titleNews }}</h2>
        <a href="{{ $newsLink }}"
            class="flex justify-center items-center ml-3 text-color4 hover:text-color4/80 ease-in-out duration-100">
            <span class="text-[20px] hidden md:flex justify-center items-center">Selengkapnya</span>
            <span class="text-[30px] flex justify-center items-center">
                <ion-icon name="caret-forward-outline"></ion-icon>
            </span>
        </a>
    </div>
    <div class="w-full h-[2px] bg-color5/30 my-4"></div>
    <div class="flex flex-wrap justify-center gap-4 lg:gap-6">
        @for ($i = 1; $i <= 4; $i++)
            <x-news.card_news />
        @endfor
    </div>
</div>
