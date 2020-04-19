<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/29/2018
 * Time: 11:45 AM
 */


namespace App\support\storage;


use Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface;

use Symfony\Component\Validator\Tests\Fixtures\Countable;

class SessionStorage implements SessionStorageInterface,Countabl
{

    protected $bucket;

    public function __construct($bucket = 'default')
    {
        if (!isset($_SESSION[$bucket])) {

            $_SESSION[$bucket] = [];
        }
        $this->bucket = $bucket;

    }

    public function set($index,$value)
  {
      $_SESSION[$this->bucket][$index]=$value;

  }

  public function get ($index)
  {
      if(!$this->exist($index))
      {
          return null;
      }
      return $_SESSION[$this->bucket][$index];

  }

  public function exist($index)
  {
      return isset($_SESSION[$this->bucket]);

  }

  public function all()
  {

      return $_SESSION[$this->bucket];

  }
  public function unset ($index)
  {

      if($this->exist($index))
      {

          $this->unset($_SESSION[$this->bucket][$index]);
      }
  }

  public function clear()
  {
      // TODO: Implement clear() method.
      $this->unset($_SESSION[$this->bucket]);
  }

  public function count()
  {

      return $this->count($this->all());
  }


}


?>