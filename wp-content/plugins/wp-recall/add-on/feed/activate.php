<?php
global $wpdb;

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    
$collate = '';

if ( $wpdb->has_cap( 'collation' ) ) {
    if ( ! empty( $wpdb->charset ) ) {
        $collate .= "DEFAULT CHARACTER SET $wpdb->charset";
    }
    if ( ! empty( $wpdb->collate ) ) {
        $collate .= " COLLATE $wpdb->collate";
    }
}

$table = RCL_PREF ."feeds";
$sql = "CREATE TABLE IF NOT EXISTS ". $table . " (
    feed_id INT(20) NOT NULL AUTO_INCREMENT,
    user_id INT(20) NOT NULL,
    object_id INT(20) NOT NULL,
    feed_type VARCHAR(20) NOT NULL,
    feed_status INT(10) NOT NULL,
    PRIMARY KEY feed_id (feed_id),
    KEY user_id (user_id),
    KEY object_id (object_id),
    KEY feed_type (feed_type)
  ) $collate; ";

dbDelta( $sql );

require_once 'migration.php';
rcl_migration_feed_data();