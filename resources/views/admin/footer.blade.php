<footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2024</b> All rights reserved. 
                    
                    Restuarant <a rel="nofollow noopener" href="{{url('/')}}" class="tm-footer-link">Reservation</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="admin/js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="admin/js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="admin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="admin/js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>