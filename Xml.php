<?php

namespace DependencyInversion;

class Xml implements WriterInterface
{

    private $filename;
    private const FILE_EXTENSION = 'xml';

    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    public function write(Array $content) {
        $xml = new \SimpleXMLElement('<root></root>');
        array_walk_recursive($content, array ($xml,'addChild'));
        file_put_contents($this->filename . '.' . self::FILE_EXTENSION, $xml->asXML());
    }
}
