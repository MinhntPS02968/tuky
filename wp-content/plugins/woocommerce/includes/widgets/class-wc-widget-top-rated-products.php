<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Top Rated Products Widget.
 *
 * Gets and displays top rated products in an unordered list.
 *
 * @author   WooThemes
 * @category Widgets
 * @package  WooCommerce/Widgets
 * @version  3.0.0
 * @extends  WC_Widget
 */
class WC_Widget_Top_Rated_Products extends WC_Widget {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->widget_cssclass    = 'woocommerce widget_top_rated_products';
		$this->widget_description = __( 'Display a list of your top rated products on your site.', 'woocommerce' );
		$this->widget_id          = 'woocommerce_top_rated_products';
		$this->widget_name        = __( 'WooCommerce top rated products', 'woocommerce' );
		$this->settings           = array(
			'title'  => array(
				'type'  => 'text',
				'std'   => __( 'Top rated products', 'woocommerce' ),
				'label' => __( 'Title', 'woocommerce' ),
			),
			'number' => array(
				'type'  => 'number',
				'step'  => 1,
				'min'   => 1,
				'max'   => '',
				'std'   => 5,
				'label' => __( 'Number of products to show', 'woocommerce' ),
			),
		);

		parent::__construct();
	}

	/**
	 * Output widget.
	 *
	 * @see WP_Widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {

		if ( $this->get_cached_widget( $args ) ) {
			return;
		}

		ob_start();

		$number = ! empty( $instance['number'] ) ? absint( $instance['number'] ) : $this->settings['number']['std'];

		$query_args = array(
			'posts_per_page' => $number,
			'no_found_rows'  => 1,
			'post_status'    => 'publish',
			'post_type'      => 'product',
			'meta_key'       => '_wc_average_rating',
			'orderby'        => 'meta_value_num',
			'order'          => 'DESC',
			'meta_query'     => WC()->query->get_meta_query(),
			'tax_query'      => WC()->query->get_tax_query(),
		);

		$r = new WP_Query( $query_args );

		if ( $r->have_posts() ) {

			$this->widget_start( $args, $instance );

			echo apply_filters( 'woocommerce_before_widget_product_list', '<ul class="product_list_widget">' );

			while ( $r->have_posts() ) {
				$r->the_post();
				wc_get_template( 'content-widget-product.php', array( 'show_rating' => true ) );
			}

			echo apply_filters( 'woocommerce_after_widget_product_list', '</ul>' );

			$this->widget_end( $args );
		}

		wp_reset_postdata();

		$content = ob_get_clean();

		echo $content;

		$this->cache_widget( $args, $content );
	}
}
