<?php
namespace Keywords\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * 关键字回复规则表
 *  @ORM\Entity
 *  @ORM\Table(name="dhtv_rule_keyword")
 *  */
class RuleKeyword {
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
    protected $AccountId;


    /** 
     * 所属功能模块
     * @ORM\Column(type="string",length=50) */
    protected $module;

    /** 
     * 
     * @ORM\Column(type="string",length=50) */
    protected $name;

    /** 
     * 关键字
     * @ORM\Column(type="string") */
    protected $keyword;

    /** 
     * 关键字类型，如图片、文字、坐标、事件。。。
     * @ORM\Column(type="smallint") */
    protected $type;

   
  
    /** 
     * 顺序
     * @ORM\Column(type="smallint") */
    protected $displayorder;
    

    /** 
     * 状态
     * @ORM\Column(type="smallint") */
    protected $status;
 /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return the $AccountId
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

 /**
     * @return the $module
     */
    public function getModule()
    {
        return $this->module;
    }

 /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

 /**
     * @return the $keyword
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

 /**
     * @return the $type
     */
    public function getType()
    {
        return $this->type;
    }

 /**
     * @return the $displayorder
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

 /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

 /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /**
     * @param field_type $AccountId
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
    }

 /**
     * @param field_type $module
     */
    public function setModule($module)
    {
        $this->module = $module;
    }

 /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

 /**
     * @param field_type $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

 /**
     * @param field_type $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

 /**
     * @param field_type $displayorder
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;
    }

 /**
     * @param field_type $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    
    
}