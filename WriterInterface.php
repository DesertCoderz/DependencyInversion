<?php

namespace DependencyInversion;

Interface WriterInterface
{
    public function setFilename(String $filename);
    public function write(Array $content);
}
