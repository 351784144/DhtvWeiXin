<?php
namespace Web\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity
 *  @ORM\Table(name="dhtv_text_reply")
 *  */
class TextReply {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;



  
   /**
     * @ORM\ManyToOne(targetEntity="RuleKeyword")
     * @ORM\JoinColumn(name="keyword_id", referencedColumnName="id")
     */
    protected $keywordId;
  
    /** @ORM\Column(type="string",length=1000) */
    protected $content;
 /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return the $keywordId
     */
    public function getKeywordId()
    {
        return $this->keywordId;
    }

 /**
     * @return the $content
     */
    public function getContent()
    {
        return $this->content;
    }

 /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /**
     * @param field_type $keywordId
     */
    public function setKeywordId($keywordId)
    {
        $this->keywordId = $keywordId;
    }

 /**
     * @param field_type $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


    
    

    
 
    
}