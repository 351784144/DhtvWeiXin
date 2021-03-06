<?php
namespace Message\Entity;
use Doctrine\ORM\Mapping as ORM;
/** 
 *  微信文字消息
 *  @ORM\Entity
 *  @ORM\Table(name="dhtv_wechat_msg_text")
 *  */
class WechatMsgText extends WechatMsgBase{
  

    /** 
     * 文字内容
     * @ORM\Column(type="string",length=200) */
    protected $content;

    /**
     * 消息id
     * @ORM\Column(type="string")
     */
    protected $msgId;
    
    /**
     * @return the $content 
     * 
     */
    public function getContent()
    {
        return $this->content;
    }

 /**
     * @return the $msgId
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

 /**
     * @param field_type $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

 /**
     * @param field_type $msgId
     */
    public function setMsgId($msgId)
    {
        $this->msgId = $msgId;
    }



    
    
    
}