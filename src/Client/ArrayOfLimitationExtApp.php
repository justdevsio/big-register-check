<?php

namespace JustDevs\BIGRegister\Client;

class ArrayOfLimitationExtApp implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LimitationExtApp[] $LimitationExtApp
     */
    protected $LimitationExtApp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LimitationExtApp[]
     */
    public function getLimitationExtApp()
    {
      return $this->LimitationExtApp;
    }

    /**
     * @param LimitationExtApp[] $LimitationExtApp
     * @return \JustDevs\BIGRegister\client\client\client\ArrayOfLimitationExtApp
     */
    public function setLimitationExtApp(array $LimitationExtApp = null)
    {
      $this->LimitationExtApp = $LimitationExtApp;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->LimitationExtApp[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LimitationExtApp
     */
    public function offsetGet($offset)
    {
      return $this->LimitationExtApp[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LimitationExtApp $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LimitationExtApp[] = $value;
      } else {
        $this->LimitationExtApp[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->LimitationExtApp[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LimitationExtApp Return the current element
     */
    public function current()
    {
      return current($this->LimitationExtApp);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LimitationExtApp);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LimitationExtApp);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->LimitationExtApp);
    }

    /**
     * Countable implementation
     *
     * @return LimitationExtApp Return count of elements
     */
    public function count()
    {
      return count($this->LimitationExtApp);
    }

}
