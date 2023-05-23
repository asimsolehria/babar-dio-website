<!-- END SECTION: Introduction -->

<style>
.discount-info .new-price {
  display: none;
}

.details_babar span {
  margin-left: 12px;
  margin-right: 12px;
}

.details_babar .quantity {
  position: relative;
}

.details_babar .quantity:before {
  content: '';
  position: absolute;
  width: 5px;
  height: 5px;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
  left: -12px;
  background: #C5CCD8;
}

.details_babar .availability {
  position: relative;
}

.details_babar .availability:before {
  content: '';
  position: absolute;
  width: 5px;
  height: 5px;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
  left: -12px;
  background: #C5CCD8;
}

.details_babar .availability.green:before {
  background: #10B981;
}
</style>

<!-- BEGIN SECTION: Products With Pricing -->
<tr id="section-3499741" class="section products_with_pricing">

  <!-- Bold 1 -->

  <!-- end Bold 1 -->
  <th style="mso-line-height-rule: exactly; padding: 11px 44px;" bgcolor="#ffffff">
    <table class="table-inner" cellspacing="0" cellpadding="0" border="0" width="100%" style="min-width: 100%;"
      role="presentation">
      <tr>
        <th class="product-table" style="mso-line-height-rule: exactly;" bgcolor="#ffffff" valign="top">
          <table cellspacing="0" cellpadding="0" border="0" width="100%" style="min-width: 100%;" role="presentation">
            <tr>
              <th colspan="2" class="product-table-h3-wrapper" style="mso-line-height-rule: exactly;" bgcolor="#ffffff"
                valign="top">
                <h3 data-key="3499741_item"
                  style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 16px; line-height: 22px; font-weight: 400; text-transform: none; font-weight: 700; margin: 0; margin-bottom: 0px;"
                  align="left">ITEMS</h3>
              </th>
            </tr>

            <!-- Bold 2 -->

            <?php
            foreach($order->get_items() as $item_id => $item) :
              $product = $item->get_product();
            ?>
            <!-- end Bold 2 -->
            <tr class="row-border-bottom">
              <th class="table-stack product-image-wrapper stack-column-center" width="1"
                style="mso-line-height-rule: exactly; border-bottom-width: 1px; border-bottom-color: #eeeeee; border-bottom-style: solid; padding: 11px 11px 11px 0; padding-top: 30px; padding-right: 44px;"
                bgcolor="#ffffff" valign="middle">
                <a href="<?php echo get_permalink( $product->id ) ?>" class="product_link" target="_blank"
                  style="color: #0c0c09 !important; text-decoration: none !important; text-underline: none; word-wrap: break-word; border: none;">
                  <img width="120" class="product-image" src="<?php echo get_the_post_thumbnail_url( $product->id ) ?>"
                    alt=''
                    style="vertical-align: middle; text-align: center; width: 120px; max-width: 120px; height: auto !important; border-radius: 0px; padding: 0px;">
                </a>
              </th>
              <th class="product-details-wrapper table-stack stack-column"
                style="mso-line-height-rule: exactly; padding-top: 30px; padding-bottom: 11px; border-bottom-width: 1px; border-bottom-color: #eeeeee; border-bottom-style: solid;"
                bgcolor="#ffffff" valign="middle">
                <table cellspacing="0" cellpadding="0" border="0" width="100%" style="min-width: 100%;"
                  role="presentation">
                  <tr>
                    <th class="line-item-description"
                      style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; padding: 11px 5px 11px 0; text-align: left !important;"
                      align="left" bgcolor="#ffffff" valign="top">
                      <p style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; margin: 0;"
                        align="left">
                        <a href="<?php echo get_permalink( $product->id ) ?>" class="product_link" target="_blank"
                          style="color: #000000 !important; text-decoration: none !important; text-underline: none; word-wrap: break-word; text-align: left !important; font-weight: 400; border: none; display: inline-block; margin-bottom: 12px;"><?php echo $item->get_name(); ?></a>
                      <div class="details_babar" style="font-size: 12px;">
                        <span class="muted"
                          style="text-align: left; font-family: 'Open Sans', sans-serif; font-weight: normal; text-transform: none; color: #000;">
                          <?php

                  
                          // allow other plugins to add additional product information here.
                          do_action( 'woocommerce_order_item_meta_start', $item_id, $item, $order, $plain_text );
                  
                          
                  
                          // allow other plugins to add additional product information here.
                          do_action( 'woocommerce_order_item_meta_end', $item_id, $item, $order, $plain_text );
                          ?>
                        </span>
                        <span class="quantity">
                          Quantity <?php echo $item->get_quantity(); ?>
                        </span>
                        
                      </div>
                      <br>
                      </p>
                    </th>
                    <th class="right line-item-line-price" width="1"
                      style="mso-line-height-rule: exactly; white-space: nowrap; padding: 11px 0 11px 22px;"
                      align="right" bgcolor="#ffffff" valign="top">
                      <p style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; margin: 0;"
                        align="right">$<?php echo $item->get_total(); ?>
                      </p>
                    </th>
                  </tr>
                </table>
              </th>
            </tr>
            <tr>
              <th colspan="2" class="product-empty-row" style="mso-line-height-rule: exactly;" bgcolor="#ffffff"
                valign="top"></th>
            </tr>
            <?php endforeach; ?>

            <!-- Bold 2 -->


          </table>
        </th>
      </tr>

      <style>
      a {
        color: #40A7CC !important;
        border-bottom: 1px solid #40A7CC;
        width: max-content;
      }

      h2 {
        font-family: 'Open Sans', sans-serif;
      }

      .ywot_order_details a {
        color: #fff !important;
        background: #8e2c2a;
        padding: 10px 20px;
        display: inline-block;
        margin-top: 10px;
      }

      .ywot_order_details {
        text-align: left !important;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
      }

      .ywot_order_details h2 {
        text-align: left !important;
      }
      </style>

      <tr>
        <th class="pricing-table" style="mso-line-height-rule: exactly; padding: 11px 0;" bgcolor="#ffffff"
          valign="top">
          <table cellspacing="0" cellpadding="0" border="0" width="100%" style="min-width: 100%;" role="presentation">
            <tr>
              <th class="table-title" data-key="3499741_subtotal"
                style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; width: 65%; padding: 5px 0; text-align: right;"
                align="right" bgcolor="#ffffff" valign="top">Subtotal</th>
              <th class="table-text"
                style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; width: 35%; padding: 5px 0; text-align: right;"
                align="right" bgcolor="#ffffff" valign="middle">
                <?php echo $order->get_subtotal_to_display(); ?></th>
            </tr>
            <tr>
              <th class="table-title"
                style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; width: 65%; padding: 5px 0; text-align: right;"
                align="right" bgcolor="#ffffff" valign="top">Shipping</th>
              <th class="table-text"
                style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; width: 35%; padding: 5px 0; text-align: right;"
                align="right" bgcolor="#ffffff" valign="middle">
                <?php echo $order->get_shipping_to_display(); ?></th>
            </tr>
            <tr class="pricing-table-total-row">
              <th class="table-title" data-key="3499741_total"
                style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 22px; font-weight: 400; text-transform: none; color: #000; width: 65%; padding: 5px 0; text-align: right;"
                align="right" bgcolor="#ffffff" valign="top">Total</th>
              <th class="table-text"
                style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 22px; font-weight: 400; text-transform: none; color: #000; width: 35%; padding: 5px 0; text-align: right;"
                align="right" bgcolor="#ffffff" valign="middle">
                <b><?php echo $order->get_formatted_order_total(); ?></b>
              </th>
            </tr>
          </table>
        </th>
      </tr>
    </table>
  </th>
