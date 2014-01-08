<?php
/**
 * User: asier
 * Date: 8/01/14
 * Time: 16:36
 */

namespace Tomsaver\Entity;


use Tomsaver\ModelBundle\Entity\Entity;

class Tag implements Entity
{
    protected $id;
    protected $name;
    protected $articles = array();

    public function __construct($id = 0, $name = null)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param array $articles
     */
    public function setArticles($articles)
    {
        $this->articles = $articles;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     */
    public function serialize()
    {
        return serialize(array(
            $this->getId(),
            $this->getName()
        ));
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return mixed the original value unserialized.
     */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->name
            ) = unserialize($serialized);
    }
}