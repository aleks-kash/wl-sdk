<?php

namespace WellnessLiving\Wl\Business\Partner;

use WellnessLiving\WlModelAbstract;

/**
 * Works with partner url for a business that takes part in the partner program.
 */
class PartnerCodeModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Unique code that business can give other businesses to tell them about system.
   *
   * @post post
   * @var string
   */
  public $text_code = '';

  /**
   * Link to the landing campaign
   *
   * @get result
   * @var string
   */
  public $url_partner = '';
}

?>