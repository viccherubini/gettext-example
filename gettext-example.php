<?php

if ( false === function_exists('gettext') ) {
	echo "You do not have the gettext library installed with PHP.";
	exit(1);
}

$name = "Vic";
printf(_("Hello, %s, it is nice to see you today.\n"), $name);

exit(0);