</tr>

<!-- END SECTION: Products With Pricing -->

<!-- BEGIN SECTION: Payment Info -->
<tr id="section-3499742" class="section payment_info">
  <th style="mso-line-height-rule: exactly; padding: 11px 44px;" bgcolor="#ffffff">
    <table class="table-inner" cellspacing="0" cellpadding="0" border="0" width="100%" style="min-width: 100%;"
      role="presentation">

      <!-- PAYMENT INFO -->
      <tr>
        <th colspan="2" style="mso-line-height-rule: exactly; text-align: left;" bgcolor="#ffffff" valign="top">
          <a href="<?php echo site_url(); ?>" data-key="3499742_payment_info"
            style="font-family: 'Open Sans', sans-serif; color: #40A7CC; font-size: 14px; line-height: 22px; font-weight: 400; text-transform: none; margin: 0; "
            align="left">VISIT OUR STORE</a>
        </th>
      </tr>

      <!-- PAYMENT METHOD IMAGE -->
    </table>
  </th>
</tr>

<tr id="section-3499742" class="section payment_info">
  <th style="mso-line-height-rule: exactly; padding: 11px 44px;" bgcolor="#ffffff">
    <table class="table-inner" cellspacing="0" cellpadding="0" border="0" width="100%" style="min-width: 100%;"
      role="presentation">

      <!-- PAYMENT INFO -->
      <tr>
        <th colspan="2" style="mso-line-height-rule: exactly; text-align: left;" bgcolor="#ffffff" valign="top">
          <h3 href="<?php echo site_url(); ?>" data-key="3499742_payment_info"
            style="font-family: 'Open Sans', sans-serif; letter-spacing: -0.01em; font-size: 36px; font-weight: 700; line-height: 100%; margin-bottom: 2px;"
            align="left">Customer<br>Information</h3>
        </th>
      </tr>

      <!-- PAYMENT METHOD IMAGE -->
    </table>
  </th>
