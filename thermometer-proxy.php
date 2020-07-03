<?php

// Here we just grab a public URL and spit the contents back out
// with permissive headers, to get around javascript security.

// We don't have to worry too much about security in this case
// because we're specifying a single URL that we know just returns
// some CSV data; it's not like we're accepting or transmitting
// sensitive dynamic Javascript stuff that could cause issues.

// Additionally, by specifying a single cell of data to return from
// Google Sheets, the public will have no way of knowing the real
// Google URL to access to view the whole sheet, so donor data will
// be relatively protected versus the alternatives.

$path = "YOUR_GOOGLE_URL_HERE";

header('Access-Control-Allow-Origin: *');

echo file_get_contents($path);

