        // <script>
        //         window.onload = function () {

        //         var chart = new CanvasJS.Chart("chartContainer", {
        //             exportEnabled: true,
        //             theme: "light2",
        //             animationEnabled: true,
        //             title: {
        //                 text: "Medicamentos en bajo Stock de seguridad",
        //             },
        //             data: [{
        //                 type: "pie",
        //                 indexLabelFontSize: 18,
        //                 radius: 150,
        //                 indexLabel: "{label} - {y}",
        //                 yValueFormatString: "0",
        //                 click: explodePie,
        //                 dataPoints: [
        //                     <?php foreach($stock as $row) {?>
        //                     { y: <?php echo $row['cantidad']; ?>, label: "<?php echo $row['nombre']; ?>" },
        //                     <?php } ?>
        //                 ]
        //             }]
        //         });
        //         chart.render();

        //         function explodePie(e) {
        //             for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        //                 if(i !== e.dataPointIndex)
        //                     e.dataSeries.dataPoints[i].exploded = false;
        //             }
        //         }
                
        //         }
        //         </script>
        //     <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
        // <script src="../../recursos/js/canvasjs.min.js"></script>