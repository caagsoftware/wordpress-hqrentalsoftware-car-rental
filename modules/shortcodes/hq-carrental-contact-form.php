<?php


function hq_carrental_contact_form()
{
    ?>
    <div class="fw-main-row">
        <div class="fw-col-inner">
            <div class="fw-heading fw-heading-h1    wow fadeIn animated animated" data-wow-offset="120"
                 data-wow-duration="1.5s"
                 style="visibility: visible; animation-duration: 1.5s; animation-name: fadeIn;">
                <div class="fw-special-title-half">
                    <h1 class="fw-special-title">Contact Us Custom</h1>
                </div>
            </div>
            <div class="contact fw-contact-form">
                <div class="fw-row wrap-forms wrap-contact-forms wow rollIn animated contact-form animated"
                     data-wow-offset="10" data-wow-duration="1.55s"
                     style="visibility: visible; animation-duration: 1.55s; animation-name: rollIn;">
                    <form data-fw-form-id="fw_form" method="post" action="http://apiscar.test/" class="fw_form_fw_form"
                          data-fw-ext-forms-type="contact-forms">
                        <input type="hidden" name="fwf" value="fw_form"><input type="hidden"
                                                                               id="_nonce_9b0601c815a85ed373542022aaac8620"
                                                                               name="_nonce_9b0601c815a85ed373542022aaac8620"
                                                                               value="a7d73b1029"><input type="hidden"
                                                                                                         name="_wp_http_referer"
                                                                                                         value="/"><input
                                type="hidden" name="fw_ext_forms_form_type" value="contact-forms"><input type="hidden"
                                                                                                         name="fw_ext_forms_form_id"
                                                                                                         value="contact-form-5552e99d57496">
                        <div class="fw-row">
                            <div class="fw-contact-heading wow fadeIn animated animated" data-wow-offset="120"
                                 data-wow-duration="1.5s"
                                 style="visibility: visible; animation-duration: 1.5s; animation-name: fadeIn;">
                                <p class="contact-info">You have any questions or need additional information? <br>
                                    <span class="address"><span class="highlight">Address : </span> Car|Rental / 3861 Sepulveda Blvd. / Culver City, CA 90230 </span>
                                </p>
                                <div class="separator text-center"></div>
                            </div>
                        </div>
                        <div class="fw-row">
                            <div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
                                <div class="field-text">
                                    <input class="form-control" type="text" name="text_29da52c" placeholder="First Name"
                                           value="" id="id-1" required="required">
                                </div>
                            </div>
                            <div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
                                <div class="field-text">
                                    <input class="form-control" type="text" name="text_e89f2de" placeholder="Last Name"
                                           value="" id="id-2" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="fw-row">
                            <div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
                                <div class="field-text">
                                    <input class="form-control" type="text" name="text_f441a9a" placeholder="Telephone"
                                           value="" id="id-3" required="required">
                                </div>
                            </div>
                            <div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
                                <div class="field-text">
                                    <input class="form-control" type="text" name="email_6285ec9" placeholder="Email"
                                           value="" id="id-4" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="fw-row">
                            <div class="fw-col-xs-12 form-builder-item">
                                <div class="field-textarea">
                                    <textarea class="form-control" name="textarea_b8dadc3" placeholder="Message"
                                              id="id-5" required="required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="fw-row"></div>
                        <div class="fw-col-sm-12 field-submit text-center">
                            <input type="submit" class="default btn submit-message" value="Submit Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
}
add_shortcode('hq_carrental_contact_form', 'hq_carrental_contact_form');