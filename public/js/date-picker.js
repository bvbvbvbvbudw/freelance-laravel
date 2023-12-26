document.addEventListener("DOMContentLoaded", function (event) {
    AddDatePickers();
});


function createCalendar(calendar) {
    AddCalendarDays((new Date()).getFullYear(), (new Date()).getMonth(), calendar);
}

function AddDatePickers() {

    window.Months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    window.MonthsShort = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    window.DaysShort = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

}

function AddCalendarDays(Year, Month, calendar) {


    let DatePicker = $(calendar);
    let DatePickerTable = $(calendar).find('.date-picker-table');

    //DatePicker.parent().addClass('shown_datepicker');

    DatePicker.show();
    DatePickerTable.html();



    if (Month < 0) {
        Year = Year - 1;
        Month = 11;
    }

    if (Month > 11) {
        Year = Year + 1;
        Month = 0;
    }

    window.Month = Month;
    window.Year = Year;

    var firstDay = new Date(window.Year, window.Month, 1);
    var lastDay = new Date(window.Year, window.Month + 1, 0);

    var DayOffset = firstDay.getDay();
    var Day = 1;
    var MaxDay = lastDay.getDate();
    var Done = false;

    var HeaderRow = "<div class='datepicker_header'><div><span onclick='AddCalendarMonths(window.Year,`" + calendar + "`);'>" + window.Months[window.Month] + " " + window.Year.toString() + "</span></div><div><span onclick='AddCalendarDays(window.Year, window.Month - 1,`" + calendar + "`);'>❮</span><span onclick='AddCalendarDays(window.Year, window.Month + 1,`" + calendar + "`);' >❯</span></div></div>";

    var MainContent = "<table><tr><td>Su</td><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td></tr>";

    for (r = 0; r < 6; r++) {

        if (!Done) {

            MainContent += "<tr>";

            for (c = 0; c < 7; c++) {

                MainContent += "<td data-day='" + Day.toString() + "' onclick='SetDate(this,`" + calendar + "`);'>";

                if (DayOffset > 0) {
                    DayOffset = DayOffset - 1;
                } else {


                    if (Day <= MaxDay) {
                        MainContent += '<span>' + Day.toString() + '</span>';
                        Day = Day + 1;
                    } else {
                        Done = true;
                    }

                }

                MainContent += "</td>";

            }

            MainContent += "</tr>";

        }

    }

    MainContent += "</table>";

    var FooterRow = ""

    DatePickerTable.html("" + HeaderRow + "" + MainContent + "" + FooterRow + "");

}

function AddCalendarMonths(Year, calendar) {


    let DatePickerTable = $(calendar).find('.date-picker-table');


    DatePickerTable.html('asd');

    window.Year = Year;

    var Done = false;

    var HeaderRow = "<table><tr><td onclick='AddCalendarMonths(window.Year - 1, `" + calendar + "`);'><</td><td>" + window.Months[window.Month] + " " + window.Year.toString() + "</td><td onclick='AddCalendarMonths(window.Year + 1, `" + calendar + "`);' >></td></tr></table>";

    var MainContent = "<table>";
    let years = [];
    let year_interval = -9;
    for (let i = 0; i < 18; i++) {
        years[i] = window.Year + year_interval;
        year_interval++;
    }

    let a = 0;

    for (r = 0; r < 6; r++) {
        MainContent += "<tr>";
        for (c = 0; c < 3; c++) {

            MainContent += "<td onclick='AddCalendarDays(" + years[a] + ", window.Month, `" + calendar + "`);'>";
            MainContent += years[a];
            MainContent += "</td>";
            a++;
        }
        MainContent += "</tr>";
    }

    MainContent += "</table>";



    DatePickerTable.html("" + HeaderRow + "" + MainContent + "");

}

function SetDate(Obj, calendar) {


    let DatePickerTable = $(calendar).find('.date-picker-table');

    var day = $(Obj).data('day');
    var firstDay = new Date(window.Year, window.Month, 1);
    var DayOffset = firstDay.getDay();
    var weekDay = ((day - 1) % (DayOffset + 7));


    var date = day + ' ' + window.Months[window.Month] + ' ' + window.Year.toString();
    DatePickerTable.find('td.active').removeClass('active');
    DatePickerTable.find('.calendar_date_preview').html(window.DaysShort[weekDay] + ', ' + window.MonthsShort[window.Month] + ' ' + day)
    Obj.classList.add('active');

    console.log(date);

}

function ClearDatePicker(calendar) {

    //$(calendar).hide();
    //$(calendar).parent().removeClass('shown_datepicker');


    window.Month = null;
    window.Year = null;
}

function FormatDate(DateString) {
    var D = new Date(DateString);
    return D.getDate().toString() + " " + window.Months[D.getMonth()] + " " + D.getFullYear().toString();
}

function FormatDateShort(DateString) {
    var D = new Date(DateString);
    return D.getDate().toString() + " " + window.MonthsShort[D.getMonth()] + " " + D.getFullYear().toString();
}

function ChooseDate(calendar) {
    ClearDatePicker(calendar);
}

