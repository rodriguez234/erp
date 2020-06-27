<section id="principal">
<script src="js/Chart.min.js"></script>
<canvas id="myChart"></canvas>
<script>
<?php 
    require_once("php/compra.php");
    $obj = new compra();
    $idcompras = $obj->idcompras();
    $totales = $obj->totales();
 ?>
var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ <?php echo $idcompras; ?> ],
        datasets: [{
            label: 'Gráfica de Compras',
            data: [ <?php echo $totales; ?> ],
            backgroundColor: "rgba(100,100,255,0.5)",
            borderColor: "blue",
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
</section>