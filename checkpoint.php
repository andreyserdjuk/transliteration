<?php

function checkpoint() {
	$f = parse_ini_file('options.ini');
	if ( $f['die'] == 1 )
		exit;
}
