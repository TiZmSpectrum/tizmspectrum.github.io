<?php

$database = new SQLite3('ads.db');

$ads_query = $database->query('SELECT * FROM ads ORDER BY RANDOM() LIMIT 1');	
$ad = $ads_query->fetchArray(SQLITE3_ASSOC);
	
$ad_image = 'fakeads/horizontal/' . $ad['image'];
$ad_url = $ad['url'];

?>