<?php
$myfile = fopen("input.txt", "r");
$content = fgets($myfile);
$r = ucwords($content, " ");