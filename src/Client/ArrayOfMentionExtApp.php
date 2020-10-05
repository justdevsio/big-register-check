<?php

namespace JustDevs\BIGRegister\Client;

class ArrayOfMentionExtApp implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MentionExtApp[] $MentionExtApp
     */
    protected $MentionExtApp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MentionExtApp[]
     */
    public function getMentionExtApp()
    {
      return $this->MentionExtApp;
    }

    /**
     * @param MentionExtApp[] $MentionExtApp
     * @return \JustDevs\BIGRegister\client\client\client\ArrayOfMentionExtApp
     */
    public function setMentionExtApp(array $MentionExtApp = null)
    {
      $this->MentionExtApp = $MentionExtApp;
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
      return isset($this->MentionExtApp[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MentionExtApp
     */
    public function offsetGet($offset)
    {
      return $this->MentionExtApp[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MentionExtApp $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MentionExtApp[] = $value;
      } else {
        $this->MentionExtApp[$offset] = $value;
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
      unset($this->MentionExtApp[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MentionExtApp Return the current element
     */
    public function current()
    {
      return current($this->MentionExtApp);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MentionExtApp);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MentionExtApp);
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
      reset($this->MentionExtApp);
    }

    /**
     * Countable implementation
     *
     * @return MentionExtApp Return count of elements
     */
    public function count()
    {
      return count($this->MentionExtApp);
    }

}
