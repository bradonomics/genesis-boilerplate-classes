<?php

/**
 * The core theme class.
 *
 * Also maintains the unique identifier of the theme as well as the current
 * version.
 *
 * @author     Brad West <brad@bradonomics.com>
 */
class Geneplate {

	/**
	 * The unique name of this theme.
   *
	 * @access   protected
	 * @var      string    $theme_name    The string used to uniquely identify this theme.
	 */
	protected $theme_name;

  /**
   * The unique identifier of this theme.
   *
   * @access   protected
   * @var      string    $theme_name    The string used to uniquely identify this theme.
   */
  protected $text_domain;

	/**
   * The unique location of this theme on the webz.
   *
   * @access   protected
   * @var      string    $theme_name    The string used to uniquely identify this theme.
   */
  protected $theme_url;

	/**
	 * The current version of the theme.
	 *
	 * @access   protected
	 * @var      string    $version    The current version of the theme.
	 */
	protected $version;

	/**
	 * Set the theme name, text domain, url, and the theme version that can
	 * be used throughout the theme and load the dependencies.
	 *
	 */
	public function __construct() {

		$this->theme_name = 'Genesis Boilerplate';
    $this->text_domain = 'geneplate';
		$this->theme_url = 'http://github.com/bradonomics/genesis-boilerplate/';
		$this->version = '0.0.0';

		$this->load_dependencies();

	}

	/**
	 * Load the required functions for this theme.
	 *
	 * @access   private
	 */
	private function load_dependencies() {

		require_once get_stylesheet_directory() . '/includes/partials/geneplate-head.php';
    require_once get_stylesheet_directory() . '/includes/partials/geneplate-header.php';
    require_once get_stylesheet_directory() . '/includes/partials/geneplate-structure.php';
    require_once get_stylesheet_directory() . '/includes/partials/geneplate-layouts.php';
    require_once get_stylesheet_directory() . '/includes/partials/geneplate-widgets.php';
    require_once get_stylesheet_directory() . '/includes/partials/geneplate-site-inner.php';
    require_once get_stylesheet_directory() . '/includes/partials/geneplate-sidebars.php';
    require_once get_stylesheet_directory() . '/includes/partials/geneplate-footer.php';

	}

	/**
	 * The name of the theme used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @return    string    The name of the theme.
	 */
	public function get_theme_name() {
		return $this->theme_name;
	}

  /**
   * The text domain of the theme used to uniquely identify it within the context of
   * WordPress.
   *
   * @return    string    The text domain of the theme.
   */
  public function get_text_domain() {
    return $this->text_domain;
  }

	/**
   * The URL of the theme used to find it on the interwebz.
   *
   * @return    string    The URL of the theme.
   */
  public function get_theme_url() {
    return $this->theme_url;
  }

	/**
	 * Retrieve the version number of the theme.
	 *
	 * @return    string    The version number of the theme.
	 */
	public function get_version() {
		return $this->version;
	}


	//* Register Child Theme
	public function run() {
		define( 'CHILD_THEME_NAME', __( $this->get_theme_name(), $this->get_text_domain() ) );
		define( 'CHILD_THEME_URL', $this->get_theme_url() );
		define( 'CHILD_THEME_VERSION', $this->get_version() );
	}

}
