<!-- Right Panel -->

    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('css/dashboardfinance.css')}}"></script>

    <script src="{{asset('vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('js/widgets.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="https://kit.fontawesome.com/d770eb273a.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        (function($) {
            "use strict";
            
            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
        </script>

<script>
    var densityCanvas = document.getElementById("densityChart");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    var densityData = {
        label: 'Koin',
        data: [60, 80, 65, 78, 30, 75, 38, 38, 78, 58, 0, 0, 100],
        backgroundColor: 'rgba(255, 168, 30, 1)',
        yAxisID: "y-axis-density",
    };
    
    var gravityData = {
        label: 'Uang iklan/pasang lowongan (IDR Rp juta)',
        data: [20, 50, 35, 28, 20, 45, 20, 20, 52, 31, 0, 0, 100],
        backgroundColor: 'rgba(255, 0, 0)',
        yAxisID: "y-axis-gravity"
    };
    
    var planetData = {
        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [densityData, gravityData]
    };
    
    var chartOptions = {
        scales: {
            xAxes: [{
                barPercentage: 1,
                categoryPercentage: 0.6
            }],
            yAxes: [{
                id: "y-axis-density"
            }, {
                id: "y-axis-gravity"
            }]
        }
    };

    var barChart = new Chart(densityCanvas, {
        type: 'bar',
        data: planetData,
        options: chartOptions
    });
</script>
<script src="{{asset('js/dashboard.js')}}"></script>

</body>

</html>