<?php

/**
 * This file is a part of the Yoqut package.
 *
 * (c) Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that is distributed with this source code.
 */

namespace Yoqut\Component\Sms\Model;

/**
 * The default gateway implementation
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
class Gateway implements GatewayInterface
{
    /**
     * The unique id of a gateway
     *
     * @var mixed
     */
    protected $id;

    /**
     * The host of a gateway
     *
     * @var string
     */
    protected $host;

    /**
     * The port of a gateway
     *
     * @var integer
     */
    protected $port;

    /**
     * The username of a gateway
     *
     * @var string
     */
    protected $username;

    /**
     * The password of a gateway
     *
     * @var string
     */
    protected $password;

    /**
     * The service number of a gateway
     *
     * @var string
     */
    protected $serviceNumber;

    /**
     * The prefix patterns of a gateway
     *
     * @var array
     */
    protected $prefixPatterns;

    /**
     * Constructor
     *
     * @param string $host
     * @param integer $port
     * @param string $username
     * @param string $password
     * @param string $serviceNumber
     * @param array $prefixPatterns
     */
    public function __construct(
        $host,
        $port,
        $username,
        $password,
        $serviceNumber = null,
        array $prefixPatterns = array()
    ) {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->serviceNumber = $serviceNumber;
        $this->prefixPatterns = $prefixPatterns;
    }

    /**
     * Gets the id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * {@inheritDoc}
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * {@inheritDoc}
     */
    public function getServiceNumber()
    {
        return $this->serviceNumber;
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefixPatterns()
    {
        return $this->prefixPatterns;
    }
}
