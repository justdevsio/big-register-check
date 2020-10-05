<?php

namespace JustDevs\BIGRegister\Client;

class ArrayOfListHcpApprox4 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ListHcpApprox4[] $ListHcpApprox4
     */
    protected $ListHcpApprox4 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ListHcpApprox4[]
     */
    public function getListHcpApprox4()
    {
      return $this->ListHcpApprox4;
    }

    /**
     * @param ListHcpApprox4[] $ListHcpApprox4
     * @return \JustDevs\BIGRegister\client\client\client\ArrayOfListHcpApprox4
     */
    public function setListHcpApprox4(array $ListHcpApprox4 = null)
    {
      $this->ListHcpApprox4 = $ListHcpApprox4;
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
      return isset($this->ListHcpApprox4[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ListHcpApprox4
     */
    public function offsetGet($offset)
    {
      return $this->ListHcpApprox4[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ListHcpApprox4 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ListHcpApprox4[] = $value;
      } else {
        $this->ListHcpApprox4[$offset] = $value;
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
      unset($this->ListHcpApprox4[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ListHcpApprox4 Return the current element
     */
    public function current()
    {
      return current($this->ListHcpApprox4);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ListHcpApprox4);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ListHcpApprox4);
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
      reset($this->ListHcpApprox4);
    }

    /**
     * Countable implementation
     *
     * @return ListHcpApprox4 Return count of elements
     */
    public function count()
    {
      return count($this->ListHcpApprox4);
    }

}
