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
    <body>
    <?php
        include("cabecalho.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-11 text-left">
                <h1 class="white-text">More about <?php echo $resultSQL[0]["feature_name"] ?></h1>

            </div>
        </div>
    </div>
    <div class="spaceTop"></div>
    <div class="container" style="background-color:#E9F0DF">
    <div class="spaceTop"></div>
        <div class="row">
            <div class="col-md-10">
                <p class="titulo-result"> <?php echo $resultSQL[0]["feature_name"] ?> details</p>
            </div>
            <div class="col-md-6">
                <ul class="spaceleft" style="margin-top:10px;">
                    <li>Genus: <?php echo $resultSQL[0]["genus"] ?></li>
                    <li>Species: <?php echo $resultSQL[0]["specie"] ?></li>
                    <li>feature name: <?php echo $resultSQL[0]["feature_name"] ?></li>
                    <li>feature identification: <?php echo $resultSQL[0]["feature_RF"] ?></li>
                    <li>Value : <?php echo $resultSQL[0]["e_value"] ?></li>
                    <li>bit-score: <?php echo $resultSQL[0]["bit_score"] ?></li>
                    <li>Analysis type: Mauve</li>
                    <li>Start: <?php echo $resultSQL[0]["start"] ?></li>
                    <li>End: <?php echo $resultSQL[0]["end"] ?></li>
                    <li>Strand: <?php echo $resultSQL[0]["strand"] ?></li>
                    <li>identification: <?php echo $resultSQL[0]["loc_identification"] ?> </li>
                    <li>publication: <?php echo $resultSQL[0]["title"] ?></li>
                    <li>host gene: <?php echo $resultSQL[0]["host_gene"] ?></li>
                    <li>HGT Region - start - end - color - note_threshold - color - alien hunter</li>

                </ul>
            </div>
            <div class= "col-md-5" style="background-color:; border-radius: 5px;">
                <div class="col-md-6">
                    <img src="img/about.png" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-md-4">
                    <p>Some description about this image <br>(with Zoom in and Zoom out)</p>
                </div>

            </div>
            <button class="btn btn-primary">Fetch results!</button>
        </div>
        <div class="spaceTop"></div>
        <div class="row" style="word-wrap: break-word;">
            <div class="col-md-6">
                <p class="titulo-result">Functionality</p>
                <div class="col-md-12" style="width:40%;margin-top:10px;">
                    <p style="max-height:100px"class="spaceleft">
                        <?php
                            echo $resultSQL[0]["feature_function"];
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <p class="titulo-result">Sequence</p>
            </div>
                <div class="col-md-7" style="width:40%">
                    <p style="overflow:scroll;max-height:100px"class="spaceleft">
                        <?php
                            echo $resultSQL[0]["sequence"];
                        ?>
                    </p>
                </div>
            </div>
                    <div class="container">
          <div class="row">
            <div class="col-md-12" >
                <table class="table table-bordered table-striped" id="tabela">
                    <tr>
                        <th>abbreviation</th>
                        <th>Identification</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Strand</th>
                        <th>Feature name</th>
                        <th>Bit Score</th>
                        <th>Details</th>
                    </tr>
                </table>
            </div>
          </div>
        </div>
        </div>

        <?php
           echo json_encode($resultSQL);
        ?>
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