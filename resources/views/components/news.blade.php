<div class="my-4 p-2">
    <div class="flex justify-center items-center h-[300px] lg:h-[500px] w-full overflow-hidden rounded-t-md">
        <img src="https://source.unsplash.com/random/?cat" alt="cat" class="h-full w-full object-cover">
    </div>
    <div class="shadow-lg shadow-black/20 p-4 rounded-b-md">
        <h2 class="text-[25px] font-medium my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, aliquid?
        </h2>
        <h3 class="mb-2 text-[16px] font-medium text-green-900">Kamis, 17 Agustus 2023</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id maiores est nemo repellat porro tempore, numquam nostrum nihil sit architecto, aspernatur cupiditate quia, modi quae blanditiis perspiciatis error totam soluta fugiat? Nam quaerat, temporibus reprehenderit dolore ipsam amet reiciendis sapiente nesciunt quos tempora neque necessitatibus quis culpa harum facere ipsa esse repellendus, nulla iste. Facere, cum dolor quaerat eveniet soluta dolore at facilis nihil, sed distinctio reiciendis est modi doloribus, voluptates odit expedita ullam suscipit illo temporibus ipsam totam. Libero maiores amet voluptates, quia soluta illum nesciunt consequatur quas mollitia nihil nulla pariatur esse molestias perspiciatis officia minus natus dignissimos commodi porro tenetur distinctio fugiat. Sit, totam minus! Minus, illo officia illum molestiae laboriosam voluptates beatae laudantium autem deserunt tempora! Non consequuntur blanditiis placeat debitis voluptas sunt, ab voluptate culpa saepe totam quaerat, eos omnis dolor repudiandae nisi cum magnam, dolores ad sit repellendus ducimus accusantium? Veritatis, minus ipsam velit quo iste facilis consectetur et saepe facere eos dolores. Reprehenderit facilis adipisci magnam sed saepe, assumenda molestiae nemo aperiam quisquam tenetur delectus quo perspiciatis dicta nobis nostrum excepturi, sint rem cumque quaerat vel corporis incidunt autem! Repellendus molestiae consectetur labore blanditiis! Obcaecati quas saepe iusto nisi incidunt nesciunt excepturi at.</p>
        <div class="mt-3 flex justify-center">
            <a href="#"
                class="p-3 bg-[#03071e] w-full text-center rounded-md text-white hover:bg-[#03071e]/80 ease-in-out duration-100">Lihat
                Selengkapnya</a>
        </div>
    </div>
</div>
<div class="py-10">
    <div class="flex justify-between items-center px-3">
        <h2 class="text-[25px] font-medium text-[#03071e]">{{ $titleNews }}</h2>
        <a href="{{ $newsLink }}"
            class="flex justify-center items-center ml-3 text-[#03071e] hover:text-[#03071e]/80 ease-in-out duration-100">
            <span class="text-[20px] hidden md:flex justify-center items-center">Selengkapnya</span>
            <span class="text-[30px] flex justify-center items-center">
                <ion-icon name="caret-forward-outline"></ion-icon>
            </span>
        </a>
    </div>
    <div class="w-full h-[2px] bg-black/30 my-4"></div>
    <div class="flex flex-wrap justify-center gap-4 lg:gap-6">
        @for ($i = 1; $i <= 4; $i++)
            <x-card_news />
        @endfor
    </div>
</div>
