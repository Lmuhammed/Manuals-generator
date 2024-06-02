<?php require_once "partials/PHP_helpers/functions.php"; ?> 
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<title>إنتاج الدلائل</title>
<!-- icon declaration -->
<link rel="icon" href="partials/imgs/favicon.ico">
<!-- Source : https://icon-icons.com/icon/letter-c/34763 -->
<!-- end icon declaration -->
<link rel="stylesheet" href="<?php echo npmGetPaths('css'); ?>" > 
<link rel="stylesheet" href="partials/css/style.css">
</head>
<body>
    <?php require_once 'partials/PHP_helpers/navbar.php'; ?> 
    <main class="container mt-2">
    <section>
    <form method="post" action="/manual/index.php" >
    <div class="mb-3 h3" style="background-color: yellow;border: 1px solid black;">
    <label for="stack" class="form-label">إسم اللغة أو التقنية</label>
    <input type="text" class="form-control" id="stack" name="stack" placeholder="python / php / c ...">
    </div>
    <div class="px-2 py-2 mt-2 mb-2" style="border:1px solid yellow;">
    <input type="text" class="form-control mt-3 mb-3"  name="element_name[]" placeholder="إسم العنصر مثال  : while">
    <input type="text" class="form-control mt-3 mb-3"  name="element_description[]" placeholder="وصف العنصر مثال  : حلقة التكرارية لتكرار مجموعة أوامر حتى يتنفذ الشرط المطلوب">
    <bdo dir="ltr">
    <textarea class="form-control mt-3 mb-3" id="element_code" name="element_code[]" placeholder="while true : print('h')" rows="3"></textarea>    
    </bdo>
    </div>
    <div id="dynamic_part">
    </div>
    <div class="text-center fw-bold mt-3 mb-2">
    <div class="btn-group" role="group" aria-label="Basic example">
    <button type="submit" class="btn btn-success">إنتاج الدليل </button>
    <button type="reset" class="btn btn-danger">إلغاء</button>
    </div>
    </form>
    </section>
    <div class="text-center fw-bold mt-3 mb-2">
    <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary" onclick="add()">إضافة عناصر جديدة</button>
    <button type="button" class="btn btn-info"  onclick="remove()">حذف العتاصر</button>
    </div>
    </div>
</main>
<script src="partials/js/main.js"></script>
</body>
</html>
