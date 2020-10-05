<?php

namespace JustDevs\BIGRegister;

class ArrayOfTypeOfSpecialism implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TypeOfSpecialism[] $TypeOfSpecialism
     */
    protected $TypeOfSpecialism = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TypeOfSpecialism[]
     */
    public function getTypeOfSpecialism()
    {
      return $this->TypeOfSpecialism;
    }

    /**
     * @param TypeOfSpecialism[] $TypeOfSpecialism
     * @return \JustDevs\BIGRegister\ArrayOfTypeOfSpecialism
     */
    public function setTypeOfSpecialism(array $TypeOfSpecialism = null)
    {
      $this->TypeOfSpecialism = $TypeOfSpecialism;
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
      return isset($this->TypeOfSpecialism[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TypeOfSpecialism
     */
    public function offsetGet($offset)
    {
      return $this->TypeOfSpecialism[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TypeOfSpecialism $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TypeOfSpecialism[] = $value;
      } else {
        $this->TypeOfSpecialism[$offset] = $value;
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
      unset($this->TypeOfSpecialism[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TypeOfSpecialism Return the current element
     */
    public function current()
    {
      return current($this->TypeOfSpecialism);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TypeOfSpecialism);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TypeOfSpecialism);
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
      reset($this->TypeOfSpecialism);
    }

    /**
     * Countable implementation
     *
     * @return TypeOfSpecialism Return count of elements
     */
    public function count()
    {
      return count($this->TypeOfSpecialism);
    }

}
