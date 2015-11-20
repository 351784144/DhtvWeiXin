<?php
namespace Wechat\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity
 *  @ORM\Table(name="dhtv_wechat_account")
 *  */
class WechatAccount {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;



    /** @ORM\Column(type="string",length=32) */
    protected $token;
    
    /** @ORM\Column(type="string") */
    protected $encodingaeskey;
    
    /** @ORM\Column(type="smallint") */
    protected $level;
    
    /** @ORM\Column(type="string",length=30) */
    protected $name;
    
  
    /** @ORM\Column(type="string",length=60) */
    protected $openId;
    
    /** @ORM\Column(type="string",length=30) */
    protected $username;
    
    /** @ORM\Column(type="string",length=32) */
    protected $password;
    
    /** @ORM\Column(type="string",length=50) */
    protected $appID;
    
    /** @ORM\Column(type="string",length=50) */
    protected $appsecret;
    
    /** @ORM\Column(type="string",length=120) */
    protected $subscribeurl;
    
    /** @ORM\Column(type="string") */
    protected $accessToken;
 /**
     * @return the $token
     */
    public function getToken()
    {
        return $this->token;
    }

 /**
     * @return the $encodingaeskey
     */
    public function getEncodingaeskey()
    {
        return $this->encodingaeskey;
    }

 /**
     * @return the $level
     */
    public function getLevel()
    {
        return $this->level;
    }

 /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

 /**
     * @return the $openId
     */
    public function getOpenId()
    {
        return $this->openId;
    }

 /**
     * @return the $username
     */
    public function getUsername()
    {
        return $this->username;
    }

 /**
     * @return the $password
     */
    public function getPassword()
    {
        return $this->password;
    }

 /**
     * @return the $appID
     */
    public function getAppID()
    {
        return $this->appID;
    }

 /**
     * @return the $appsecret
     */
    public function getAppsecret()
    {
        return $this->appsecret;
    }

 /**
     * @return the $subscribeurl
     */
    public function getSubscribeurl()
    {
        return $this->subscribeurl;
    }

 /**
     * @return the $accessToken
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

 /**
     * @param field_type $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

 /**
     * @param field_type $encodingaeskey
     */
    public function setEncodingaeskey($encodingaeskey)
    {
        $this->encodingaeskey = $encodingaeskey;
    }

 /**
     * @param field_type $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

 /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

 /**
     * @param field_type $openId
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
    }

 /**
     * @param field_type $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

 /**
     * @param field_type $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

 /**
     * @param field_type $appID
     */
    public function setAppID($appID)
    {
        $this->appID = $appID;
    }

 /**
     * @param field_type $appsecret
     */
    public function setAppsecret($appsecret)
    {
        $this->appsecret = $appsecret;
    }

 /**
     * @param field_type $subscribeurl
     */
    public function setSubscribeurl($subscribeurl)
    {
        $this->subscribeurl = $subscribeurl;
    }

 /**
     * @param field_type $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

 
    
    
}