<?php

//
require('./../../config.php');
require('./../../library/core.class.php');

$core = new Core();
$db = new MySQL();

$db->Run();


header('Content-Type: application/xml; charset=UTF-8');


if(isset($_GET['ul'])){
    $ul = $_GET['ul'];
}else{
    $ul = "pt-br";
}


//$sql = mysql_query("SELECT `title`, `slug`, `description`, `content`, `created_by`, `publish_date` FROM `posts` WHERE language='pt-br' LIMIT 0, 50");
$sql = mysql_query("SELECT `title`, `slug`, `description`, `content`, `created_by`, `publish_date` FROM `posts` LIMIT 0, 50");

echo '<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
   <channel>
      <title>Liftoff News</title>
      <link>http://liftoff.msfc.nasa.gov/</link>
      <description>asdas</description>
      <language>'.$ul.'</language>
      <lastBuildDate>'.$core->ShowDate('RSS').'</lastBuildDate>';



while($result = mysql_fetch_assoc($sql)){

echo '      <item>
         <title>'.$result['title'].'</title>
         <link>http://'.$result['slug'].'</link>
         <description>'.$result['description'].'</description>
         <pubDate>'.$core->ConvertDate('RSS', $result['publish_date']).'</pubDate>
         <guid>http://liftoff.msfc.nasa.gov/2003/05/20.html#item570</guid>

      </item>';
}
   
   
echo '   </channel>
</rss>';


?>