<?php require_once "partials/PHP_helpers/functions.php"; ?> 
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<title>إنتاج الدلائل</title>
<!-- icon declaration -->
<link rel="icon" href="partials/imgs/favicon.svg">
<!-- Source : https://icons.getbootstrap.com/icons/journal-bookmark-fill/-->
<!-- end icon declaration -->
<link rel="stylesheet" href="<?php echo npmGetPaths('css'); ?>" > 
<link rel="stylesheet" href="partials/css/style.css">
</head>
<body>
    <?php require_once 'partials/PHP_helpers/navbar.php'; ?> 
    <main class="container mt-2">
    <form method="post" action="/manual/index.php" class="px-2 py-2 mx-2 my-2">
    <div class="mb-3 h3 px-2 py-2 mx-2 my-2 text-center">
    <label for="stack" class="form-label">إسم اللغة أو التقنية</label>
    <input type="text" class="form-control" id="stack" name="stack" placeholder="python / php / c ...">
    </div>
    <div class="px-2 py-2 mt-2 mb-2">
    <input type="text" class="form-control mt-3 mb-3"  name="element_name[]" placeholder="إسم العنصر مثال  : while">
    <input type="text" class="form-control mt-3 mb-3"  name="element_description[]" placeholder="وصف العنصر مثال  : حلقة التكرارية لتكرار مجموعة أوامر حتى يتنفذ الشرط المطلوب">
    <bdo dir="ltr">
    <textarea class="form-control mt-3 mb-3" id="element_code" name="element_code[]" placeholder="while true : print('h')" rows="3"></textarea>    
    </bdo>
    </div>
    <div id="dynamic_part">
    </div>
    <!-- buttons -->
    <div class="row justify-content-center">
        <div class="col-5 px-1 py-1" style="width: 50%;">
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-success">إنتاج الدليل</button>
        <button type="reset" class="btn btn-danger" >إلغاء</button>
        </div>
    </div>
        <div class="col-5 px-1 py-1">
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-secondary" onclick="add()">إضافة عنصر جديد</button>
        <button type="button" class="btn btn-info"  onclick="remove()">حذف عنصر</button>
        </div>
        </div>
        </div>
    <!-- end buttons -->
    </form>
    </main>
    <script src="partials/js/main.js"></script>
</body>
</html>
