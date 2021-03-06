<?php
namespace Twilio\Client;

/**
 * Abstract client class
 *
 * @package Library
 * @subpackage Twilio\Client
 * @author Aleksey Korzun <al.ko@webfoundation.net>
 */
abstract class Client
{
    /**
     * Default connection time out in seconds, adjust if you are connecting
     * to a local network or have a slow up-link
     *
     * @var int
     */
    const TIMEOUT = 60;

    /**
     * Secure identifier to use when prompted for authentication
     *
     * @var string
     */
    protected $identifier;

    /**
     * Token to use when prompted for authentication
     *
     * @var string
     */
    protected $token;

    /**
     * Various options for cURL
     *
     * @var string[]
     */
    protected $options = array();

    /**
     * Debugging switch
     *
     * @var bool
     */
    protected $isDebug = false;

    /**
     * Constructor that setups basic options
     *
     * @param string|bool $uri
     * @param string[] $parameters
     */
    abstract public function __construct($uri = false, $parameters = array());

    /**
     * Magic call method
     *
     * @throws TinyHttp_Exception
     * @param string $method
     * @param string[] $arguments
     * @return string[]
     */
    abstract public function __call($method, $arguments);

    /**
     * Get identifier we use for authentication
     *
     * @return string
     */
    public function identifier()
    {
        return (string)$this->identifier;
    }

    /**
     * Set identifier to use when making a request that requires authentication
     *
     * @param string $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = (string)$identifier;
    }

    /**
     * Set token to use when making a request that requires authentication
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = (string)$token;
    }
}

