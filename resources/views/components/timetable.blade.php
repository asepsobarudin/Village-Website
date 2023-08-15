<div class="flex flex-col justify-start w-full lg:w-[25%] px-2 my-6">
    <div href="#" class="flex justify-center items-center mb-4">
        <ion-icon name="calendar-outline" class="text-[30px] mr-2"></ion-icon>
        <span class="text-[20px] font-medium">Jadwal Kegiatan</span>
    </div>
    {{-- <div class="w-full h-[2px] bg-black/30 my-4"></div> --}}
    <ul class="flex flex-wrap gap-3">
        @for ($i = 1; $i <= 3; $i++)
            <li class="w-full md:w-[48%] lg:w-full">
                <div class="border-2 border-[#03071e]/30 rounded-md p-2">
                    <h2 class="text-[20px] font-medium">
                        Selasa, 19 Mei 2023
                    </h2>
                    <div class="w-full h-[2px] bg-[#03071e]/30 my-2"></div>
                    <p class="text-[14px] font-normal">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur harum expedita iure
                        accusamus aliquid neque?
                    </p>
                    <div class="mt-2 flex justify-end">
                        <a href="#" class="bg-[#03071e] hover:bg-[#03071e]/80 ease-in-out duration-100 py-2 px-4 text-white rounded-md">Detail</a>
                    </div>
                </div>
            </li>
        @endfor
        <li class="my-2 w-full">
            <a href="#"
                class="block w-full text-white bg-[#03071e] hover:bg-[#03071e]/80 ease-in-out duration-100 rounded-md text-center py-2">Selengkapnya</a>
        </li>
    </ul>
</div>
