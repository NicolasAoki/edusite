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
            if ($handle = opendir('arquivos/regions_annotations/')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    $annotation[] = $entry;
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
                    <?php
                    print_r(sizeof($annotation));
                        for ($i=0; $i < sizeof($organismo); $i++){
                            for ($j=0; $j < sizeof($hgt) ; $j++){
                                for ($k=0; $k < sizeof($srna); $k++){
                                    for ($l=0; $l < sizeof($annotation); $l++) {
                                        $org = substr($organismo[$i],0,8);
                                        $HGT = substr($hgt[$j],0,8);
                                        $SRNA = substr($srna[$k],0,8);
                                        $ANNOT = substr($annotation[$l], 0,3);
                                        if( ($org === $HGT) && ($org === $SRNA) ){
                                            print_r("<tr><td><a href='arquivos/Organismos/". $org .".fasta' download><p>". $org ."</p></a></td>");
                                            print_r("<td><a href='arquivos/HGT_regions/". $HGT .".alienhunter.gff' download><p>.gff</p></a></td>");
                                            print_r("<td><a href='arquivos/sRNAs_annotations/". $SRNA .".final.gff' download><p>.gff</p></a></td>");
                                            if($ANNOT == 'COR')
                                                print_r("<td><a href='arquivos/regions_annotations/". $org .".gff' download><p>". $org ."</p></a></td>");
                                            if($ANNOT == 'EXC')
                                                print_r("<td><a href='arquivos/regions_annotations/". $org .".gff' download><p>". $org ."</p></a></td>");
                                            else
                                                print_r("<td><a href='arquivos/regions_annotations/". $org .".gff' download><p>". $org ."</p></a></td></tr>");
                                            break;
                                        }
                                    }
                                }
                            }
                        }
                    ?>
                </table>
                </div>
            </div>
        </div>
    </body>
</html>
