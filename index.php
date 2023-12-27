<?php include_once "Includes/PHP_helpers/functions.php"; ?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<title>  cheatSheat Generator - إنتاج الدلائل   </title>
<link rel="stylesheet" href="Includes/Boostrab/bootstrap.rtl.min.css">
<link rel="stylesheet" href="Includes/css/style.css">
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
    <input type="text" class="form-control mt-3 mb-3"  name="element_name[]" placeholder="إسم العنصر مثال  : while">
    <input type="text" class="form-control mt-3 mb-3"  name="element_description[]" placeholder="وصف العنصر مثال  : حلقة التكرارية لتكرار مجموعة أوامر حتى يتنفذ الشرط المطلوب">
    <bdo dir="ltr">
    <textarea class="form-control mt-3 mb-3" id="element_code" name="element_code[]" placeholder="while true : print('h')" rows="3"></textarea>    
    </bdo>
    <div id="dynamic_part">
    </div>
    <div class="text-center fw-bold mt-3 mb-2">
    <div class="btn-group" role="group" aria-label="Basic example">
    <button type="submit" class="btn btn-success">إنتاج الدليل </button>
    <button type="reset" class="btn btn-danger">إلغاء</button>
    </div>
    </form>
    <div class="text-center fw-bold mt-3 mb-2">
    <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary" onclick="add()">إضافة عناصر جديدة</button>
    <button type="button" class="btn btn-info"  onclick="remove()">حذف العتاصر</button>
    </div>
    </div>
</div>
 <!-- <p>تحديثات قادمة إن شاء الله</p> -->
 <?php
  #echo readfile("Includes/FeatureNextUpdate.txt");
  NextUpdates();
   ?>   

<script src="Includes/JS/main.js"></script>
</body>
</html>
