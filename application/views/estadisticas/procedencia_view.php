<script>
	$(function () {

    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    // Build the chart
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'MORTALIDAD GENERAL POR PROCEDENCIA <?= $year ?> <br> HOSPITAL JOSE GREGORIO HERNANDEZ'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: "Fallecidos",
            data: [
                {name: "ALTO ORINOCO", y: <?= $altorinoco ?>},
                {name: "ATABAPO", y: <?= $atabapo ?>},
                {name: "ATURES", y: <?= $atures ?>},
                {name: "AUTANA", y: <?= $autana ?>},
                {name: "MANAPIARE", y: <?= $manapiare ?>},
                {name: "MAROA", y: <?= $maroa ?>},
                {name: "RIO NEGRO", y: <?= $rionegro ?>}
            ]
        }]
    });
});
</script>
<div id="container" style="width:80%; height:400px; margin: 1em auto;"></div>