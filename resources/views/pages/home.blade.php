@extends('layout.main')
@section('content')
    <x-slideshow :slideshow="$slideshow" />

    <div class="container">
        <div class="flex flex-col lg:flex-row w-full py-3">
            <div class="w-full px-3 lg:w-[75%]">
                <x-news.news titleNews="Berita Terkini" newsLink="berita_terkini" />
            </div>
            @component('components.timetable', ['calendar' => $calendar])
            @endcomponent
        </div>

        <div class="w-full h-[2px] bg-black/30 my-4"></div>

        <div class="flex flex-wrap gap-3 px-2">
            <div class="w-full md:w-[49%] select-none">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31673.30699293243!2d108.44346471115773!3d-7.107057181357805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f6a5785457bb7%3A0x401e8f1fc28e350!2sSelajambe%2C%20Kuningan%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1692084528611!5m2!1sen!2sid"
                    class="w-full h-[400px]" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="w-full md:w-[49%]">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vero perferendis temporibus, corporis
                cupiditate
                molestias ea impedit sapiente magni! Omnis architecto hic eligendi eveniet iure temporibus dignissimos,
                veritatis quaerat vel.
            </div>
        </div>
    </div>
@endsection
