<?php
function npmGetPaths($argument ,$lang='ar') {
    if ($argument === "css") {
        if( ! ($lang === 'ar') ){
        $path ='/node_modules/bootstrap/dist/css/bootstrap.min.css';
        }
        $path ='/node_modules/bootstrap/dist/css/bootstrap.rtl.min.css';
    }elseif ($argument === "js") {
        $path ='/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js';
    }else{
        echo 'ERROR ... in including bootstrap';
        die;
        
    }
    return $path;
}
?>