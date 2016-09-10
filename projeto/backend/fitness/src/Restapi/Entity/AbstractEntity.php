<?php

namespace Restapi\Entity;

abstract class AbstractEntity {

    public function __construct($data = array())
    {
        $this->populate($data);
    }

    public function populate($data)
    {
        foreach ($data as $property => $value) {
            $method = "set{$property}";
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}
