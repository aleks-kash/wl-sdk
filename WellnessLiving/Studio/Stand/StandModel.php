<?php

namespace WellnessLiving\Studio\Stand;

use WellnessLiving\WlModelAbstract;

/**
 * Prepare creation a new stand.
 */
class StandModel extends WlModelAbstract
{
  /**
   * Information about entities necessary for the functioning of the stand.
   * Has an arbitrary structure.
   *
   * `string` if it needs to set an empty value.
   * `null` will not change.
   *
   * @get result
   * @post post
   * @put post
   * @var array|string|null
   */
  public $a_stand_data = null;

  /**
   * Stand status, one of {@link StandStatusSid}.
   *
   * `null` if not initialized and will be ignored.
   *
   * @get result
   * @put get
   * @var int|null
   */
  public $id_stand_status = null;

  /**
   * A microservice environment for create stand. Each element of the array contains <dl>
   *   <dt>string <var>k_microservice</var></dt>
   *   <dd>Microservice key.</dd>
   *   <dt>string <var>s_environment</var></dt>
   *   <dd>Environment name.</dd>
   * </dl>
   *
   * @post post
   * @var string
   */
  public $json_stand_environment = '';

  /**
   * Primary microservice for the stand.
   * The main microservice from which the stand is created; other microservices can be added
   * if they are compatible with the primary one, see {@link StandModel::$json_stand_environment}.
   *
   * @post get
   * @var string
   */
  public $k_microservice_primary = '';

  /**
   * Task key within which a stand should be created.
   * Empty string if the stand name is specified manually.
   *
   * @post get
   * @var string
   */
  public $k_task = '';

  /**
   * Stand name.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $s_stand = '';

  /**
   * Link to redirect for stand creation.
   *
   * @post result
   * @var string
   */
  public $url_redirect;
}

?>