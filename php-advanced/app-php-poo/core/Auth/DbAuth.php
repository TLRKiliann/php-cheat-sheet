<?php

namespace Core\Auth;

//use Core\Database\DatabaseAuth;

class DbAuth
{
    
    protected $_dbname;

    public function __construct($_dbname)
    {
        $this->_dbname = $_dbname;
    }
    
    /**
     * @param $username
     * @param $password
     * @return boolean
     */
    public function login($username, $password)
    {
        try {
            //$this->dbname->
            $user = $this->_dbname->prepare('SELECT * FROM users WHERE username = ?', [$username], null, true);
            var_dump($user);
            if ($user)
            {
                return $user->password === $password; //sha1(password);
            }
            else 
            {
                return false;
            }
        } catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function logged()
    {
        return isset($_SESSION['auth']);
    }
}

?>