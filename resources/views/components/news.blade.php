<div class="py-10">
    <div class="flex items-center text-[#03071e] px-3">
        <h2 class="text-[25px] font-medium">{{ $titleNews }}</h2>
        <a href="{{ $newsLink }}" class="flex justify-center items-center ml-3">
            <ion-icon name="caret-forward-outline" class="text-[30px]"></ion-icon>
        </a>
    </div>
    <div class="w-full h-[2px] bg-black/30 my-4"></div>
    <div class="flex flex-wrap justify-center gap-4">
        @for ($i = 1; $i <= 4; $i++)
            <x-card_news />
        @endfor
    </div>
</div>
