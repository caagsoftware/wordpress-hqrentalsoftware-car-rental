<?php


function hq_carrental_reservation_form($atts)
{
    $reservation_page = hq_carrental_set_variable( $atts['reservation_page'] );
    $select_vehicle_placeholder = hq_carrental_set_variable( $atts['select_vehicle_placeholder'] );
    $pick_up_location_placeholder = hq_carrental_set_variable( $atts['pick_up_location_placeholder'] );
    $pick_up_location_label = hq_carrental_set_variable( $atts['pick_up_location_label'] );
    $return_location_placeholder = hq_carrental_set_variable( $atts['return_location_placeholder'] );
    $return_location_label = hq_carrental_set_variable( $atts['return_location_label'] );
    $pick_up_date_label = hq_carrental_set_variable( $atts['pick_up_date_label'] );
    $pick_up_date_placeholder = hq_carrental_set_variable( $atts['pick_up_date_placeholder'] );
    $return_date_label = hq_carrental_set_variable( $atts['return_date_label'] );
    $return_date_placeholder = hq_carrental_set_variable( $atts['return_date_placeholder'] );
    $button_text = hq_carrental_set_variable( $atts['button_text'] );
    ?>
    <form action="<?php echo $reservation_page; ?>" method="post" name="car-select-form" id="car-select-form">
        <div class="alert alert-danger hidden" id="car-select-form-msg">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>All fields required!</strong>
        </div>
        <!-- Car select start -->
        <div class="styled-select-car">
            <select name="car-select" id="car-select">
                <option value=""><?php echo $select_vehicle_placeholder; ?></option>
            </select>
        </div>
        <!-- Car select end -->
        <!-- Pick-up location start -->
        <div class="location">
            <div class="input-group pick-up">
                <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span><?php echo $pick_up_location_label; ?> </span>
                <div class="styled-select-car pickuplocation">
                    <select name="pick_up_location" id="pick-up-location">
                        <option value=""><?php echo $pick_up_location_placeholder; ?></option>
                    </select>
                </div>
            </div>
            <!-- Pick-up location end -->
            <!-- Drop-off location start -->
            <div class="input-group margin-20">
                <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span><?php echo $return_location_label; ?></span>
                <div class="styled-select-car pickuplocation">
                    <select name="drop-off-location" id="drop-off-location">
                        <option value="Santa Monica - 2102 Lincoln Blvd"><?php echo $return_location_placeholder; ?></option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Drop-off location end -->
        <!-- Pick-up date/time start -->
        <div class="datetime pick-up">
            <div class="date pull-left">
                <div class="input-group">
                    <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span><?php echo $pick_up_date_label; ?> </span>
                    <input type="text" name="pick-up-date" id="pick-up-date" class="form-control datepicker"
                           placeholder="<?php echo $pick_up_date_placeholder; ?>">
                </div>
            </div>
            <div class="time pull-right">
                <div class="styled-select-time">
                    <select name="pick-up-time" id="pick-up-time">
                        <option value="12:00 AM">12:00 AM</option>
                        <option value="12:30 AM">12:30 AM</option>
                        <option value="01:00 AM">01:00 AM</option>
                        <option value="01:30 AM">01:30 AM</option>
                        <option value="02:00 AM">02:00 AM</option>
                        <option value="02:30 AM">02:30 AM</option>
                        <option value="03:00 AM">03:00 AM</option>
                        <option value="03:30 AM">03:30 AM</option>
                        <option value="04:00 AM">04:00 AM</option>
                        <option value="04:30 AM">04:30 AM</option>
                        <option value="05:00 AM">05:00 AM</option>
                        <option value="05:30 AM">05:30 AM</option>
                        <option value="06:00 AM">06:00 AM</option>
                        <option value="06:30 AM">06:30 AM</option>
                        <option value="07:00 AM">07:00 AM</option>
                        <option value="07:30 AM">07:30 AM</option>
                        <option value="08:00 AM">08:00 AM</option>
                        <option value="08:30 AM">08:30 AM</option>
                        <option value="09:00 AM">09:00 AM</option>
                        <option value="09:30 AM">09:30 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="10:30 AM">10:30 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="11:30 AM">11:30 AM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="12:30 PM">12:30 PM</option>
                        <option value="01:00 PM">01:00 PM</option>
                        <option value="01:30 PM">01:30 PM</option>
                        <option value="02:00 PM">02:00 PM</option>
                        <option value="02:30 PM">02:30 PM</option>
                        <option value="03:00 PM">03:00 PM</option>
                        <option value="03:30 PM">03:30 PM</option>
                        <option value="04:00 PM">04:00 PM</option>
                        <option value="04:30 PM">04:30 PM</option>
                        <option value="05:00 PM">05:00 PM</option>
                        <option value="05:30 PM">05:30 PM</option>
                        <option value="06:00 PM">06:00 PM</option>
                        <option value="06:30 PM">06:30 PM</option>
                        <option value="07:00 PM">07:00 PM</option>
                        <option value="07:30 PM">07:30 PM</option>
                        <option value="08:00 PM">08:00 PM</option>
                        <option value="08:30 PM">08:30 PM</option>
                        <option value="09:00 PM">09:00 PM</option>
                        <option value="09:30 PM">09:30 PM</option>
                        <option value="10:00 PM">10:00 PM</option>
                        <option value="10:30 PM">10:30 PM</option>
                        <option value="11:00 PM">11:00 PM</option>
                        <option value="11:30 PM">11:30 PM</option>
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- Pick-up date/time end -->
        <!-- Drop-off date/time start -->
        <div class="datetime drop-off">
            <div class="date pull-left">
                <div class="input-group">
                    <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span><?php echo $return_date_label; ?></span>
                    <input type="text" name="drop-off-date" id="drop-off-date" class="form-control datepicker"
                           placeholder="<?php echo $return_date_placeholder; ?>" >
                </div>
            </div>
            <div class="time pull-right">
                <div class="styled-select-time">
                    <select name="drop-off-time" id="drop-off-time">
                        <option value="12:00 AM">12:00 AM</option>
                        <option value="12:30 AM">12:30 AM</option>
                        <option value="01:00 AM">01:00 AM</option>
                        <option value="01:30 AM">01:30 AM</option>
                        <option value="02:00 AM">02:00 AM</option>
                        <option value="02:30 AM">02:30 AM</option>
                        <option value="03:00 AM">03:00 AM</option>
                        <option value="03:30 AM">03:30 AM</option>
                        <option value="04:00 AM">04:00 AM</option>
                        <option value="04:30 AM">04:30 AM</option>
                        <option value="05:00 AM">05:00 AM</option>
                        <option value="05:30 AM">05:30 AM</option>
                        <option value="06:00 AM">06:00 AM</option>
                        <option value="06:30 AM">06:30 AM</option>
                        <option value="07:00 AM">07:00 AM</option>
                        <option value="07:30 AM">07:30 AM</option>
                        <option value="08:00 AM">08:00 AM</option>
                        <option value="08:30 AM">08:30 AM</option>
                        <option value="09:00 AM">09:00 AM</option>
                        <option value="09:30 AM">09:30 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="10:30 AM">10:30 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="11:30 AM">11:30 AM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="12:30 PM">12:30 PM</option>
                        <option value="01:00 PM">01:00 PM</option>
                        <option value="01:30 PM">01:30 PM</option>
                        <option value="02:00 PM">02:00 PM</option>
                        <option value="02:30 PM">02:30 PM</option>
                        <option value="03:00 PM">03:00 PM</option>
                        <option value="03:30 PM">03:30 PM</option>
                        <option value="04:00 PM">04:00 PM</option>
                        <option value="04:30 PM">04:30 PM</option>
                        <option value="05:00 PM">05:00 PM</option>
                        <option value="05:30 PM">05:30 PM</option>
                        <option value="06:00 PM">06:00 PM</option>
                        <option value="06:30 PM">06:30 PM</option>
                        <option value="07:00 PM">07:00 PM</option>
                        <option value="07:30 PM">07:30 PM</option>
                        <option value="08:00 PM">08:00 PM</option>
                        <option value="08:30 PM">08:30 PM</option>
                        <option value="09:00 PM">09:00 PM</option>
                        <option value="09:30 PM">09:30 PM</option>
                        <option value="10:00 PM">10:00 PM</option>
                        <option value="10:30 PM">10:30 PM</option>
                        <option value="11:00 PM">11:00 PM</option>
                        <option value="11:30 PM">11:30 PM</option>
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- Drop-off date/time end -->
        <input type="submit" class="submit" name="submit" value="<?php echo $button_text; ?>" id="checkoutModalLabel">
    </form>
    <?php
}

add_shortcode('hq_carrental_reservation_form', 'hq_carrental_reservation_form');