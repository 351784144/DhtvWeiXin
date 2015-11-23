<?php
namespace Message\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity
 *  @ORM\Table(name="dhtv_wechat_msg_base")
 *  @ORM\InheritanceType(value="JOINED")
 *  */
class WechatMsgBase {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="bigint")
     */
    protected $id;


    /** @ORM\Column(type="string",length=60) */
    protected $toUserName;
    
    /** @ORM\Column(type="string",length=60) */
    protected $fromUserName;
    

    /** @ORM\Column(type="integer") */
    protected $createTime;
    
    /** @ORM\Column(type="string",length=20) */
    protected $msgType;
    
    /** @ORM\Column(type="integer") */
    protected $updateTime;
 /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return the $toUserName
     */
    public function getToUserName()
    {
        return $this->toUserName;
    }

 /**
     * @return the $fromUserName
     */
    public function getFromUserName()
    {
        return $this->fromUserName;
    }

 /**
     * @return the $createTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

 /**
     * @return the $msgType
     */
    public function getMsgType()
    {
        return $this->msgType;
    }

 /**
     * @return the $updateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

 /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /**
     * @param field_type $toUserName
     */
    public function setToUserName($toUserName)
    {
        $this->toUserName = $toUserName;
    }

 /**
     * @param field_type $fromUserName
     */
    public function setFromUserName($fromUserName)
    {
        $this->fromUserName = $fromUserName;
    }

 /**
     * @param field_type $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }

 /**
     * @param field_type $msgType
     */
    public function setMsgType($msgType)
    {
        $this->msgType = $msgType;
    }

 /**
     * @param field_type $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }

    
    
 
    
}