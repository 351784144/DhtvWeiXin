<?php
namespace Web\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity
 *  @ORM\Table(name="dhtv_wechat_union")
 *  */
class WechatUnion {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="bigint")
     */
    protected $id;


    /** @ORM\Column(type="string",length=60) */
    protected $unionId;
    
    /** @ORM\Column(type="string",nullable=true) */
    protected $openId;
    
    /** @ORM\Column(type="string",length=20,nullable=true) */
    protected $nickname;
    
    /** @ORM\Column(type="integer",nullable=true) */
    protected $sex;
    
    /** @ORM\Column(type="string",length=10,nullable=true) */
    protected $language;
    
    /** @ORM\Column(type="string",length=20,nullable=true) */
    protected $city;
    
    /** @ORM\Column(type="string",length=20,nullable=true) */
    protected $province;
    
    /** @ORM\Column(type="string",length=20,nullable=true) */
    protected $country;
    
    /** @ORM\Column(type="string",length=200,nullable=true) */
    protected $headImgUrl;
    
    /** @ORM\Column(type="integer",name="dhtv_user_id") */
    protected $dhtvUserId;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $createTime;
    
    /** @ORM\Column(type="string",length=50,nullable=true) */
    protected $realname;
 /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return the $unionId
     */
    public function getUnionId()
    {
        return $this->unionId;
    }

 /**
     * @return the $openId
     */
    public function getOpenId()
    {
        return $this->openId;
    }

 /**
     * @return the $nickname
     */
    public function getNickname()
    {
        return $this->nickname;
    }

 /**
     * @return the $sex
     */
    public function getSex()
    {
        return $this->sex;
    }

 /**
     * @return the $language
     */
    public function getLanguage()
    {
        return $this->language;
    }

 /**
     * @return the $city
     */
    public function getCity()
    {
        return $this->city;
    }

 /**
     * @return the $province
     */
    public function getProvince()
    {
        return $this->province;
    }

 /**
     * @return the $country
     */
    public function getCountry()
    {
        return $this->country;
    }

 /**
     * @return the $headImgUrl
     */
    public function getHeadImgUrl()
    {
        return $this->headImgUrl;
    }

 /**
     * @return the $userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

 /**
     * @return the $createTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

 /**
     * @return the $realname
     */
    public function getRealname()
    {
        return $this->realname;
    }

 /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /**
     * @param field_type $unionId
     */
    public function setUnionId($unionId)
    {
        $this->unionId = $unionId;
    }

 /**
     * @param field_type $openId
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
    }

 /**
     * @param field_type $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

 /**
     * @param field_type $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

 /**
     * @param field_type $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

 /**
     * @param field_type $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

 /**
     * @param field_type $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }

 /**
     * @param field_type $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

 /**
     * @param field_type $headImgUrl
     */
    public function setHeadImgUrl($headImgUrl)
    {
        $this->headImgUrl = $headImgUrl;
    }

 /**
     * @param field_type $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

 /**
     * @param field_type $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }

 /**
     * @param field_type $realname
     */
    public function setRealname($realname)
    {
        $this->realname = $realname;
    }

    
    
 }