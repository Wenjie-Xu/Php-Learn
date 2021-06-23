<?php
    setcookie('username','wenjie',time()+10);
    setcookie('password','123456',time()+15);
    setcookie('tel','13456301251',time()+3600);
    # 指定目录下有效
    setcookie('company','uco',time()+10,'/special');
?>