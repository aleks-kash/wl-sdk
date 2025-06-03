<?php

namespace WellnessLiving\Wl\Lead\Source;

/**
 * System-defined Lead Source values.
 *
 * Last used ID: 10
 */
class LeadSourceSid
{
  /**
   * Lead was created through Achieve App. Only relevant to White Label Achieve subscribers.
   */
  const ACHIEVE_APP = 9;

  /**
   * Lead was created manually. Default for manually created leads.
   */
  const ADD_BY_STAFF = 1;

  /**
   * Lead was created through Classpass.
   */
  const CLASSPASS = 5;

  /**
   * Lead was created through Client Portal.
   */
  const CLIENT_PORTAL = 8;

  /**
   * Lead was created through Api Endpoint. Default for leads created via API, un less overridden.
   */
  const ENDPOINT = 3;

  /**
   * Lead was created through Reserve with Google.
   */
  const GOOGLE_RESERVE = 6;

  /**
   * Lead was created through My Presence Site.
   */
  const MY_PRESENCE_SITE = 10;

  /**
   * Lead was created through Wellhub.
   */
  const WELLHUB = 4;

  /**
   * Lead was created through Wellnessliving Explorer.
   */
  const WELLNESSLIVING_EXPLORER = 7;

  /**
   * Lead was created through widget.
   */
  const WIDGET = 2;
}

?>