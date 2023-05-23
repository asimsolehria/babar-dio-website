<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<style>
a {
  color: #40A7CC !important;
  border-bottom: 1px solid #40A7CC;
}
</style>

<tr id="section-3499735" class="section introduction">
  <th style="mso-line-height-rule: exactly; padding: 0px 44px; padding-bottom: 30px;" bgcolor="#ffffff">

    <span data-key="3499735_introduction_text" class="text"
      style="text-align: left; font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000;">
      <p style="mso-line-height-rule: exactly; font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 22px; font-weight: 400; text-transform: none; color: #000000; margin: 11px 0 0;"
        align="left">
      <p style="margin-bottom: 10px;">
        <?php printf ( esc_html__( 'Your username is %1$s', 'woocommerce' ), '<strong>' . esc_html( $user_login ) . '</strong>' ) ?>
      </p>

      <?php
            $current_user = wp_get_current_user();
            
            global $wpdb;
            $username = $user_login;
            $email = $wpdb->get_var( $wpdb->prepare("
            SELECT user_email 
            FROM $wpdb->users 
            WHERE user_login = %s
            ", 
            $username
            ) );
            ?>

      <p style="margin-bottom: 10px;">
        <?php printf ( esc_html__( 'Your account email is %1$s', 'woocommerce' ), '<strong>' . esc_html( $email ) . '</strong>' ) ?>
      </p>

      <?php if ( 'yes' === get_option( 'woocommerce_registration_generate_password' ) && $password_generated ) : ?>
      <?php /* translators: %s: Auto generated password */ ?>
      <p style="margin-bottom: 10px;">
        <?php printf( esc_html__( 'Your password has been automatically generated: %s', 'woocommerce' ), '<strong>' . esc_html( $user_pass ) . '</strong>' ); ?>
      </p>
      <?php endif; ?>

      <p>
        <?php //printf ( esc_html__( 'Thanks for creating an account on %1$s.', 'woocommerce' ), esc_html( $blogname ) ) ?>
      </p>

      <p>
        <?php printf ( esc_html__( 'You can access your account area to view orders, change your password, and more at: %1$s.', 'woocommerce' ), make_clickable( esc_url( wc_get_page_permalink( 'myaccount' ) ) ) ) ?>
      </p>
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
// do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );
/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );
/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
?>