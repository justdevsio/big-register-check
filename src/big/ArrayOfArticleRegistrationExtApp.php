<?php

namespace JustDevs\BIGRegister;

class ArrayOfArticleRegistrationExtApp implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArticleRegistrationExtApp[] $ArticleRegistrationExtApp
     */
    protected $ArticleRegistrationExtApp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArticleRegistrationExtApp[]
     */
    public function getArticleRegistrationExtApp()
    {
      return $this->ArticleRegistrationExtApp;
    }

    /**
     * @param ArticleRegistrationExtApp[] $ArticleRegistrationExtApp
     * @return \JustDevs\BIGRegister\ArrayOfArticleRegistrationExtApp
     */
    public function setArticleRegistrationExtApp(array $ArticleRegistrationExtApp = null)
    {
      $this->ArticleRegistrationExtApp = $ArticleRegistrationExtApp;
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
      return isset($this->ArticleRegistrationExtApp[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArticleRegistrationExtApp
     */
    public function offsetGet($offset)
    {
      return $this->ArticleRegistrationExtApp[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArticleRegistrationExtApp $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArticleRegistrationExtApp[] = $value;
      } else {
        $this->ArticleRegistrationExtApp[$offset] = $value;
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
      unset($this->ArticleRegistrationExtApp[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArticleRegistrationExtApp Return the current element
     */
    public function current()
    {
      return current($this->ArticleRegistrationExtApp);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArticleRegistrationExtApp);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArticleRegistrationExtApp);
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
      reset($this->ArticleRegistrationExtApp);
    }

    /**
     * Countable implementation
     *
     * @return ArticleRegistrationExtApp Return count of elements
     */
    public function count()
    {
      return count($this->ArticleRegistrationExtApp);
    }

}
