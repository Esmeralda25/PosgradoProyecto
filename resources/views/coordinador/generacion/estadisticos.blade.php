@extends('layouts.master')

@section('content')

<style>
.main-footer {
	position: inherit !important;
}

.cnt-title-section {
	box-shadow: 0rem 0rem 0.3rem 0.03rem rgba(255,255,255,0.4);
	padding: 0.3rem 0.5rem;
	border-radius: 0.2rem;
	background-color: #343a40 !important;
	text-align: center;
	font-weight: 700;
	font-size: 1.2rem;
	margin: 0.2rem auto;
	margin-top: -1rem;
}

.card-body-charts {
	padding: 0.7rem;
}

.cnt-charts {
	width: 100%;
	margin: 0 auto;
	margin-top: 2rem;
	gap: 1rem;
}
.chart-item {
	width: 48%;
	height: 15rem;
	max-height: 50rem;
	margin: 0rem;
}
.chart-project-item {
	height: 22rem;
}

.infos-title {
	justify-content: space-between;
	gap: 1rem;
	box-shadow: 0rem 0rem 0.3rem 0.05rem rgba(255,255,255,0.2);
	padding: 0.3rem 0.5rem;
	border-radius: 0.2rem;
}
.itt-a {
	width: 45%;
	text-align: center;
}
.itt-b {
	width: 45%;
	text-align: center;
}
.itt-title {
	font-size: 1rem;
	font-weight: 600;
}

.cnt-actions {
    margin: 1rem auto 0rem auto;
}
.cnt-actions-estats {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin: 1.5rem auto 2rem auto;
}

.btn-dfl {
    display: flex;
    flex-direction: row;
    align-items: center;
    background-color: white;
    border: 1px solid rgba(0, 0, 0, 0);
    padding: 0.2rem 0.5rem;
    border-radius: 0.4rem;
    color: rgba(0, 0, 0, 1);
    box-shadow: 0rem 0rem 0.5rem 0.1rem rgba(0, 0, 0, 0.05);
    transition-duration: 0.3s;
}
.btn-dfl:hover {
    border: 1px solid rgba(0, 0, 0, 0);
    border-radius: 0.4rem;
    color: rgba(0, 0, 0, 1);
    box-shadow: 0rem 0rem 0.5rem 0.1rem rgba(0, 0, 0, 0.2);
    transition-duration: 0.3s;
}
.btn-dfl:active {
    border: 1px solid rgba(0, 0, 0, 0);
    border-radius: 0.4rem;
    color: rgba(0, 0, 0, 1);
    transform: scale(0.98);
    transition-duration: 0.3s;
}
.btn-dfl i {
    font-size: 1.2rem;
}

.btn-pdf {
	background-color: rgba(221, 70, 70, 0.7) !important;
	font-weight: 600;
}
.btn-excel {
	background-color: rgba(80, 217, 128, 0.7) !important;
	font-weight: 600;
}
.btn-download-report {
	background-color: rgba(31, 156, 255, 82) !important;
	font-weight: 600;
}

button:disabled, button[disabled] {
    border: 1px solid #999999 !important;
    background: #929292 !important;
    color: #242424 !important;
}
</style>

