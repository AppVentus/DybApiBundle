<?php

namespace Dyb\ApiBundle\Model;
use JMS\Serializer\Annotation as Serializer;

/**
 * Dyb Showcase user
 */
class DybShowcaseUser
{
    /**
     */
    protected $id;

    /**
     */
    protected $firstname;

    /**
     */
    protected $lastname;

    /**
     */
    protected $email;
    /**
     */
    protected $description;

    /**
     * Constructor
     * @param int      $id               The user's dyb showcase id
     * @param string  $firstname    The user firstname
     * @param string  $lastname     The user lastname
     * @param string  $email          The user email
     */
    public function __construct($id, $firstname, $lastname, $email)
    {

        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->description = 'okk)-';
    }
    /**
     * ToString function
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->id;
    }

    /**
     * ToString function
     *
     * @return string
     */
    public function getDescription()
    {
        return 'ok';
    }

    /**
     * ToString function
     *
     * @return string
     */
    public function getName()
    {
        return 'name';
    }

    /**
    * get id
    *
    * return string
    **/
    public function getId(){

        return $this->id;
    }

    /**
    * get lastname
    *
    * return string
    **/
    public function getLastname(){

        return $this->lastname;
    }

    /**
    * get firstname
    *
    * return string
    **/
    public function getFirstname(){

        return $this->firstname;
    }

    /**
    * get email
    *
    * return string
    **/
    public function getEmail(){

        return $this->email;
    }
}
