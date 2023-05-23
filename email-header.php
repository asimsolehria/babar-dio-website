<?php
// Call the global WC_Email object
global $email;
// Get an instance of the WC_Order object
$order = $email->object;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html lang="en">

<head>

  <!--[if gte mso 15]>
      <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG />
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
      </xml>
    <![endif]-->
  <!-- <meta name="viewport" content="width=device-width"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">

  <!-- Order confirmation email template for Shopify -->
  <style type="text/css" data-premailer="ignore">
  /* What it does: Remove spaces around the email design added by some email clients. */
  /* Beware: It can remove the padding / Margin and add a background color to the compose a reply window. */
  html,
  body {
    Margin: 0 auto !important;
    padding: 0 !important;
    width: 100% !important;
    height: 100% !important;
  }

  html {
    overflow-x: hidden !important;
    width: 100vw !important;
  }

  /* What it does: Stops email clients resizing small text. */
  * {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  /* What it does: Forces Outlook.com to display emails full width. */
  .ExternalClass {
    width: 100%;
  }

  /* What is does: Centers email on Android 4.4 */
  div[style*="Margin: 16px 0"] {
    Margin: 0 !important;
  }

  /* What it does: Stops Outlook from adding extra spacing to tables. */
  table,
  th {
    mso-table-lspace: 0pt;
    mso-table-rspace: 0pt;
  }

  /* What it does: Fixes Outlook.com line height. */
  .ExternalClass,
  .ExternalClass * {
    line-height: 100% !important;
  }

  /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
  table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    border: none;
    Margin: 0 auto;
  }

  div[style*="Margin: 16px 0"] {
    Margin: 0 !important;
  }

  /* What it does: Uses a better rendering method when resizing images in IE. */
  img {
    -ms-interpolation-mode: bicubic;
  }

  /* What it does: Overrides styles added when Yahoo's auto-senses a link. */
  .yshortcuts a {
    border-bottom: none !important;
  }

  /* What it does: Overrides blue, underlined link auto-detected by iOS Mail. */
  /* Create a class for every link style needed; this template needs only one for the link in the footer. */
  /* What it does: A work-around for email clients meddling in triggered links. */
  *[x-apple-data-detectors],
  /* iOS */
  .x-gmail-data-detectors,
  /* Gmail */
  .x-gmail-data-detectors *,
  .aBn {
    border-bottom: none !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
  }

  /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
  .a6S {
    display: none !important;
    opacity: 0.01 !important;
  }

  /* If the above doesn't work, add a .g-img class to any image in question. */
  img.g-img+div {
    display: none !important;
  }

  /* What it does: Prevents underlining the button text in Windows 10 */
  a,
  a:link,
  a:visited {
    color: #0c0c09;
    text-decoration: none !important;
  }

  .header a {
    color: #a7a7a7;
    text-decoration: none;
    text-underline: none;
  }

  .main a {
    color: #0c0c09;
    text-decoration: none;
    text-underline: none;
    word-wrap: break-word;
  }

  .main .section.customer_and_shipping_address a,
  .main .section.shipping_address_and_fulfillment_details a {
    color: #000000;
    text-decoration: none;
    text-underline: none;
    word-wrap: break-word;
  }

  .footer a {
    color: #000000;
    text-transform: none;
    text-decoration: none;
    text-underline: none;
  }

  /* What it does: Overrides styles added images. */
  img {
    border: none !important;
    outline: none !important;
    text-decoration: none !important;
  }

  td.menu_bar_1 a:hover,
  td.menu_bar_6 a:hover {
    color: #0c0c09 !important;
  }

  th.related_product_wrapper.first {
    border-right: 11px solid #ffffff;
    padding-right: 5px;
  }

  th.related_product_wrapper.last {
    border-left: 11px solid #ffffff;
    padding-left: 5px;
  }
  </style>

  <!--[if (mso)|(mso 16)]>
      <style type="text/css" data-premailer="ignore">
        a {text-decoration: none;}
      </style>
    <![endif]-->

  <!--[if gte mso 9]>
      <style>
        li {
              text-indent: -1em; /* Normalise space between bullets and text */
          }
      </style>
    <![endif]-->

  <!--[if !mso]>

      <!-->
  <style type="text/css" data-premailer="ignore">
  /* What it does: Fixes fonts for Google WebFonts; */
  [style*="Roboto"] {
    font-family: 'Roboto', -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif !important;
  }

  [style*="Roboto"] {
    font-family: 'Roboto', -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif !important;
  }

  [style*="Roboto"] {
    font-family: 'Roboto', -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif !important;
  }

  [style*="Roboto"] {
    font-family: 'Roboto', -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif !important;
  }
  </style>
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:400,700%7CRoboto:400,700%7CRoboto:400,700%7CRoboto:400,700&amp;subset=latin-ext"
    rel="stylesheet" type="text/css" data-premailer="ignore">

  <!--<![endif]-->
  <style type="text/css" data-premailer="ignore">
  /* Media Queries */
  /* What it does: Removes right gutter in Gmail iOS app */
  @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {

    /* iPhone 6 and 6+ */
    .container {
      width: 100%;
    }
  }

  /* Main media query for responsive styles */
  @media only screen and (max-device-width: 480px) {

    /* What it does: Overrides email-container's desktop width and forces it into a 100% fluid width. */
    .email-container {
      width: 100% !important;
      /* min-width: 100% !important; */
      max-width: 350px !important;
    }

    .section>th {
      padding: 11px 22px 11px 22px !important;
    }

    .section.divider>th {
      padding: 22px 22px !important;
    }

    .main .section:first-child>th,
    .main .section:first-child>td {
      padding-top: 22px !important;
      padding-bottom: 22px !important;
    }

    .main .section:last-child>th,
    .main .section:last-child>td {
      padding-bottom: 33px !important;
    }

    .section.recommended_products>th,
    .section.discount>th {
      padding: 22px 22px !important;
    }

    /* What it does: Forces images to resize to the width of their container. */
    img.fluid,
    img.fluid-centered {
      width: 100% !important;
      min-width: 100% !important;
      max-width: 100% !important;
      height: auto !important;
      Margin: auto !important;
      box-sizing: border-box;
    }

    /* and center justify these ones. */
    img.fluid-centered {
      Margin: auto !important;
    }

    /* What it does: Forces table cells into full-width rows. */
    th.stack-column,
    th.stack-column-left,
    th.stack-column-center,
    th.related_product_wrapper,
    .column_1_of_2,
    .column_2_of_2 {
      display: block !important;
      width: 100% !important;
      min-width: 100% !important;
      direction: ltr !important;
      box-sizing: border-box;
    }

    /* and left justify these ones. */
    th.stack-column-left {
      text-align: left !important;
    }

    /* and center justify these ones. */
    th.stack-column-center,
    th.related_product_wrapper {
      text-align: left !important;
      border-right: none !important;
      border-left: none !important;
    }

    .column_button,
    .column_button>table,
    .column_button>table th {
      width: 100% !important;
      text-align: center !important;
      Margin: 0 !important;
    }

    .column_1_of_2 {
      padding-bottom: 22px;
    }

    .column_1_of_2 th {
      padding-right: 0 !important;
    }

    .column_2_of_2 th {
      padding-left: 0 !important;
    }

    .column_text_after_button {
      padding: 0 11px !important;
    }

    /* Adjust product images */
    th.table-stack {
      padding: 0 !important;
    }

    th.product-image-wrapper {
      padding: 22px 0 11px 0 !important;
    }

    img.product-image {
      width: 240px !important;
      max-width: 240px !important;
    }

    tr.row-border-bottom th.product-image-wrapper {
      border-bottom: none !important;
    }

    th.related_product_wrapper.first,
    th.related_product_wrapper.last {
      padding-right: 0 !important;
      padding-left: 0 !important;
    }

    .text_banner th.banner_container {
      padding: 11px !important;
    }

    .mobile_app_download .column_1_of_2 .image_container {
      padding-bottom: 0 !important;
    }

    .mobile_app_download .column_2_of_2 .image_container {
      padding-top: 0 !important;
    }
  }
  </style>
  <style type="text/css" data-premailer="ignore">
  /* Custom Media Queries */
  @media only screen and (max-width:480px) {
    .babar_header {
      padding-left: 11px !important;
      padding-right: 11px !important;
    }

    .section>th {
      padding: 11px 10px !important;
    }

    .section.discount>th,
    .section.divider>th,
    .section.recommended_products>th,
    .column_unsubscribe {
      padding-right: 22px !important;
      padding-left: 22px !important;
    }

    .column_logo,
    .column_1_of_2,
    .column_2_of_2 {
      display: block !important;
      width: 100% !important;
      min-width: 100% !important;
      direction: ltr !important;
      box-sizing: border-box !important;
      text-align: center !important;
    }

    th.column_1_of_2 th,
    th.column_2_of_2 th,
    th.column_1_of_2 th *,
    th.column_2_of_2 th * {
      text-align: left !important;
    }

    .column_1_of_2.column_order_number,
    .column_2_of_2.column_date {
      display: table-cell !important;
      width: 50% !important;
      min-width: 50% !important;
      direction: initial !important;
      box-sizing: content-box !important;
      text-align: initial !important;
    }

    .subtitle.title,
    .subtitle.related_products_title,
    .subtitle.discount_title {
      text-align: center !important;
    }

    table.button {
      width: 100% !important;
    }

    th.order-table-title {
      text-align: center !important;
    }

    th.column_text_after_button {
      padding-right: 22px !important;
      padding-left: 22px !important;
    }

    .column_products th {
      vertical-align: top !important;
    }

    .babar_header_col_2 {
      text-align: left !important;
      padding-top: 20px !important;
    }

    .babar_footer {
      padding-left: 11px !important;
      padding-right: 11px !important;
      padding-top: 40px !important;
    }
  }

  body,
  html {
    width: 100% !important;
  }

  html {
    max-width: 100vw;
  }
  </style>


