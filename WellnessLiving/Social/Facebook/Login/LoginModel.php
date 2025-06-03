<?php

namespace WellnessLiving\Social\Facebook\Login;

use WellnessLiving\Core\Request\Api\Application\Credential\CredentialModel;
use WellnessLiving\WlModelAbstract;

/**
 * Authorizes Facebook users.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * The application id.
   *
   * When application not passed, credential loaded from the application, which makes the request,
   *
   * For set credential need used {@link CredentialModel} and set {@link CredentialModel::$cid_credential} to {@link FacebookCredential::CID}.
   *
   * When application passed, the credential loaded by application id.
   *
   * @post post
   * @var string|null
   */
  public $s_application = null;

  /**
   * The Facebook token.
   *
   * @post post
   * @var string
   */
  public $s_token = '';
}

?>