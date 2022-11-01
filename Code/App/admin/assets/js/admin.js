$(document).ready(function () {
    // đồng hồ thời gian thực
    function showTime() {
        let time = new Date();
        let hour = time.getHours();
        let min = time.getMinutes();
        let sec = time.getSeconds();
        am_pm = "AM";

        // xác định am / pm
        if (hour > 12) {
            hour -= 12;
            am_pm = "PM";
        }
        if (hour == 0) {
            hr = 12;
            am_pm = "AM";
        }

        hour = hour < 10 ? "0" + hour : hour;
        min = min < 10 ? "0" + min : min;
        sec = sec < 10 ? "0" + sec : sec;

        let currentTime = hour + " : " + min + " : " + sec + " " + am_pm;

        document.querySelector("#now-clock").innerHTML = currentTime;
    }
    setInterval(showTime, 1000);

    showTime();

    // chart js 1
    new Chart('myChart1', {
        type: 'bar',
        data: {
            labels: ['Black', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'Tour type',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // editbooktour
    $('[name="fedit"]').click(function(){
        $('#editbooktour').removeClass("d-none");
        var $row = $(this).closest('tr');
        $('input[name="fTourID"]').val($('#TourID',$row).text());
        $('input[name="fAnonymousBookTour"]').val($('#AnonymousBookTour',$row).text());
        $('input[name="fAnonymousEmail"]').val($('#AnonymousEmail',$row).text());
        $('input[name="fAnonymousAddress"]').val($('#AnonymousAddress',$row).text());
        $('input[name="fAnonymousPhone"]').val($('#AnonymousPhone',$row).text());
        $('input[name="fStatus"]').val($('#Status',$row).text());
        $('input[name="fDescription"]').val($('#Description',$row).text());
    });

    // edittour
    $('[name="fedit"]').click(function(){
        $('#edittour').removeClass("d-none");
        var $row = $(this).closest('tr');
        $('input[name="TourName"]').val($('#TourName',$row).text());
        // $('input[name="CategoryTourName"]').val($('#CategoryTourName',$row).text());
        // $('input[name="Day"]').val($('#Day',$row).text());
        // $('input[name="TourPrice"]').val($('#TourPrice',$row).text());
        // $('input[name="TourSale"]').val($('#TourSale',$row).text());
        // $('input[name="Location"]').val($('#Location',$row).text());
        // $('input[name="AvatarTour"]').val($('#AvatarTour',$row).text());
        // $('input[name="Status"]').val($('#Status',$row).text());
        // $('input[name="Description"]').val($('#Description',$row).text());
    });

    // add img itemlibrary
    $('[name="additemlibrary"]').click(function(){
        var $row = $(this).closest('tr');
        $('input[id="LibraryID"]').val($('#libraryName',$row).text());
    });
});