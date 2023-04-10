
<?php


if($_SERVER['SERVER_NAME'] == 'localhost' ) {

  /**DATA CONFIG**/
  define('DBNAME', 'mvc');
  define('DBHOST','localhost');
  define('DBUSER', 'root');
  define('DBPASS', '');
  define('DBDRIVER','');

  define('ROOT', 'http://localhost/MVC/public/');


} else {
  /**DATA CONFIG**/
  define('DBNAME', 'mvc');
  define('DBHOST','localhost');
  define('DBUSER', 'root');
  define('DBPASS', '');
  define('DBDRIVER','');

define('ROOT', 'http://wwww.website.com');


}


