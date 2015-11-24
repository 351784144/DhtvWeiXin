<?php
namespace CMS\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * CMS分类表
 *  @ORM\Entity
 *  @ORM\Table(name="dhtv_cms_category")
 *  */
class CMSCategory {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;


    /**
     * 所属公众号id,关联到wechataccount
     * @ORM\ManyToOne(targetEntity="Wechat\Entity\WechatAccount")
     * @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     */
    protected $account;
    
    /** 
     * 分类名字
     * @ORM\Column(type="string",length=50) */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="CMSCategory")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    protected $parentId;
    
    /** 
     * 顺序
     * @ORM\Column(type="smallint") */
    protected $displayorder;
    
    /** 
     * 是否可用
     * @ORM\Column(type="smallint") */
    protected $enabled;
    
    /** 
     * 描述
     * @ORM\Column(type="string",length=100) */
    protected $description;
    
    /** 
     * 直接跳转链接
     * @ORM\Column(type="string",length=500) */
    protected $linkUrl;
 /**
     * @return the $account
     */
    public function getAccount()
    {
        return $this->account;
    }

 /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

 /**
     * @return the $parentId
     */
    public function getParentId()
    {
        return $this->parentId;
    }

 /**
     * @return the $displayorder
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

 /**
     * @return the $enabled
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

 /**
     * @return the $description
     */
    public function getDescription()
    {
        return $this->description;
    }

 /**
     * @return the $linkUrl
     */
    public function getLinkUrl()
    {
        return $this->linkUrl;
    }

 /**
     * @param field_type $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

 /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

 /**
     * @param field_type $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

 /**
     * @param field_type $displayorder
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;
    }

 /**
     * @param field_type $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

 /**
     * @param field_type $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

 /**
     * @param field_type $linkUrl
     */
    public function setLinkUrl($linkUrl)
    {
        $this->linkUrl = $linkUrl;
    }

 
    
    
}