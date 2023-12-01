<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<title>  cheatSheat Generator - إنتاج الدلائل   </title>
<link rel="stylesheet" href="Includes/Boostrab/bootstrap.rtl.min.css">
<style>
      dialog {
        width: 40%;
      }
    </style>
</head>
<body>
    <div class="container mt-2">
    <p class="h1 text-center">
    إنتاج الدلائل - Cheatsheet generator
    </p>
    <form method="post" action="Includes/CheatSheet/index.php" >
    <div class="mb-3 h3">
    <label for="stack" class="form-label">إسم اللغة أو التقنية</label>
    <input type="text" class="form-control" id="stack" name="stack" placeholder="python / php / c ...">
    </div>
    <div class="mb-3 h3">
    <label for="element_name" class="form-label">إسم العنصر</label>
    <input type="text" class="form-control" id="element_name" name="element_name" placeholder="دالة while التكرارية">
    </div>
    <div class="mb-3 h3">
    <label for="element_description" class="form-label">وصف العنصر</label>
    <textarea class="form-control" id="element_description" rows="3" name="element_description" placeholder="تستعمل حلقة while التكرارية لتكرار مجموعة أوامر حتى يتنفذ الشرط المطلوب"></textarea>
    </div>
    <div class="mb-3 h3">
    <label for="element_code" class="form-label">الشيفرة</label>
    <bdo dir="ltr">
    <textarea class="form-control" id="element_code" rows="3" name="element_code" placeholder="while true :
//condition "></textarea>
    <bdo>
    </div>
    <div class="text-center fw-bold">
    <button type="submit" class="btn btn-lg btn-success">إنتاج</button>
    </div>
    </form>
    <p>تحديثات قادمة إن شاء الله</p>
  <?php
  echo readfile("Includes/FeatureNextUpdate.txt");
   ?> 
</div>
</body>
</html>
