<?php
namespace Message\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity
 *  @ORM\Table(name="dhtv_chat_msg_text")
 *  */
class WechatMsgText {
     /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="bigint")
     */
    protected $id;


    /** @ORM\Column(type="string",length=200) */
    protected $content;
    


    /**
     * @ORM\ManyToOne(targetEntity="WechatMsgBase",inversedBy="texts")
     * @ORM\JoinColumn(name="msg_id", referencedColumnName="id")
     */
    protected $msg;
 /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return the $content
     */
    public function getContent()
    {
        return $this->content;
    }

 /**
     * @return the $msg
     */
    public function getMsg()
    {
        return $this->msg;
    }

 /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /**
     * @param field_type $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

 /**
     * @param field_type $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    
    
    
}