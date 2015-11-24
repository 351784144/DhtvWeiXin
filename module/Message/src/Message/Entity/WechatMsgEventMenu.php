<?php
namespace Message\Entity;
use Doctrine\ORM\Mapping as ORM;
/** 
 *  微信自定义菜单事件类型消息
 *  @ORM\Entity
 *  @ORM\Table(name="dhtv_wechat_msg_event_menu")
 *  */
class WechatMsgEventMenu extends WechatMsgBase{
 


    /** 
     * 事件KEY值
     * @ORM\Column(type="string",length=120) */
    protected $eventKey;
    
    /** 
     * 事件类型
     * @ORM\Column(type="string",length=10) */
    protected $event;


 /**
     * @return the $eventKey
     */
    public function getEventKey()
    {
        return $this->eventKey;
    }

 /**
     * @return the $event
     */
    public function getEvent()
    {
        return $this->event;
    }


 /**
     * @param field_type $eventKey
     */
    public function setEventKey($eventKey)
    {
        $this->eventKey = $eventKey;
    }

 /**
     * @param field_type $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    
    
}