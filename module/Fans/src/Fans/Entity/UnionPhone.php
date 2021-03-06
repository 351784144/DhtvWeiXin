<?php
namespace Fans\Entity;
use Doctrine\ORM\Mapping as ORM;
/** 
 * 用户手机号
 * @ORM\Entity
 *  @ORM\Table(name="dhtv_union_phone")
 *  */
class UnionPhone {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;



    /**
     * 关联union表
     * @ORM\ManyToOne(targetEntity="WechatUnion")
     * @ORM\JoinColumn(name="un_id", referencedColumnName="id")
     */
    protected $union;
    
  
    /** 
     * 手机号码
     * @ORM\Column(type="string",length=50) */
    protected $phone;
 /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return the $union
     */
    public function getUnion()
    {
        return $this->union;
    }

 /**
     * @return the $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

 /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /**
     * @param field_type $union
     */
    public function setUnion($union)
    {
        $this->union = $union;
    }

 /**
     * @param field_type $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    
 
    
}