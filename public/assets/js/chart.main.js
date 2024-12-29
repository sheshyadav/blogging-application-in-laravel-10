if(document.getElementById("PostTodayReportsChart")){
    var xValues = ["Views", "Share"];
    var yValues = [44, 90];
    var barColors = ["#cb6ce6","#b6b6b7"];

    new Chart("PostTodayReportsChart", {
    type: "pie",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
    },
    options: {
        title: {
        display: true,
        text: "Post Today Analytics Reports"
        }
    }
    });
}

if(document.getElementById("PostWeekReportsChart")){
    new Chart("PostWeekReportsChart", {
        type: "line",
        data: {
            labels: ['Su','Mo','Tu','We','Th','Fr','Sa'],
            datasets: [
                {
                    data: [10,34,15,6,6,37,2],
                    borderColor: "#cb6ce6",
                    label:'views',
                    fill: false
                },

                {
                    data: [12,4,5,16,47,7,56],
                    borderColor: "#b6b6b7",
                    label:'Share',
                    fill: false
                },

            ]
        },
        options: {
            legend: {display: true},
            scales: {
                yAxes: [{ticks: {min: 0}}],
            },
            title: {
                display: true,
                text: "Post 7Day Analytics Reports"
            }
        }
    });
}

if(document.getElementById("PostMonthReportsChart")){
    new Chart("PostMonthReportsChart", {
        type: "line",
        data: {
            labels: ['01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20'],
            datasets: [
                {
                    data: [10,34,15,6,6,37,2,33,66,3,45,7,55,9,26,7,8,9,4,12],
                    borderColor: "#cb6ce6",
                    label:'views',
                    fill: false
                },

                {
                    data: [12,4,5,16,47,7,56,10,34,15,6,6,37,12,4,5,16,47,7,56],
                    borderColor: "#b6b6b7",
                    label:'Share',
                    fill: false
                },

            ]
        },
        options: {
            legend: {display: true},
            scales: {
                yAxes: [{ticks: {min: 0}}],
            },
            title: {
                display: true,
                text: "Post 7Day Analytics Reports"
            }
        }
    });
}
