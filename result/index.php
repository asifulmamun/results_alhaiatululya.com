<?php

/* DB, Conifig
------------*/
require_once './config/conn.php'; // DB
require_once './config/config.php'; // configuration

$roll = $_GET['roll'];



/* For get result ('Column Name;)
* echo result_data('name');
------------------------------------*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <br><br><br>

    <center>
        <div class="notice">
            <h1>Please Download Before Print - for better font</h1>
            <button id="download" onclick="pdf()">Download</button>
        </div>
    </center>


    <!-- Main A4 Size Area - Div to capture. -->
    <div id="root">
        <header>
            <img src="./../media/logo.png" alt="Logo">
            <h1><?php echo $site_title; ?></h1>
            <h3><?php echo $result_titile . ' - ' . $result_year; ?></h3>
        </header>

        <div class="info">
            <p class="student_info"><span class="SutonnyMJ">†ivj bs:</span><span class="SutonnyMJ">&nbsp;<?php echo result_data('roll'); ?></span><span class="SutonnyMJ">cixÿv_©xi bvg:</span><span class="SutonnyMJ">&nbsp;<?php echo result_data('name'); ?></span></p>

            <p class="result_info"><span class="SutonnyMJ">†gvU:</span><span class="SutonnyMJ">&nbsp;<?php echo result_data('total'); ?></span><span class="SutonnyMJ">wefvM:</span><span class="SutonnyMJ">&nbsp;<?php echo result_data('result'); ?></span><span class="SutonnyMJ">¯’vb:</span><span class="SutonnyMJ">&nbsp;<?php echo result_data('merit_list'); ?></span><span class="SutonnyMJ">wKivAvZ:</span><span class="SutonnyMJ">&nbsp;<?php echo result_data('kirayat'); ?></span></p>
        </div>

        <div class="results">
            <table class="result_table">
                <thead>
                    <tr>
                        <th><span>বিষয়</span></th>
                        <th><span>ফলাফল</span></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><span class="SutonnyMJ">eyLvix 1g</span></td>
                        <td><span class="SutonnyMJ"><?php echo result_data('bukhari_1'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="SutonnyMJ">eyLvix 2q</span></td>
                        <td><span class="SutonnyMJ"><?php echo result_data('bukhari_2'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="SutonnyMJ">gymwjg 1g</span></td>
                        <td><span class="SutonnyMJ"><?php echo result_data('muslim_1'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="SutonnyMJ">gymwjg 2q</span></td>
                        <td><span class="SutonnyMJ"><?php echo result_data('muslim_2'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="SutonnyMJ">wZiwghx 1g</span></td>
                        <td><span class="SutonnyMJ"><?php echo result_data('tirmizi_1'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="SutonnyMJ">wZiwghx 2q</span></td>
                        <td><span class="SutonnyMJ"><?php echo result_data('tirmizi_2'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="SutonnyMJ">Avey `vD`</span></td>
                        <td><span class="SutonnyMJ"><?php echo result_data('abu_daud'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="SutonnyMJ">bvmvC I Beby gvRvn</span></td>
                        <td><span class="SutonnyMJ"><?php echo result_data('nasaie_ebn_maza'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="SutonnyMJ">kiû gvÔAvwbj Avmvi</span></td>
                        <td><span class="SutonnyMJ"><?php echo result_data('shorhu_manzil_asar'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="SutonnyMJ">gyIqvËv Avb</span></td>
                        <td><span class="SutonnyMJ"><?php echo result_data('mutta_an'); ?></span></td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td><span class="SutonnyMJ">†gvU</span></td>
                        <td><span class="SutonnyMJ"><?php echo result_data('total'); ?></span></td>
                    </tr>
                </tfoot>
            </table>


            </main>

        </div><!-- #root -->




        <br><br><br>


        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Include html2pdf bundle. -->
        <script src="./js/htmlToPdf.js"></script>
        <script>
            function pdf() {
                // Get the element.
                var element = document.getElementById('root');

                // Generate the PDF.
                html2pdf().from(element).set({
                    margin: 0,
                    filename: 'Result.pdf',
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        orientation: 'portrait',
                        unit: 'in',
                        format: 'A4',
                        compressPDF: false
                    }
                }).save();
            }
        </script>

        <!-- print button -->
        <script>
            function print() {
                window.print();
            }
        </script>
</body>

</html>