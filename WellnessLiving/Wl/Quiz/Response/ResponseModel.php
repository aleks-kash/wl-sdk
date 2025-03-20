<?php

namespace WellnessLiving\Wl\Quiz\Response;

use WellnessLiving\Core\Quiz\ResponseStatusSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * Endpoint to work with quiz responses.
 *
 * @deprecated Use {@link Response65Model} instead.
 */
class ResponseModel extends WlModelAbstract
{
  /**
   * Access log data.
   *
   * @get result
   * @var array[] Access log data.
   */
  public $a_access_log = [];

  /**
   * List of quiz questions with responses.
   *
   * @get result
   * @post post
   * @var array[]
   */
  public $a_element = [];

  /**
   * Elements' uploaded files.
   *
   * @post post
   * @var array[] An array with files data, has next structure:<dl>
   *   <dt>array <var>error</var></dt>
   *   <dd>
   *     An array of files upload errors where key is element unique identifier
   *    {@link \Core\Quiz\Element\ElementAbstract::$s_id} and value is array where key is element
   *    property name and value is errors codes.
   *   </dd>
   *   <dt>array <var>full_path</var></dt>
   *   <dd>
   *     An array of files full path where key is element unique identifier
   *    {@link \Core\Quiz\Element\ElementAbstract::$s_id} and value is array where key is element
   *    property name and value is full path.
   *   </dd>
   *   <dt>array <var>name</var></dt>
   *   <dd>
   *     An array of files' names where key is element unique identifier
   *    {@link \Core\Quiz\Element\ElementAbstract::$s_id} and value is array where key is element
   *    property name and value is file name.
   *   </dd>
   *   <dt>array <var>size</var></dt>
   *   <dd>
   *     An array of files' sizes where key is element unique identifier
   *    {@link \Core\Quiz\Element\ElementAbstract::$s_id} and value is array where key is element
   *    property name and value is file size.
   *   </dd>
   *   <dt>array <var>tmp_name</var></dt>
   *   <dd>
   *     An array of files' temporary names where key is element unique identifier
   *    {@link \Core\Quiz\Element\ElementAbstract::$s_id} and value is array where key is element
   *    property name and value is file temporary name.
   *   </dd>
   *   <dt>array <var>type</var></dt>
   *   <dd>
   *     An array of files' types where key is element unique identifier
   *    {@link \Core\Quiz\Element\ElementAbstract::$s_id} and value is array where key is element
   *    property name and value is file type.
   *   </dd>
   * </dl>
   */
  public $a_element_file = [];

  /**
   * List of purchase items for which this form is loaded.
   *
   * The list of purchase items.
   * Each element has the format `[id_purchase_item]::[k_id]`, where: <dl>
   *   <dt>int <var>id_purchase_item</var></dt>
   *   <dd>The ID of the purchase item. One of the {@link WlPurchaseItemSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>The item key. This depends on <var>id_purchase_item</var> of this array.</dd>
   * </dl>
   *
   * Empty in case when purchase item not specified or form loaded from direct link.
   *
   * @post post
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * Data for Quick Buy.
   *
   * @post post
   * @var array
   */
  public $a_quick_config = [];

  /**
   * Quiz response key list.
   *
   * @delete get
   * @put get
   * @var string[]
   */
  public $a_quiz_response_key = [];

  /**
   * Quiz settings.
   *
   * @get result
   * @var array
   */
  public $a_quiz_setting = [];

  /**
   * Information about service if response connected to visit.
   *
   * @get result
   * @var array
   */
  public $a_service_info;

  /**
   * Whether response can be amended by current user.
   *
   * @get result
   * @var bool
   */
  public $can_amend;

  /**
   * Checks whether unauthorized user should be permitted to operate with form and make a response.
   * In general all quizzes should have users in response but it some cases such as registration process
   *  user might not exist yet, and we need ability to ignore check for user existence.
   * `true` - add possibility load form and accept response for non-registered user, `false` otherwise.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $can_anonymous = false;

  /**
   * Date when response was submitted.
   *
   * @get result
   * @var string
   */
  public $dtu_response;

