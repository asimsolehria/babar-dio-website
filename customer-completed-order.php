<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<tr id="section-3499735" class="section introduction">
  <th style="mso-line-height-rule: exactly; padding: 0px 44px; padding-bottom: 30px;" bgcolor="#ffffff">

    <span data-key="3499735_introduction_text" class="text"
      style="text-align: left; font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000;">
      <p style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; margin: 0px 0 0; margin-bottom: 24px"
        align="left">
        Hi <?php echo $order->get_formatted_billing_full_name(); ?>,
      </p>
      <p style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; margin: 11px 0 0;"
        align="left">
        Your order has been completed and shipped.
      </p>

    </span>
  </th>
</tr>


<?php
/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );
/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );
/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
?>
<script>
// document.querySelector('.tracking-provider').innerHTML = 'Shipped By'
// document.querySelector('.tracking-number').innerHTML = 'Tracking #'
// document.querySelector('.date-shipped').innerHTML = 'Ship Date'
</script>