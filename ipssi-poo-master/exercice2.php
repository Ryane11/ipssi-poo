<?php

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Text;
use Ipssi\Evaluation\Document;
use Ipssi\Evaluation\Stars;
use Ipssi\Evaluation\Image;
use Ipssi\Evaluation\Object;
$doc1=new Document("Mon document",new Object(234,100,61),100,100);
$text= new Text(10,10, new Object(234,100,61),11,"New Time Romans" ,"Voici mon titre de document");
$stars= new Stars(new Object(153,13,0),12, 20,10);
$Object= new Object(new Object(34,136,21),12, 30,10);
$Image= new Image("Ma photo",320, 320,30,40);

$doc1->addElement($text);
$doc1->addElement($stars);
$doc1->addElement($Object);
$doc1->addElement($Image);

$doc1->__toString();

?>