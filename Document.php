<?php

namespace DependencyInversion;

class Document
{
    private $content = [];
    private $filename;
    private $reader;
    private $writer;

    public function __construct(String $filename)
    {
        $this->filename = $filename;
    }

    /**
     * @param mixed $writer
     */
    public function addWriter($writer): void
    {
        $this->writer[] = $writer;
    }

    /**
     * @param mixed $reader
     */
    public function setReader($reader): void
    {
        $this->reader = $reader;
    }

    public function getContent()  {
        return $this->content;
    }

    public function getFilename()  {
        return $this->filename;
    }

    public function export() {
        $this->reader->setFilename($this->getFilename());
        $this->content = $this->reader->read($this);

        foreach($this->writer as $writer) {
            $writer->setFilename($this->getFilename());
            $writer->write($this->getContent());
        }
    }
}
