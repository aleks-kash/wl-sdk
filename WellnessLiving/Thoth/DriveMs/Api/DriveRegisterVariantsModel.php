<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Registers variants.
 */
class DriveRegisterVariantsModel extends WlModelAbstract
{
  /**
   * List of variant file paths with key as descriptor.
   *
   * @get get
   * @var string[]
   */
  public $a_variant = [];

  /**
   * Link to the file.
   *
   * @get get
   * @var string
   */
  public $s_link = '';
}

?>