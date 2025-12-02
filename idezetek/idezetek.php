<?php
declare(strict_types=1);

include('./src/Culture/Movie/Quotation.php');

use Culture\Movie\Quotation as Quotation;

$Quotation1 = new Quotation("Az Erő legyen veled.", "Obi-Wan Kenobi",  "Csillagok háborúja");
$Quotation2 = new Quotation("Az új magyar narancs. Kicsit sárgább, kicsit savanyúbb, de a mienk!", "Pelikán", "A tanú");
$Quotation3 = new Quotation("Tigris van a fürdőszobában!", "Stu Price", "Másnaposok");

$quotations = [$Quotation1, $Quotation2, $Quotation3];

foreach ($quotations as $quotation) {
    echo $quotation->getText() . "\n" . $quotation->getPerson() . " - " . $quotation->getTitle() . "\n\n";
}