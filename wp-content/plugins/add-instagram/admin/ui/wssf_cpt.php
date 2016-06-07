<?php

//////////// META BOXES TYPE STARTS HERE!!!!! //////////////////
                                                        ///////
                                                        //////
                                                        /////
//////////// META BOXES TYPE STARTS HERE!!!!! //////////////


add_action('save_post','wssf_save_metabox_data');

  function wssf_save_metabox_data($post_id){


  	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['wssf_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['wssf_meta_box_nonce'], 'wssf_ui_meta_box_nonce' ) ) return;
     
    if ( ! current_user_can( 'manage_options' ) )
        return;
     
    // now we can actually save the data
    $allowed = array( 
        'a' => array( // on allow a tags
        'href' => array() // and those anchors can only have href attribute
        )
    );
     
    // Make sure your data is set before trying to save it

    if( isset( $_POST['smf_example'] ) )
        update_post_meta( $post_id, 'smf_example', wp_kses( $_POST['smf_example'], $allowed ) );

    if( isset( $_POST['wssf_fb_profile_id'] ) )
        update_post_meta( $post_id, 'wssf_fb_profile_id', wp_kses( $_POST['wssf_fb_profile_id'], $allowed ) );

    if( isset( $_POST['wssf_fb_app_id'] ) )
        update_post_meta( $post_id, 'wssf_fb_app_id', wp_kses( $_POST['wssf_fb_app_id'], $allowed ) );

    if( isset( $_POST['wssf_fb_app_secret'] ) )
        update_post_meta( $post_id, 'wssf_fb_app_secret', wp_kses( $_POST['wssf_fb_app_secret'], $allowed ) );

    if( isset( $_POST['wssf_tw_username'] ) )
        update_post_meta( $post_id, 'wssf_tw_username', wp_kses( $_POST['wssf_tw_username'], $allowed ) );

    if( isset( $_POST['wssf_tw_consumer_key'] ) )
        update_post_meta( $post_id, 'wssf_tw_consumer_key', wp_kses( $_POST['wssf_tw_consumer_key'], $allowed ) );

    if( isset( $_POST['wssf_tw_consumer_secret'] ) )
        update_post_meta( $post_id, 'wssf_tw_consumer_secret', wp_kses( $_POST['wssf_tw_consumer_secret'], $allowed ) );

    if( isset( $_POST['wssf_gplus_username'] ) )
        update_post_meta( $post_id, 'wssf_gplus_username', wp_kses( $_POST['wssf_gplus_username'], $allowed ) );

    if( isset( $_POST['wssf_linkedin_compny_id'] ) )
        update_post_meta( $post_id, 'wssf_linkedin_compny_id', wp_kses( $_POST['wssf_linkedin_compny_id'], $allowed ) );

    if( isset( $_POST['wssf_insta_username'] ) )
        update_post_meta( $post_id, 'wssf_insta_username', wp_kses( $_POST['wssf_insta_username'], $allowed ) );

    if( isset( $_POST['wssf_soundcloud_username'] ) )
        update_post_meta( $post_id, 'wssf_soundcloud_username', wp_kses( $_POST['wssf_soundcloud_username'], $allowed ) );

    if( isset( $_POST['wssf_soundcloud_playlist_id'] ) )
        update_post_meta( $post_id, 'wssf_soundcloud_playlist_id', wp_kses( $_POST['wssf_soundcloud_playlist_id'], $allowed ) );

    if( isset( $_POST['wssf_wp_content_type'] ) )
        update_post_meta( $post_id, 'wssf_wp_content_type', wp_kses( $_POST['wssf_wp_content_type'], $allowed ) );

    if( isset( $_POST['wssf_wp_filter'] ) )
        update_post_meta( $post_id, 'wssf_wp_filter', wp_kses( $_POST['wssf_wp_filter'], $allowed ) );

    if( isset( $_POST['wssf_wp_custom_post'] ) )
        update_post_meta( $post_id, 'wssf_wp_custom_post', wp_kses( $_POST['wssf_wp_custom_post'], $allowed ) );

    if( isset( $_POST['wssf_wp_post_id_comment'] ) )
        update_post_meta( $post_id, 'wssf_wp_post_id_comment', wp_kses( $_POST['wssf_wp_post_id_comment'], $allowed ) );

    if( isset( $_POST['wssf_pin_profile_id'] ) )
        update_post_meta( $post_id, 'wssf_pin_profile_id', wp_kses( $_POST['wssf_pin_profile_id'], $allowed ) );

    if( isset( $_POST['wssf_vimeo_username'] ) )
        update_post_meta( $post_id, 'wssf_vimeo_username', wp_kses( $_POST['wssf_vimeo_username'], $allowed ) );

    if( isset( $_POST['wssf_youtube_channel_id'] ) )
        update_post_meta( $post_id, 'wssf_youtube_channel_id', wp_kses( $_POST['wssf_youtube_channel_id'], $allowed ) );

    if( isset( $_POST['wssf_enable_feed'] ) )
        update_post_meta( $post_id, 'wssf_enable_feed', wp_kses( $_POST['wssf_enable_feed'], $allowed ) );
    else
        update_post_meta( $post_id, 'wssf_enable_feed', false );

    if( isset( $_POST['wssf_results_per_feed'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed', wp_kses( $_POST['wssf_results_per_feed'], $allowed ) );

    if( isset( $_POST['wssf_link_in_new_tab'] ) )
        update_post_meta( $post_id, 'wssf_link_in_new_tab', wp_kses( $_POST['wssf_link_in_new_tab'], $allowed ) );

    if( isset( $_POST['wssf_enable_links_to_post'] ) )
        update_post_meta( $post_id, 'wssf_enable_links_to_post', wp_kses( $_POST['wssf_enable_links_to_post'], $allowed ) );
    else
        update_post_meta( $post_id, 'wssf_enable_links_to_post', false );

    if( isset( $_POST['wssf_hide_text_content'] ) )
        update_post_meta( $post_id, 'wssf_hide_text_content', wp_kses( $_POST['wssf_hide_text_content'], $allowed ) );
    else
        update_post_meta( $post_id, 'wssf_hide_text_content', false );

    if( isset( $_POST['wssf_bg_color'] ) )
        update_post_meta( $post_id, 'wssf_bg_color', wp_kses( $_POST['wssf_bg_color'], $allowed ) );

    if( isset( $_POST['wssf_text_color'] ) )
        update_post_meta( $post_id, 'wssf_text_color', wp_kses( $_POST['wssf_text_color'], $allowed ) );

    if( isset( $_POST['wssf_enable_post_date'] ) )
        update_post_meta( $post_id, 'wssf_enable_post_date', wp_kses( $_POST['wssf_enable_post_date'], $allowed ) );
    else
        update_post_meta( $post_id, 'wssf_enable_post_date', false );


    if( isset( $_POST['wssf_enable_social_icon'] ) )
        update_post_meta( $post_id, 'wssf_enable_social_icon', wp_kses( $_POST['wssf_enable_social_icon'], $allowed ) );
    else
        update_post_meta( $post_id, 'wssf_enable_social_icon', false );

    if( isset( $_POST['wssf_enable_display_picture'] ) )
        update_post_meta( $post_id, 'wssf_enable_display_picture', wp_kses( $_POST['wssf_enable_display_picture'], $allowed ) );
    else
        update_post_meta( $post_id, 'wssf_enable_display_picture', false );

    if( isset( $_POST['wssf_feed_width'] ) )
        update_post_meta( $post_id, 'wssf_feed_width', wp_kses( $_POST['wssf_feed_width'], $allowed ) );

    if( isset( $_POST['wssf_social_fb_enable'] ) )
        update_post_meta( $post_id, 'wssf_social_fb_enable', wp_kses( $_POST['wssf_social_fb_enable'], $allowed ) );
    else
        update_post_meta( $post_id, 'wssf_social_fb_enable', false );

    if( isset( $_POST['wssf_social_tw_enable'] ) )
        update_post_meta( $post_id, 'wssf_social_tw_enable', wp_kses( $_POST['wssf_social_tw_enable'], $allowed ) );
    else
        update_post_meta( $post_id, 'wssf_social_tw_enable', false );

    if( isset( $_POST['wssf_social_insta_enable'] ) )
        update_post_meta( $post_id, 'wssf_social_insta_enable', wp_kses( $_POST['wssf_social_insta_enable'], $allowed ) );
    else
        update_post_meta( $post_id, 'wssf_social_insta_enable', false );

    if( isset( $_POST['wssf_social_pin_enable'] ) )
        update_post_meta( $post_id, 'wssf_social_pin_enable', wp_kses( $_POST['wssf_social_pin_enable'], $allowed ) );
    else
        update_post_meta( $post_id, 'wssf_social_pin_enable', false );

    if( isset( $_POST['wssf_social_gplus_enable'] ) )
        update_post_meta( $post_id, 'wssf_social_gplus_enable', wp_kses( $_POST['wssf_social_gplus_enable'], $allowed ) );

    if( isset( $_POST['wssf_results_per_feed_fb'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed_fb', wp_kses( $_POST['wssf_results_per_feed_fb'], $allowed ) );

    if( isset( $_POST['wssf_results_per_feed_tw'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed_tw', wp_kses( $_POST['wssf_results_per_feed_tw'], $allowed ) );


if( isset( $_POST['wssf_results_per_feed_gplus'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed_gplus', wp_kses( $_POST['wssf_results_per_feed_gplus'], $allowed ) );


if( isset( $_POST['wssf_results_per_feed_insta'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed_insta', wp_kses( $_POST['wssf_results_per_feed_insta'], $allowed ) );

    if( isset( $_POST['wssf_results_per_feed_pinit'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed_pinit', wp_kses( $_POST['wssf_results_per_feed_pinit'], $allowed ) );

    if( isset( $_POST['wssf_words_limit_fb'] ) )
        update_post_meta( $post_id, 'wssf_words_limit_fb', wp_kses( $_POST['wssf_words_limit_fb'], $allowed ) );

    if( isset( $_POST['wssf_words_limit_tw'] ) )
        update_post_meta( $post_id, 'wssf_words_limit_tw', wp_kses( $_POST['wssf_words_limit_tw'], $allowed ) );

    if( isset( $_POST['wssf_words_limit_insta'] ) )
        update_post_meta( $post_id, 'wssf_words_limit_insta', wp_kses( $_POST['wssf_words_limit_insta'], $allowed ) );

    if( isset( $_POST['wssf_words_limit_pinit'] ) )
        update_post_meta( $post_id, 'wssf_words_limit_pinit', wp_kses( $_POST['wssf_words_limit_pinit'], $allowed ) );

    if( isset( $_POST['wssf_words_limit_gplus'] ) )
        update_post_meta( $post_id, 'wssf_words_limit_gplus', wp_kses( $_POST['wssf_words_limit_gplus'], $allowed ) );

    if( isset( $_POST['wssf_select_layout'] ) )
        update_post_meta( $post_id, 'wssf_select_layout', wp_kses( $_POST['wssf_select_layout'], $allowed ) );

    if( isset( $_POST['wssf_select_gfont'] ) )
        update_post_meta( $post_id, 'wssf_select_gfont', wp_kses( $_POST['wssf_select_gfont'], $allowed ) );



  }