<section class="content">
    <div class="container-fluid">
        <div id="id_cnt_stn_charts" class="row justify-content-center" >
            <div class="col-10">
				<div class="cnt-title-section">
					<div>ESTADÍSTICOS</div>
				</div>
                <div class="card col-12">
					<div class="card-body card-body-charts">
						<div class="row infos-title">
							<div class="itt-a">
								<div class="itt-title">Generación</div>
								<div>{{$generacion->nombre}}</div>
							</div>
							<div class="itt-b">
								<div class="itt-title">Descripción</div>
								<div>{{$generacion->descripcion}}</div>
							</div>
						</div>

						<div id="id_cnt_charts" class="row cnt-charts"></div>

					</div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
	var gen_name = `<?php echo $generacion->nombre; ?>`;
	var chart_gen = `<?php echo $chart_gen; ?>`;
	var id_gen = `<?php echo $id_gen; ?>`;
	var coloresGenerados = [];

	$(document).ready( () => {
		(async () => {
			var dataLine = {id_gen: `${id_gen}`};
			var promise = await fetch(`/estadisticos_generacion/${id_gen}`);
			var response = await promise.json();
			var data_info = response.data_info;
			var data_proyectos = response.data_proyectos;

			//console.log(`${data_proyectos}`);

			Object.keys(data_proyectos).forEach(key => {
			 	//console.log(`${key}`);
			 	//console.log(`${JSON.stringify(data_proyectos[key])}`);
			});

			Object.keys(data_info).forEach(key => {
				var labelData = key.toLowerCase().replace(/[^\w-]+/g, '_');
				var valueData = data_info[key];
				var newCanvas = `
								<div class="chart-item">
									<canvas id="id_chart_${labelData}" style="width: 100%; height: 100%;"></canvas>
								 </div>
								`;
				$(`#id_cnt_charts`).append(newCanvas);
				setTimeout( () => {
					var id_chart = $(`#id_chart_${labelData}`);
					newChartCanva(id_chart, labelData, valueData);
				}, 100);
			});


		})();
	});

	function newChartCanva(id_chart, labelData, valueData, typeChart=`bar`) {

		var perc1 = ( ( valueData * 30 ) / 100);
		var perce2 = ( ( valueData * 70 ) / 100);
		var maxAxes_Y = ( valueData >= 15 ) ? Math.ceil( valueData+perc1 ) : Math.ceil( valueData+perce2 ) ;
		var bgColor = generateColor();
		new Chart(id_chart, {
			type: `${typeChart}`,
			data: {
				labels: [`${labelData.toUpperCase()}: [ ${valueData} ]`],
				datasets: [{
						label: `${labelData.toUpperCase()}`,
						data: [ valueData ],
						backgroundColor: `${bgColor}`,
						borderWidth: 1,
						fill: true,
						lineTension: 0.1,
						borderColor: "black",
						borderCapStyle: 'butt',
						borderDash: [],
						borderDashOffset: 0.0,
						borderJoinStyle: 'miter',
						pointBorderColor: "black",
						pointBackgroundColor: "#fff",
						pointBorderWidth: 1,
						pointHoverRadius: 10,
						pointHoverBackgroundColor: "black",
						pointHoverBorderColor: "rgba(220,220,220,1)",
						pointHoverBorderWidth: 3,
						radius: 10,
						pointHitRadius: 10,
						spanGaps: false,
					}
				]
			},
			options: {
				legendTemplate: `<div>${valueData}%</div>`,
				hover: {
					mode: 'nearest',
					intersect: true
				},
				legend: {
					labels: {
						fontColor: "black",
						fontWeight: "bold",
						fontSize: 14
					}
				},
				responsive: true,
				maintainAspectRatio: false,
				scales: {
					yAxes: [{
						display: true,
						ticks: {
							beginAtZero: true,
							max: maxAxes_Y,
							min: 0,
							stepSize: 1
						}
					}],
					xAxes: [{
						display: true,
						ticks: {
							fontColor: "black",
							fontSize: 12,
						}
					}]
				}
			}
		});
	}

	function newChartCanvaGroup(id_chart, nameChart, labelsData, valueData, typeChart=`bar`) {
		var maxAxes_Y = 100;
		var bgColor = generateColor();
		new Chart(id_chart, {
			type: `${typeChart}`,
			data: {
				labels: labelsData,
				datasets: [{
						label: nameChart,
						data: valueData,
						backgroundColor: `${bgColor}`,
						borderWidth: 1,
						fill: true,
						lineTension: 0.1,
						borderColor: "black",
						borderCapStyle: 'butt',
						borderDash: [],
						borderDashOffset: 0.0,
						borderJoinStyle: 'miter',
						pointBorderColor: "black",
						pointBackgroundColor: "#fff",
						pointBorderWidth: 1,
						pointHoverRadius: 10,
						pointHoverBackgroundColor: "black",
						pointHoverBorderColor: "rgba(220,220,220,1)",
						pointHoverBorderWidth: 3,
						radius: 10,
						pointHitRadius: 10,
						spanGaps: false,
					}
				]
			},
			options: {
				hover: {
					mode: 'nearest',
					intersect: true
				},
				legend: {
					labels: {
						fontColor: "black",
						fontWeight: "bold",
						fontSize: 14
					}
				},
				responsive: true,
				maintainAspectRatio: false,
				scales: {
					yAxes: [{
						display: true,
						ticks: {
							beginAtZero: true,
							max: maxAxes_Y,
							min: 0,
							stepSize: 1
						}
					}],
					xAxes: [{
						display: true,
						ticks: {
							fontColor: "black",
							fontSize: 12,
						}
					}]
				}
			}
		});
	}

	function generateColor() {
		var hexa = "0123456789ABCDEF";
		var color = `#`;
		for(var i = 0; i < 6; i++) {
			color += hexa[Math.floor(Math.random() * 16)];
		}
		return color;
	}


</script>


@endsection