<?php
namespace DependencyInversion;

Class SerializedReader {

    public $filename;
    private const FILE_EXTENSION = 'serialized';
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function read() {
        return unserialize(file_get_contents($this->filename . "." . self::FILE_EXTENSION));
    }
}
