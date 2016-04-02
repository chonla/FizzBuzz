<?php

class FizzBuzz {
    public function get($val) {
        $mapper = array(
                "FizzBuzz",
                $val,
                $val,
                "Fizz",
                $val,
                "Buzz",
                "Fizz",
                $val,
                $val,
                "Fizz",
                "Buzz",
                $val,
                "Fizz",
                $val,
                $val
            );
        return $mapper[$val % 15];
    }
}

 ?>