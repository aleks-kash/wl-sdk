<?php

namespace WellnessLiving\Wl\Schedule\ClassList;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Classes\Tab\TabSid;

/**
 * Retrieves a list of classes and class information for a Class Tab.
 */
class ClassList68Model extends WlModelAbstract
{
  /**
   * @inheritDoc
   * @get result
   * @post result
   * @var array[]
   */
  public $a_calendar = [];

  /**
   * The list of classes keys to filter.
   *
   * Return sessions with matching class IDs.
   *
   * If it's empty, all classes will be returned.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_class = [];

  /**
   * Class filter by day of the week.
   * Array of number representing the days of the week.
   * Return sessions matching the given weekdays.
   * (7 = Sunday, 1 = Monday, ..., 6 = Saturday)
   *
   * Empty array means no filtering.
   *
   * @get get
   * @var int[]
   * @see ADateWeekSid
   */
  public $a_day = [];

  /**
   * The list of classes keys to filter.
   *
   * Return sessions with matching class IDs.
   *
   * If it's empty, all events will be returned.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_event = [];

  /**
   * The list of location keys to filter results.
   * If it's empty, schedule for all locations will be returned.
   * All given locations should be from the same business, which is sent in {@link ClassListModel::$k_business}.
   *
   * @get get
   * @var string[]
   */
  public $a_location = [];

  /**
   * Information about classes/events for quick filter.
   *
   * Every element has the following keys:
   * <ul>
   *   <li>string <var>text_type</var> Type of class ("class" || "event")</li>
   *   <li>string <var>k_class</var> Type of the error.</li>
   *   <li>string <var>s_class</var> Stack backtrace.</li>
   *   <li>int <var>i_class</var> Total items found.</li>
   * </ul>
   *
   * @post result
   * @var array
   */
  public $a_quick = [];

  /**
   * @inheritDoc
   * @get result
   * @post result
   * @var array[]
   */
  public $a_session;

  /**
   * Class filter by time of day.
   * List of arrays with start and end time in "HH:MM" format (24h).
   * Include sessions that start between the specified time range.
   *
   * Each value is array with time parameters:
   * <dl>
   *    <dt>string <var>tl_start</var></dt>
   *    <dd>Time when the session starts. Example: value `'06:00'`.</dd>
   *    <dt>string <var>tl_end</var></dt>
   *    <dd>Time when the session ends. Example: value `'14:00'`.</dd>
   * </dl>
   *
   * Empty array means no filtering.
   *
   * @get get
   * @var array[]
   */
  public $a_time = [];

  /**
   * The list start date in UTC and in MySQL format.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * The list end date in UTC and in MySQL format.
   *
   * @get get
   * @var string
   */
  public $dt_end = '';

  /**
   * ID of tab. One of {@link TabSid} constants.
   *
   * `null` if no filtering by Tab is required.
   *
   * @get get
   * @var int|null
   */
  public $id_class_tab = null;

  /**
   * `true` means to not generate {@link ClassListModel::$a_session} result.
   * Can be used, if you do not need full information about existing classes and result in {@link ClassListModel::$a_calendar} is enough.
   *
   * @get get
   * @var bool
   */
  public $is_response_short = false;

  /**
   * If `true`, sessions from every class tab are returned. If `false`, use the
   * {@link ClassListModel::$k_class_tab} value.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * @inheritDoc
   * @get result
   * @post result
   * @var bool
   */
  public $is_timezone_different;

  /**
   * Class filter by type.
   * The class is virtual.
   *
   * `true`: Only virtual classes.
   * `false`: Only in-person.
   * `null` or not set: No filtering.
   *
   * @get get
   * @var bool|null
   */
  public $is_virtual = null;

  /**
   * @inheritDoc
   * @get result
   * @post result
   * @var bool
   */
  public $is_virtual_service;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The category tab key.
   *
   * This will be `null` if not set yet.
   * This will be ignored if {@link ClassListModel::$is_tab_all} is `true`.
   *
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * @inheritDoc
   * @get get
   * @post get
   * @var string
   */
  public $s_staff = '';

  /**
   * If `true`, canceled sessions will be returned. If `false`, canceled sessions won't be returned.
   *
   * @get get
   * @var bool
   */
  public $show_cancel = false;

  /**
   * If `true`, classes will be included in the response. `false` - otherwise.
   *
   * @get get
   * @var bool
   */
  public $show_class = true;

  /**
   * If `true`, events are also returned. If `false`, only classes are returned.
   *
   * @get get
   * @var bool
   */
  public $show_event = false;

  /**
   * Whether to generate a quick filter.
   * If `true`, a quick filter will be generated. `false` otherwise.
   *
   * @post get
   * @var bool
   */
  public $show_quick_filter = false;

  /**
   * The user key.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>