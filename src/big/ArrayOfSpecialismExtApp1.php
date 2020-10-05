<?php

namespace JustDevs\BIGRegister;

class ArrayOfSpecialismExtApp1 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SpecialismExtApp1[] $SpecialismExtApp1
     */
    protected $SpecialismExtApp1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SpecialismExtApp1[]
     */
    public function getSpecialismExtApp1()
    {
      return $this->SpecialismExtApp1;
    }

    /**
     * @param SpecialismExtApp1[] $SpecialismExtApp1
     * @return \JustDevs\BIGRegister\ArrayOfSpecialismExtApp1
     */
    public function setSpecialismExtApp1(array $SpecialismExtApp1 = null)
    {
      $this->SpecialismExtApp1 = $SpecialismExtApp1;
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
      return isset($this->SpecialismExtApp1[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SpecialismExtApp1
     */
    public function offsetGet($offset)
    {
      return $this->SpecialismExtApp1[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SpecialismExtApp1 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SpecialismExtApp1[] = $value;
      } else {
        $this->SpecialismExtApp1[$offset] = $value;
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
      unset($this->SpecialismExtApp1[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SpecialismExtApp1 Return the current element
     */
    public function current()
    {
      return current($this->SpecialismExtApp1);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SpecialismExtApp1);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SpecialismExtApp1);
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
      reset($this->SpecialismExtApp1);
    }

    /**
     * Countable implementation
     *
     * @return SpecialismExtApp1 Return count of elements
     */
    public function count()
    {
      return count($this->SpecialismExtApp1);
    }

}
