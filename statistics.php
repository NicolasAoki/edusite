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
        <div class="spaceTop"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <table>
                        <th>
                            <p>Data</p>
                        </th>
                        <th>
                            <p>Info</p>
                        </th>
                        <tr>
                            <td>Species</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>ncRNAS</td>
                            <td>40</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table>
                        <th>
                            <p>Data</p>
                        </th>
                        <th>
                            <p>Total</p>
                        </th>
                        <tr>
                            <td>Core</td>
                            <td>12366</td>
                        </tr>
                        <tr>
                            <td>Shared</td>
                            <td>11281</td>
                        </tr>
                        <tr>
                            <td>Exclusive</td>
                            <td>997</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="spaceTop"></div>
            <div class="row">
                <div class="col-md-3">
                    <table>
                        <th>
                            <p>Tools Used</p>
                        </th>
                        <tr>
                            <td>Infernal</td>
                        </tr>
                        <tr>
                            <td>Artemis</td>
                        </tr>
                        <tr>
                            <td>Mauve</td>
                        </tr>
                        <tr>
                            <td>Alien Hunter</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-9">
                    <table>
                        <th>
                            <p>Species</p>
                        </th>
                        <th>
                            <p>Number of HGT Regions</p>
                        </th>
                        <th>
                            <p>Region</p>
                        </th>
                        <?php
                        //tabela hgt count
                                foreach ($resultTableHgt as $result) {
                                    echo "<tr>";
                                    echo "<td> ". $b = $result['abbreviation'] ." </td>";
                                    echo "<td> ". $result['Count'] ." </td>";
                                    $a = json_encode($regionsInfo[AE009948]);
                                    echo "<td> ". $a ." </td>";
                                    echo "</tr>";
                                }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>