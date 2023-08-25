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
        font-size: 18px;
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
        z-index: 0;
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
        width: 30px;
        height: 30px;
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

<div class="calendar-container select-none w-full px-3 lg:w-[25%] h-max mt-6">
    <header class="calendar-header flex-wrap">
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
        <ul class="calendar-dates">
        </ul>
    </div>
</div>

<script>
    let date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth();

    const day = document.querySelector(".calendar-dates");

    const currdate = document
        .querySelector(".calendar-current-date");

    const prenexIcons = document
        .querySelectorAll(".calendar-navigation span");

    const months = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    ];

    const events = [{
            'tanggal': 17,
            'bulan': 8,
            'event': "Perayaan Hari Kemerdekaan"
        },
        {
            'tanggal': 23,
            'bulan': 8,
            'event': "Ulang Tahun Desa Selajambe"
        }
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


            let isEvent = "";

            // Find the event for the current date
            const eventForCurrentDate = events.find(event => event.tanggal === i && event.bulan === (month + 1));
            if (eventForCurrentDate) {
                isEvent =
                    `<span class="w-2 h-2 bg-red-600 block absolute rounded-full top-[-8px] right-1 duration-100 ease-in-out z-10"></span>
                    <a href="#" class="absolute block w-0 h-0 group-hover:w-[160px] group-hover:h-max opacity-0 group-hover:opacity-100 hover:text-color2 w-max bg-[#e4e1e1] text-black font-normal rounded-md p-2 right-1 bottom-5 duration-200 ease-in-out z-0 overflow-hidden text-start">${eventForCurrentDate.event}</a>`;
            }

            lit += `<li class="${isToday} group">${i} ${isEvent}</li>`;
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
