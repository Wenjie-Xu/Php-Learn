<?php
// 通过header形式设置cookie
header("Set-Cookie: a=1;expires=".gmdate('D, d M Y H:i:s \G\M\T', time()+3600));