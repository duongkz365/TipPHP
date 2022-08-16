<?php
$config_dir = scandir("config");
if(!empty($config_dir)){
    foreach($config_dir as $item){
        if($item != "." && $item != ".." && file_exists("config/".$item)){
            require_once "./config/".$item;
        }
    }
}
?>
