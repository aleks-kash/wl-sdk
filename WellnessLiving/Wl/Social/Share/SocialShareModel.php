<?php

namespace WellnessLiving\Wl\Social\Share;

use WellnessLiving\Core\ASocialSid;
use WellnessLiving\WlModelAbstract;

/**
 * Saves data about share post to database.
 */
class SocialShareModel extends WlModelAbstract
{
  /**
   * The primary keys of the shared objects.
   *
   * @post post
   * @var string[]
   */
  public $a_key;

  /**
   * The id of the social network. One of {@link ASocialSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_share_destination;

  /**
   * The id of type object for share post to social network. One of {@link ShareObjectSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_share_object;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Secret code shared object.
   *
   * @post result
   * @var string
   */
  public $s_secret;

  /**
   * User key.
   *
   * @post post
   * @var string
   */
  public $uid;
}

?>