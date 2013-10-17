<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('cn_ZH', array (
));

$catalogueCn = new MessageCatalogue('cn', array (
));
$catalogue->addFallbackCatalogue($catalogueCn);


return $catalogue;
