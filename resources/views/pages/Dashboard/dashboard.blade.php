@extends('layout.main_dashboard')
@section('content')
    <style>
        .calendar-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .calendar-container header {
            display: flex;
            align-items: center;
            padding: 25px 30px 10px;
            justify-content: space-between;
        }

        header .calendar-current-date {
            font-weight: 500;
            font-size: 1.45rem;
        }

        .calendar-body {
            padding: 20px;
        }

        .calendar-body ul {
            list-style: none;
            flex-wrap: wrap;
            display: flex;
            text-align: center;
        }

        .calendar-body .calendar-dates {
            margin-bottom: 20px;
        }

        .calendar-body li {
            width: calc(100% / 7);
            font-size: 14px;
            color: #414141;
        }

        .calendar-body .calendar-weekdays li {
            cursor: default;
            font-weight: 500;
        }

        .calendar-body .calendar-dates li {
            margin-top: 20px;
            position: relative;
            z-index: 1;
            cursor: pointer;
        }

        .calendar-dates li.inactive {
            color: #aaa;
        }

        .calendar-dates li.active {
            color: #fff;
        }

        .calendar-dates li::before {
            position: absolute;
            content: "";
            z-index: -1;
            top: 50%;
            left: 50%;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .calendar-dates li.active::before {
            background: #6332c5;
        }

        .calendar-dates li:not(.active):hover::before {
            background: #e4e1e1;
        }
    </style>

    <div class="w-full px-3">
        <header class="my-3">
            <h1 class="text-[20px] lg:text-[30px] font-medium">Wellcome To Your Dashboard Admin</h1>
            <div class="block h-[2px] bg-color5/50 my-3"></div>
        </header>
        <main>
            <div class="calendar-container select-none w-[400px]">
                <header class="calendar-header">
                    <p class="calendar-current-date"></p>
                    <div class="calendar-navigation">
                        <span id="calendar-prev">
                            <ion-icon name="caret-back-outline"
                                class="text-[30px] text-color5/20 p-1 hover:bg-color2/10 rounded-full"></ion-icon>
                        </span>
                        <span id="calendar-next" class="material-symbols-rounded">
                            <ion-icon name="caret-forward-outline"
                                class="text-[30px] text-color5/20 p-1 hover:bg-color2/10 rounded-full"></ion-icon>
                        </span>
                    </div>
                </header>

                <div class="calendar-body">
                    <ul class="calendar-weekdays">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                    </ul>
                    <ul class="calendar-dates"></ul>
                </div>
            </div>
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

        let date = new Date();
        let year = date.getFullYear();
        let month = date.getMonth();

        const day = document.querySelector(".calendar-dates");

        const currdate = document
            .querySelector(".calendar-current-date");

        const prenexIcons = document
            .querySelectorAll(".calendar-navigation span");

        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];

        const manipulate = () => {

            // Get the first day of the month
            let dayone = new Date(year, month, 1).getDay();

            // Get the last date of the month
            let lastdate = new Date(year, month + 1, 0).getDate();

            // Get the day of the last date of the month
            let dayend = new Date(year, month, lastdate).getDay();

            // Get the last date of the previous month
            let monthlastdate = new Date(year, month, 0).getDate();

            // Variable to store the generated calendar HTML
            let lit = "";

            // Loop to add the last dates of the previous month
            for (let i = dayone; i > 0; i--) {
                lit +=
                    `<li class="inactive">${monthlastdate - i + 1}</li>`;
            }

            // Loop to add the dates of the current month
            for (let i = 1; i <= lastdate; i++) {

                // Check if the current date is today
                let isToday = i === date.getDate() &&
                    month === new Date().getMonth() &&
                    year === new Date().getFullYear() ?
                    "active" :
                    "";
                lit += `<li class="${isToday}">${i}</li>`;
            }

            // Loop to add the first dates of the next month
            for (let i = dayend; i < 6; i++) {
                lit += `<li class="inactive">${i - dayend + 1}</li>`
            }

            // Update the text of the current date element
            // with the formatted current month and year
            currdate.innerText = `${months[month]} ${year}`;

            // update the HTML of the dates element
            // with the generated calendar
            day.innerHTML = lit;
        }

        manipulate();

        // Attach a click event listener to each icon
        prenexIcons.forEach(icon => {

            // When an icon is clicked
            icon.addEventListener("click", () => {

                // Check if the icon is "calendar-prev"
                // or "calendar-next"
                month = icon.id === "calendar-prev" ? month - 1 : month + 1;

                // Check if the month is out of range
                if (month < 0 || month > 11) {

                    // Set the date to the first day of the
                    // month with the new year
                    date = new Date(year, month, new Date().getDate());

                    // Set the year to the new year
                    year = date.getFullYear();

                    // Set the month to the new month
                    month = date.getMonth();
                } else {

                    // Set the date to the current date
                    date = new Date();
                }

                // Call the manipulate function to
                // update the calendar display
                manipulate();
            });
        });
    </script>
@endsection
