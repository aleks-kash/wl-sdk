<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Deletes a link to a physical file from the database.
 */
class DriveDeleteModel extends WlModelAbstract
{
  /**
   * Link to the file.
   *
   * @get get
   * @var string
   */
  public $s_link = '';
}

?>