</tr>

<!-- END SECTION: Payment Info -->

<style>

</style>

<!-- BEGIN SECTION: Customer And Shipping Address -->
<tr id="section-3499740" class="section customer_and_shipping_address">

  <!-- BEGIN : 2 COLUMNS : BILL_TO -->
  <th style="mso-line-height-rule: exactly; padding: 11px 44px;" bgcolor="#ffffff">
    <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="min-width: 100%;"
      role="presentation">
      <tr>

        <!-- BEGIN : Column 1 of 2 : BILL_TO -->
        <th width="50%" class="column_1_of_2 column_bill_to " style="mso-line-height-rule: exactly;" align="left"
          bgcolor="#ffffff" valign="top">
          <table align="center" border="0" width="100%" cellpadding="0" cellspacing="0" style="min-width: 100%;"
            role="presentation">
            <tr>
              <th style="mso-line-height-rule: exactly; padding-right: 5%;" align="left" bgcolor="#ffffff" valign="top">
                <h3 data-key="3499740_ship_to"
                  style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 16px; line-height: 22px; font-weight: 700; text-transform: none; margin: 0; margin-bottom: 16px; font-weight: 700;"
                  align="left">Shipping Address</h3>
              </th>
            </tr>
            <tr>
              <th class="shipping_address " style="mso-line-height-rule: exactly; padding-right: 5%;" align="left"
                bgcolor="#ffffff" valign="top">
                <p style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; margin: 0;"
                  align="left">
                  <?php echo $order->get_formatted_shipping_address(); ?>
                </p>
              </th>
            </tr>
          </table>
        </th>

        <!-- END : Column 1 of 2 : BILL_TO -->

        <!-- BEGIN : Column 2 of 2 : SHIP_TO -->
        <th width="50%" class="column_2_of_2 column_ship_to " style="mso-line-height-rule: exactly;" align="left"
          bgcolor="#ffffff" valign="top">
          <table align="center" border="0" width="100%" cellpadding="0" cellspacing="0" style="min-width: 100%;"
            role="presentation">
            <tr>
              <th class="pt--mobile" style="mso-line-height-rule: exactly;" align="left" bgcolor="#ffffff" valign="top">
                <h3 data-key="3499740_bill_to"
                  style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 16px; line-height: 22px; font-weight: 700; text-transform: none; margin: 0; text-align: left; font-weight: 700; margin-bottom: 16px;"
                  align="left">Billing Address</h3>
              </th>
            </tr>
            <tr>
              <th class="billing_address " style="mso-line-height-rule: exactly;" align="left" bgcolor="#ffffff"
                valign="top">
                <p style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; margin: 0;"
                  align="left">
                  <?php echo $order->get_formatted_billing_address(); ?>
                </p>
              </th>
            </tr>
          </table>
        </th>

        <!-- END : Column 2 of 2 : SHIP_TO -->
      </tr>




      <tr>

        <!-- BEGIN : Column 1 of 2 : BILL_TO -->
        <th width="50%" class="column_1_of_2 column_bill_to " style="mso-line-height-rule: exactly;" align="left"
          bgcolor="#ffffff" valign="top">
          <table align="center" border="0" width="100%" cellpadding="0" cellspacing="0" style="min-width: 100%;"
            role="presentation">
            <tr>
              <th style="mso-line-height-rule: exactly; padding-right: 5%;" align="left" bgcolor="#ffffff" valign="top">
                <h3 data-key="3499740_ship_to"
                  style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 16px; line-height: 22px; font-weight: 700; text-transform: none; margin: 0; margin-bottom: 16px; margin-top: 24px; font-weight: 700;"
                  align="left">Shipping Method</h3>
              </th>
            </tr>
            <tr>
              <th class="shipping_address " style="mso-line-height-rule: exactly; padding-right: 5%;" align="left"
                bgcolor="#ffffff" valign="top">
                <p style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; margin: 0;"
                  align="left">
                  <?php 
                  $shipping_methods = $order->get_shipping_methods();
                  // Display the shipping method
                  if ( ! empty( $shipping_methods ) ) {
                    foreach ( $shipping_methods as $shipping_method ) {
                        echo $shipping_method['name'];
                    }
                  } else {
                    echo 'Default Shipping';
                  }
                  ?>
                </p>
              </th>
            </tr>
          </table>
        </th>

        <!-- END : Column 1 of 2 : BILL_TO -->

        <!-- BEGIN : Column 2 of 2 : SHIP_TO -->
        <th width="50%" class="column_2_of_2 column_ship_to " style="mso-line-height-rule: exactly;" align="left"
          bgcolor="#ffffff" valign="top">
          <table align="center" border="0" width="100%" cellpadding="0" cellspacing="0" style="min-width: 100%;"
            role="presentation">
            <tr>
              <th class="pt--mobile" style="mso-line-height-rule: exactly;" align="left" bgcolor="#ffffff" valign="top">
                <h3 data-key="3499740_bill_to"
                  style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 16px; line-height: 22px; font-weight: 700; text-transform: none; margin: 0; margin-top: 24px; text-align: left; font-weight: 700; margin-bottom: 16px;"
                  align="left">Payment Method</h3>
              </th>
            </tr>
            <tr>
              <th class="billing_address " style="mso-line-height-rule: exactly;" align="left" bgcolor="#ffffff"
                valign="top">
                <p style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; margin: 0;"
                  align="left">
                  <?php echo $order->get_payment_method_title() ?>
                </p>
              </th>
            </tr>
          </table>
        </th>

        <!-- END : Column 2 of 2 : SHIP_TO -->
      </tr>



    </table>
  </th>

  <!-- END : 2 COLUMNS : SHIP_TO -->
</tr>

<!-- END SECTION: Customer And Shipping Address -->



<!-- END SECTION: Divider -->
</table>
</td>
</tr>
</table>

<!-- END : SECTION : MAIN -->