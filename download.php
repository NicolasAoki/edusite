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
                        <p>Features</p>
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
                    <tr>
                        <td>
                            <a href="arquivos/Organismos/CP007571.fasta" download>
                                <p>CP007571.fasta</p>
                            </a>
                        </td>
                        <td>
                            <a href="arquivos/HGT_regions/CP007571.alienhunter.gff" download>
                                <p>CP007571.alienhunter.gff</p>
                            </a>
                        </td>
                        <td>
                            <a href="arquivos/sRNAs_annotations/CP007571.final.gff" download>
                                <p>CP007571.final.gff</p>
                            </a>
                        </td>
                        <td>
                            <a href="arquivos/regions_annotations/CORE_CP007571.gff" download>
                            <p>CORE_CP007571.gff</p>
                        </td>
                        <td>
                            <a href="arquivos/regions_annotations/SHARED_CP007571.gff" download>
                            <p>SHARED_CP007571.gff</p>
                        </td>
                        <td>
                            <a href="arquivos/regions_annotations/EXCLUSIVE_CP007571.gff" download>
                            <p>EXCLUSIVE_CP007571.gff</p>
                        </td>
                    </tr>
                </table>
                </div>
            </div>
        </div>

    </body>
</html>