</head>

<body class="body" id="body" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#f8f8f8"
  style="-webkit-text-size-adjust: none; -ms-text-size-adjust: none; margin: 0; padding: 0;">

  <!--[if !mso 9]>

      <!-->

  <!--<![endif]-->

  <!-- BEGIN: CONTAINER -->
  <table class="container container_full" cellpadding="0" cellspacing="0" border="0" width="100%"
    style="border-collapse: collapse; min-width: 100%;" role="presentation" bgcolor="#f8f8f8">
    <tbody>
      <tr>
        <th valign="top" style="mso-line-height-rule: exactly;">
          <center style="width: 100%;">
            <table border="0" width="600" cellpadding="0" cellspacing="0" align="center"
              style="max-width: 600px; margin: auto; width: 100%;" class="email-container" role="presentation">
              <tbody>
                <tr>
                  <th valign="top" style="mso-line-height-rule: exactly;">

                    <!-- BEGIN : SECTION : HEADER -->
                    <table class="section_wrapper header" data-id="header" id="section-header" border="0" width="100%"
                      cellpadding="0" cellspacing="0" align="center" style="min-width: 100%;" role="presentation"
                      bgcolor="#fff">
                      <tr>
                        <td class="section_wrapper_th babar_header"
                          style="mso-line-height-rule: exactly; padding-top: 30px; padding-left: 44px; padding-right: 44px;"
                          bgcolor="#fff">
                          <table border="0" width="100%" cellpadding="0" cellspacing="0" align="left"
                            style="min-width: 100%;" role="presentation">
                            <tr>
                              <th class="column_logo"
                                style="mso-line-height-rule: exactly; padding-top: 0; padding-bottom: 0;" align="left"
                                bgcolor="#fff">

                                <!-- Logo : BEGIN -->
                                <a href="<?php echo site_url() ?>" target="_blank"
                                  style="color: #a7a7a7; text-decoration: none !important; text-underline: none;">
                                  <img
                                    src="<?php echo get_stylesheet_directory_uri() ?>/woocommerce/emails/assets/img/23-1.png"
                                    class="logo " width="128" border="0"
                                    style="width: 101px; height: auto !important; display: block; text-align: left;">
                                </a>

                                <!-- Logo : END -->
                              </th>

                              <th class="column_logo babar_header_col_2"
                                style="mso-line-height-rule: exactly; padding-top: 0; padding-bottom: 0;" align="right"
                                bgcolor="#fff">

                                <!-- Logo : BEGIN -->
                                <?php if ( $order ): ?>
                                <span
                                  style="display: inline-block; padding: 7px 12px; font-size: 12px; font-family: 'Open Sans', sans-serif; font-weight: 700; text-transform: uppercase; border: 1px solid #DEE2E9; border-radius: 8px;">
                                  Order # <?php echo $order->get_id(); ?>
                                </span>
                                <?php endif; ?>

                                <!-- Logo : END -->
                              </th>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>

                    <!-- END : SECTION : HEADER -->

                    <!-- BEGIN : SECTION : MAIN -->
                    <table class="section_wrapper main" data-id="main" id="section-main" border="0" width="100%"
                      cellpadding="0" cellspacing="0" align="center" style="min-width: 100%;" role="presentation"
                      bgcolor="#fff ">
                      <tr>
                        <td class="section_wrapper_th" style="mso-line-height-rule: exactly;" bgcolor="#fff ">
                          <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center"
                            style="min-width: 100%;" id="mixContainer" role="presentation">

                            <!-- BEGIN SECTION: Heading -->
                            <tr id="section-3499733" class="section heading">
                              <th
                                style="mso-line-height-rule: exactly; padding: 15px 44px; padding-top: 40px; padding-bottom: 24px;;"
                                bgcolor="#fff ">
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" role="presentation">
                                  <tr>
                                    <th style="mso-line-height-rule: exactly;" bgcolor="#fff " valign="top">
                                      <p data-key="3499733_heading"
                                        style="font-family: 'Open Sans', sans-serif; font-size: 36px; line-height: 36px; font-weight: 700; color: #000; text-transform: none; margin: 0; text-align: left; letter-spacing: -0.01em;">
                                        <?php echo $email_heading ?></p>
                                    </th>
                                  </tr>
                                </table>
                              </th>
                            </tr>