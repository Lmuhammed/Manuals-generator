
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $_POST['stack'] ."'s CheatSheet"; ?></title>
    <!-- icon declaration -->
    <link rel="icon" href="../css/pictures/favicon.ico">
    <!-- Source : https://icon-icons.com/icon/letter-c/34763 -->
    <!-- end icon declaration -->
    <link rel="stylesheet" href="../Boostrab/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
  <nav>
  <p class="h1 text-center text-success">
    دليل 
    <b><?=$_POST["stack"] ?></b>
    <button class="btn btn-warning d-print-none" type="button" onclick="window.print()">طباعة</button>
  </p>
  </nav>
  <main class="container mt-2">
  <?php
    $nb_elemts=count($_POST["element_name"]);
    $i=(int)0;
    for ($i=0; $i < $nb_elemts; $i++) { 
    $element_name=$_POST["element_name"][$i];
    $element_description=$_POST["element_description"][$i];
    $element_code=$_POST["element_code"][$i];
    $Show_nb_element=$i+1;
    $var = <<< TEXT
    <b class="h2 text-info"> $Show_nb_element ) إسم العنصر</b>
    <p class="h2">
    $element_name
    </p>
    <b class="h2 text-info">وصف العنصر</b>
    <p class="h2">
    $element_description
    </p>
    <div class="pb-2">
    <b class="h2 text-info">الشيفرة</b>
    <button class="btn btn-primary d-print-none" type="button" onclick="copyToClipboard()">نسخ إلى الحافظة</button>
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
  </main>
<script>
function copyToClipboard() {
  var copyText = document.getElementById("code");
  var range = document.createRange();
  range.selectNode(copyText);
  window.getSelection().removeAllRanges();
  window.getSelection().addRange(range);
  document.execCommand("copy");
  window.getSelection().removeAllRanges();
  alert("تم نسخ الشيفرة إلى الحافظة ، قم بعمل شيء رائع :D");
}
</script>
</body>
</html>
