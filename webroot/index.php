
<?php
define('WEBROOT', dirname(__FILE__));
define('ROOT', dirname(WEBROOT));
define('DS', DIRECTORY_SEPARATOR);
define('CORE', ROOT .DS. 'core');
define('BASE_URL', dirname(dirname($_SERVER['REQUEST_URI'])));
?>
<pre>
	
<?php
//print_r($_SERVER);
?>
</pre>
<?php
require CORE.DS.'includes.php';

new Dispatcher() ;


?>

<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<span class="badge">new</span>


