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
         <div id="pieChart"></div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/d3/4.7.2/d3.min.js"></script>
        <script src="js/d3pie.min.js"></script>
        <script>
        var pie = new d3pie("pieChart", {
            "header": {
                "title": {
                    "text": "AE009948",
                    "fontSize": 24,
                    "font": "open sans"
                },
                "subtitle": {
                    "text": "Regions annotation",
                    "color": "#999999",
                    "fontSize": 12,
                    "font": "open sans"
                },
                "titleSubtitlePadding": 9
            },
            "footer": {
                "color": "#999999",
                "fontSize": 10,
                "font": "open sans",
                "location": "bottom-left"
            },
            "size": {
                "canvasWidth": 597,
                "pieInnerRadius": "62%",
                "pieOuterRadius": "81%"
            },
            "data": {
                "sortOrder": "value-desc",
                "content": [
                    {
                        "label": "Core",
                        "value": 50,
                        "color": "#64a61f"
                    },
                    {
                        "label": "Shared",
                        "value": 20,
                        "color": "#7b6688"
                    },
                    {
                        "label": "Exclusive",
                        "value": 15,
                        "color": "#2181c1"
                    }
                ]
            },
            "labels": {
                "outer": {
                    "pieDistance": 32
                },
                "inner": {
                    "hideWhenLessThanPercentage": 3
                },
                "mainLabel": {
                    "fontSize": 20
                },
                "percentage": {
                    "color": "#ffffff",
                    "decimalPlaces": 0
                },
                "value": {
                    "color": "#adadad",
                    "fontSize": 11
                },
                "lines": {
                    "enabled": true
                },
                "truncation": {
                    "enabled": true
                }
            },
            "effects": {
                "pullOutSegmentOnClick": {
                    "effect": "linear",
                    "speed": 400,
                    "size": 8
                }
            },
            "misc": {
                "gradient": {
                    "enabled": true,
                    "percentage": 100
                }
            },
            "callbacks": {}
        });
        </script>

    </body>
</html>