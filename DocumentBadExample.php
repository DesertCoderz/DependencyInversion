<?php

namespace DependencyInversion;

class DocumentBadExample
{
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function export() {
        $reader = new SerializedReader($this->filename);
        $csv_writer = new CSVWriter($this->filename);
        $xml_writer = new XMLWriter($this->filename);
        $content = $reader->read();
        $csv_writer->write($content);
        $xml_writer->write($content);
                
    }
}
