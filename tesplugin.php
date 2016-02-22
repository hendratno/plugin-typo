<?php 
/*
Plugin Name: Tes Plugin
Plugin URI: www.pondokprogrammer.com
Description: memberikan kata-kata pada konten
Author: hendrat
Author URI: hendrat.pondokprogrammer.com
Version: 1.0
License: GPLv2
*/

add_filter( 'the_content', 'never_typo' );
function never_typo( $content ) {
	$arr = array(
	'bias', 'bisa',
	'yagn', 'yang',
	'dapt', 'dapat',
	'daftr', 'daftar',
	'dengn', 'dengan',
	'melaui', 'melalui'
	);

for($awal = 0; $awal<count($arr); $awal++) {
	$content = str_replace($arr[$awal], '<a href="http://hendrat.com">dumet school</a>', $content);
}
return $content;
}

// jika kita bingung, ingin memperbaiki jidup, harus memulai dari mana
// maka mulailah dengan memperbaiki sholat.