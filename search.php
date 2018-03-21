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
		
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<link rel="stylesheet" href="css/font-awesome.min.css">


		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script src="node_modules/jspkg-archive/jquery.dynatable.js"></script>
		<link rel="stylesheet" type="text/css" href="node_modules/jspkg-archive/jquery.dynatable.css"/>
		

	</head>
	<script>

		$(document).ready(function(){
		  var selectedValues = null;
		  var val = [];
		  $(function(){
			$('#save').click(function(event){
			  event.preventDefault()
			  selectedValues = $('#select-organismos').val();
			  $(':checkbox:checked').each(function(i){
				val[i] = $(this).attr('name');
			  });
			  console.log(val);
			  console.log(selectedValues);
			  sendData()
			});
		  });
		  function sendData (){
			let data = {
			  "localization.loc_identification": val,
			  "organism.abbreviation": selectedValues
			}
			console.log(data)
			$.support.cors = true
			$.ajax({
			  url: "http://localhost/edusite/ep-dados.php",
			  data : JSON.stringify(data),
			  dataType: 'JSON',
			  contentType: "application/json",
			  crossDomain: true,
			  success: function(data,status){
					var aux_data = '';
					$.each(data,function(key,value){
						aux_data += '<tr>';
						aux_data += '<td>'+value.abbreviation+'</td>'
						aux_data += '</tr>';
					});
					console.log(aux_data);
					$('#tabela').append(aux_data);
			  },
			  type: 'post',
			  error: function (xhr, desc, err) {
				alert("error");
			  }
			});
		  }
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

		</div>
		<!-- /Hero-area -->
		<div class="spaceTop"></div>
		<div class="container">
		  <div class="row" style="background-color:#E0E4CC;border-radius:5px;">
				<div class="col-md-6 altura">
					<form id="myForm">
						<div class="col-md-5 form-group">
							<label for="exampleFormControlSelect2">Example multiple select</label>
							<select multiple class="form-control" id="select-organismos">
							<option>AE009948</option>
							<option>AL732656</option>
							<option>CP000114</option>
							<option>CP003810</option>
							<option>CP003919</option>
							</select>
						</div>
					<div class="col-md-5" style="margin-top:29px;">
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
					</div>
					</form>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<input type="text" name="sequence" placeholder="Insert sequence" style="background-color:white;margin-top:10px;">
						<div style="margin-top:10px;"></div>
						<label class="btn btn-info" for="my-file-selector">
								<input id="my-file-selector" type="file" style="display:none;">Choose text file
						</label>
				</div>
				<div class="col-md-6">
					<input type="text" name="srnaName" placeholder="sRNA name Ex:. tracrRNA" style="background-color:white;margin-top:10px;">
				</div>
				</div>
				<div class="col-md-12 spaceTop">
					<div class="col-md-2">
							<input type="text" name="start" placeholder="Start" style="background-color:white;margin-bottom:10px;">
					</div>
					<div class="col-md-2">
						<input type="text" name="end" placeholder="End" style="background-color:white;margin-bottom:10px;">
					</div>
					<div class="col-md-5">
						<button id="save" class="btn btn-primary">Submit</button>
						<button class="btn btn-success">redo search</button>
					</div>
				</div>
			</div>
		
		  </div>
		</div>
		<hr>
		<div class="container">
		  <div class="row">
			<div class="col-md-12" >
				<table class="table table-bordered table-striped" id="tabela">
					<tr>
						<th>abbreviation</th>
					</tr>
				</table>
			</div>
		  </div>
		</div>
		

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2018. All Rights Reserved. </span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


	</body>
</html>
