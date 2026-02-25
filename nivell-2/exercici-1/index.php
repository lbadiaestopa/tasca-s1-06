<?php

require_once 'exercici-1.php';

$teachingResource = new TeachingResource(Topic::PHP, "https://jgfkdmvdskmkds.com", Resource::Video);

echo $teachingResource->getTopic()->value . "\n";
echo $teachingResource->getUrl() . "\n";
echo $teachingResource->getResource()->value;

?>