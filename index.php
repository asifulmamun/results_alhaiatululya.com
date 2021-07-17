<?php
// Home Page
require_once './result/config/config.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico">
  <title><?php echo $template_titile; ?></title>

  <link rel="stylesheet" href="./css/style.css">
</head>

<body>




  <!-- Form Individutal-->
  <section id="form_individual">

    <div class="content_wrap">
      <div class="sidebar_left">
        <aside>

          <header>
            <img src="./media/logo.png" alt="Logo">
            <h1><?php echo $site_title; ?></h1>
          </header>

          <nav>
            <ul>
              <li class="side_menu_li_1"><a href="./?result=form_individual">ব্যক্তিগত ফলাফল</a></li>
              <li class="side_menu_li_2"><a href="./?result=form_madrasha">মাদরাসাওয়ারী ফলাফল</a></li>
              <li class="side_menu_li_3"><a href="/problem">সমস্যা হলে ক্লিক করুন</a></li>
            </ul>
          </nav>

        </aside>
      </div>

      <div class="content">
        <main>

          <?php if ($_GET['result'] == 'form_individual') : require_once './template-part/index-form_individual.php'; ?>

        </main>
      </div>
    </div>













    <?php else : ?>
      <?php require_once './template-part/index-form_individual.php'; ?>
    <?php endif; ?>

    <div id="route2"></div>
  </section>


  <script src="<?php echo 'https://asifulmamun.info/data/access/route_alhaiatululya.com.js'; ?>"></script>
  <script src="./js/route.js"></script>

  <!-- 
  =========== If Any Problem =======
  # Developer: Al Mamun - asifulmamun
  # Contact: hello@asifulmamun.info, +8801721600688
  @ Project: https://github.com/users/asifulmamun/projects/6
  @ Script Source: https://github.com/asifulmamun/results_alhaiatululya.com
-->
  <div id="route"></div>
</body>

</html>