<script>
	$(function () {

    $(document).ready(function () {

        // Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'MORTALIDAD POR GENERO <?= $year ?> <br> HOSPITAL JOSE GREGORIO HERNANDEZ'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: "Fallecidos",
                colorByPoint: true,
                data: [{
                    name: "Femenino",
                    y: <?= $femenino ?>
                }, {
                    name: "Masculino",
                    y: <?= $masculino ?>,
                    sliced: true,
                    selected: true
                }]
            }]
        });
    });
});
</script>
<div id="container" style="width:70%; height:400px; margin: 1em auto;"></div>