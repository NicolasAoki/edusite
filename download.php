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
            $organismo = array();
            $hgt = array();
            $srna = array();
            $annotation = array();
            if ($handle = opendir('arquivos/Organismos/')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                        $organismo[] = $entry;
                    }
                }
                closedir($handle);
            }
            if ($handle = opendir('arquivos/HGT_regions/')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                        $hgt[] = $entry;
                    }
                }
                closedir($handle);
            }
            if ($handle = opendir('arquivos/sRNAs_annotations/')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    $srna[] = $entry;
                    }
                }
                closedir($handle);
            }
            if ($handle = opendir('arquivos/regions_annotations/CORE/')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                        $CORE[] = $entry;
                    }
                }
                closedir($handle);
            }
            if ($handle = opendir('arquivos/regions_annotations/SHARED/')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                        $SHARED[] = $entry;
                    }
                }
                closedir($handle);
            }
            if ($handle = opendir('arquivos/regions_annotations/EXCLUSIVE/')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                        $EXCLUSIVE[] = $entry;
                    }
                }
                closedir($handle);
            }
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Download</h1>
                </div>
            </div>
        </div>
        <div class="spaceTop"></div>
           <div class="container">
            <div class="row">
                <div class="col-md-12">
                <table>
                    <th>
                        <p>Organism</p>
                    </th>
                    <th>
                        <p>HGT Region</p>
                    </th>
                    <th>
                        <p>ncRNAs</p>
                    </th>
                    <th>
                        <p>Core</p>
                    </th>
                    <th>
                        <p>Shared</p>
                    </th>
                    <th>
                        <p>Exclusive</p>
                    </th>
                    <th>
                        <p>Fetch</p>
                    </th>
                    <?php
                        $i = 0;
                            while($i < sizeof($organismo)){
                                if ( $i == 0 ){
                                    print_r("<tr><td><a href='arquivos/Organismos/". $organismo[$i] ."' download><p> All </p></a></td>");
                                    print_r("<td><a href='arquivos/HGT_regions/". $hgt[$i] ."' download><p>All</p></a></td>");
                                    print_r("<td><a href='arquivos/sRNAs_annotations/". $srna[$i] ."' download><p>All</p></a></td>");
                                    print_r("<td><a href='arquivos/regions_annotations/CORE/". $CORE[$i] ."' download><p>All</p></a></td>");
                                    print_r("<td><a href='arquivos/regions_annotations/EXCLUSIVE/". $EXCLUSIVE[$i] ."' download><p>All</p></a></td>");
                                    print_r("<td><a href='arquivos/regions_annotations/SHARED/". $SHARED[$i] ."' download><p>All</p></a></td>");
                                    print_r("<td><a href='arquivos/regions_annotations/SHARED/". $SHARED[$i] ."' download><button>Fetch All</button></a></td></tr>");
                                    $i++;
                                }else{
                                    print_r("<tr><td><a href='arquivos/Organismos/". $organismo[$i] ."' download><p>". $organismo[$i] ."</p></a></td>");
                                    print_r("<td><a href='arquivos/HGT_regions/". $hgt[$i] ."' download><p>GFF</p></a><a href='arquivos/HGT_regions/". $hgt[$i] ."' download><p>fasta</p></td>");
                                    print_r("<td><a href='arquivos/sRNAs_annotations/". $srna[$i] ."' download><p>GFF</p></a><a href='arquivos/HGT_regions/". $hgt[$i] ."' download><p>fasta</p></td>");
                                    print_r("<td><a href='arquivos/regions_annotations/CORE/". $CORE[$i] ."' download><p>GFF</p></a><a href='arquivos/HGT_regions/". $hgt[$i] ."' download><p>fasta</p></td>");
                                    print_r("<td><a href='arquivos/regions_annotations/EXCLUSIVE/". $EXCLUSIVE[$i] ."' download><p>GFF</p></a><a href='arquivos/HGT_regions/". $hgt[$i] ."' download><p>fasta</p></td>");
                                    print_r("<td><a href='arquivos/regions_annotations/SHARED/". $SHARED[$i] ."' download><p>GFF</p></a><a href='arquivos/HGT_regions/". $hgt[$i] ."' download><p>fasta</p></td>");
                                    print_r("<td><a href='arquivos/regions_annotations/SHARED/". $SHARED[$i] ."' download><button>Fetch All</button></a></td></tr>");
                                    $i++;
                                }

                         }
                    ?>
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