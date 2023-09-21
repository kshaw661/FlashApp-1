<?php

namespace app\models;
// echo "iuser here";die();
// use app\extensions\helper\CommonHelper;
use lithium\aop\Filters;
use lithium\util\Text;

class Session extends \lithium\data\Model
{
	  protected $_meta = array(
        'source' => 'sessions',
        'key' => 'session_uuid'
    );

    // public $validates = ['firstname' => 'Please enter ','lastname' => 'Please enter '];
    /**
     * Notify user if not logged in
     */
    // const INACTIVE_NOTIFY_DAYS = 75;
    /**
     * Delete user if not logged in
     */
    // const INACTIVE_DELETE_DAYS = 90;

    }
?>
