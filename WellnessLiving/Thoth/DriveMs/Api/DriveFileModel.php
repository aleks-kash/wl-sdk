<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Returns contents of a specified file.
 */
class DriveFileModel extends WlModelAbstract
{
  /**
   * List of information about files.
   *
   * @post result
   * @var string[][]
   */
  public $a_file = [];

  /**
   * List of links to the files.
   *
   * @post post
   * @var string[]
   */
  public $a_link = [];

  /**
   * Whether use cache.
   * `true` to use cache, `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_cache = true;
}

?>