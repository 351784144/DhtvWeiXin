<?php
namespace CMS\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 *  文章内容表
 *  @ORM\Entity
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
     * 所属公众号id,关联到wechataccount
     * @ORM\ManyToOne(targetEntity="Wechat\Entity\WechatAccount")
     * @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     */
    protected $account;

    /**
     * 分类id，关联到cmscategory表
     * @ORM\ManyToOne(targetEntity="CMSCategory")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;
    
    /** 
     * 文章标题
     * @ORM\Column(type="string",length=100) */
    protected $title;
    
    /** 
     * 文章简介
     * @ORM\Column(type="string",length=100) */
    protected $description;
    

    /** 
     * 文章详细内容
     * @ORM\Column(type="string",length=1000) */
    protected $content;
    
    /** 
     * 缩略图
     * @ORM\Column(type="string") */
    protected $thumb;
    
    /** 
     * 来源
     * @ORM\Column(type="string") */
    protected $source;
    
    /** 
     * 作者
     * @ORM\Column(type="string",length=50) */
    protected $author;
    
    /** 
     * 顺序
     * @ORM\Column(type="integer") */
    protected $displayorder;
    
    /** 
     * 直接跳转链接
     * @ORM\Column(type="string",length=500) */
    protected $linkUrl;
    
    /** @ORM\Column(type="integer") */
    protected $createTime;
    
    /**
     * 点击次数
     *  @ORM\Column(type="integer") */
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