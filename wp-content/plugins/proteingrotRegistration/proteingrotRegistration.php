<?php

/*
  Plugin Name: Proteingröt Registration
  Plugin URI: http://proteingrot.se
  Description: Coded by WooWho.se
  Version: 1.0
  Author: WooWho
  Author URI: http://woowho.se
 */


class Designmodo_registration_form
{

    private $username;
    private $email;
    private $password;

    function __construct()
    {

        add_shortcode('pg_registration_form', array($this, 'shortcode'));
    }


    public function registration_form()
    {

        ?>

        <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" class="login">
        
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="name">
          <input type="text" class="input-text mdl-textfield__input" name="reg_name" id="reg_name" value="<?php echo(isset($_POST['reg_name']) ? $_POST['reg_name'] : null); ?>" />
          <label class="mdl-textfield__label" for="reg_name">Användarnamn</label>
        </div>
        
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="email">
          <input type="text" class="input-text mdl-textfield__input" name="reg_email" id="reg_email" value="<?php echo(isset($_POST['reg_email']) ? $_POST['reg_email'] : null); ?>" />
          <label class="mdl-textfield__label" for="reg_email">E-post</label>
        </div>
        
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="password">
          <input type="password" class="input-text mdl-textfield__input" name="reg_password" id="reg_password" value="<?php echo(isset($_POST['reg_password']) ? $_POST['reg_password'] : null); ?>" />
          <label class="mdl-textfield__label" for="reg_password">Lösenord</label>
        </div>
       
          <input class="btn btnGreen" type="submit" name="reg_submit" value="Registrera"/>
        </form>
        </div>
    <?php
    }

    function validation()
    {

        if (empty($this->username) || empty($this->password) || empty($this->email)) {
            return new WP_Error('field', 'Vänligen fyll i alla fält.');
        }

        if (strlen($this->username) < 4) {
            return new WP_Error('username_length', 'Användarnamnet skall innehålla minst 4 tecken.');
        }

        if (strlen($this->password) < 5) {
            return new WP_Error('password', 'Lösenordet måste vara minst 5 tecken långt.');
        }

        if (!is_email($this->email)) {
            return new WP_Error('email_invalid', 'E-postadressen är inte giltig');
        }

        if (email_exists($this->email)) {
            return new WP_Error('email', 'E-post-adressen används redan');
        }

        if (!empty($website)) {
            if (!filter_var($this->website, FILTER_VALIDATE_URL)) {
                return new WP_Error('website', 'Website is not a valid URL');
            }
        }

        $details = array('Username' => $this->username,
            
           
     
        );

        foreach ($details as $field => $detail) {
            if (!validate_username($detail)) {
                return new WP_Error('name_invalid', 'Sorry, the "' . $field . '" you entered is not valid');
            }
        }

    }

    function registration()
    {

        $userdata = array(
            'user_login' => esc_attr($this->username),
            'user_email' => esc_attr($this->email),
            'user_pass' => esc_attr($this->password),
          
        );

        if (is_wp_error($this->validation())) {
            echo '<div style="margin-bottom: 6px" class="btn btn-block btn-lg btn-danger">';
            echo '<strong>' . $this->validation()->get_error_message() . '</strong>';
            echo '</div>';
        } else {
            $register_user = wp_insert_user($userdata);
            if (!is_wp_error($register_user)) {

                echo '<div style="margin-bottom: 6px">';
                echo '<strong>Ditt konto är nu registrerat.';
                echo '</div>';
            } else {
                echo '<div style="margin-bottom: 6px">';
                echo $register_user->get_error_message();
                echo '</div>';
            }
        }

    }

    function flat_ui_kit()
    {
        wp_enqueue_style('bootstrap-css', plugins_url('bootstrap/css/bootstrap.css', __FILE__));
        wp_enqueue_style('flat-ui-kit', plugins_url('css/flat-ui.css', __FILE__));

    }

    function shortcode()
    {

        ob_start();

        if ($_POST['reg_submit']) {
            $this->username = $_POST['reg_name'];
            $this->email = $_POST['reg_email'];
            $this->password = $_POST['reg_password'];
            $this->website = $_POST['reg_website'];
            $this->first_name = $_POST['reg_fname'];
            $this->last_name = $_POST['reg_lname'];
            $this->nickname = $_POST['reg_nickname'];
            $this->bio = $_POST['reg_bio'];

            $this->validation();
            $this->registration();
        }

        $this->registration_form();
        return ob_get_clean();
    }

}

new Designmodo_registration_form;
