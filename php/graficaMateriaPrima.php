<section id="principal">
<script src="js/Chart.min.js"></script>
<canvas id="myChart"></canvas>
<script>
<?php 
    require_once("php/materiaprima.php");
    $obj = new Materiaprima();
    $nombres = $obj->nombres();
    $precios = $obj->precios();
 ?>
var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ <?php echo $nombres; ?> ],
        datasets: [{
            label: 'Gráfica de Materia Prima',
            data: [ <?php echo $precios; ?> ],
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