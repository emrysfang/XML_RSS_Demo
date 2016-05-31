<?php
//connect to database and get the content
$link = mysql_connect('localhost','root','password');
mysql_select_db("blog");
mysql_query("set names utf8");
$sql = "select * from blog";
$result = mysql_query($sql);
$blogs = array();
while ($row = mysql_fetch_assoc($result)) {
	$blogs[] = $row;
}
//var_dump($blogs);
//generate the xml doc formed with rss(DOM/simpleXML/string combine)
$xml  = "<rss version='2.0'>";
$xml .= "<channel>";
$xml .= "<title>godoggie123</title>";
$xml .= "<link>http://www.godoggie123.wordpress.com</link>";
$xml .= "<description>Go through the wonder land</description>";
$xml .= "<lang>en</lang>";
foreach ($blogs as $blog) {
	$xml .= "<item>";
	$xml .= "<title>{$blog['title']}</title>";
	$xml .= "<link>http://www.godoggie123.wordpress.com/{$blog['id']}</link>";
	$xml .= "<description>{$blog['description']}</description>";
	$xml .= "</item>";
}
$xml .="</channel>";
$xml .="</rss>";
header("Content-Type:text/xml;charset=utf-8");
echo $xml;