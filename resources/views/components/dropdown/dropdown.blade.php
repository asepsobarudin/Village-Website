<div>
    <label for="kategori{{ $title }}"
        class="p-3 hover:bg-color2 hover:text-color1 hover:skew-x-[-12deg] rounded-md cursor-pointer flex justify-center items-center relative z-10 bg_kategori" id="bg_kategori{{ $title }}">
        <div class="mx-1">{{ $title }}</div>
        <div class="rotate-0 ease-out duration-100 flex justify-center items-center arrow_drop" id="arrow_drop{{ $title }}">
            <ion-icon name="caret-down-outline"></ion-icon>
        </div>
    </label>
    <input type="checkbox" name="kategori" id="kategori{{ $title }}" class="hidden kategori">
    <ul class="absolute z-0 right-1 bg-color2 text-color1 px-3 py-2 top-10 hidden flex-col justify-center items-center rounded-md w-max h-max value_kategori" id="value_kategori{{ $title }}" >
        @foreach ($menu as $mn)
            <li class="w-full my-2">
                <a href="{{ $mn['link'] }}"
                    class="flex w-full hover:bg-color4 p-3 rounded-md {{ $active == $mn['title'] ? 'text-color3' : '' }}">{{ $mn['title'] }}</a>
            </li>
        @endforeach
    </ul>
</div>

<script>
    var kategori{{ $title }} = document.getElementById('kategori{{ $title }}');
    var bg_kategori{{ $title }} = document.getElementById('bg_kategori{{ $title }}');
    var value_kategori{{ $title }} = document.getElementById('value_kategori{{ $title }}');
    var arrow_drop{{ $title }} = document.getElementById('arrow_drop{{ $title }}');

    var otherBg = document.querySelectorAll('.bg_kategori');
    var otherArrow = document.querySelectorAll('.arrow-drop');
    var otherCheckboxes = document.querySelectorAll('.kategori');
    var otherDropdowns = document.querySelectorAll('.value_kategori');

    function kategori_menu_{{ $title }}() {
        if (kategori{{ $title }}.checked) {
            value_kategori{{ $title }}.classList.remove('hidden');
            value_kategori{{ $title }}.classList.add('flex');

            arrow_drop{{ $title }}.classList.remove('rotate-0');
            arrow_drop{{ $title }}.classList.add('rotate-180');

            bg_kategori{{ $title }}.classList.add('bg-color2');
            bg_kategori{{ $title }}.classList.add('text-color1');
            bg_kategori{{ $title }}.classList.add('skew-x-[-12deg]');

            otherCheckboxes.forEach(function(dropdown) {
                if (dropdown !== kategori{{ $title }}) {
                    dropdown.checked = false;
                }
            });

            otherBg.forEach(function(dropdown) {
                if (dropdown !== bg_kategori{{ $title }}) {
                    dropdown.classList.remove('bg-color2');
                    dropdown.classList.remove('text-color1');
                    dropdown.classList.remove('skew-x-[-12deg]');
                }
            });

            otherArrow.forEach(function(dropdown) {
                if (dropdown !== arrow_drop{{ $title }}) {
                    dropdown.classList.remove('rotate-180');
                    dropdown.classList.add('rotate-0');
                }
            });

            otherDropdowns.forEach(function(dropdown) {
                if (dropdown !== value_kategori{{ $title }}) {
                    dropdown.classList.remove('flex');
                    dropdown.classList.add('hidden');
                }
            });
        } else {
            value_kategori{{ $title }}.classList.remove('flex');
            value_kategori{{ $title }}.classList.add('hidden');

            arrow_drop{{ $title }}.classList.remove('rotate-180');
            arrow_drop{{ $title }}.classList.add('rotate-0');

            bg_kategori{{ $title }}.classList.remove('bg-color2');
            bg_kategori{{ $title }}.classList.remove('text-color1');
            bg_kategori{{ $title }}.classList.remove('skew-x-[-12deg]');
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
