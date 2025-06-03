<?php

namespace WellnessLiving\Wl\Google\Login;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that performs authorization actions with Google.
 */
class GoogleLoginModel extends WlModelAbstract
{
  /**
   * Business in which authorization is performed.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * The application id.
   *
   * When application not passed, credential loaded from the application, which makes the request,
   *
   * When application passed, the credential loaded by application id.
   *
   * @post post
   * @var string|null
   */
  public $s_application = null;

  /**
   * The Google server authorization code.
   *
   * @post post
   * @var string
   */
  public $s_code = '';
}

?>