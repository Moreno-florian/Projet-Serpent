window.onload = start
function start() {

    let date = document.getElementById('').value;
    let poids = document.getElementById('').value;

    let ctx = document.getElementById('').value;


    new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: [date],
            datasets: [{
                label: 'Evolution Snow',
                fill: 'false',
                spanGaps: 'true',
                borderColor: 'rgb(255, 99, 132)',
                data: [poids]
            },
            {
                label: 'Evolution Snatch',
                fill: 'false',
                spanGaps: 'true',
                borderColor: 'rgb(99, 30, 15)',
                data: [poids]
            },
            {
                label: 'Evolution Nazca',
                fill: 'false',
                spanGaps: 'true',
                borderColor: 'rgb(16, 14, 161)',
                data: [poids]
            }
            ]
        },

        // Configuration options go here
        options: {}
    });
}