<?php

namespace ThinkOmnipay;

use Omnipay\Common\CreditCard;


/**
 * @method  OmnipayManager setGateway()
 * @method  OmnipayManager getGateway()
 * @method  OmnipayManager creditCard($cardInput=array())
 * @method  \Omnipay\Common\GatewayInterface purchase( array $options = array() )
 */
class Facade extends \think\Facade
{

    /**
     * {@inheritDoc}
     */
    protected static function getFacadeClass()
    {
        return 'omnipay';
    }
}