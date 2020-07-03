<?php
/*
Copyright 2020 Chimera Art Space

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

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

