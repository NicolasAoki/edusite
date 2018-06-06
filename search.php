<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>StreptoRNA</title>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
 		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>

	</head>
	<script>
		let result = []

		$(document).ready(function(){
		 	var selectedValues = null;
		 	var val = [];
			$('#save').click(function(event){
				event.preventDefault();
				selectedValues = $('#select-organismos').val();
				$(':checkbox:checked').each(function(i){
				val[i] = $(this).attr('name');
				});
				sendData();
			});
			function sendData (){

				let data = {
					"localization.loc_identification": val,
					"organism.abbreviation": selectedValues
				}
				console.log($('#srnaName').val());
				if ($('#srnaName').val() != ''){
					data['feature.feature_name'] = $('#srnaName').val()
				}
				if ($('#startSequence').val() != ''){
					data['feature.start'] = $('#startSequence').val()
				}
				if ($('#endSequence').val() != ''){
					data['feature.end'] = $('#endSequence').val()
				}
				console.log(data);
				$.support.cors = true
				$.ajax({
					url: "/ep-dados.php",
					data : JSON.stringify(data),
					dataType: 'JSON',
					contentType: "application/json",
					crossDomain: true,
					success: success,
					type: 'post',
					error: function (errorStatus, xhr) {
						alert("Error"+JSON.stringify(errorStatus));
					}
				});
			}
			function success(data,status){
				result = data;
				var aux_data = '';
				var nome_botao = "View";
				var hgt = $('#checkbox4').is(':checked');
				var aux = 0;
				if(hgt){
					aux = 1;
				}
				aux_data += '<table class="table table-bordered table-striped" id="tabela">'
				aux_data += '<tr>';
				aux_data += '<th>abbreviation</th>'
				aux_data += '<th>Identification</th>'
				aux_data += '<th>Start</th>'
				aux_data += '<th>End</th>'
				aux_data += '<th>Strand</th>'
				aux_data += '<th>Feature name</th>'
				aux_data += '<th>Bit Score</th>'
				aux_data += '<th>Details</th>'
				aux_data += '</tr>'
				$.each(data,function(key,value){
					aux_data += '<tr>';
					aux_data += '<td>'+value.abbreviation+'</td>'
					aux_data += '<td>'+value.loc_identification+'</td>'
					aux_data += '<td>'+value.start+'</td>'
					aux_data += '<td>'+value.end+'</td>'
					aux_data += '<td style="text-align:center;">'+value.strand+'</td>'
					aux_data += '<td>'+value.feature_name+'</td>'
					aux_data += '<td>'+value.bit_score+'</td>'
					aux_data += '<td><a class="btn btn-primary meio" href="/ep-detalhes.php?feature_id='+value.feature_id+'&organism_id='+value.organism_id+'&publication_id='+value.publication_id+'&type_type_id='+value.type_type_id+'&analysis_id='+value.analysis_id+'&start='+value.start+'&end='+value.end+'&loc_identification='+value.loc_identification+'&hgt_selected='+aux+'" ">'+nome_botao+'</a></td>'
					aux_data += '</tr>';
				});
				aux_data += '</table>'
				//$('#tabela').append(aux_data);
				$('#tabela').replaceWith(aux_data);
			}
		});

		function pegaId(key){
			console.log(result[key]);
		}

		</script>
		<script>
			$(document).ready(function(){
			    $('#bttRNA').on('click', function(event) {
			         $('#srnaName').toggle('show');
			    });
			    $('#localization').on('click', function(event) {
			         $('#startSequence').toggle('show');
			         $('#endSequence').toggle('show');
			    });
			});
		</script>
	<body>
		<?php
			include("cabecalho.php");
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-10 text-left">
					<h1 class="white-text">Search</h1>

				</div>
			</div>
		</div>
		<!-- /Hero-area -->
		<div class="spaceTop"></div>
		<div class="container">
		  <div class="row" style="border-radius:5px;">
				<div class="col-md-12 altura" style="background-color: #e6e4d7">
					<form id="myForm">
						<div class="col-md-2 form-group">
							<label for="exampleFormControlSelect2">Search by Genome</label>
							<select multiple class="form-control" id="select-organismos">
								<option>AE009948</option>
								<option>AL732656</option>
								<option>CP000114</option>
								<option>CP003810</option>
								<option>CP003919</option>
								<option>CP006910</option>
								<option>CP007482</option>
								<option>CP007565</option>
								<option>CP007570</option>
								<option>CP007571</option>
								<option>CP007572</option>
								<option>CP007631</option>
								<option>CP007632</option>
								<option>CP010319</option>
								<option>CP010867</option>
								<option>CP011325</option>
								<option>CP011326</option>
								<option>CP011327</option>
								<option>CP011328</option>
								<option>CP011329</option>
								<option>CP012419</option>
								<option>CP013202</option>
								<option>FO393392</option>
								<option>HF952104</option>
								<option>HF952105</option>
								<option>HF952106</option>
								<option>HG939456</option>
							</select>
						</div>
					<div class="col-md-2">
						<p><b>Region Type</b></p>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" name="SHARED" id="checkbox1">
							<label class="form-check-label" for="exampleCheck1">Shared</label>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" name="CORE" id="checkbox2">
							<label class="form-check-label" for="exampleCheck1">Core</label>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" name="EXCLUSIVE" id="checkbox3">
							<label class="form-check-label" for="exampleCheck1">Exclusive</label>
						</div>
						<div class="form-check" id="hgt_select">
							<input type="checkbox" class="form-check-input" name="HGT" id="checkbox4">
							<label class="form-check-label" for="exampleCheck1">HGT</label>
						</div>
					</div>
					</form>
					<div class="col-md-2">
							 <p><b>By ncRNA</b></p>
							<input type="text" id="srnaName" placeholder="e.g, PreQ1" style="background-color:white;margin-top:10px;">
					</div>
					<div class="col-md-2">
							<p><b>Start</b></p>
							<input type="text" id="startSequence" placeholder="Start" style="background-color:white;margin-top:10px;">
					</div>
					<div class="col-md-2">
					 	<p><b>End</b></p>
						<input type="text" id="endSequence" placeholder="End" style="background-color:white;margin-top:10px;">
					</div>
				</div>
			</div>

			<div class="row" style="background-color: #e6e4d7">
				<div class="col-md-12 spaceTop" style="margin-bottom: 20px;">
					<button id="save" class="btn btn-primary" style="margin:auto;display:block;">Submit</button>
				</div>
			</div>
		</div>
		<hr>
		<div class="container">
		  <div class="row">
			<div class="col-md-12" >
				<table class="table table-bordered table-striped" id="tabela">
					<!-- <tr>
						<th>abbreviation</th>
						<th>Identification</th>
						<th>Start</th>
						<th>End</th>
						<th>Strand</th>
						<th>Feature name</th>
						<th>Bit Score</th>
						<th>Details</th>
					</tr> -->
				</table>
			</div>
		  </div>
		</div>

        <!-- Footer -->
        <?php
            include("footer.php");
        ?>
        
		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


	</body>
</html>
