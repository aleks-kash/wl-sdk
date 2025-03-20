<?php

namespace WellnessLiving\Wl\Reception\Roster;

use WellnessLiving\WlModelAbstract;

/**
 * Marks the visit as not attended using the Attendance Kiosk.
 */
class AttendanceListNotAttendModel extends WlModelAbstract
{
  /**
   * The business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * The visit key.
   *
   * @post post
   * @var string
   */
  public $k_visit = '';

  /**
   * The secret for authenticating the attendance kiosk.
   *
   * @post post
   * @var string
   */
  public $s_secret = '';
}

?>