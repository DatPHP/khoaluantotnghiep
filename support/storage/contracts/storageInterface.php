<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/29/2018
 * Time: 11:27 AM
 */

App\support\storage\contracts;

interface storageInterface

{
    public function get($index);
    public function set($index,$value);
    public function all ( );
    public function exit ($index);
    public function unset($index);
    public function unset($index);


}



?>