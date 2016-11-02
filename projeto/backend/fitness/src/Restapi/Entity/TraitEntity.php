<?php

namespace Restapi\Entity;

trait TraitEntity {

    public function populate (Array $data) {
        foreach ($data as $key => $value) {
            $nameMethod = str_replace("_", "", $key);
            $nameMethod = "set" . ucfirst($nameMethod);

            if (method_exists($this, $nameMethod)) {
                $this->$nameMethod($value);
            }
        }
    }
}
