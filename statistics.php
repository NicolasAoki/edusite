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
            <div class="col-md-11" style="margin-left: 50px;"><table class="table table-bordered table-hover table-condensed spaceleft">
            <p>*There are 458 Core regions, those are strict the same for each genome.</p>
                     <th>
                         <p>Species</p>
                     </th>
                     <th>
                         <p>Strain</p>
                     </th>
                     <th>
                         <p>HGT Regions</p>
                     </th>
                     <th>
                         <p>Exclusive Regions</p>
                     </th>
                     <th>
                         <p>Shared Regions</p>
                     </th>
                     <th>
                         <p>Total ncRNA</p>
                     </th>
                     <?php
                     //tabela hgt count
                         $i = 1;
                         foreach ($resultTableHgt as $result) {
                            //tirando aspas dos valores
                             if($i == 26){
                                break;
                             }
                             $shared = str_replace('"','',json_encode($regionsInfo[$i]['SHARED']));
                             $exclusive = str_replace('"','',json_encode($regionsInfo[$i]['EXCLUSIVE']));
                             $rnaCount = str_replace('"','',json_encode($regionsInfo[$i]['rnaCount']));
                             echo "<tr>";
                             echo "<td> ". $strain[$i] ." </td>";
                             echo "<td> ". $result['abbreviation'] ." </td>";
                             echo "<td> ". $result['Count'] ." </td>";
                             echo "<td> ". $exclusive ." </td>";
                             echo "<td> ". $shared ." </td>";
                             echo "<td> ". $rnaCount ." </td>";
                             echo "</tr>";
                             $i++;
                         }
                             echo "<tr>";
                             echo "<td> COH1 </td>";
                             echo "<td>  HG939456  </td>";
                             echo "<td> ". $result['Count'] ." </td>";
                             echo "<td> ". $exclusive ." </td>";
                             echo "<td> ". $shared ." </td>";
                             echo "<td> ". $rnaCount ." </td>";
                             echo "</tr>";
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