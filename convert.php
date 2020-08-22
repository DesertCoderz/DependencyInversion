<?php

namespace DependencyInversion;

require_once 'XMLWriter.php';
require_once 'CSVWriter.php';
require_once 'SerializedReader.php';
require_once 'DocumentBadExample.php';

$documentBadExample = new DocumentBadExample('myFile');
$documentBadExample->export();



















require_once 'ReaderInterface.php';
require_once 'WriterInterface.php';

require_once 'Serialized.php';
require_once 'Csv.php';
require_once 'Xml.php';

require_once 'Document.php';

$document = new Document('myFile');
$document->setReader(new Serialized());
$document->addWriter(new Csv());
$document->addWriter(new Xml());
$document->export();
