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
                    <h1>About</h1>
                </div>
            </div>
        </div>
        <div class="spaceTop"></div>
        <div class="container spaceleftTeam">
            <div class="row">
                <div class="row">
                    <div class="col-md-10">
                    <h2>Method used to approach the data</h2>
                        <img src="img/pipeline.png" alt="Pipeline website" style="width:60%;margin-left: 150px;">
                        <figcaption>Fig. - Diagram representing how the data was manipulated. Step 1 - Information
                                    acquired through online 3rd party databases (NCBI) and software tools to gather
                                    data(bedtools). Step 2 - Organized all data into more specific information
                                    to ease the process of retrieving wanted infos. Step 3 - Developed website to
                                    increase user experience. Step 4 - Added graphic view to analise data from another
                                    perspective.
                        </figcaption>
                        <h2 class="spaceTop">Annotation and distribution of ncRNA families in genomes of Streptococcus <i>agalactiae</i></h2>
                    </div>
                </div>
                <div class="col-md-10">
                    <div style="margin-top: 30px;"></div>
                    <p style="font-size: 18px;text-align:justify;">
                    Streptococcus <i>agalactiae</i>, also known as Group B (GBS), is a Gram-positive bacterium that colonizes the gastrointestinal and
                    genitourinary tract of humans. This opportunistic, harmless bacterium has also been isolated from various animals,
                    such as fish and cattle. Non-coding RNAs (ncRNAs) act as modulators of gene expression in bacteria, as already
                    detected in GBS related species, such as Streptococcus pneumoniae and Streptococcus pyogenes. Nonetheless, little
                    is known about the genomic distribution of ncRNAs in S. agalactiae. Here, we present a comparative analysis of 27
                    S. agalactiae genomes, whereby more than 5 thousand genomic regions where identified and classified as Core,
                    Exclusive, and Shared genome sequences.
                    <br><br>These findings enabled us to identify a minimum/maximum of 25/25,
                    2/54 and 1/10 of ncRNAs when considered by region: the Core, Shared, and Exclusive, respectively. Notwithstanding,
                    we encountered an ncRNA number variation in the Shared and Exclusive regions, which is an indicative of the
                    genomic complexity of this bacterium. The knowledge about the genomic coordinates of these ncRNAs may
                    facilitate the selection of targets and provide directions for planning further studies. The data obtained
                    endorse the existence of an "open" pan-genome of S. agalactiae. Therefore, the original concept of pan-genome
                    could to be expanded to encompass the full range of functional transcripts, featuring a "Pan-Rnome".
                    </p>
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