import Chart from 'chart.js';

// var ctx1 = document.getElementById('myChart1').getContext('2d');
// var ctx2 = document.getElementById('myChart2').getContext('2d');
// var ctx3 = document.getElementById('myChart3').getContext('2d');

// var myChart1 = new Chart(ctx1, {
//     type: 'bar',
//     data: {
//         labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
//         datasets: [{
//             label: 'Predicted',
//             data: [12, 19, 3, 5, 2, 3],
//             backgroundColor: [
//                 'rgba(99, 133, 170, 0.5)',
//                 'rgba(99, 133, 170, 0.5)',
//                 'rgba(99, 133, 170, 0.5)',
//                 'rgba(99, 133, 170, 0.5)',
//                 'rgba(99, 133, 170, 0.5)',
//                 'rgba(99, 133, 170, 0.5)',
//             ],
//             borderColor: [
//                 'rgba(99, 133, 170, 0.5)',
//                 'rgba(99, 133, 170, 0.5)',
//                 'rgba(99, 133, 170, 0.5)',
//                 'rgba(99, 133, 170, 0.5)',
//                 'rgba(99, 133, 170, 0.5)',
//                 'rgba(99, 133, 170, 0.5)',
//             ],
//             borderWidth: 1
//         },
//         {
//             label: 'Actual',
//             data: [12, 19, 3, 5, 2, 3],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(255, 99, 132, 0.2)',
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(255, 99, 132, 1)',
//             ],
//             borderWidth: 1
//         }
//         ]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero: true
//                 }
//             }]
//         }
//     }
// });

// var myChart2 = new Chart(ctx2, {
//     type: 'bar',
//     data: {
//         labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
//         datasets: [{
//             data: [12, 19, 3, 5, 2, 3],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero: true
//                 }
//             }]
//         }
//     }
// });

// var myChart3 = new Chart(ctx3, {
//     type: 'bar',
//     data: {
//         labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
//         datasets: [{
//             data: [12, 19, 3, 5, 2, 3],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero: true
//                 }
//             }]
//         }
//     }
// });