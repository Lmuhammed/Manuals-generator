<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $_POST['stack'] ."'s CheatSheet"; ?></title>
    <link rel="stylesheet" href="../Boostrab/bootstrap.rtl.min.css">
</head>
<body>
    <div class="container mt-2">
    <p class="h1 text-center text-success">
    دليل 
    <b><?php  echo $_POST['stack']; ?></b>
    <button class="btn btn-warning d-print-none" type="button" onclick="window.print()">طباعة</button>
    </p>
    <b class="h2 text-info">إسم العنصر</b>
    <p class="h2">
    <?php  echo $_POST['element_name']; ?>
    </p>
    <b class="h2 text-info">وصف العنصر</b>
    <p class="h2">
    <?php echo $_POST['element_description']; ?>
    </p>
    <div class="pb-2">
    <b class="h2 text-info">الشيفرة</b>
    <button class="btn btn-primary d-print-none" type="button" onclick="copyToClipboard()">نسخ إلى الحافظة</button>
    </div>
    <div class="bg-dark text-success">
    <!-- لتغير اتجاه عرض النصوص ، كون معظم لغات البرمجة بالحروف الاتينية bdo -->
    <bdo dir="ltr">
    <pre class="h3" id="code">
    <?php  echo $_POST['element_code'];?>
    </pre>
    </bdo>
    </div>
    </div>
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
