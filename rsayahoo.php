
<?php 
$xml = simplexml_load_file('http://edition.cnn.com/services/rss/');
print "<ul>\n";
foreach ($xml->channel->item as $item){
  print "<li>$item->title</li>\n";
}
print "</ul>";
?>
