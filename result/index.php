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
    <title><?php echo $template_titile; ?></title>

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
            <p class="student_info">
                <span>রোলঃ</span><span class="ansi_font">&nbsp;<?php echo result_data('roll'); ?></span>
                <span>নামঃ</span><span class="ansi_font">&nbsp;<?php echo result_data('name'); ?></span>
            </p>

            <p class="result_info">
                <span>বিভাগঃ</span><span>&nbsp;<?php echo division(result_data('division')); ?></span>
                <span>কিরাআতঃ</span><span class="ansi_font">&nbsp;<?php echo result_data('kiriyat_111'); ?></span>
                <span>সর্বমোটঃ</span><span class="ansi_font">&nbsp;<?php echo result_data('total'); ?></span>
            </p>
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
                        <td><span>বুখারী ১ম</span></td>
                        <td><span class="ansi_font"><?php echo result_data('bukhari_101'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span>বুখারী ২য়</span></td>
                        <td><span class="ansi_font"><?php echo result_data('bukhari_102'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span>মুসলিম ১ম</span></td>
                        <td><span class="ansi_font"><?php echo result_data('muslim_103'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span>মুসলিম ২য়</span></td>
                        <td><span class="ansi_font"><?php echo result_data('muslim_104'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span>তিরমিযী ১ম</span></td>
                        <td><span class="ansi_font"><?php echo result_data('tirmizi_105'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span>তিরমিযী ২য়</span></td>
                        <td><span class="ansi_font"><?php echo result_data('tirmizi_106'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span>আবু দাউদ</span></td>
                        <td><span class="ansi_font"><?php echo result_data('abu_daud_107'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span>নাসাঈ ও ইবনু মাজাহ</span></td>
                        <td><span class="ansi_font"><?php echo result_data('nasai_108'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span>শরহু মা'আনিল আসার</span></td>
                        <td><span class="ansi_font"><?php echo result_data('tohavi_109'); ?></span></td>
                    </tr>
                    <tr>
                        <td><span>মুওয়াত্তাআন</span></td>
                        <td><span class="ansi_font"><?php echo result_data('muatta_110'); ?></span></td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td><span>সর্বমোট</span></td>
                        <td><span class="ansi_font"><?php echo result_data('total'); ?></span></td>
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
                    filename: '<?php echo result_data('roll'); ?>_Takmil_1442_Hijri.pdf',
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