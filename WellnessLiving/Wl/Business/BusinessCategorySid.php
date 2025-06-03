<?php

namespace WellnessLiving\Wl\Business;

/**
 * A list of client booking flow types.
 *
 * Last ID: 6.
 */
abstract class BusinessCategorySid
{
  /**
   * Musician schools.
   *
   * @title Education & Specialty
   */
  const EDUCATION = 6;

  /**
   * Traditional medicine
   *
   * @title Health & Beauty
   */
  const HEALTH = 3;

  /**
   * Spa saloons.
   *
   * @title Sports & Recreation
   */
  const RECREATION = 2;

  /**
   * Yoga and Fitness studios and gyms.
   *
   * @title Fitness
   */
  const SPORT = 1;
}

?>