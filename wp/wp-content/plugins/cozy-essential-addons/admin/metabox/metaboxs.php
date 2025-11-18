<?php

add_action("admin_init", "cea_metabox_init");
function cea_metabox_init(){
    add_meta_box( 'reviewer_position',  esc_html__( 'Position', 'cozy-essential-addons' ), 'cea_testimonial_position', 'cea_testimonial', 'side', 'high',
        array(
            '__back_compat_meta_box' => false,
        )
    );

    add_meta_box( 'reviewer_compnay',  esc_html__( 'Company', 'cozy-essential-addons' ), 'cea_testimonial_company', 'cea_testimonial', 'side', 'high',
        array(
            '__back_compat_meta_box' => false,
        )
    );

    add_meta_box( 'team_position',  esc_html__( 'Position', 'cozy-essential-addons' ), 'cea_team_position', 'cea_team', 'side', 'high',
        array(
            '__back_compat_meta_box' => false,
        )
    );

    add_meta_box( 'team_compnay',  esc_html__( 'Company', 'cozy-essential-addons' ), 'cea_team_company', 'cea_team', 'side', 'high',
        array(
            '__back_compat_meta_box' => false,
        )
    );
    add_meta_box( 'team_facebook',  esc_html__( 'Facebook', 'cozy-essential-addons' ), 'cea_team_facebook', 'cea_team', 'side', 'high',
        array(
            '__back_compat_meta_box' => false,
        )
    );
    add_meta_box( 'team_twitter',  esc_html__( 'Twitter', 'cozy-essential-addons' ), 'cea_team_twitter', 'cea_team', 'side', 'high',
        array(
            '__back_compat_meta_box' => false,
        )
    );
    add_meta_box( 'team_linkedin',  esc_html__( 'Linkedin', 'cozy-essential-addons' ), 'cea_team_linkedin', 'cea_team', 'side', 'high',
        array(
            '__back_compat_meta_box' => false,
        )
    );
    add_meta_box( 'team_youtube',  esc_html__( 'Youtube', 'cozy-essential-addons' ), 'cea_team_youtube', 'cea_team', 'side', 'high',
        array(
            '__back_compat_meta_box' => false,
        )
    );
    add_meta_box( 'team_github',  esc_html__( 'GitHub', 'cozy-essential-addons' ), 'cea_team_github', 'cea_team', 'side', 'high',
        array(
            '__back_compat_meta_box' => false,
        )
    );
    add_meta_box( 'team_instagram',  esc_html__( 'Instagram', 'cozy-essential-addons' ), 'cea_team_instagram', 'cea_team', 'side', 'high',
        array(
            '__back_compat_meta_box' => false,
        )
    );

}
// Position metabox
function cea_testimonial_position() {
    global $post;
    $custom_meta = get_post_custom(get_the_ID());
    if (!empty($custom_meta)){
        if(isset($custom_meta['cea_testimonial_position'])){
            $select_position = $custom_meta['cea_testimonial_position'][0];
        }
    }
    ?>
    <fieldset class="fieldset related_pages">
        <div class = "cea_metabox">
            <input type="text" name="cea_testimonial_position" value="<?php if(isset($select_position)) echo esc_attr($select_position);?>"  style="width: 100%;">
        </div>
    </fieldset>
    <?php
}

function cea_testimonial_company() {
    global $post;
    $custom_compnay = get_post_custom(get_the_ID());
    if (!empty($custom_compnay)){
        if(isset($custom_compnay['cea_testimonial_company'])){
            $select_compnay = $custom_compnay['cea_testimonial_company'][0];
        }
    }
    ?>
    <fieldset class="fieldset related_pages">
        <div class = "cea_metabox">
            <input type="text" name="cea_testimonial_company" value="<?php if(isset($select_compnay)) echo esc_attr($select_compnay);?>"  style="width: 100%;">
        </div>
    </fieldset>
    <?php
}

function cea_team_position() {
    global $post;
    $custom_meta = get_post_custom(get_the_ID());
    if (!empty($custom_meta)){
        if(isset($custom_meta['cea_team_position'])){
            $select_position = $custom_meta['cea_team_position'][0];
        }
    }
    ?>
    <fieldset class="fieldset related_pages">
        <div class = "cea_metabox">
            <input type="text" name="cea_team_position" value="<?php if(isset($select_position)) echo esc_attr($select_position);?>"  style="width: 100%;">
        </div>
    </fieldset>
    <?php
}

function cea_team_company() {
    global $post;
    $custom_compnay = get_post_custom(get_the_ID());
    if (!empty($custom_compnay)){
        if(isset($custom_compnay['cea_team_company'])){
            $select_compnay = $custom_compnay['cea_team_company'][0];
        }
    }
    ?>
    <fieldset class="fieldset related_pages">
        <div class = "cea_metabox">
            <input type="text" name="cea_team_company" value="<?php if(isset($select_compnay)) echo esc_attr($select_compnay);?>"  style="width: 100%;">
        </div>
    </fieldset>
    <?php
}

