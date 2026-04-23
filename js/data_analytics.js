var ctx = document.getElementById('strategyChart').getContext('2d');
var strategyChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Personalized Strategy', 'Real-Time Feedback', 'Interactive Lessons', 'Formative Assessment', 'Math Games'],
        datasets: [{
            label: 'Number of Recommendations',
            data: [12, 19, 7, 14, 6],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
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


var canvas = document.getElementById('teacherPreferencesChart');
canvas.width = canvas.offsetWidth; // Set the internal width to match its container
canvas.height = 500; // Adjust the height as needed

var ctx = document.getElementById('teacherPreferencesChart').getContext('2d');
var teacherPreferencesChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Personalized Strategy', 'Peer Teaching', 'Interactive Lessons', 'Scaffold Instruction'],
        datasets: [{
            data: [25, 15, 35, 25],
            backgroundColor: ['#FF6F61', '#6B8E23', '#3B9E9F', '#F1C40F'],
            borderColor: ['#FF6F61', '#6B8E23', '#3B9E9F', '#F1C40F'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        layout: {
            padding: {
                left: 20,   // Adjust space from the left
                right: 20,  // Adjust space from the right
                top: 20,    // Adjust space from the top
                bottom: 20  // Adjust space from the bottom
            }
        },
        plugins: {
            legend: {
                position: 'top',
                labels: {
                    padding: 20  // Adjust space between the chart and the legend
                }
            }
        }
    }
});

var ctx = document.getElementById('studentPerformanceChart').getContext('2d');
var studentPerformanceChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
        datasets: [{
            label: 'Before Strategy',
            data: [60, 62, 63, 65, 70],
            borderColor: '#FF5733',
            backgroundColor: 'rgba(255, 87, 51, 0.2)',
            fill: true
        }, {
            label: 'After Strategy',
            data: [60, 65, 75, 85, 95],
            borderColor: '#33FF57',
            backgroundColor: 'rgba(51, 255, 87, 0.2)',
            fill: true
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var ctx = document.getElementById('effectivenessChart').getContext('2d');
var effectivenessChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Personalized Strategy', 'Peer Teaching', 'Scaffold Instruction', 'Interactive Lessons'],
        datasets: [{
            label: 'Effectiveness Rating (1-5)',
            data: [4.5, 4.0, 4.8, 4.3],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                max: 5
            }
        }
    }
});