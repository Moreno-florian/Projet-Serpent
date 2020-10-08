window.onload = start

function start() {

    let goal = document.getElementById('poids').value;
    let pass = document.getElementById('DateRepas').value;


    // let cgp = document.getElementById('statsGoalPass'); // to display the first graph
    let ctp = document.getElementById('statsWeightDate'); //to display the second graph 

    new Chart(ctp, {
        type: 'bar',
        data: {
            labels: ['Poids', ' DateRepas '],
            datasets: [{
                label: 'Nombres total',
                data: [poids, DateRepas],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)', // Transparency of filling
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)', // Transparency of edges
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
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    /*new Chart(cgp, {
        type: 'bar',
        data: {
            labels: ['Temps de jeu total (en Heure)', 'Présence (en jours)'],
            datasets: [{
                label: 'Nombres total',
                data: [time, presence],
                backgroundColor: [
                    'rgba(128, 248, 128, 0.2)', // Transparency of filling
                    'rgba(139, 69, 19, 0.2)',
                    'rgba(128, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 128, 0.2)',
                    'rgba(128, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(128, 248, 128, 1)', // Transparency of edges
                    'rgba(139, 69, 19, 1)',
                    'rgba(128, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 128, 1)',
                    'rgba(128, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });*/
}
