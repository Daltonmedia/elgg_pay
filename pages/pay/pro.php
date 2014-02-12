<?php
/**
 * Pay - see account overview
 *
 * @package Pay
 */
elgg_load_library('elgg:pay');

//elgg_set_context('settings');

$username = get_input('username', elgg_get_logged_in_user_entity()->username);
$user = $username ? get_user_by_username($username) : elgg_get_logged_in_user_entity();

elgg_set_page_owner_guid($user->guid);

pay_breadcrumb();

elgg_push_breadcrumb(elgg_echo('pay:account'), 'pay/account');


$limit = get_input("limit", 10);

$title = elgg_echo('Word een pro user');

$content = elgg_echo('test');


echo elgg_view_page($title, $body);

?>