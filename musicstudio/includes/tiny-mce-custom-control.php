<?php
/*
--------------------------------------------------------
These are Custom Controls for the Customizer Preview
--------------------------------------------------------
*/

if (!class_exists('WP_Customize_Control'))
return NULL;
/**
	 * TinyMCE Custom Control
	 *
	 
*/
class Text_Editor_Custom_Control extends WP_Customize_Control
{
/**
* Render the content on the theme customizer page
*/
    public function render_content()
       {
            ?>
                <label>
                  <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                  <?php
                  	$settings=array('media_buttons'=>false,'textarea_rows' => 8,
                  		      'textarea_name' => $ed_name,'teeny'         => true,);
                  	$args=array('Tinymce'=>array('toolbar1'=>'bold,italic,underline,separator'));
					$content='';
					$editor_id='myeditor1234';
                    wp_editor($content, $editor_id, $settings,$args );
                  ?>
                </label>
            <?php
       }
}

?>