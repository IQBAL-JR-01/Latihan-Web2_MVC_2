<?php
// pemanggilan file site.php
require_once "../app/config/site.php";
// pemanggilan (autoload) semua file yang ada pada folder "core"
spl_autoload_register(function($files){
require_once "../app/core/{$files}.php";
});
?>