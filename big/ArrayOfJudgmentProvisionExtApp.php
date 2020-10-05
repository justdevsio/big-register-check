<?php

namespace JustDevs\BIGRegister;

class ArrayOfJudgmentProvisionExtApp implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JudgmentProvisionExtApp[] $JudgmentProvisionExtApp
     */
    protected $JudgmentProvisionExtApp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JudgmentProvisionExtApp[]
     */
    public function getJudgmentProvisionExtApp()
    {
      return $this->JudgmentProvisionExtApp;
    }

    /**
     * @param JudgmentProvisionExtApp[] $JudgmentProvisionExtApp
     * @return \JustDevs\BIGRegister\ArrayOfJudgmentProvisionExtApp
     */
    public function setJudgmentProvisionExtApp(array $JudgmentProvisionExtApp = null)
    {
      $this->JudgmentProvisionExtApp = $JudgmentProvisionExtApp;
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
      return isset($this->JudgmentProvisionExtApp[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JudgmentProvisionExtApp
     */
    public function offsetGet($offset)
    {
      return $this->JudgmentProvisionExtApp[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JudgmentProvisionExtApp $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->JudgmentProvisionExtApp[] = $value;
      } else {
        $this->JudgmentProvisionExtApp[$offset] = $value;
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
      unset($this->JudgmentProvisionExtApp[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JudgmentProvisionExtApp Return the current element
     */
    public function current()
    {
      return current($this->JudgmentProvisionExtApp);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->JudgmentProvisionExtApp);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->JudgmentProvisionExtApp);
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
      reset($this->JudgmentProvisionExtApp);
    }

    /**
     * Countable implementation
     *
     * @return JudgmentProvisionExtApp Return count of elements
     */
    public function count()
    {
      return count($this->JudgmentProvisionExtApp);
    }

}
