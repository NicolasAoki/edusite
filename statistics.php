<!DOCTYPE html>
<html lang="en">
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
    <script type="text/javascript">
    var request = $.ajax({
            url: "/ep-statistics.php",
            type: 'get'
        });
    </script>
    <body>
        <?php
            include('cabecalho.php');
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Statistics</h1>
                </div>
            </div>
        </div>
<!-- table table-bordered table-hover table-condensed -->
    <div class="spaceTop"></div>
        <div class="row spaceleft">
            <div class="col-md-11">
                <table>
                    <th>
                        <p>Species</p>
                    </th>
                    <th>
                        <p>Strain</p>
                    </th>
                    <th>
                        <p>Number of HGT Regions</p>
                    </th>
                    <th>
                        <p>Core</p>
                    </th>
                    <th>
                        <p>Exclusive</p>
                    </th>
                    <th>
                        <p>Shared</p>
                    </th>
                    <th>
                        <p>Total ncRNA</p>
                    </th>
                    <?php
                    //tabela hgt count
                        foreach ($resultTableHgt as $result) {
                            echo "<tr>";
                            echo "<td> ". $b = $result['abbreviation'] ." </td>";
                            echo "<td> ". $result['Count'] ." </td>";
                            //echo $c ="'".$b."'";
                            $c = str_replace(' ', '', $c);
                            echo "<td> ". json_encode($regionsInfo[CP003919]) ." </td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
                </div>
            </div>
        </div>
    </body>
</html>