  /**
   * The mode type. One of the {@link ModeSid} constants.
   *
   * @delete get
   * @var int
   */
  public $id_mode = 0;

  /**
   * Response source. One of {@link SourceSid} constants.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_source = 0;

  /**
   * Response status ID.
   *
   * @get result
   * @var int
   * @see ResponseStatusSid
   */
  public $id_status = 0;

  /**
   * `true` for load answers for response, `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_answer = true;

  /**
   * `true` if API is being used from backend, `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_backend = false;

  /**
   * `true` if need to save response in draft mode, `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_draft = false;

  /**
   * Whether quiz response received by kiosk or direct mode link.
   *
   * `true` quiz response received by kiosk mode.
   * `false` quiz response received by direct or direct mode.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_simple = false;

  /**
   * Whether the quiz needs to be skipped.
   *
   * @post post
   * @var bool
   */
  public $is_skip = false;

  /**
   * `true` if need make only validation, `false` need make validation and saving response.
   *
   * @post post
   * @var bool
   */
  public $is_validate_only = false;

  /**
   * List of quiz questions with responses in JSON format.
   *
   * @post post
   * @var string
   */
  public $json_element = '';

  /**
   * Quiz response key list.
   *
   * @delete post
   * @put post
   * @var string[]
   */
  public $json_quiz_response_key = [];

  /**
   * Business key within which quiz is managed.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Quiz key.
   *
   * @delete get
   * @post get
   * @put get
   * @var string
   */
  public $k_quiz = '';

  /**
   * Quiz login key.
   *
   * @post post
   * @var string
   * @link QuizLoginSql
   */
  public $k_quiz_login = '';

  /**
   * Quiz response key.
   *
   * `null` in a case of response creation or
   *
   * @delete get
   * @get get
   * @post get,result
   * @put get
   * @var string|null
   */
  public $k_quiz_response = null;

  /**
   * Secret key for access to quiz request.
   *
   * @post post
   * @var string
   */
  public $s_secret = '';

  /**
   * Whether to show numbering of the form elements that supports numbering.
   *
   * `true` to show numbering on the form for elements that supports numbering.
   * `false` to not show numbering.
   *
   * @get result
   * @var bool
   */
  public $show_numbering = true;

  /**
   * Date when response added.
   *
   * @get result
   * @var string
   */
  public $text_add_date = '';

  /**
   * Date when response amended.
   *
   * @get result
   * @var string
   */
  public $text_amend_date = '';

  /**
   * Name of the user who amend the response.
   *
   * @get result
   * @var string
   */
  public $text_amend_user = '';

  /**
   * Booking appointment wizard ID.
   * Not `null` if quiz response was sent during booking appointment process.
   *
   * @post post
   * @var string|null
   */
  public $text_appointment_wizard_id = null;

  /**
   * Booking class wizard ID.
   * Not `null` if quiz response was sent during booking class process.
   *
   * @post post
   * @var string|null
   */
  public $text_class_wizard_id = null;

  /**
   * Date when response completed.
   *
   * @get result
   * @var string
   */
  public $text_complete_date = '';

  /**
   * Name of the user who complete the response.
   *
   * @get result
   * @var string
   */
  public $text_complete_user = '';

  /**
   * Name of the user who owned the response.
   *
   * @get result
   * @var string
   */
  public $text_response_by = '';

  /**
   * Title of the filled form.
   *
   * `null` in case when not filled yet.
   *
   * @get result
   * @var string|null
   */
  public $text_title = null;

  /**
   * User's key for the response association.
   *
   * @put get
   * @var string|null
   */
  public $uid_link = null;

  /**
   * UID of the user who makes response for quiz.
   *
   * @post post
   * @var string|null
   */
  public $uid_response = null;
}

?>