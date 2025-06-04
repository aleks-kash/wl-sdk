<?php

namespace WellnessLiving\Studio\Personnel\DebugToken;

use WellnessLiving\WlModelAbstract;

/**
* Allows checking the validity of a debug token.
**/
class DebugTokenServiceModel extends WlModelAbstract
{
  /**
    * Debug token to check and if valid to return `true` otherwise `false`.
    *
    * @post result
    * @var bool
    */
  public $is_valid = false;

  /**
   * Customer login who sends request to check token.
   *
   * @post post
   * @var string
   */
  public $s_passport_bot_login = '';

  /**
    * Debug token to check.
    *
    * @post post
    * @var string
    */
  public $s_token = '';

  /**
   * URL of the application that has made request to check token.
   *
   * @post post
   * @var string
   */
  public $s_url = '';
}

?>