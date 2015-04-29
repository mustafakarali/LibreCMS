<?php
header("Content-Type:text/plain");
include'core/db.php';
$config=$db->query("SELECT seoTitle,theme FROM config WHERE id='1'")->fetch(PDO::FETCH_ASSOC);
$theme=parse_ini_file('layout/'.$config['theme'].'/theme.ini',true);
if($config['seoTitle']!='')
	$siteTitle=$config['seoTitle'];
else
	$siteTitle=URL;
$themeTitle=$theme['title'];
$themeCreator=$theme['creator'];
$themeURL=$theme['creator_url'];
echo <<< "OUT"
$siteTitle is powered by LibreCMS [https://github.com/StudioJunkyard/LibreCMS]
Theme "$themeTitle" by $themeCreator [$themeURL]

/* TEAM */
Developer: Dennis Suitters
Site: http://www.studiojunkyard.com/
Twitter: @studiojunkyard
Location: Nirvana, Earth

Help: You, are you interested in helping develop LibreCMS further?
Site: Jump into the GitHub Repo. https://github.com/StudioJunkyard/LibreCMS
Location: Your Work Station

/* THANKS */
Name: Alan Raycraft, [http://www.raycraft.com.au/]

/* SITE */
Standards: HTML5, CSS3, PHP, jQuery, Vanilla Javascript
Backend Components: PHP, PDO, jQuery, Javascript, Bootstrap (Administration)
Frontend Componenets: Dependant on theme
Software: A FOSS Editor
OUT;