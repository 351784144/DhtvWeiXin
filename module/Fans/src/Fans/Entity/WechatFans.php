<?php
namespace Fans\Entity;
use Doctrine\ORM\Mapping as ORM;
/** 
 * 微信公众号粉丝表，同一个用户，在不同公众号下openid不同
 * @ORM\Entity
 *  @ORM\Table(name="dhtv_wechat_fans")
 *  */
class WechatFans {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;


    /** @ORM\Column(type="string") */
    protected $openId;
    
    /**
     * union表的id
     * @ORM\ManyToOne(targetEntity="WechatUnion")
     * @ORM\JoinColumn(name="un_id", referencedColumnName="id")
     */
    protected $union;
    
    /** 
     * 是否关注
     * @ORM\Column(type="integer",nullable=true,length=2) */
    protected $subscribe;
    
    /** 
     * 关注时间
     * @ORM\Column(type="integer") */
    protected $subscribeTime;
    
    /** 
     * 备注
     * @ORM\Column(type="string",length=100) */
    protected $remark;
    
    /** 
     * 分组，来自微信平台的分组
     * @ORM\Column(type="integer",length=4) */
    protected $groupId;
    
    /** 
     * 创建时间
     * @ORM\Column(type="integer") */
    protected $createTime;
 /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return the $openId
     */
    public function getOpenId()
    {
        return $this->openId;
    }

 /**
     * @return the $union
     */
    public function getUnion()
    {
        return $this->union;
    }

 /**
     * @return the $subscribe
     */
    public function getSubscribe()
    {
        return $this->subscribe;
    }

 /**
     * @return the $subscribeTime
     */
    public function getSubscribeTime()
    {
        return $this->subscribeTime;
    }

 /**
     * @return the $remark
     */
    public function getRemark()
    {
        return $this->remark;
    }

 /**
     * @return the $groupId
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

 /**
     * @return the $createTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

 /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /**
     * @param field_type $openId
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
    }

 /**
     * @param field_type $union
     */
    public function setUnion($union)
    {
        $this->union = $union;
    }

 /**
     * @param field_type $subscribe
     */
    public function setSubscribe($subscribe)
    {
        $this->subscribe = $subscribe;
    }

 /**
     * @param field_type $subscribeTime
     */
    public function setSubscribeTime($subscribeTime)
    {
        $this->subscribeTime = $subscribeTime;
    }

 /**
     * @param field_type $remark
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    }

 /**
     * @param field_type $groupId
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
    }

 /**
     * @param field_type $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }

 
    
}