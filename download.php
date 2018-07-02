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
            sort($srna);
            sort($CORE);
            sort($EXCLUSIVE);
            sort($SHARED);
            sort($organismo);
            sort($hgt);
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
                        <p>Name</p>
                    </th>
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
                                    print_r("<tr><td></td>");
                                    print_r("<td><a href='arquivos/all/organism_all.zip' download><p> All </p></a></td>");
                                    print_r("<td><a href='arquivos/all/hgt_all.zip' download><p>All</p></a></td>");
                                    print_r("<td><a href='arquivos/all/srna_all.zip' download><p>All</p></a></td>");
                                    print_r("<td><a href='arquivos/all/core_all.zip' download><p>All</p></a></td>");
                                    print_r("<td><a href='arquivos/all/shared_all.zip' download><p>All</p></a></td>");
                                    print_r("<td><a href='arquivos/all/exclusive_all.zip' download><p>All</p></a></td>");
                                    print_r("<td><a href='arquivos/all/all.zip' download><button>Fetch All</button></a></td></tr>");
                                    $i++;
                                }else{
                                    print_r("<tr><td><b>". substr($organismo[$i], 0,8) . "</b></td>");
                                    print_r("<td><a href='arquivos/Organismos/". $organismo[$i] ."' download>FASTA</a></td>");
                                    print_r("<td><a href='arquivos/HGT_regions/". $hgt[$i] ."' download>GFF</a><a href='arquivos/HGT_regions/". $hgt[$i] ."' download> | FASTA</td>");
                                    print_r("<td><a href='arquivos/sRNAs_annotations/". $srna[$i] ."' download>GFF</a><a href='arquivos/HGT_regions/". $srna[$i] ."' download> | FASTA</td>");
                                    print_r("<td><a href='arquivos/regions_annotations/CORE/". $CORE[$i] ."' download>GFF</a><a href='arquivos/HGT_regions/". $CORE[$i] ."' download> | FASTA</td>");
                                    print_r("<td><a href='arquivos/regions_annotations/SHARED/". $SHARED[$i] ."' download>GFF</a><a href='arquivos/HGT_regions/". $SHARED[$i] ."' download> | FASTA</td>");
                                    print_r("<td><a href='arquivos/regions_annotations/EXCLUSIVE/". $EXCLUSIVE[$i] ."' download>GFF</a><a href='arquivos/HGT_regions/". $EXCLUSIVE[$i] ."' download> | FASTA</td>");
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
        <?php
            include("footer.php");
        ?>

        <!-- preloader -->
        <div id='preloader'><div class='preloader'></div></div>
        <!-- /preloader -->

    </body>
</html>