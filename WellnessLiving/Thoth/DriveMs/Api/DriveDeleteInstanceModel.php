<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Deletes all links for the specified instance.
 */
class DriveDeleteInstanceModel extends WlModelAbstract
{
  /**
   * Instance ID from which links must be copied.
   *
   * @post get
   * @var string
   */
  public $s_instance = '';
}

?>