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
    
    // chart gg chart_div
    google.charts.load('current', { packages: ['corechart', 'line'] });
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

        var data = new google.visualization.DataTable();
        data.addColumn('number', 'X');
        data.addColumn('number', 'Test');

        data.addRows([
            [0, 0], [1, 10], [2, 23], [3, 17], [4, 18], [5, 9],
            [6, 11], [7, 27], [8, 33], [9, 40], [10, 32], [11, 35],
            [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
            [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
            [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
            [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
            [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
            [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
            [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
            [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
            [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
            [66, 70], [67, 72], [68, 75], [69, 80]
        ]);

        var options = {
            hAxis: {
                title: 'Time'
            },
            vAxis: {
                title: 'Popular'
            },
            'height': 400
        };

        var chart = new google.visualization.LineChart(document.querySelector('.chart_div'));

        chart.draw(data, options);
    }

    // chart gg curve_chart
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Test', 'Test'],
            ['2004', 1000, 400],
            ['2005', 1170, 460],
            ['2006', 660, 1120],
            ['2007', 1030, 540]
        ]);

        var options = {
            title: 'Effective',
            curveType: 'function',
            legend: { position: 'bottom' },
            'height': 400, 'border-radius': 0.25
        };

        var chart = new google.visualization.LineChart(document.querySelector('.curve_chart'));

        chart.draw(data, options);
    }
    
    //
    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);

      function drawChart1() {

        var data = google.visualization.arrayToDataTable([
          ['Effort', 'Amount given'],
          ['My all',     100],
        ]);

        var options = {
          pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none',
          'height': 200, 'width': 200
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
        chart.draw(data, options);
      }
      
    // chart js 1
    new Chart("myChart1", {
        type: 'bar',
        data: {
            labels: ['Black', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# Test',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
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

    // chart js 2
    new Chart("myChart2", {
        type: 'line',
        data: {
            labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6'],
            datasets: [{
                label: 'My First Dataset',
                data: [10, 55, 40, 60, 70, 30],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
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

    // chart js 3
    new Chart("myChart3", {
        type: "line",
        data: {
            labels: [100,200,300,400,500,600,700,800,900,1000],
            title: 'Test',
            datasets: [{ 
                label: 'product 1',
                data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                borderColor: "red",
                fill: false
            }, { 
                label: 'product 2',
                data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                borderColor: "green",
                fill: false
            }, { 
                label: 'product 3',
                data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
                borderColor: "blue",
                fill: false
            }]
        },
        options: {
            legend: {display: false}
        }
    });
    
});