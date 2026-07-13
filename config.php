<?php
$base_url = "/nagdash/";
// Config

// Type of API
// Supported values are nagios-api or livestatus
$api_type = "nagios-api";

// Your Nagios hosts
$nagios_hosts = array(
array("hostname" => "infra-monitor.arihantplus.com/nagios-api/", "port" => "443", "protocol" => "https", "tag" => "ARIHANT-SERVER", "tagcolour" => "#668cff","status_file" => "/var/nagios/status.dat","nagios_url"=>"https://infra-monitor.arihantplus.com/nagios/"),
 array("hostname" => "web.arihantplus.com/nagios-api/", "port" => "443", "protocol" => "https", "tag" => "ARIHANT-PROD", "tagcolour" => "#FFAD00","nagios_url"=>"https://web.arihantplus.com/nagios/"),
  array("hostname" => "dr-ws.arihantcapital.com/nagios-api/", "port" => "443", "protocol" => "https", "tag" => "ARIHANT-DR", "tagcolour" => "#9d20f0","nagios_url"=>"https://dr-ws.arihantcapital.com/nagios/"),
array("hostname" => "mw2-monitoring.arihantplus.com/nagios-api/", "port" => "443", "protocol" => "https", "tag" => "ARIHANT-MW2", "tagcolour" => "#00B943","nagios_url"=>"https://mw2-monitoring.arihantplus.com/nagios/"),
array("hostname" => "tradebridge.arihantplus.com/nagios-api/", "port" => "443", "protocol" => "https", "tag" => "ARIHANT-SMARTAPI", "tagcolour" => "#20f0b2","nagios_url"=>"https://tradebridge.arihantplus.com/nagios/"),
array("hostname" => "mw2-monitoring.arihantplus.com/nagios-api-dr/", "port" => "443", "protocol" => "https", "tag" => "ARIHANT-MW2-DR", "tagcolour" => "#DE188D","nagios_url"=>"https://mw2-monitoring.arihantplus.com/nagios-dr/"),
);
// Globally filter out hosts using a regex, if you wish, or leave blank for all. 
$filter = "";

// Default downtime duration, measured in seconds, for scheduling downtime via the Nagdash interface.  
$duration = 60*60;

// Show the floating spinner when Nagdash is being refreshed.
$show_refresh_spinner = true;

// Refresh rate
$refresh_every_ms = 20000;

// sort_by_time: Set this to true to sort by the last state change, e.g. how long the service has been broken.
// If set to false, leave to default sorting by hostname instead.
$sort_by_time = true;

// To select by last state change, let's define some time ranges folks might
// want to use when filtering events.
$select_last_state_change_options = array(
    0 => "N/A", # DO NOT MODIFY THIS VALUE
    15 * 60 => "15 minutes",
    60 * 60 => "1 hour",
    60 * 60 * 12 => "12 hours",
    60 * 60 * 24 => "1 day",
    60 * 60 * 24 * 7 => "1 week"
);

// Enables the <blink> tag on HARD service notifications. Enable if you want more eye-catching goodness
$enable_blinking = false;

// Include more css after the default; useful for custom skin
//$extra_css = none;

# For testing, uncomment this for some errors:
//$mock_state_file = './test_data/state';

// End Config
