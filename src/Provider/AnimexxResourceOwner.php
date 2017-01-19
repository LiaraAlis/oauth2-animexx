<?php
namespace LiaraAlis\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;

/**
 * Class AnimexxResourceOwner
 *
 * @package LiaraAlis\OAuth2\Client\Provider
 */
class AnimexxResourceOwner implements ResourceOwnerInterface
{

    use ArrayAccessorTrait;

    /**
     * Raw response
     *
     * @var array
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param array  $response
     */
    public function __construct(array $response = [])
    {
        $this->response = $response;
    }

    /**
     * Get resource owner id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->getValueByKey($this->response['return'], 'id');
    }

    /**
     * Get resource owner email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->getValueByKey($this->response['return'], 'email');
    }

    /**
     * Get resource owner username
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->getValueByKey($this->response['return'], 'username');
    }

    /**
     * Get resource owner first name
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->getValueByKey($this->response['return'], 'vorname');
    }

    /**
     * Get resource owner last name
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->getValueByKey($this->response['return'], 'nachname');
    }

    /**
     * Get resource owner street
     *
     * @return mixed
     */
    public function getStreet()
    {
        return $this->getValueByKey($this->response['return'], 'strasse');
    }

    /**
     * Get resource owner postal code
     *
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->getValueByKey($this->response['return'], 'plz');
    }

    /**
     * Get resource owner city
     *
     * @return mixed
     */
    public function getCity()
    {
        return $this->getValueByKey($this->response['return'], 'ort');
    }

    /**
     * Get resource owner country
     *
     * @return mixed
     */
    public function getCountry()
    {
        return $this->getValueByKey($this->response['return'], 'land');
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response['return'];
    }
}
