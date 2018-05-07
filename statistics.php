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
                    <h1>Statistics</h1>
                </div>
            </div>
        </div>
        <div class="spaceTop"></div>
        <div class="container">
            <div class="row" style="background-color: #dce7ca">
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
                <div class="col-md-6">
                    <h2>features on HGT Regions</h2>
                    <p>Select feature</p>
                    <select class="selectpicker" data-size="5" data-live-search="true">
                        <?php
                            $i = 0;
                            while($i < sizeof($selectFeatures)){
                                echo "<option data-tokens= " . $selectFeatures[$i]['feature_name'] ." > " . $selectFeatures[$i]['feature_name'] . "</option>";
                                $i++;
                            }
                        ?>
                    </select>
                    <div style="margin-top: 130px"></div>
                    <div id="chart"></div>
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

    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/4.7.2/d3.min.js"></script>
    <script src="js/d3pie.min.js"></script>
    <script>
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
                        'value': 50,
                        'color': '#64a61f'
                    },
                    {
                        'label': 'Shared',
                        'value': 20,
                        'color': '#7b6688'
                    },
                    {
                        'label': 'Exclusive',
                        'value': 15,
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
            answer = select.options[select.selectedIndex].value;
            document.getElementById("pieChart").innerHTML = "";
            var pie = new d3pie('pieChart', {
                'header': {
                    'title': {
                        'text': answer,
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
                            'value': 50,
                            'color': '#64a61f'
                        },
                        {
                            'label': 'Shared',
                            'value': 20,
                            'color': '#7b6688'
                        },
                        {
                            'label': 'Exclusive',
                            'value': 15,
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

        <script type='text/javascript'>
            var chart = c3.generate({
            bindto: '#chart',
            data: {
                x : 'x',
                columns: [
                    ['x', 'AE009948','CP000114','AL732656','CP003810','CP003919','FO393392'],
                    ['Core', 30, 200, 100, 100, 150, 250],
                    ['Shared', 10, 100, 50, 90, 300, 150],
                    ['Exclusive', 70, 10, 60, 30, 50, 125]
                ],
                type: 'bar',
            },
            axis:{
                x:{
                    type:'category',
                    tick: {
                        rotate: 0,
                        multiline: false
                    },
                    height:30
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
        </script>
    </body>
</html>