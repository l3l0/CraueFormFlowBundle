<?php

namespace Craue\FormFlowBundle\Storage;

use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
class SessionStorage implements StorageInterface
{
    protected $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function set($key, $value)
    {
        $this->session->set($key, $value);
    }

    public function get($key, $default = null)
    {
        return $this->session->get($key, $default);
    }

    public function has($key)
    {
        return $this->session->has($key);
    }

    public function remove($key)
    {
        return $this->session->remove($key);
    }
}
