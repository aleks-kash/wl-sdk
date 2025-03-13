<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Returns contents of a specified file.
 */
class DriveDownloadModel extends WlModelAbstract
{
  /**
   * The contents of a specified file. Encoded in base64 and compressed with gzip.
   *
   * `false` if a file is not found, otherwise - content file.
   *
   * @get result
   * @var string|bool
   */
  public $s_content = false;

  /**
   * Link to the file.
   *
   * @get get
   * @var string
   */
  public $s_link = '';
}

?>