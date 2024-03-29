<?php
/**
 * ZF2 Buch Kapitel 17
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    User
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace User\Entity;

/**
 * User entity
 * 
 * @package    User
 */
class UserEntity implements UserEntityInterface
{
    protected $roleNames = array(
        'customer' => 'Kunde',
        'staff'    => 'Mitarbeiter',
        'admin'    => 'Administrator'
    );
    
    protected $id;
    protected $role;
    protected $email;
    protected $pass;
    protected $firstname;
    protected $lastname;
    
    /**
     * Set id
     * 
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * Get id
     * 
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set role
     * 
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }
    
    /**
     * Get role
     * 
     * @return string $role
     */
    public function getRole()
    {
        return $this->role;
    }
    
    /**
     * Get role name
     * 
     * @return string $role
     */
    public function getRoleName()
    {
        return $this->roleNames[$this->role];
    }
    
    /**
     * Get role names
     * 
     * @return array list of roles
     */
    public function getRoleNames()
    {
        return $this->roleNames;
    }
    
    /**
     * Set email
     * 
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Get email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set pass
     * 
     * @param string $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }
    
    /**
     * Get pass
     * 
     * @return string $pass
     */
    public function getPass()
    {
        return $this->pass;
    }
    
    /**
     * Set firstname
     * 
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    
    /**
     * Get firstname
     * 
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    /**
     * Set lastname
     * 
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    
    /**
     * Get lastname
     * 
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    
    /**
     * Exchange internal values from provided array
     *
     * @param  array $array
     * @return void
     */
    public function exchangeArray(array $array)
    {
        foreach ($array as $key => $value) {
            if (empty($value)) {
                continue;
            }
            $method = 'set' . ucfirst($key);
            if (!method_exists($this, $method)) {
                continue;
            }
            $this->$method($value);
        }
    }

    /**
     * Return an array representation of the object
     *
     * @return array
     */
    public function getArrayCopy()
    {
        return array(
            'id'        => $this->getId(),
            'role'      => $this->getRole(),
            'email'     => $this->getEmail(),
            'pass'      => $this->getPass(),
            'firstname' => $this->getFirstname(),
            'lastname'  => $this->getLastname(),
        );
    }
}
