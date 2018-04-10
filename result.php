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
                <p class="titulo-result"> Species </p>
                <div class="col-md-8">
                    <ul>
                        <li>Genus: <?php echo $resultSQL[0]["genus"] ?></li>
                        <li>Species: <?php echo $resultSQL[0]["specie"] ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <p class="titulo-result"> <?php echo $resultSQL[0]["feature_name"] ?> details</p>
            </div>
            <div class="col-md-6">
                <ul class="spaceleft" style="margin-top:10px;">
                    <li>feature name: <?php echo $resultSQL[0]["feature_name"] ?></li>
                    <li>feature identification: <?php echo $resultSQL[0]["feature_RF"] ?></li>
                    <li>Value : <?php echo $resultSQL[0]["e_value"] ?></li>
                    <li>bit-score: <?php echo $resultSQL[0]["bit_score"] ?></li>
                    <li>Start: <?php echo $resultSQL[0]["start"] ?></li>
                    <li>End: <?php echo $resultSQL[0]["end"] ?></li>
                    <li>Strand: <?php echo $resultSQL[0]["strand"] ?></li>
                    <li>Analysis type: infernal_Rfam</li>
                    <li>Function:
                        <?php
                            echo $resultSQL[0]["feature_function"];
                        ?>
                    </li>
                    <li>Sequence:
                        <p style="overflow:scroll;max-height:100px"class="spaceleft">
                            <?php
                                echo $resultSQL[0]["sequence"];
                            ?>
                        </p>
                    </li>
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
        <div class="row">
            <div class="col-md-10">
                <p class="titulo-result">Localization</p>
                <ul>
                    <li>identification: <?php echo $resultSQL[0]["loc_identification"] ?> </li>
                    <li>Analysis type: Mauve</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <p class="titulo-result">HGT Region</p>
                <ul>
                    <li>tool: <?php echo $resultSQL[0]["tool"] ?> </li>
                    <li>start: <?php echo $resultSQL[0]["hgtstart"] ?> </li>
                    <li>end: <?php echo $resultSQL[0]["hgtend"] ?></li>
                    <li>value: <?php echo $resultSQL[0]["hgtvalue"] ?></li>
                    <li>threshold: <?php echo $resultSQL[0]["hgtend"] ?></li> </li>
                    <li>strand: <?php echo $resultSQL[0]["hgtstrand"] ?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <p class="titulo-result">Host Gene</p>
                <ul>
                    <li>host gene:
                        <?php
                            foreach ($resultSQL as $key => $value) {
                                echo json_encode($value);
                            }
                        ?>
                    </li>
                </ul>
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