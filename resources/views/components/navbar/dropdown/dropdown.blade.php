<div class="group">
    <label for="kategori"
        class="p-3 group-hover:bg-color2 group-hover:text-color1 group-hover:skew-x-[-12deg] rounded-md cursor-pointer flex justify-center items-center relative z-10 duration-100 ease-in-out"
        id="bg_kategori">
        <div class="mx-1">{{ $title }}</div>
        <div class="rotate-0 ease-out duration-100 flex justify-center items-center group-hover:rotate-180" id="arrow_drop">
            <ion-icon name="caret-down-outline"></ion-icon>
        </div>
    </label>
    <input type="checkbox" name="kategori" id="kategori" class="hidden">
    <ul class="absolute z-0 right-1 bg-color2 text-color1 px-3 py-2 top-10 hidden flex-col justify-center items-center rounded-md w-max h-max group-hover:flex duration-100 ease-in-out"
        id="value_kategori">
        @foreach ($menu as $mn)
            <li class="w-full my-2">
                <a href="{{ $mn['link'] }}"
                    class="flex w-full hover:bg-color4 p-3 rounded-md {{ $active == $mn['title'] ? 'text-color3' : '' }}">{{ $mn['title'] }}</a>
            </li>
        @endforeach
    </ul>
</div>
