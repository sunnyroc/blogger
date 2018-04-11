<?php
/**
 * Product loop sale flash
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;
$price = $product->get_price();

$currency = get_woocommerce_currency_symbol();

$regular_price = $product->get_regular_price();
$sales_price = $product->get_sale_price();  

				$price = $regular_price - $sales_price;
				$price = round($price, 2);
				$price = explode ('.',$price);
				$price1= $price[0];$price2="";
                                if (isset ($price[1]))
                                {
				$price2 = $price[1];
                                }
				if(!$price2){$price2 = '00';}
				$sale = $currency;
				$sale .= $price[0];
?>

<?php if ( $product->is_on_sale() ) : ?>

	<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . $sale.'<sup>.'.$price2.'</sup> off' . '</span>', $product, $product ); ?>

<?php endif; ?>
