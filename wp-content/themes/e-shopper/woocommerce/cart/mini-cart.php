<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.1.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_before_mini_cart' ); ?>
<div class="minicart-container">
<ul class="cart_list product_list_widget <?php echo $args['list_class']; ?>">

	<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>

		<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

					$product_name  = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
					$thumbnail     = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
					$product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<li class="minicart-li">
                                          <div class="minicart-content row">
                                              <div class="product-remove col-md-1 col-lg-1 col-sm-1">
						<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="minicart-remove" title="%s"> <span class="glyphicon glyphicon-remove"></a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key ); ?>
                                              </div>
                                              <div class="product_name col-md-5 col-lg-5 col-sm-5">
                                               <a class="product_nm_a" href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>" ><?php echo $product_name ?></a>
                                              <?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s / QUANTITY: %s', $product_price, $cart_item['quantity'] ) . '</span>', $cart_item, $cart_item_key ); ?>
                                              </div>
                                               <div class="product_img col-md-6 col-lg-6 col-sm-6">
						<?php if ( ! $_product->is_visible() ) : ?>
							<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) ?>
						<?php else : ?>
							<a class="product_imgs" href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>" >
								<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail )?>
							</a>
						<?php endif; ?>
						<?php echo WC()->cart->get_item_data( $cart_item ); ?>
                                                </div>
                                               </div>
<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
					</li>
					<?php
				}
			}
			do_action( 'woocommerce_mini_cart_contents' );
		?>

	<?php else : ?>

		<li class="empty"><?php _e( 'No products in the cart.', 'woocommerce' ); ?></li>

	<?php endif; ?>

</ul><!-- end product list -->

<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>

	<div class="total_div"><?php _e( 'SUBTOTAL', 'woocommerce' ); ?>:<strong> <?php echo WC()->cart->get_cart_subtotal(); ?></strong></div>

	<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

	<div class="buttons view_cart">
		<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="button wc-forward"><?php _e( 'View Cart', 'woocommerce' ); ?></a>
	</div>
        <div class="buttons checkout">
		<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="button checkout wc-forward"><?php _e( 'Checkout', 'woocommerce' ); ?></a>
        </div>

<?php endif; ?>
</div>
<?php do_action( 'woocommerce_after_mini_cart' ); ?>
