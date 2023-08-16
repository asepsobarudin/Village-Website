<div class="w-full">
    <label for="kategori_mobile{{ $title }}"
        class="p-3 my-2 w-full hover:bg-color4 rounded-md cursor-pointer flex justify-center items-center">
        <div class="mx-1">{{ $title }}</div>
        <div class="rotate-0 ease-out duration-100 flex justify-center items-center"
            id="arrow-drop_mobile{{ $title }}">
            <ion-icon name="caret-down-outline"></ion-icon>
        </div>
    </label>
    <input type="checkbox" name="kategori_mobile" id="kategori_mobile{{ $title }}" class="hidden">
    <ul class="hidden flex-col rounded-md p-2 bg-color4 justify-center items-center w-full" id="value_kategori_mobile{{ $title }}">
        @foreach ($menu as $mn)
            <li class="flex justify-center items-center my-2 w-full">
                <a href="{{ $mn['link'] }}"
                    class="w-full text-center hover:bg-color2 {{ $active == $mn['title'] ? 'text-color3' : '' }} rounded-md p-3">{{ $mn['title'] }}</a>
            </li>
        @endforeach
    </ul>
</div>

<script>
    var kategori_mobile{{ $title }} = document.getElementById('kategori_mobile{{ $title }}');
    var value_kategori_mobile{{ $title }} = document.getElementById('value_kategori_mobile{{ $title }}');
    var arrow_drop_mobile{{ $title }} = document.getElementById('arrow-drop_mobile{{ $title }}');

    function kategori_mobile_menu_{{ $title }}() {
        if (kategori_mobile{{ $title }}.checked) {
            value_kategori_mobile{{ $title }}.classList.remove('hidden');
            value_kategori_mobile{{ $title }}.classList.add('flex');

            arrow_drop_mobile{{ $title }}.classList.remove('rotate-0');
            arrow_drop_mobile{{ $title }}.classList.add('rotate-180');
        } else {
            value_kategori_mobile{{ $title }}.classList.remove('flex');
            value_kategori_mobile{{ $title }}.classList.add('hidden');

            arrow_drop_mobile{{ $title }}.classList.remove('rotate-180');
            arrow_drop_mobile{{ $title }}.classList.add('rotate-0');
        }
    }

    kategori_mobile{{ $title }}.addEventListener('click', () => {
        kategori_mobile_menu_{{ $title }}();
    });

    window.addEventListener("resize", () => {
        if (kategori_mobile{{ $title }}.checked) {
            kategori_mobile.checked = false;
            kategori_mobile_menu_{{ $title }}();
        }
    });
</script>
