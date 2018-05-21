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
    <div class="container" style="background-color:#E9F0DF;">
        <div class="spaceTop"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <h2> Species </h2>

                    <table>
                        <tr>
                            <td><b>Genus</b> </td>
                            <td><?php
                                    echo $resultSQL[0]["genus"];
                                    echo $hgt_choice;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Species </td>
                            <td><?php echo $resultSQL[0]["specie"] ?></td>
                        </tr>
                        <tr>
                            <td>Abbreviation </td>
                            <td><?php echo $resultSQL[0]["abbreviation"] ?></td>
                        </tr>

                    </table>
                </div>
            <div class="col-md-6">
                <h2>Localization</h2>
                    <table>
                        <tr>
                            <td><b>Identification</b></td>
                            <td><?php echo $resultSQL[0]["loc_identification"] ?></td>
                        </tr>
                        <tr>
                            <td><b>Analysis type</b></td>
                            <td>Mauve</td>
                        </tr>
                    </table>
            </div>
            </div>
        </div>
        <div class="row spaceTop">
            <div class="col-md-6">
                <h2> <?php echo $resultSQL[0]["feature_name"] ?> details<h2>
                <table>
                        <tr>
                            <td><b>Feature name</b></td>
                            <td><?php echo $resultSQL[0]["feature_name"] ?></td>
                        </tr>
                        <tr>
                            <td><b>Feature identification</b></td>
                            <td><?php echo $resultSQL[0]["feature_RF"] ?></td>
                        </tr>
                        <tr>
                            <td><b>Value</b></td>
                            <td><?php echo $resultSQL[0]["e_value"] ?></td>
                        </tr>
                        <tr>
                            <td><b>bit-score</b></td>
                            <td><?php echo $resultSQL[0]["bit_score"] ?></td>
                        </tr>
                        <tr>
                            <td><b>Start</b></td>
                            <td><?php echo $resultSQL[0]["start"] ?></td>
                        </tr>
                        <tr>
                            <td><b>End</b></td>
                            <td><?php echo $resultSQL[0]["end"] ?></td>
                        </tr>
                        <tr>
                            <td><b>Strand</b></td>
                            <td><?php echo $resultSQL[0]["strand"] ?></td>
                        </tr>
                        <tr>
                            <td><b>Analysis type</b></td>
                            <td>infernal_Rfam</td>
                        </tr>
                        <tr>
                            <td><b>Function</b></td>
                            <td style="word-wrap: break-word;"><?php echo $resultSQL[0]["feature_function"] ?></td>
                        </tr>
                        <tr>
                            <td><b>Sequence</b></td>
                            <td style="overflow: hidden"><?php echo $resultSQL[0]["sequence"] ?><button class="viewSequence">View</button></td>
                        </tr>
                    </table>
            </div>
                    <div class="col-md-6">
                <h2 class="hgt_table">HGT Region</h2>
                    <table class="hgt_table">
                        <tr>
                            <td><b>Tool</b></td>
                            <td>
                                <?php
                                    if ($hgtSQL[0]["tool"] != null)
                                        echo $hgtSQL[0]["tool"];
                                    else
                                        echo " NaN";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Start</b></td>
                            <td>
                                <?php
                                    if ($hgtSQL[0]["start"] != null)
                                        echo $hgtSQL[0]["start"];
                                    else
                                        echo "NaN";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><b>End</b></td>
                            <td>
                                <?php
                                    if ($hgtSQL[0]["end"] != null)
                                        echo $hgtSQL[0]["end"];
                                    else
                                        echo "NaN";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Value</b></td>
                            <td>
                                <?php
                                    if ($hgtSQL[0]["value"] != null)
                                        echo $hgtSQL[0]["value"];
                                    else
                                        echo "NaN";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Threshold</b></td>
                            <td>
                                <?php
                                    if ($hgtSQL[0]["threshold"] != null)
                                        echo $hgtSQL[0]["threshold"];
                                    else
                                        echo "NaN";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Strand</b></td>
                            <td>
                                <?php
                                    if ($hgtSQL[0]["strand"] != null)
                                        echo $hgtSQL[0]["strand"];
                                    else
                                        echo "NaN";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Colour</b></td>
                            <td>
                                <?php
                                    if ($hgtSQL[0]["colour"] != null)
                                        echo $hgtSQL[0]["colour"];
                                    else
                                        echo "NaN";
                                ?>
                            </td>
                        </tr>
                    </table>
                    <h3 class="hgt_table" style="color:red">
                     <?php
                        if ($hgtSQL == null)
                            echo "this feature does not have HGT region";
                    ?>
                </h3>
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

    <script>
        //verifica se o seletor HGT esta selecionado
        //se nao, a tabela e seus elementos sao setados como display none
        var item = <?php echo $hgtVisibility; ?>;
        if(item == 1){
            var a = document.getElementsByClassName("hgt_table");
            for (var i=0;i<a.length;i+=1){
              a[i].style.display = 'none';
            }
        }
    </script>
    </body>

</html>