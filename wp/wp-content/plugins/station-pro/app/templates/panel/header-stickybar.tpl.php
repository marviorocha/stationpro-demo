<?php

/**
 * The template for the header sticky bar.
 * Override this template by specifying the path where it is stored (templates_path) in your Redux config.
 *
 * @author        Redux Framework
 * @package       ReduxFramework/Templates
 * @version:      4.0.0
 */

?>

<div class="mb-2" id="redux_notification_bar">
        <?php $this->notification_bar(); ?>
    </div>

<div class="block mb-4" id="redux-sticky">


    <div id="info_bar">

        <div class="columns is-1 ">

            <div class="menu column is-half">
                <a href="javascript:void(0);" class="expand_options<?php echo esc_attr(($this->parent->args['open_expanded']) ? ' expanded' : ''); ?>" <?php echo (true === $this->parent->args['hide_expand'] ? ' style="display: none;"' : ''); ?>>
                    <?php esc_attr_e('Expand', 'redux-framework'); ?>
                </a>
            </div>

            <div class="column">
                <div class="redux-action_bar ">
                    <span class="spinner"></span>
                    <?php
                    if (false === $this->parent->args['hide_save']) {
                        submit_button(esc_attr__('Save Changes', 'redux-framework'), 'button is-primary is-normal  ', 'redux_save', false, array('id' => 'redux_top_save'));
                    }

                    if (false === $this->parent->args['hide_reset']) {
                        submit_button(esc_attr__('Reset Section', 'redux-framework'), 'button is-normal mx-1', $this->parent->args['opt_name'] . '[defaults-section]', false, array('id' => 'redux-defaults-section-top'));
                        submit_button(esc_attr__('Reset All', 'redux-framework'), 'button is-normal', $this->parent->args['opt_name'] . '[defaults]', false, array('id' => 'redux-defaults-top'));
                    }
                    ?>
                </div>
                <div class="redux-ajax-loading" alt="<?php esc_attr_e('Working...', 'redux-framework'); ?>">&nbsp;</div>
            </div>
        </div>

        <div class="redux-ajax-loading" alt="<?php esc_attr_e('Working...', 'redux-framework'); ?>">&nbsp;</div>
        <div class="clear"></div>
    </div>


</div>