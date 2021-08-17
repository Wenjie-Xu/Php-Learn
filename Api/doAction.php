<?php

include_once './ResponseJson.php';

class Handle {
    use ResponseJson;
}

$handle = new Handle();
echo $handle->jsonSuccessData();