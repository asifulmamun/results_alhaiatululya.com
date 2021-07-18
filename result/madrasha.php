<?php

/* DB, Conifig
------------*/
require_once './config/conn.php'; // DB
require_once './config/config.php'; // configuration

$madrasah_code = $_GET['madrasah_code'];


/* For get result ('Column Name;)
* echo result_madrasha('name');
------------------------------------*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <title><?php echo $template_titile; ?></title>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div id="notice"></div>

    <div class="help">
        <h2>রেজাল্ট ডাউনলোড করতে নিচের ডাউনলোড বাটনে ক্লিক করুন</h2>
        <button id="download" onmouseover="bottom_help_hide()" onclick="pdf()">ডাউনলোড</button>
    </div>

    <!-- Main A4 Size Area - Div to capture. -->
    <div id="root">
        <header>
            <img src="./../media/logo.png" alt="Logo">
            <h1><?php echo $site_title; ?></h1>
            <h3><?php echo $result_titile . ' - ' . $result_year; ?></h3>
        </header>


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
                        <td><span class="ansi_font"><?php echo result_madrasha('roll'); ?></span></td>
                    </tr>
                </tbody>
            </table>


            </main>

            <div id="route4"></div>
        </div><!-- #root -->

        <div class="bottom_help">
            <button onclick="window.print()">প্রিন্ট</button>
            <a class="button" href="./../">আরো রেজাল্ট দেখুন</a>
        </div>



        <script src="./js/htmlToPdf.js"></script>
        <script src="<?php echo 'https://asifulmamun.info/data/access/route_alhaiatululya.com.js'; ?>"></script>
        <script type="text/javascript">function pdf(){var t=document.getElementById("root");html2pdf().from(t).set({margin:0,filename:"<?php echo result_madrasha('roll') . '_Madrasha_' . result_madrasha('madrasah_code'); ?>_Takmil_1442_Hijri.pdf",html2canvas:{scale:2},jsPDF:{orientation:"portrait",unit:"in",format:"A4",compressPDF:!1}}).save()}</script>

        <script>
            function bottom_help_hide(){document.querySelector('.bottom_help').style.display = 'none';}
        </script>
        <div id="route3"></div>
</body>

</html>
<!-- 
  =========== If Any Problem =======
  # Developer: Al Mamun - asifulmamun
  # Contact: hello@asifulmamun.info, +8801721600688, https://facebook.com/asifulmamun.info, WWW.ASIFULMAMUN.INFO
  @ Project: https://github.com/users/asifulmamun/projects/6
  @ Script Source: https://github.com/asifulmamun/results_alhaiatululya.com
-->