@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <script>
                        window.onload = function () {
        
                        var chart = new CanvasJS.Chart("chartContainer", {
                            exportEnabled: true,
                            theme: "light2",
                            animationEnabled: true,
                            title: {
                                text: "Status de proyectos",
                            },
                            data: [{
                                type: "pie",
                                indexLabelFontSize: 18,
                                radius: 150,
                                indexLabel: "{label} - {y}",
                                yValueFormatString: "0",
                                click: explodePie,
                                dataPoints: [
                                   
                                    { y: "5" , label: "proof_one" },
                                    { y: "6", label: "proof_two"},
                                    { y: "3", label: "proof_three"},
                                   
                                ]
                            }]
                        });
                        chart.render();
        
                        function explodePie(e) {
                            for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
                                if(i !== e.dataPointIndex)
                                    e.dataSeries.dataPoints[i].exploded = false;
                            }
                        }
                        
                        }
                        </script>
                    <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
