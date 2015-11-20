<?php
namespace CMS\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity
 *  @ORM\Table(name="dhtv_cms_article")
 *  */
class CMSArticle {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Wechat\Entity\WechatAccount")
     * @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     */
    protected $account;

    /**
     * @ORM\ManyToOne(targetEntity="CMSCategory")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;
    
    /** @ORM\Column(type="string",length=100) */
    protected $title;
    
    /** @ORM\Column(type="string",length=100) */
    protected $description;
    

    /** @ORM\Column(type="string",length=1000) */
    protected $content;
    
    /** @ORM\Column(type="string") */
    protected $thumb;
    
    /** @ORM\Column(type="string") */
    protected $source;
    
    /** @ORM\Column(type="string",length=50) */
    protected $author;
    
    /** @ORM\Column(type="integer") */
    protected $displayorder;
    
    /** @ORM\Column(type="string",length=500) */
    protected $linkUrl;
    
    /** @ORM\Column(type="integer") */
    protected $createTime;
    
    /** @ORM\Column(type="integer") */
    protected $click;
 /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return the $account
     */
    public function getAccount()
    {
        return $this->account;
    }

 /**
     * @return the $category
     */
    public function getCategory()
    {
        return $this->category;
    }

 /**
     * @return the $title
     */
    public function getTitle()
    {
        return $this->title;
    }

 /**
     * @return the $description
     */
    public function getDescription()
    {
        return $this->description;
    }

 /**
     * @return the $content
     */
    public function getContent()
    {
        return $this->content;
    }

 /**
     * @return the $thumb
     */
    public function getThumb()
    {
        return $this->thumb;
    }

 /**
     * @return the $source
     */
    public function getSource()
    {
        return $this->source;
    }

 /**
     * @return the $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

 /**
     * @return the $displayorder
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

 /**
     * @return the $linkUrl
     */
    public function getLinkUrl()
    {
        return $this->linkUrl;
    }

 /**
     * @return the $createTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

 /**
     * @return the $click
     */
    public function getClick()
    {
        return $this->click;
    }

 /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /**
     * @param field_type $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

 /**
     * @param field_type $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

 /**
     * @param field_type $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

 /**
     * @param field_type $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

 /**
     * @param field_type $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

 /**
     * @param field_type $thumb
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    }

 /**
     * @param field_type $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

 /**
     * @param field_type $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

 /**
     * @param field_type $displayorder
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;
    }

 /**
     * @param field_type $linkUrl
     */
    public function setLinkUrl($linkUrl)
    {
        $this->linkUrl = $linkUrl;
    }

 /**
     * @param field_type $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }

 /**
     * @param field_type $click
     */
    public function setClick($click)
    {
        $this->click = $click;
    }

    
   
}