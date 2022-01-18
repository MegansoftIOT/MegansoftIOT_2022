<?php
libxml_use_internal_errors(TRUE);
$username = 'admin';
$password = 'admin';

$context = stream_context_create(array(
    'http' => array(
        'header'  => "Authorization: Basic " . base64_encode("$username:$password")
    )
));
$url="http://localhost:8161/admin/xml/topics.jsp";
$data = file_get_contents($url, false, $context);
$objXmlDocument = simplexml_load_string($data);
if ($objXmlDocument === FALSE) {
    echo "There were errors parsing the XML file.\n";
    foreach(libxml_get_errors() as $error) {
        echo $error->message;
    }
    exit;
}
$objJsonDocument = json_encode($objXmlDocument);
$arrOutput = json_decode($objJsonDocument, TRUE);

print_r($arrOutput);

?>
