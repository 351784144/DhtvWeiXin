<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Message for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Message\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ProcessingController extends AbstractActionController
{
    public function indexAction()
    {
        $wechatmsgtestDao = $this->getServiceLocator()->get('Message\Dao\WechatMsgTextDao');
        $wechatmsgbaseDao = $this->getServiceLocator()->get('Message\Dao\WechatMsgBaseDao');
        $objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $wechatmsgbase = $wechatmsgbaseDao->getById(1);

        var_dump($wechatmsgbase);
        exit;
        return array();
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /processing/processing/foo
        return array();
    }
}
