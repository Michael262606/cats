<?php
/*каталог навигации сайта выводится через массив из таблици в базе данных  */
 error_reporting(E_ALL);
 include_once 'db.php';
 include_once 'categoriey2.php'; 
 
            $categories = array(
                array(
                    'categoriey_id' =>1,
                    'categoriey_title' => 'главная',
                    'categoriey_slug' => 'main',
                ),
            );
            ?>

  
        
            