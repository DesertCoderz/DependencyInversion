<?php

namespace DependencyInversion;

class Serialized implements WriterInterface, ReaderInterface
{

    private $filename;
    private const FILE_EXTENSION = 'serialized';

    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    public function read()
    {
        return unserialize(file_get_contents($this->filename . "." . self::FILE_EXTENSION));
    }

    public function write(Array $content)
    {
        file_put_contents($this->filename . '.' . self::FILE_EXTENSION, serialize($content));
    }

}
