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
            <div class="col-md-11" style="margin-left: 50px;">
            <table class="table table-bordered table-hover table-condensed">
<thead><tr><th title="Field #1">Strain</th>
<th title="Field #2">Accession Number</th>
<th title="Field #3">Core</th>
<th title="Field #4">Exclusive</th>
<th title="Field #5">SHARED</th>
<th title="Field #6">Total sRNA</th>
</tr></thead>
<tbody><tr>
<td>GD201008-001</td>
<td>CP003810</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">36</td>
<td align="right">61</td>
</tr>
<tr>
<td>GBS6</td>
<td>CP007572</td>
<td align="right">25</td>
<td align="right">6</td>
<td align="right">54</td>
<td align="right">85</td>
</tr>
<tr>
<td>GBS2-NM</td>
<td>CP007571</td>
<td align="right">25</td>
<td align="right">3</td>
<td align="right">46</td>
<td align="right">74</td>
</tr>
<tr>
<td>GBS1-NY</td>
<td>CP007570</td>
<td align="right">25</td>
<td align="right">10</td>
<td align="right">54</td>
<td align="right">89</td>
</tr>
<tr>
<td>HN016</td>
<td>CP011325</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">36</td>
<td align="right">61</td>
</tr>
<tr>
<td>YM001</td>
<td>CP011326</td>
<td align="right">25</td>
<td align="right">2</td>
<td align="right">34</td>
<td align="right">61</td>
</tr>
<tr>
<td>GX064</td>
<td>CP011327</td>
<td align="right">25</td>
<td align="right">3</td>
<td align="right">29</td>
<td align="right">57</td>
</tr>
<tr>
<td>2603V/R</td>
<td>AE009948</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">10</td>
<td align="right">35</td>
</tr>
<tr>
<td>A909</td>
<td>CP000114</td>
<td align="right">25</td>
<td align="right">1</td>
<td align="right">7</td>
<td align="right">33</td>
</tr>
<tr>
<td>NEM316</td>
<td>AL732656</td>
<td align="right">25</td>
<td align="right">2</td>
<td align="right">5</td>
<td align="right">32</td>
</tr>
<tr>
<td>09mas018883</td>
<td>HF952104</td>
<td align="right">25</td>
<td align="right">1</td>
<td align="right">6</td>
<td align="right">32</td>
</tr>
<tr>
<td>ILRI112</td>
<td>HF952106</td>
<td align="right">25</td>
<td align="right">4</td>
<td align="right">3</td>
<td align="right">32</td>
</tr>
<tr>
<td>ILRI005</td>
<td>HF952105</td>
<td align="right">25</td>
<td align="right">3</td>
<td align="right">3</td>
<td align="right">31</td>
</tr>
<tr>
<td>COH1</td>
<td>HG939456</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">13</td>
<td align="right">38</td>
</tr>
<tr>
<td>NGBS061</td>
<td>CP007631</td>
<td align="right">25</td>
<td align="right">1</td>
<td align="right">8</td>
<td align="right">34</td>
</tr>
<tr>
<td>NGBS572</td>
<td>CP007632</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">13</td>
<td align="right">38</td>
</tr>
<tr>
<td>CNCTC_10/84</td>
<td>CP006910</td>
<td align="right">25</td>
<td align="right">2</td>
<td align="right">2</td>
<td align="right">29</td>
</tr>
<tr>
<td>SS1</td>
<td>CP010867</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">6</td>
<td align="right">31</td>
</tr>
<tr>
<td>H002</td>
<td>CP011329</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">7</td>
<td align="right">32</td>
</tr>
<tr>
<td>GBS85147</td>
<td>CP010319</td>
<td align="right">25</td>
<td align="right">3</td>
<td align="right">4</td>
<td align="right">32</td>
</tr>
<tr>
<td>SG-M1</td>
<td>CP012419</td>
<td align="right">25</td>
<td align="right">1</td>
<td align="right">4</td>
<td align="right">30</td>
</tr>
<tr>
<td>GBS_ST-1</td>
<td>CP013202</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">8</td>
<td align="right">33</td>
</tr>
<tr>
<td>SA20-06</td>
<td>CP003919</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">2</td>
<td align="right">27</td>
</tr>
<tr>
<td>138P</td>
<td>CP007482</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">2</td>
<td align="right">27</td>
</tr>
<tr>
<td>138spar</td>
<td>CP007565</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">2</td>
<td align="right">27</td>
</tr>
<tr>
<td>2-22</td>
<td>FO393392</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">2</td>
<td align="right">27</td>
</tr>
<tr>
<td>GX026</td>
<td>CP011328</td>
<td align="right">25</td>
<td align="right">0</td>
<td align="right">2</td>
<td align="right">27</td>
</tr>
</tbody></table>
             <!--  <table class="table table-bordered table-hover table-condensed spaceleft">
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
                         $i = 1;
                         foreach ($resultTableHgt as $result) {
                             echo "<tr>";
                             echo "<td> ". $result['abbreviation'] ." </td>";
                             echo "<td> ". $result['Count'] ." </td>";
                             echo "<td> ". json_encode($regionsInfo[$i++]) ." </td>";
                             echo "</tr>";
                         }
                     ?>
                 </table>
               </div> -->
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