<?php
//example 1
	if(is_integer(2938475)){
		echo "It is an integer. ";
	} else {
		echo 'It is not an integer. ';
		var_dump(is_integer(567));
		var_dump(is_integer(8008));
		var_dump(is_integer(123));
		var_dump(is_integer(false));
		}

	//example 2
	if(is_bool(true)){
		echo "It is a boolean. ";
	} else {
		echo 'It is not a boolean. ';
		var_dump(is_bool(true));
		var_dump(is_bool(false));
		}

//example 3
	if(is_null("bannana")){
		echo "It is null. ";
	} else {
		echo 'It is not null. ';
		var_dump(is_null("GHJ"));
		var_dump(is_null("8008"));
		var_dump(is_null(4557));
		var_dump(is_null(true));
		}
?>