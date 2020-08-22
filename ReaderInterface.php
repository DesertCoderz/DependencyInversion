<?php

namespace DependencyInversion;

Interface ReaderInterface
{
    public function setFilename(String $filename);
    public function read();
}
