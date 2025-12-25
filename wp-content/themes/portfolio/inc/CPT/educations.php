<?php 
/**
 * Register Educations Custom Post Type
 */

function aliportfolio_education_cpt_register(){
    $labels = array(
        "name"               => __("Educations","aliportfolio"),
        "singular_name"      => __("Education","aliportfolio"),
        "name_admin_bar"     => __("Education","aliportfolio"),
        "add_new"            => __("Add New","aliportfolio"),
        "add_new_item"       => __("Add New Education","aliportfolio"),
        "new_item"           => __("New Education","aliportfolio"),
        "edit_item"          => __("Edit Education","aliportfolio"),
        "view_item"          => __("View Education","aliportfolio"),
        "all_items"          => __("All Educations","aliportfolio"),
        "search_items"       => __("Search Educations","aliportfolio"),
        "not_found"          => __("No Educations found.","aliportfolio"),
        "not_found_in_trash" => __("No Educations found in trash.","aliportfolio"),
    );

    $args = array(
        "labels"             => $labels,
        "description"        => "Education custom post type.",
        "public"             => true,
        "publicly_queryable" => true,
        "show_ui"            => true,
        "show_in_menu"       => true,
        'show_in_rest'       => true,
        "query_var"          => true,
        "rewrite"            => array( "slug" => "educations" ),
        "capability_type"    => "post",
        "has_archive"        => false,
        "hierarchical"       => false,
        "menu_icon"          => "dashicons-format-quote",
        "menu_position"      => 33,
        "supports"           => array( "title", "editor", "thumbnail", "custom-fields" ),
    );

    register_post_type("educations", $args );
}
add_action("init","aliportfolio_education_cpt_register");


function aliportfolio_education_add_meta_box(){
    add_meta_box(
        "Education_details",
        "Education Details",
        "aliportfolio_education_add_meta_box_callback",
        "educations",
        "normal",
        "high"
    );
}
add_action("add_meta_boxes", "aliportfolio_education_add_meta_box");


function aliportfolio_education_add_meta_box_callback($post){
    $student_institude = get_post_meta($post->ID,"student_institude", true);
    $study_duration = get_post_meta($post->ID,"study_duration", true);
    ?>

    <div>
        <label for="student_institude">Student Institude</label>
        <input type="text" name="student_institude" id="student_institude" value="<?php echo esc_attr($student_institude); ?>">
    </div>
  <br>
     <div>
        <label for="study_duration">Study Time Duration</label>
        <input type="textarea" name="study_duration" id="study_duration" value="<?php echo esc_attr($study_duration); ?>">
    </div>
    <?php
}

function aliportfolio_education_save_meta_data($post_id){

    $fields = [
        'student_institude',
        'study_duration'
    ];

    foreach($fields as $field){
        if(isset($_POST[$field])){
            update_post_meta(
                $post_id,
                $field,
                sanitize_text_field($_POST[$field])
            );
        }
    }
}
add_action("save_post_educations", "aliportfolio_education_save_meta_data");
