<?php
	global $wpdb;
	$wpdb->query(wpdb->prepare("DELETE * FROM $wpdb->wp_chat_message"));
?>