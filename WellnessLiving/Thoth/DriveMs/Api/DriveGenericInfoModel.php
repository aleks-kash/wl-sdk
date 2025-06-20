<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Returns contents of a specified file.
 */
class DriveGenericInfoModel extends WlModelAbstract
{
  /**
   * Information about files. Every element of array is string in base64.
   *
   * @post result
   * @var string[]
   */
  public $a_info = [];

  /**
   * Link list to the file.
   *
   * @post post
   * @var array
   */
  public $a_link = [];

  /**
   * Link list to the file as JSON string.
   *
   * @post post
   * @var string
   */
  public $json_list = '';
}

?>