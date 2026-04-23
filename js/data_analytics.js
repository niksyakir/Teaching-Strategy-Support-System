// var ctx = document.getElementById('strategyChart').getContext('2d');

// // Fetch data from your backend API
// fetch('data2.php')
//     .then(response => response.json())
//     .then(data => {
//         // Process the data and extract the necessary values
        
//         const labels = data.map(item => item.TeachingStrategy); // Strategy names (e.g., 'Personalized Strategy')
//         const recommendationsCount = data.map(item => item.recommendations_count); // Number of recommendations

//         // Create the chart
//         var strategyChart = new Chart(ctx, {
//             type: 'bar',
//             data: {
//                 labels: labels,
//                 datasets: [{
//                     label: 'Number of Recommendations',
//                     data: recommendationsCount,
//                     backgroundColor: 'rgba(54, 162, 235, 0.2)',
//                     borderColor: 'rgba(54, 162, 235, 1)',
//                     borderWidth: 1
//                 }]
//             },
//             options: {
//                 scales: {
//                     y: {
//                         beginAtZero: true
//                     }
//                 }
//             }
//         });
//     })
//     .catch(error => console.error('Error fetching data:', error));



var ctx = document.getElementById('strategyChart').getContext('2d');
var strategyChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Practical Exercises', 'Problem-based Learning', 'Cooperative Learning', 'Resource Sharing and Online Communities', 'Continuous Evaluationa and Feedback'],
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
        labels: ['Practical Exercises', 'Problem-based Learning', 'Resource Sharing and Online Communities', 'Cooperative Learning'],
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
        labels: ['Practical Exercises', 'Resource Sharing and Online Communities', 'Problem-based Learning', 'Cooperative Learning'],
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