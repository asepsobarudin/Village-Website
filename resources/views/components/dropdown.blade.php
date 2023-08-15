<div>
    <label for="kategori{{ $title }}"
        class="p-3 hover:bg-[#370617] rounded-md cursor-pointer flex justify-center items-center relative z-10">
        <div class="mx-1">{{ $title }}</div>
        <div class="rotate-0 ease-out duration-100 flex justify-center items-center arrow-drop"
            id="arrow-drop{{ $title }}">
            <ion-icon name="caret-down-outline"></ion-icon>
        </div>
    </label>
    <input type="checkbox" name="kategori" id="kategori{{ $title }}" class="hidden kategori">
    <ul class="absolute z-0 right-0 bg-[#370617] px-3 py-2 top-10 hidden flex-col justify-center items-center rounded-md w-max h-max value_kategori"
        id="value_kategori{{ $title }}">
        @foreach ($menu as $mn)
            <li class="w-full my-2">
                <a href="{{ $mn['link'] }}"
                    class="flex w-full hover:bg-[#6a040f] p-3 rounded-md {{ $active == $mn['title'] ? 'text-[#f48c06]' : '' }}">{{ $mn['title'] }}</a>
            </li>
        @endforeach
    </ul>
</div>

<script>
    var kategori{{ $title }} = document.getElementById('kategori{{ $title }}');
    var value_kategori{{ $title }} = document.getElementById('value_kategori{{ $title }}');
    var arrow_drop{{ $title }} = document.getElementById('arrow-drop{{ $title }}');

    var otherDropdowns = document.querySelectorAll('.value_kategori');
    var otherCheckboxes = document.querySelectorAll('.kategori');
    var otherArrow = document.querySelectorAll('.arrow-drop');

    function kategori_menu_{{ $title }}() {
        if (kategori{{ $title }}.checked) {
            value_kategori{{ $title }}.classList.remove('hidden');
            value_kategori{{ $title }}.classList.add('flex');

            arrow_drop{{ $title }}.classList.remove('rotate-0');
            arrow_drop{{ $title }}.classList.add('rotate-180');

            otherDropdowns.forEach(function(dropdown) {
                if (dropdown !== value_kategori{{ $title }}) {
                    dropdown.classList.remove('flex');
                    dropdown.classList.add('hidden');
                }
            });

            otherCheckboxes.forEach(function(dropdown) {
                if (dropdown !== kategori{{ $title }}) {
                    dropdown.checked = false;
                }
            });

            otherArrow.forEach(function(dropdown) {
                if (dropdown !== arrow_drop{{ $title }}) {
                    dropdown.classList.remove('rotate-180');
                    dropdown.classList.add('rotate-0');
                }
            });
        } else {
            value_kategori{{ $title }}.classList.remove('flex');
            value_kategori{{ $title }}.classList.add('hidden');

            arrow_drop{{ $title }}.classList.remove('rotate-180');
            arrow_drop{{ $title }}.classList.add('rotate-0');
        }
    }

    kategori{{ $title }}.addEventListener('click', () => {
        kategori_menu_{{ $title }}();
    });

    window.addEventListener("resize", () => {
        if (kategori{{ $title }}.checked) {
            kategori{{ $title }}.checked = false;
            kategori_menu_{{ $title }}();
        }
    });

    window.addEventListener("scroll", () => {
        otherDropdowns.forEach(function(dropdown) {
            if (dropdown) {
                dropdown.classList.remove('flex');
                dropdown.classList.add('hidden');
            }
        });

        otherCheckboxes.forEach(function(dropdown) {
            if (dropdown) {
                dropdown.checked = false;
            }
        });

        otherArrow.forEach(function(dropdown) {
            if (dropdown) {
                dropdown.classList.remove('rotate-180');
                dropdown.classList.add('rotate-0');
            }
        });
    });
</script>
