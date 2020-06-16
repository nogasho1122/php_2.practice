<?php

// パスワードを記録した場所
echo __FILE__;
// /Applications/MAMP/htdocs/php_2/mainte/test.php

echo '<br>';
// パスワード（暗号化）
(password_hash('password123', PASSWORD_BCRYPT));


?>