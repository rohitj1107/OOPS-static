<?php

class base{
    public static $name = 'Ram';

    public static function show(){
        return self::$name;
    }
}

echo base::$name;
echo '<br>';
echo base::show();

?>
