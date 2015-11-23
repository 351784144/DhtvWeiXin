<?php
namespace Message\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity
 *  @ORM\Table(name="dhtv_wechat_msg_image")
 *  */
class WechatMsgImage extends WechatMsgBase{
 

    /** @ORM\Column(type="string") */
    protected $picUrl;
    
    /** @ORM\Column(type="string",length=100) */
    protected $mediaId;
    

   /**
     * @ORM\Column(type="string")
     */
    protected $msgId;
 /**
     * @return the $picUrl
     */
    public function getPicUrl()
    {
        return $this->picUrl;
    }

 /**
     * @return the $mediaId
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

 /**
     * @return the $msgId
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

 /**
     * @param field_type $picUrl
     */
    public function setPicUrl($picUrl)
    {
        $this->picUrl = $picUrl;
    }

 /**
     * @param field_type $mediaId
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;
    }

 /**
     * @param field_type $msgId
     */
    public function setMsgId($msgId)
    {
        $this->msgId = $msgId;
    }

 
    
    
}