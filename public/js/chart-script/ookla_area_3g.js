// DOM get id 
var dw = document.getElementById('download-chart').getContext('2d');
var up = document.getElementById('upload-chart').getContext('2d');
var lc = document.getElementById('latency-chart').getContext('2d');
var date = document.getElementById('date');
var area = document.getElementById('area');

function createChart(idcanvas) {
    var chrt = new Chart(idcanvas, {
        type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: '',
                    data: [],
                    backgroundColor: [
                        'rgba(255,140,0,1)',
                        'rgba(255, 255, 0, 1)',
                        'rgba(220, 20, 60, 1)',
                        'rgba(0, 255, 0, 1)',
                        'rgba(255, 0, 0, 1)',
                        'rgba(0, 0, 200, 1)'
                    ],
                    borderColor: [
                        'rgba(255,140,0,1)',
                        'rgba(255, 255, 0, 1)',
                        'rgba(220, 20, 60, 1)',
                        'rgba(0, 255, 0, 1)',
                        'rgba(255, 0, 0, 1)',
                        'rgba(0, 0, 200, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
    });

    return chrt;
}

function addData(chart, label, data) {
    chart.data.labels.push(label);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(data);
    });

    chart.update();
}

function removeData(chart) {
    chart.data.labels.pop();
    chart.data.datasets.forEach((dataset) => {
        dataset.data.pop();
    });
    chart.update();
}

function fetchData(chart,link,xdata,ydata){
    fetch(link)
    .then(function(response){
        return response.json();
    })
    .then(function(myJson){
        myJson.forEach(element=> {
            addData(chart,element[xdata],element[ydata]);
        });
    });
}

var chartdw = createChart(dw);
var chartup = createChart(up);
var chartlc = createChart(lc);

// var api = 'http://localhost:8000/api/ookla/area/JABOTABEK & JABAR/network/3G/date/201910';
// fetchData(chartdw,api,'operator','Download_kbps');
// fetchData(chartup,api,'operator','upload_kbps');
// fetchData(chartlc,api,'operator','latency');

date.onchange = eventHandler
area.onchange = eventHandler

function eventHandler() {
    var dates = date.value;
    var areas = area.value;
    var api = 'http://localhost:8000/api/ookla/area/' + areas + '/network/3G/date/' + dates;
    removeData(chartdw);
    

    fetchData(chartdw,api,'operator','Download_kbps');
    fetchData(chartup,api,'operator','upload_kbps');
    fetchData(chartlc,api,'operator','latency');
    console.log(api);
}