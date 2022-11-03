$(document).ready(function () {
    // đồng hồ thời gian thực
    // function showTime() {
    //     let time = new Date();
    //     let hour = time.getHours();
    //     let min = time.getMinutes();
    //     let sec = time.getSeconds();
    //     am_pm = "AM";

    //     // xác định am / pm
    //     if (hour > 12) {
    //         hour -= 12;
    //         am_pm = "PM";
    //     }
    //     if (hour == 0) {
    //         hr = 12;
    //         am_pm = "AM";
    //     }

    //     hour = hour < 10 ? "0" + hour : hour;
    //     min = min < 10 ? "0" + min : min;
    //     sec = sec < 10 ? "0" + sec : sec;

    //     let currentTime = hour + " : " + min + " : " + sec + " " + am_pm;

    //     document.querySelector("#now-clock").innerHTML = currentTime;
    // }
    // setInterval(showTime, 1000);

    // showTime();

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
    $('[name="feditbooktour"]').click(function(){
        $('#editbooktour').removeClass("d-none");
        let $row = $(this).closest('tr');
        $('input[name="fTourID"]').val($('#TourID',$row).text());
        $('input[name="fAnonymousBookTour"]').val($('#AnonymousBookTour',$row).text());
        $('input[name="fAnonymousEmail"]').val($('#AnonymousEmail',$row).text());
        $('input[name="fAnonymousAddress"]').val($('#AnonymousAddress',$row).text());
        $('input[name="fAnonymousPhone"]').val($('#AnonymousPhone',$row).text());
        $('input[name="fStatus"]').val($('#Status',$row).text());
        $('input[name="fDescription"]').val($('#Description',$row).text());
    });

    // edittour
    $('[name="fedittour"]').click(function(){
        $('#edittour').removeClass("d-none");
        let $row = $(this).closest('tr');
        $('input[name="fTourName"]').val($('#fTourName',$row).text());
        $('input[name="fTimeStart"]').val($('#fTimeStart',$row).text());
        $('input[name="fTimeEnd"]').val($('#fTimeEnd',$row).text());
        $('input[name="fTourPrice"]').val($('#TourPrice',$row).text());
        $('input[name="fTourSale"]').val($('#TourSale',$row).text());
        $('input[name="fLocation"]').val($('#Location',$row).text());
        $('input[name="fDescription"]').val($('#Description',$row).text());
        $('input[name="fTourID"]').val($('#TourID',$row).text());
    });

    // editMountaineering
    $('[name="feditMountaineering"]').click(function(){
        $('#editMountaineering').removeClass("d-none");
        let $row = $(this).closest('tr');
        $('input[name="fmountaineeringID"]').val($('#mountaineeringID',$row).text());
        $('input[name="fMountainName"]').val($('#mountainName',$row).text());
        $('input[name="fLocationX"]').val($('#locationX',$row).text());
        $('input[name="fLocationY"]').val($('#locationY',$row).text());
        $('input[name="fSheltering"]').val($('#sheltering',$row).text());
        $('input[name="fTechniques"]').val($('#techniques',$row).text());
        $('input[name="fDescription"]').val($('#description',$row).text());
    });

    // editService
    $('[name="feditService"]').click(function(){
        $('#editService').removeClass("d-none");
        let $row = $(this).closest('tr');
        $('input[name="fserviceID"]').val($('#serviceID',$row).text());
        $('input[name="fServiceName"]').val($('#serviceName',$row).text());
        $('input[name="fPrice"]').val($('#price',$row).text());
        $('input[name="fVAT"]').val($('#vAT',$row).text());
        $('input[name="fSale"]').val($('#sale',$row).text());
        $('input[name="fDescription"]').val($('#description',$row).text());
    });

    // editNews
    $('[name="feditNews"]').click(function(){
        $('#editNews').removeClass("d-none");
        let $row = $(this).closest('tr');
        $('input[name="fnewsID"]').val($('#newsID',$row).text());
        $('input[name="fTitle"]').val($('#title',$row).text());
        $('input[name="fLead"]').val($('#leadcontent',$row).text());
        $('input[name="fAuthor"]').val($('#author',$row).text());
        $('input[name="fDescription"]').val($('#description',$row).text());
    });

    // editLibrary
    $('[name="feditLibraryID"]').click(function(){
        $('#editlibrary').removeClass("d-none");
        let $row = $(this).closest('tr');
        $('input[name="fLibraryID"]').val($('#libraryID',$row).text());
        $('input[name="fLibraryName"]').val($('#libraryName',$row).text());
        $('input[name="fDescription"]').val($('#description',$row).text());
    });

    // editItemlibrary
    $('[name="feditItemlibrary"]').click(function(){
        $('#editItemlibrary').removeClass("d-none");
        let $row = $(this).closest('tr');
        $('input[name="fItemlibraryID"]').val($('#itemLibraryID',$row).text());
        $('input[name="fTitle"]').val($('#title',$row).text());
        $('input[name="fDescription"]').val($('#description',$row).text());
        $('input[name="fAlt"]').val($('#alt',$row).text());
    });

    // editCategory
    $('[name="feditCategory"]').click(function(){
        $('#editcategory').removeClass("d-none");
        let $row = $(this).closest('tr');
        $('input[name="fCategoryID"]').val($('#CategoryID',$row).text());
        $('input[name="fCategoryName"]').val($('#CategoryName',$row).text());
        $('input[name="fDescription"]').val($('#Description',$row).text());
    });

    // editCategorytour
    $('[name="feditCategorytour"]').click(function(){
        $('#editcategorytour').removeClass("d-none");
        let $row = $(this).closest('tr');
        $('input[name="fCategorytourID"]').val($('#CategoryTourID',$row).text());
        $('input[name="fCategoryTourName"]').val($('#CategoryTourName',$row).text());
        $('input[name="fDescription"]').val($('#Description',$row).text());
    });

    // editlocationandservice
    $('[name="feditlocationandservice"]').click(function(){
        $('#editlocationandservice').removeClass("d-none");
        let $row = $(this).closest('tr');
        $('input[name="flocationandserviceID"]').val($('#locationAndServiceID',$row).text());
        $('input[name="fDescription"]').val($('#description',$row).text());
    });

    // add itemlibrary 2tab
    // $('[name="additemlibrary"]').click(function(){
    //     var $row = $(this).closest('tr');
    //     $('input[id="LibraryID"]').val($('#libraryName',$row).text());
    // });

});