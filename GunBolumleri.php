<?php
date_default_timezone_set('Europe/Istanbul');
$bugün= date("H");

if ($bugün >= "06" AND $bugün < "10")
{
	echo 'Günaydın';
}
elseif ($bugün >= "10" AND $bugün < "17")
{
	echo 'İyi günler';
}
elseif ($bugün >= "17" AND $bugün < "20")
{
	echo 'İyi akşamlar';
}
elseif ($bugün >= "20" AND $bugün < "00")
{
	echo 'İyi geceler';
}
else 
{
	echo 'Esenlikler dilerim';
}
?>
