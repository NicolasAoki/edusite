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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    </head>
    <script type="text/javascript">
        var request = $.ajax({
                url: "/ep-selectbox.php",
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
                    <h1>View</h1>
                </div>
            </div>
        </div>
        <div class="spaceTop"></div>
        <div class="container" style="background-color: #dce7ca">
            <div class="row" >
                <div class="col-md-6">
                    <h2>Regions Annotation</h2>
                    <p>Select Organism</p>
                    <select class="selectpicker" onchange="run()" id="graphPie" data-size="5" data-live-search="true">
                        <?php
                            $i = 0;
                            while($i < sizeof($selectValues)){
                                echo "<option data-tokens= " . $selectValues[$i]['abbreviation'] ." > " . $selectValues[$i]['abbreviation'] . "</option>";
                                $i++;
                            }
                        ?>
                    </select>
                    <div id="pieChart"></div>
                </div>
                <div class="col-md-5 whiteBorderedBg">
                    <p>&emsp; More than five thousand genomic regions were identified and classified as Core, Exclusive, and Shared
                    genome sequences. These findings enabled us to identify a minimum/maximum of 25/25, 2/54 and 1/10 of ncRNAs
                    when considered by region: the Core, Shared, and Exclusive, respectively. <br>&emsp; Notwithstanding, we encountered an
                    ncRNA number variation in the Shared and Exclusive regions, which is an indicative of the genomic complexity
                    of this bacterium. The knowledge about the genomic coordinates of these ncRNAs may facilitate the selection of
                     targets and provide directions for planning further studies.</p>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                    <h2 class="alignMiddle">ncRNA count by genome </h2>
<!--                     <p>Select feature</p>
<select class="selectpicker" onchange="runChart()" id="graphChart" data-size="5" data-live-search="true">
    <?php
        $i = 0;
        while($i < sizeof($selectFeatures)){
            echo "<option data-tokens= " . $selectFeatures[$i]['feature_name'] ." > " . $selectFeatures[$i]['feature_name'] . "</option>";
            $i++;
        }
    ?>
</select>
<div style="margin-top: 130px"></div> -->
                    <div id="chart"></div>
            </div>
        </div>
        </div>
        <!-- Footer -->
        <?php
            include("footer.php");
        ?>
    <!-- preloader -->
    <div id='preloader'><div class='preloader'></div></div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/4.7.2/d3.min.js"></script>
    <script src="js/d3pie.min.js"></script>
    <script>
        <?php
            echo "var regions = ".json_encode($regionsInfo).";";
            echo "var abbreviation = " .json_encode($selectValues).";";
        ?>
        var answer;
        var pie = new d3pie('pieChart', {
            'header': {
                'title': {
                    'text': 'AE009948',
                    'fontSize': 24,
                    'font': 'open sans'
                },
                'subtitle': {
                    'text': 'Regions annotation',
                    'color': '#999999',
                    'fontSize': 12,
                    'font': 'open sans'
                },
                'titleSubtitlePadding': 9
            },
            'footer': {
                'color': '#999999',
                'fontSize': 10,
                'font': 'open sans',
                'location': 'bottom-left'
            },
            'size': {
                'canvasWidth': 597,
                'pieInnerRadius': '62%',
                'pieOuterRadius': '81%'
            },
            'data': {
                'sortOrder': 'value-desc',
                'content': [
                    {
                        'label': 'Core',
                        'value': 458,
                        'color': '#64a61f'
                    },
                    {
                        'label': 'Shared',
                        'value': 67,
                        'color': '#7b6688'
                    },
                    {
                        'label': 'Exclusive',
                        'value': 0,
                        'color': '#2181c1'
                    }
                ]
            },
            'labels': {
                'outer': {
                    'pieDistance': 32
                },
                'inner': {
                    'hideWhenLessThanPercentage': 3
                },
                'mainLabel': {
                    'fontSize': 20
                },
                'percentage': {
                    'color': '#ffffff',
                    'decimalPlaces': 0
                },
                'value': {
                    'color': '#adadad',
                    'fontSize': 11
                },
                'lines': {
                    'enabled': true
                },
                'truncation': {
                    'enabled': true
                }
            },
            'effects': {
                'pullOutSegmentOnClick': {
                    'effect': 'linear',
                    'speed': 400,
                    'size': 8
                }
            },
            'misc': {
                'gradient': {
                    'enabled': true,
                    'percentage': 100
                }
            },
            'callbacks': {}
        });
        function run() {
            var select = document.getElementById("graphPie");
            answer = select.options[select.selectedIndex].index;
            titulo = select.options[select.selectedIndex].value;
            atual = answer+1;
            document.getElementById("pieChart").innerHTML = "";
            var pie = new d3pie('pieChart', {
                'header': {
                    'title': {
                        'text': titulo,
                        'fontSize': 24,
                        'font': 'open sans'
                    },
                    'subtitle': {
                        'text': 'Regions annotation',
                        'color': '#999999',
                        'fontSize': 12,
                        'font': 'open sans'
                    },
                    'titleSubtitlePadding': 9
                },
                'footer': {
                    'color': '#999999',
                    'fontSize': 10,
                    'font': 'open sans',
                    'location': 'bottom-left'
                },
                'size': {
                    'canvasWidth': 597,
                    'pieInnerRadius': '62%',
                    'pieOuterRadius': '81%'
                },
                'data': {
                    'sortOrder': 'value-desc',
                    'content': [
                        {
                            'label': 'Core',
                            'value': parseInt(regions[atual].CORE),
                            'color': '#64a61f'
                        },
                        {
                            'label': 'Shared',
                            'value': parseInt(regions[atual].SHARED),
                            'color': '#7b6688'
                        },
                        {
                            'label': 'Exclusive',
                            'value': parseInt(regions[atual].EXCLUSIVE),
                            'color': '#2181c1'
                        }
                    ]
                },
                'labels': {
                    'outer': {
                        'pieDistance': 32
                    },
                    'inner': {
                        'hideWhenLessThanPercentage': 3
                    },
                    'mainLabel': {
                        'fontSize': 20
                    },
                    'percentage': {
                        'color': '#ffffff',
                        'decimalPlaces': 0
                    },
                    'value': {
                        'color': '#adadad',
                        'fontSize': 11
                    },
                    'lines': {
                        'enabled': true
                    },
                    'truncation': {
                        'enabled': true
                    }
                },
                'effects': {
                    'pullOutSegmentOnClick': {
                        'effect': 'linear',
                        'speed': 400,
                        'size': 8
                    }
                },
                'misc': {
                    'gradient': {
                        'enabled': true,
                        'percentage': 100
                    }
                },
                'callbacks': {}
            });
        }
    </script>

        <script src="https://d3js.org/d3.v5.min.js"></script>
        <script src="node_modules/c3-0.5.4/c3.min.js"></script>
        <script type="text/javascript">
        var chart = c3.generate({
            bindto:'#chart',
            data: {
                columns: [
                    ['ncRNA count', <?php
                                for ($i=0; $i < sizeof($countRna); $i++) {
                                    if($i == 26){
                                        $teste = str_replace('"',' ',json_encode($countRna[$i]['ncrnaCount']));
                                        echo $teste;
                                    }else{
                                        $teste = str_replace('"',' ',json_encode($countRna[$i]['ncrnaCount']));
                                        $teste = " " . $teste . ",";
                                        echo $teste;
                                    }

                                }
                            ?>],
                    ['HGT Count',<?php
                                for ($i=0; $i < sizeof($hgtGroup); $i++) {
                                    if($i == 26){
                                        $aux = str_replace('"',' ',json_encode($hgtGroup[$i]['Count']));
                                        echo $aux;
                                    }else{
                                        $aux = str_replace('"',' ',json_encode($hgtGroup[$i]['Count']));
                                        $aux = " " . $aux . ",";
                                        echo $aux;
                                    }

                                }
                            ?>]        
                ]
            },
            axis: {
                x: {
                    type: 'category',
                    categories: ['AE009948','AL732656','CP000114','CP003810','CP003919','CP006910','CP007482','CP007565','CP007570','CP007571','CP007572','CP007631','CP007632','CP010319','CP010867','CP011325','CP011326','CP011327','CP011328','CP011329','CP012419','CP013202','FO393392','HF952104','HF952105','HF952106','HG939456'],
                    tick:{
                        rotate:-30,
                        width:100
                    }
                }
            }
        });
        </script>
<!--
        <script type='text/javascript'>
            var chart = c3.generate({
            bindto: '#chart',
            data: {
                x : 'x',
                columns: [
                    ['x', 'AE009948','AL732656','CP000114','CP003810','CP003919','CP006910','CP007482','CP007565','CP007570','CP007571','CP007572','CP007631','CP007632','CP010319','CP010867','CP011325','CP011326','CP011327','CP011328','CP011329','CP012419','CP013202','FO393392','HF952104','HF952105','HF952106','HG939456'],
                    ['Core', 30, 200, 100, 100, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100, 100, 150, 250],
                    ['Shared', 10, 100, 50, 90, 300, 150, 100, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100],
                    ['Exclusive', 70, 10, 60, 30, 50, 125, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100, 100]
                ],
                type: 'bar',
            },
            title: {
                  text: 'tmRNA'
                },
            axis:{
                x:{
                    type:'category',
                    tick: {
                        rotate: -30,
                        multiline: false
                    },
                    height:100
                }
            },
            bar: {
                width: {
                    ratio: 0.5 // this makes bar width 50% of length between ticks
                }
                // or
                //width: 100 // this makes bar width 100px
            }
        });
        function runChart() {
            var select = document.getElementById("graphChart");
            answer = select.options[select.selectedIndex].value;
            document.getElementById("chart").innerHTML = ""
            var chart = c3.generate({
            bindto: '#chart',
            data: {
                x : 'x',
                columns: [
                    ['x', 'AE009948','AL732656','CP000114','CP003810','CP003919','CP006910','CP007482','CP007565','CP007570','CP007571','CP007572','CP007631','CP007632','CP010319','CP010867','CP011325','CP011326','CP011327','CP011328','CP011329','CP012419','CP013202','FO393392','HF952104','HF952105','HF952106','HG939456'],
                    ['Core', 30, 200, 100, 100, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100, 100, 150, 250],
                    ['Shared', 10, 100, 50, 90, 300, 150, 100, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100],
                    ['Exclusive', 70, 10, 60, 30, 50, 125, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100, 100, 150, 250, 30, 200, 100, 100]
                ],
                type: 'bar',
            },
            title: {
                  text: answer
                },
            axis:{
                x:{
                    type:'category',
                    tick: {
                        rotate: -30,
                        multiline: false
                    },
                    height:100
                }
            },
            bar: {
                width: {
                    ratio: 0.5 // this makes bar width 50% of length between ticks
                }
                // or
                //width: 100 // this makes bar width 100px
            }
        });
        }
        </script> -->

    </body>
</html>