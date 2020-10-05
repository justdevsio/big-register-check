<?php

namespace JustDevs\BIGRegister;

class ArrayOfProfessionalGroup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProfessionalGroup[] $ProfessionalGroup
     */
    protected $ProfessionalGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProfessionalGroup[]
     */
    public function getProfessionalGroup()
    {
      return $this->ProfessionalGroup;
    }

    /**
     * @param ProfessionalGroup[] $ProfessionalGroup
     * @return \JustDevs\BIGRegister\ArrayOfProfessionalGroup
     */
    public function setProfessionalGroup(array $ProfessionalGroup = null)
    {
      $this->ProfessionalGroup = $ProfessionalGroup;
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
      return isset($this->ProfessionalGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProfessionalGroup
     */
    public function offsetGet($offset)
    {
      return $this->ProfessionalGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProfessionalGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProfessionalGroup[] = $value;
      } else {
        $this->ProfessionalGroup[$offset] = $value;
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
      unset($this->ProfessionalGroup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProfessionalGroup Return the current element
     */
    public function current()
    {
      return current($this->ProfessionalGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProfessionalGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProfessionalGroup);
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
      reset($this->ProfessionalGroup);
    }

    /**
     * Countable implementation
     *
     * @return ProfessionalGroup Return count of elements
     */
    public function count()
    {
      return count($this->ProfessionalGroup);
    }

}