function cea_team_facebook() {
    global $post;
    $custom_social_media = get_post_custom(get_the_ID());
    if (!empty($custom_social_media)){
        if(isset($custom_social_media['cea_team_facebook'])){
            $select_media_icon = $custom_social_media['cea_team_facebook'][0];
        }
    }
    ?>
    <fieldset class="fieldset related_pages">
        <div class = "cea_metabox">
            <input type="text" name="cea_team_facebook" value="<?php if(isset($select_media_icon)) echo esc_attr($select_media_icon);?>"  style="width: 100%;">
        </div>
    </fieldset>
    <?php
}
function cea_team_twitter() {
    global $post;
    $custom_social_media = get_post_custom(get_the_ID());
    if (!empty($custom_social_media)){
        if(isset($custom_social_media['cea_team_twitter'])){
            $select_media_icon = $custom_social_media['cea_team_twitter'][0];
        }
    }
    ?>
    <fieldset class="fieldset related_pages">
        <div class = "cea_metabox">
            <input type="text" name="cea_team_twitter" value="<?php if(isset($select_media_icon)) echo esc_attr($select_media_icon);?>"  style="width: 100%;">
        </div>
    </fieldset>
    <?php
}
function cea_team_linkedin() {
    global $post;
    $custom_social_media = get_post_custom(get_the_ID());
    if (!empty($custom_social_media)){
        if(isset($custom_social_media['cea_team_linkedin'])){
            $select_media_icon = $custom_social_media['cea_team_linkedin'][0];
        }
    }
    ?>
    <fieldset class="fieldset related_pages">
        <div class = "cea_metabox">
            <input type="text" name="cea_team_linkedin" value="<?php if(isset($select_media_icon)) echo esc_attr($select_media_icon);?>"  style="width: 100%;">
        </div>
    </fieldset>
    <?php
}
function cea_team_youtube() {
    global $post;
    $custom_social_media = get_post_custom(get_the_ID());
    if (!empty($custom_social_media)){
        if(isset($custom_social_media['cea_team_youtube'])){
            $select_media_icon = $custom_social_media['cea_team_youtube'][0];
        }
    }
    ?>
    <fieldset class="fieldset related_pages">
        <div class = "cea_metabox">
            <input type="text" name="cea_team_youtube" value="<?php if(isset($select_media_icon)) echo esc_attr($select_media_icon);?>"  style="width: 100%;">
        </div>
    </fieldset>
    <?php
}
function cea_team_github() {
    global $post;
    $custom_social_media = get_post_custom(get_the_ID());
    if (!empty($custom_social_media)){
        if(isset($custom_social_media['cea_team_github'])){
            $select_media_icon = $custom_social_media['cea_team_github'][0];
        }
    }
    ?>
    <fieldset class="fieldset related_pages">
        <div class = "cea_metabox">
            <input type="text" name="cea_team_github" value="<?php if(isset($select_media_icon)) echo esc_attr($select_media_icon);?>"  style="width: 100%;">
        </div>
    </fieldset>
    <?php
}
function cea_team_instagram() {
    global $post;
    $custom_social_media = get_post_custom(get_the_ID());
    if (!empty($custom_social_media)){
        if(isset($custom_social_media['cea_team_instagram'])){
            $select_media_icon = $custom_social_media['cea_team_instagram'][0];
        }
    }
    ?>
    <fieldset class="fieldset related_pages">
        <div class = "cea_metabox">
            <input type="text" name="cea_team_instagram" value="<?php if(isset($select_media_icon)) echo esc_attr($select_media_icon);?>"  style="width: 100%;">
        </div>
    </fieldset>
    <?php
}



add_action('save_post', 'cea_metabox_fields');
function cea_metabox_fields() {
    global $post;
    if(isset($_POST["cea_testimonial_position"])) {
        update_post_meta($post->ID, "cea_testimonial_position", sanitize_text_field($_POST["cea_testimonial_position"]) );
    }
    if(isset($_POST["cea_testimonial_company"])) {
        update_post_meta($post->ID, "cea_testimonial_company", sanitize_text_field($_POST["cea_testimonial_company"]) );
    }
    if(isset($_POST["cea_team_position"])) {
        update_post_meta($post->ID, "cea_team_position", sanitize_text_field($_POST["cea_team_position"]) );
    }
    if(isset($_POST["cea_team_company"])) {
        update_post_meta($post->ID, "cea_team_company", sanitize_text_field($_POST["cea_team_company"]) );
    }
    if(isset($_POST["cea_team_facebook"])) {
        update_post_meta($post->ID, "cea_team_facebook", sanitize_text_field($_POST["cea_team_facebook"]) );
    }
    if(isset($_POST["cea_team_twitter"])) {
        update_post_meta($post->ID, "cea_team_twitter", sanitize_text_field($_POST["cea_team_twitter"]) );
    }
    if(isset($_POST["cea_team_linkedin"])) {
        update_post_meta($post->ID, "cea_team_linkedin", sanitize_text_field($_POST["cea_team_linkedin"]) );
    }
    if(isset($_POST["cea_team_youtube"])) {
        update_post_meta($post->ID, "cea_team_youtube", sanitize_text_field($_POST["cea_team_youtube"]) );
    }
    if(isset($_POST["cea_team_github"])) {
        update_post_meta($post->ID, "cea_team_github", sanitize_text_field($_POST["cea_team_github"]) );
    }
    if(isset($_POST["cea_team_instagram"])) {
        update_post_meta($post->ID, "cea_team_instagram", sanitize_text_field($_POST["cea_team_instagram"]) );
    }

}