<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Models;

class Genres extends \Phalcon\Mvc\Model
{
    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=32, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $name;

    /**
     *
     * @var string
     * @Column(type="string", length=3, nullable=true)
     */
    protected $shortening;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field shortening
     *
     * @param string $shortening
     * @return $this
     */
    public function setShortening($shortening)
    {
        $this->shortening = $shortening;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field shortening
     *
     * @return string
     */
    public function getShortening()
    {
        return $this->shortening;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("linkfire");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'genres';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     *
     * @return Genres[]|Genres
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Genres
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}