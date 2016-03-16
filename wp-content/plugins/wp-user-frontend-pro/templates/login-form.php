<?php
/*
  If you would like to edit this file, copy it to your current theme's directory and edit it there.
  WPUF will always look in your theme's directory first, before using this default template.
 */
?>
<div class="login" id="wpuf-login-form">

    <?php
    $message = apply_filters( 'login_message', '' );
    if ( ! empty( $message ) ) {
        echo $message . "\n";
    }
    ?>

    <?php WPUF_Login::init()->show_errors(); ?>
    <?php WPUF_Login::init()->show_messages(); ?>

    <form name="loginform" class="wpuf-login-form" id="loginform" action="<?php echo $action_url; ?>" method="post">
        <div class="form-group">

                        <label for="wpuf-user_login"><?php _e( 'Username' ); ?></label>
            <input type="text" name="log" id="wpuf-user_login" class="input form-control" value="" size="20" />
        </div>

  <div class="form-group">
            <label for="wpuf-user_pass"><?php _e( 'Password' ); ?></label>
            <input type="password" name="pwd" id="wpuf-user_pass" class="input form-control" value="" size="20" />
</div>

        <?php do_action( 'login_form' ); ?>

        <p class="forgetmenot">
            <input name="rememberme" type="checkbox" id="wpuf-rememberme" value="forever" />
            <label for="wpuf-rememberme"><?php esc_attr_e( 'Remember Me' ); ?></label>
        </p>

        <p class="submit">
            <input type="submit" name="wp-submit" class="btn btn-primary" id="wp-submit" value="<?php esc_attr_e( 'Log In' ); ?>" />
            <input type="hidden" name="redirect_to" value="<?php echo WPUF_Login::get_posted_value( 'redirect_to' ); ?>" />
            <input type="hidden" name="wpuf_login" value="true" />
            <input type="hidden" name="action" value="login" />
            <?php wp_nonce_field( 'wpuf_login_action' ); ?>
        </p>
        <div class="form-group">
            <?php echo WPUF_Login::init()->get_action_links( array( 'login' => false ) ); ?>
        </div>
    </form>


</div>
