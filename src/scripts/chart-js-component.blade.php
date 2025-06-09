@pushOnce('scripts')
<script type="text/javascript">
function createChartJs(el, labels, data) {

    const id = `#${el}`;

    console.log('Criando gráfico...')

    if (! $(id).length) return;
    
    const dom = document.getElementById(el).getContext('2d');

    const config = {
        labels: labels,
        datasets: [{
            data: data,
            pointRadius: 4,
            borderWidth: 5,
            label: 'Statistics',
            borderColor: '#6777ef',
            pointBorderColor: '#6777ef',
            pointBackgroundColor: '#fff',
            backgroundColor: 'transparent',
        }]
    }

    const options = {
        legend: { display: false },
        scales: {
            yAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
                ticks: { stepSize: 150 }
            }],
            xAxes: [{
                gridLines: {
                    color: '#fbfbfb',
                    lineWidth: 2
                }
            }]
        },
    }

    const chart = new Chart(dom, {
        type: 'line',
        data: config,
        options: options,
    });

    return chart
}

function listen(id, callback) {
    
    const observer = new MutationObserver(function(mutationsList) {
        for (let mutation of mutationsList) {            
            if (mutation.type !== 'childList') {
                continue;
            }
            if ($(id).length && typeof callback === 'function' ) {
                callback()
                observer.disconnect(); 
            }            
        }
    });

    observer.observe(document.body, { childList: true, subtree: true });
}

</script>
@endpushOnce