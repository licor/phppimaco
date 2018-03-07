<?php

require 'vendor/autoload.php';

use Proner\PhpPimaco\Tag;
use Proner\PhpPimaco\Pimaco;
// use Proner\PhpPimaco\Tags\P;

$tag = new Tag();
$tag->p("Beautyday<br>");
$tag->p("R$ 10,00");
$tag->barcode('6295125023728', 'TYPE_EAN_13');

$pimaco = new Pimaco('A4249');
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);
$pimaco->addTag($tag);

// $pimaco->addTag($tag);
// $pimaco->addTag($tag);
// $pimaco->addTag($tag);
// $pimaco->addTag($tag);
// $pimaco->addTag($tag);
// $pimaco->addTag($tag);
// $pimaco->addTag($tag);
$pimaco->output();