<?php require_once "../partials/PHP_helpers/functions.php"; ?> 
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $_POST['stack'] ."'s CheatSheet"; ?></title>
    <!-- icon declaration -->
    <link rel="icon" href="../partials/imgs/favicon.svg">
    <!-- Source : https://icons.getbootstrap.com/icons/journal-bookmark-fill/-->
    <!-- end icon declaration -->
    <link rel="stylesheet" href="<?php echo npmGetPaths('css'); ?> "> 
    <link rel="stylesheet" href="../partials/css/style.css">
</head>
<body>
<?php require_once '../partials/PHP_helpers/navbar.php'; ?> 
  <main class="container mt-2">
  <div class="row justify-content-center">
    <div class="col-8 h1 text-center">  
    دليل  
    <?=$_POST["stack"] ?>
    </div>
    <div class="col-4 d-grid gap-2">
        <button class="btn btn-success d-print-none" type="button" onclick="window.print()">طباعة</button>
    </div>
  </div>
  <?php
    $nb_elemts=count($_POST["element_name"]);
    $i=(int)0;
    for ($i=0; $i < $nb_elemts; $i++) { 
    $element_name=$_POST["element_name"][$i];
    $element_description=$_POST["element_description"][$i];
    $element_code=$_POST["element_code"][$i];
    $Show_nb_element=$i+1;
    $var = <<< TEXT
    <p class="h2"> عنصر رقم $Show_nb_element </p>
    <b class="h2 "> إسم العنصر</b>
    <p class="h2">
    $element_name
    </p>
    <b class="h2">وصف العنصر</b>
    <p class="h2">
    $element_description
    </p>
    <div class="pb-2">
    <div class="row justify-content-center">
    <div class="col-8 h2">  
    الشيفرة
    </div>
    <div class="col-4 d-grid gap-2">
    <button class="btn btn-warning d-print-none" type="button" onclick="copyToClipboard()">نسخ إلى الحافظة</button>
    </div>
    </div>
    </div>
    <div class="bg-dark text-success">
    <!-- لتغير اتجاه عرض النصوص ، كون معظم لغات البرمجة بالحروف الاتينية bdo -->
    <bdo dir="ltr">
    <pre class="h3" id="code">
    $element_code
    </pre>
    </bdo>
    </div>
    TEXT;
    echo $var;
    }
   ?>
   <p class="px-2 py-2 mx-2 my-2">
    بكل فخر ،تم الإنتاج بمساعدة <a href="https://github.com/X00Byte/Manuals-generator">Manuals-generator</a>
  </p>
  </main>
  <script src="../partials/js/main.js"></script>
</body>
</html>
