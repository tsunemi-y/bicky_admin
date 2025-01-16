const ctx = document.getElementById('myChart');

new Chart(ctx, {
type: 'bar',
data: {
    labels: months,
    datasets: [{
        label: '売上',
        data: totalSales,
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