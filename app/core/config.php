<!-- configuration need for website usually we put here  -->
<?php
//this is my website title
define('WEBSITE_NAME' , "My Website" ); //this is how we create constants_---we can use it anywhere ..wherther o it is inside the class or any where

//setting database variabel
define('DB_TYPE', 'mysql');
define('DB_NAME','mvc(oop)_db');
define('DB_USER' , 'root');
define('DB_PASS','');
define('DB_HOST' , 'localhost');

// protocol type http or https
define('PROTOCOL' , 'http');

// root and assist paths 



define('ROOT' ,str_replace("app/core" , "public" , $path));
define('ASSETS' ,str_replace("app/core" , "public/assets" , $path));

//set to true to allow error reporting  
//set to false when you upload onlone to stop error reporting
define('DEBUG' , true);

if(DEBUG){
    ini_set("display_erroer" , 1);
}else{
    ini_set("display_erroer" , 0);
}
