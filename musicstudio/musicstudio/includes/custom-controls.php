<?php
/*
--------------------------------------------------------
These are Custom Controls for the Customizer Preview
--------------------------------------------------------
*/

if (!class_exists('WP_Customize_Control'))
return NULL;
/** 
* A class to create a dropdown for all categories in your wordpress site
*/
class Category_Dropdown_Custom_Control extends WP_Customize_Control{
	private $cats = false;
	public function __construct($manager, $id, $args = array(), $options = array())
	{
		$this->cats = get_categories($options);
		parent::__construct($manager, $id, $args);
	}
/**
	*Render the content of the category dropdown
	*
	*@return HTML
*/
public function render_content()
	{
		if(!empty($this->cats))
			{?>
				<label>
					<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
					<span class="customize-control-description"><?php echo esc_html($this->description); ?></span>
								<select <?php $this->link(); ?>>
									<option value="0">— Select Category—</option>
									<?php 
									foreach ($this->cats as $cat) {
										printf('<option value="%s" %S>%s</option>',$cat->term_id, selected($this->value(),$cat->term_id, false), $cat->name);
											}
										?>
								</select>
				</label>
			<?php
			}	
	}
}
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