<?php
include_once "constants.inc.php";
include_once "base.php";

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}
$sth = $db->prepare("SELECT name,address,zip,lat,lng,type FROM markers4");
	$sth->execute();
// Start XML file, echo parent node
header("Content-type: text/xml");
echo '<markers4>';
foreach ($sth->fetchAll() as $row) {
	echo '<marker ';
  echo 'name="' . parseToXML($row['name']) . '" ';
  echo 'address="' . parseToXML($row['address']) . '" ';
  echo 'zip="' . parseToXML($row['zip']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'type="' . $row['type'] . '" ';
  echo '/>';
    
}

// End XML file
echo '</markers4>';



	

?>