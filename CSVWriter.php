<?php

namespace DependencyInversion;

class CSVWriter
{
    public $filename;
    private const FILE_EXTENSION = 'csv';
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function write(Array $content) {
        $fp = fopen($this->filename . '.' . self::FILE_EXTENSION, 'w');
        fputcsv($fp, $content);
        fclose($fp);
    }

}
