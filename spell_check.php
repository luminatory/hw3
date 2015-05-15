<?php
function spellCheck(){
	$count = $personal_data ['birthday'];
	$sum = array_sum ( $count );
	$letterArray = array (
			'A',
			'E',
			'I',
			'О',
			'U',
			'Y'
	);
	$name = $cv['Name'][0];
	if (in_array ( $name [0], $letterArray ) && ($sum % 2) == 0) {
		$title = $personal_data ['Job title'] = "Noob PHP";
	} elseif (in_array ( $name [0], $letterArray ) && ($sum % 2) == 1) {
		$title = $personal_data ['Job title'] = 'Intern PHP';
	} elseif (! in_array ( $name [0], $letterArray ) && ($sum % 2) == 1) {
		$title = $personal_data ['Job title'] = "Intern PHP developer";
	} elseif (! in_array ( $name [0], $letterArray ) && ($sum % 2) == 0) {
		$title = $personal_data ['Job title'] = "Junior PHP developer";
	};

	return $title;
}
?>