<?php


function hq_carrental_contact_form( $atts )
{
    $title = hq_carrental_set_variable($atts['title']);
    $action = hq_carrental_set_variable($atts['action']);
    $contact_info = hq_carrental_set_variable($atts['contact_info']);
    $address_tag = hq_carrental_set_variable($atts['address_tag']);
    $address_info = hq_carrental_set_variable($atts['address_info']);
    $name_field_placeholder = hq_carrental_set_variable($atts['name_field_placeholder']);
    $name_field_name = hq_carrental_set_variable($atts['name_field_name']);
    $last_name_field_placeholder = hq_carrental_set_variable($atts['last_name_field_placeholder']);
    $last_name_field_name = hq_carrental_set_variable($atts['last_name_field_name']);
    $phone_field_placeholder = hq_carrental_set_variable($atts['phone_field_placeholder']);
    $phone_field_name = hq_carrental_set_variable($atts['phone_field_name']);
    $email_field_placeholder = hq_carrental_set_variable($atts['email_field_placeholder']);
    $email_field_name = hq_carrental_set_variable($atts['email_field_name']);
    $message_field_placeholder = hq_carrental_set_variable($atts['message_field_placeholder']);
    $message_field_name = hq_carrental_set_variable($atts['message_field_name']);
    $button_text = hq_carrental_set_variable($atts['button_text']);
    ?>
    <div class="fw-main-row">
        <div class="fw-col-inner">
            <div class="fw-heading fw-heading-h1 wow fadeIn animated animated" data-wow-offset="120"
                 data-wow-duration="1.5s"
                 style="visibility: visible; animation-duration: 1.5s; animation-name: fadeIn;">
                <div class="fw-special-title-half">
                    <h1 class="fw-special-title"><?php echo $title; ?></h1>
                </div>
            </div>
            <div class="contact fw-contact-form">
                <div class="fw-row wrap-forms wrap-contact-forms wow rollIn animated contact-form animated"
                     data-wow-offset="10" data-wow-duration="1.55s"
                     style="visibility: visible; animation-duration: 1.55s; animation-name: rollIn;">
                    <form method="post" action="<?php echo $action; ?>" class="fw_form_fw_form"
                          data-fw-ext-forms-type="contact-forms">
                        <div class="fw-row">
                            <div class="fw-contact-heading wow fadeIn animated animated" data-wow-offset="120"
                                 data-wow-duration="1.5s"
                                 style="visibility: visible; animation-duration: 1.5s; animation-name: fadeIn;">
                                <p class="contact-info"><?php echo $contact_info; ?><br>
                                    <span class="address"><span class="highlight"><?php echo $address_tag; ?></span> <?php echo $address_info; ?> </span>
                                </p>
                                <div class="separator text-center"></div>
                            </div>
                        </div>
                        <div class="fw-row">
                            <div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
                                <div class="field-text">
                                    <input class="form-control" type="text" name="<?php echo $name_field_name; ?>" placeholder="<?php echo $name_field_placeholder; ?>"
                                           value="" id="id-1" required="required">
                                </div>
                            </div>
                            <div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
                                <div class="field-text">
                                    <input class="form-control" type="text" name="<?php echo $last_name_field_name; ?>" placeholder="<?php echo $last_name_field_placeholder; ?>"
                                           value="" id="id-2" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="fw-row">
                            <div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
                                <div class="field-text">
                                    <input class="form-control" type="text" name="<?php echo $phone_field_name; ?>" placeholder="<?php echo $phone_field_placeholder; ?>"
                                           value="" id="id-3" required="required">
                                </div>
                            </div>
                            <div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
                                <div class="field-text">
                                    <input class="form-control" type="text" name="<?php echo $email_field_name; ?>" placeholder="<?php echo $email_field_placeholder; ?>"
                                           value="" id="id-4" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="fw-row">
                            <div class="fw-col-xs-12 form-builder-item">
                                <div class="field-textarea">
                                    <textarea class="form-control" name="<?php echo $message_field_name; ?>" placeholder="<?php echo $message_field_placeholder; ?>"
                                              id="id-5" required="required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="fw-row"></div>
                        <div class="fw-col-sm-12 field-submit text-center">
                            <input type="submit" class="default btn submit-message" value="<?php echo $button_text; ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
}
add_shortcode('hq_carrental_contact_form', 'hq_carrental_contact_form');