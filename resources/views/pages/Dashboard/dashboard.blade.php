@extends('layout.main_dashboard')
@section('content')
    <div class="w-full px-3">
        <header class="my-3">
            <h1 class="text-[20px] lg:text-[30px] font-medium">Wellcome To Your Dashboard Admin</h1>
            <div class="block h-[2px] bg-color5/50 my-3"></div>
        </header>
        <main>
            <div class="flex justify-center items-center flex-wrap gap-2">
                <div class="h-max w-full lg:w-[48%] rounded-md border-2 p-2">
                    <h2 class="text-center font-medium text-lg my-2">Jumlah Pengunjung</h2>
                    <canvas id="chartViews" class="h-full w-full"></canvas>
                </div>
                <div class="h-max w-full lg:w-[48%] rounded-md border-2 p-2">
                    <h2 class="text-center font-medium text-lg my-2">Jumlah User</h2>
                    <canvas id="chartUser" class="h-full w-full"></canvas>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('dist/js/chart.js') }}"></script>
    <script>
        var chrt = document.getElementById("chartViews").getContext("2d");
        var chartId = new Chart(chrt, {
            type: 'line',
            data: {
                labels: ["2020", "2021", "2022", "2023"],
                datasets: [{
                    label: "Views",
                    data: [140, 500, 300, 800],
                    backgroundColor: '#e63946',
                    borderColor: ['#1d3557'],
                    borderWidth: 2,
                    pointRadius: 4,
                }],
            },
            options: {
                responsive: false,
            },
        });

        var chrt = document.getElementById("chartUser").getContext("2d");
        var chartId = new Chart(chrt, {
            type: 'line',
            data: {
                labels: ["2020", "2021", "2022", "2023"],
                datasets: [{
                    label: "User",
                    data: [10, 50, 60, 100],
                    backgroundColor: '#e63946',
                    borderColor: ['#1d3557'],
                    borderWidth: 2,
                    pointRadius: 4,
                }],
            },
            options: {
                responsive: false,
            },
        });
    </script>
@endsection
