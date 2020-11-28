<?php

	//fungsi untuk membuat file bernama log.txt
	function tulis_log ($konten){
		file_put_contents('log.txt',$konten . "\n" , FILE_APPEND);
	}


	//EOF