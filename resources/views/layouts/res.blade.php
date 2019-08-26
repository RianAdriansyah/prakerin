
<script src="{{ asset('assets/backend/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/chart.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/chart-data.js') }}"></script>
<script src="{{ asset('assets/backend/js/easypiechart.js') }}"></script>
<script src="{{ asset('assets/backend/js/easypiechart-data.js') }}"></script>
<script src="{{ asset('assets/backend/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/backend/js/custom.js') }}"></script>
<script src="{{ asset('assets/backend/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/backend/select2/dist/css/select2.min.css') }}"></script>
<script src="{{ asset('assets/backend/select2/dist/js/select2.min.js') }}"></script>

    <script>
    CKEDITOR.replace( 'texteditor' );
    </script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>