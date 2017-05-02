<?php
/*
Plugin Name: My WP Shortcode Extends Example
Plugin URI: https://mywpcustomize.com/document/mywp-shortcode-extends-class/
Description: My WP Shortcode Extends Example
Version: 1.0
Author: gqevu6bsiz
Author URI: http://gqevu6bsiz.chicappa.jp/
Requires at least: 4.6
Tested up to: 4.7
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if ( ! class_exists( 'MywpExtendsShortcodeExample' ) ) :

final class MywpExtendsShortcodeExample {

  private static $instance;

  private function __construct() {}

  public static function get_instance() {

    if ( !isset( self::$instance ) ) {

      self::$instance = new self();

    }

    return self::$instance;

  }

  private function __clone() {}

  private function __wakeup() {}

  public static function init() {

    add_filter( 'mywp_shortcode_plugins_loaded_include_modules' , array( __CLASS__ , 'mywp_shortcode_plugins_loaded_include_modules' ) );

  }

  public static function mywp_shortcode_plugins_loaded_include_modules( $includes ) {

    $dir = dirname( __FILE__ ) . '/';

    $file = $dir . 'mywp.shortcode.module.example.php';

    $includes['example_shortcode_include'] = $file;

    return $includes;

  }

}

MywpExtendsShortcodeExample::init();

endif;
