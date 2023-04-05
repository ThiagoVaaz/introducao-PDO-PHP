<?php 

namespace app\classes;

class Validation {

    private $validate = [];

    public function validate($post) {
        foreach ($post as $key => $value) {
            $this->validate[$key] = filter_var($value, FILTER_DEFAULT);
        }
    
        return(object) $this->validate;
    
    }
}