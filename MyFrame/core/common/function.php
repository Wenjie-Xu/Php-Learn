<?php
function p($var){
    if(is_null($var)){
        var_dump(NULL);
    } else {
        echo "<pre style='position:relative;z-index:1000;padding:10px;border-raduis:5px:
        background:#f5f5f5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9'>".$var."</pre>";
    }
}
?>