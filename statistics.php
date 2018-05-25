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
<tbody><tr>
<th>Strain</th>
<th>Accession Number</th>
<th>Core</th>
<th>Exclusive</th>
<th>SHARED</th>
<th>Total sRNA</th>
<th>TOTAL CORE REGIONS</th>
<th>TOTAL EXCLUSIVE REGIONS</th>
<th>TOTAL SHARED REGIONS</th>
</tr>
<tr>
<td>GD201008-001</td>
<td><a href="/search.php">CP003810</a></td>
<td>25</td>
<td>0</td>
<td>36</td>
<td>61</td>
<td>452</td>
<td>5</td>
<td>1130</td>
</tr>
<tr>
<td>GBS6</td>
<td>CP007572</td>
<td>25</td>
<td>6</td>
<td>54</td>
<td>85</td>
<td>452</td>
<td>42</td>
<td>1133</td>
</tr>
<tr>
<td>GBS2-NM</td>
<td>CP007571</td>
<td>25</td>
<td>3</td>
<td>46</td>
<td>74</td>
<td>452</td>
<td>20</td>
<td>1136</td>
</tr>
<tr>
<td>GBS1-NY</td>
<td>CP007570</td>
<td>25</td>
<td>10</td>
<td>54</td>
<td>89</td>
<td>452</td>
<td>43</td>
<td>1108</td>
</tr>
<tr>
<td>HN016</td>
<td>CP011325</td>
<td>25</td>
<td>0</td>
<td>36</td>
<td>61</td>
<td>452</td>
<td>10</td>
<td>1156</td>
</tr>
<tr>
<td>YM001</td>
<td>CP011326</td>
<td>25</td>
<td>2</td>
<td>34</td>
<td>61</td>
<td>452</td>
<td>4</td>
<td>1086</td>
</tr>
<tr>
<td>GX064</td>
<td>CP011327</td>
<td>25</td>
<td>3</td>
<td>29</td>
<td>57</td>
<td>452</td>
<td>8</td>
<td>1131</td>
</tr>
<tr>
<td>2603V/R</td>
<td>AE009948</td>
<td>25</td>
<td>0</td>
<td>10</td>
<td>35</td>
<td>452</td>
<td>66</td>
<td>1202</td>
</tr>
<tr>
<td>A909</td>
<td>CP000114</td>
<td>25</td>
<td>1</td>
<td>7</td>
<td>33</td>
<td>452</td>
<td>40</td>
<td>1281</td>
</tr>
<tr>
<td>NEM316</td>
<td>AL732656</td>
<td>25</td>
<td>2</td>
<td>5</td>
<td>32</td>
<td>452</td>
<td>82</td>
<td>996</td>
</tr>
<tr>
<td>09mas018883</td>
<td>HF952104</td>
<td>25</td>
<td>1</td>
<td>6</td>
<td>32</td>
<td>452</td>
<td>21</td>
<td>1248</td>
</tr>
<tr>
<td>ILRI112</td>
<td>HF952106</td>
<td>25</td>
<td>4</td>
<td>3</td>
<td>32</td>
<td>452</td>
<td>56</td>
<td>986</td>
</tr>
<tr>
<td>ILRI005</td>
<td>HF952105</td>
<td>25</td>
<td>3</td>
<td>3</td>
<td>31</td>
<td>452</td>
<td>78</td>
<td>1041</td>
</tr>
<tr>
<td>COH1</td>
<td>HG939456</td>
<td>25</td>
<td>0</td>
<td>13</td>
<td>38</td>
<td>452</td>
<td>68</td>
<td>1131</td>
</tr>
<tr>
<td>NGBS061</td>
<td>CP007631</td>
<td>25</td>
<td>1</td>
<td>8</td>
<td>34</td>
<td>452</td>
<td>80</td>
<td>1383</td>
</tr>
<tr>
<td>NGBS572</td>
<td>CP007632</td>
<td>25</td>
<td>0</td>
<td>13</td>
<td>38</td>
<td>452</td>
<td>60</td>
<td>1094</td>
</tr>
<tr>
<td>CNCTC_10/84</td>
<td>CP006910</td>
<td>25</td>
<td>2</td>
<td>2</td>
<td>29</td>
<td>452</td>
<td>80</td>
<td>875</td>
</tr>
<tr>
<td>SS1</td>
<td>CP010867</td>
<td>25</td>
<td>0</td>
<td>6</td>
<td>31</td>
<td>452</td>
<td>5</td>
<td>1224</td>
</tr>
<tr>
<td>H002</td>
<td>CP011329</td>
<td>25</td>
<td>0</td>
<td>7</td>
<td>32</td>
<td>452</td>
<td>48</td>
<td>1096</td>
</tr>
<tr>
<td>GBS85147</td>
<td>CP010319</td>
<td>25</td>
<td>3</td>
<td>4</td>
<td>32</td>
<td>452</td>
<td>56</td>
<td>966</td>
</tr>
<tr>
<td>SG-M1</td>
<td>CP012419</td>
<td>25</td>
<td>1</td>
<td>4</td>
<td>30</td>
<td>452</td>
<td>49</td>
<td>1222</td>
</tr>
<tr>
<td>GBS_ST-1</td>
<td>CP013202</td>
<td>25</td>
<td>0</td>
<td>8</td>
<td>33</td>
<td>452</td>
<td>44</td>
<td>1259</td>
</tr>
<tr>
<td>SA20-06</td>
<td>CP003919</td>
<td>25</td>
<td>0</td>
<td>2</td>
<td>27</td>
<td>452</td>
<td>22</td>
<td>631</td>
</tr>
<tr>
<td>138P</td>
<td>CP007482</td>
<td>25</td>
<td>0</td>
<td>2</td>
<td>27</td>
<td>452</td>
<td>3</td>
<td>710</td>
</tr>
<tr>
<td>138spar</td>
<td>CP007565</td>
<td>25</td>
<td>0</td>
<td>2</td>
<td>27</td>
<td>452</td>
<td>3</td>
<td>691</td>
</tr>
<tr>
<td>2-22</td>
<td>FO393392</td>
<td>25</td>
<td>0</td>
<td>2</td>
<td>27</td>
<td>452</td>
<td>1</td>
<td>714</td>
</tr>
<tr>
<td>GX026</td>
<td>CP011328</td>
<td>25</td>
<td>0</td>
<td>2</td>
<td>27</td>
<td>452</td>
<td>2</td>
<td>729</td>
</tr>
</tbody></table>
   <!--          <table class="table table-bordered table-hover table-condensed spaceleft">
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
       </table> -->
                </div>
            </div>
        </div>
    </body>
</html>