const ctx = document.getElementById('registrationChart');

new Chart(ctx, {
type: 'bar',
data: {
    labels: months,
    datasets: [{
        label: '新規登録者',
        data: totalRegistration,
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