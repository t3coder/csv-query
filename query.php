<?php
	/* Read the CSV-File into a new created file */

	if(file_exists('./get_fragrance_by_brand.csv'))
	{
		unlink('./get_fragrance_by_brand.csv');
	}
    /* The following code should contain the URL like: "https://..." */
	$csv_file = file_get_contents("./fragrance.csv");
	file_put_contents('./get_fragrance_by_brand.csv', $csv_file);

	$rows = file("get_fragrance_by_brand.csv");    

    /* Reads the CSV row by row into the new file */
	foreach($rows as $key => $row) {
		unset($rows[$key]);
	}

	file_put_contents("solved.txt", implode("\n", $rows));
	
?>