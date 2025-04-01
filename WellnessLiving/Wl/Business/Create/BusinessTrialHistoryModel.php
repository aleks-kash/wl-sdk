<?php

namespace WellnessLiving\Wl\Business\Create;

use WellnessLiving\WlModelAbstract;

/**
 * Handles requests to the trial history API.
 */
class BusinessTrialHistoryModel extends WlModelAbstract
{
  /**
   * The email address of the location.
   *
   * @post post
   * @var string
   */
  public $text_mail = '';

  /**
   * The phone number of the business, staff and location.
   *
   * @post post
   * @var string
   */
  public $text_phone = '';
}

?>