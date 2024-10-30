<?php
class monthly_mortgage_free_Widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function monthly_mortgage_free_Widget() {
		#Widget settings
		$widget_ops = array( 'description' => __('Simple Mortgage Calculator', 'monthly_mortgage_free_Widget') );

		#Create the widget
		$this->WP_Widget( false, __('Simple Mortgage Calculator', 'monthly_mortgage_free_Widget'), $widget_ops );//, $control_ops
	}

	/**
	* Displays the widget settings controls on the widget panel.
	* Make use of the get_field_id() and get_field_name() function
	* when creating your form elements. This handles the confusing stuff.
	*/
	function form( $instance ) {

		#Set up some default widget settings
		$defaults = array(
			'default_title' => __('Simple Mortgage Calculator', 'Simple Mortgage Calculator'),
			);
		$instance = wp_parse_args( (array) $instance, $defaults );

		?>
			<fieldset>
			<p>
				<label for="<?php echo $this->get_field_id( 'default_title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
				<input id="<?php echo $this->get_field_id( 'default_title' ); ?>" name="<?php echo $this->get_field_name( 'default_title' ); ?>" value="<?php echo $instance['default_title']; ?>" size="30" />
			</p>
			</fieldset>
			
		<?php
	}
	
	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
	
		$instance['default_title'] = strip_tags( $new_instance['default_title'] );
	
		return $instance;
	}
	
	function generate_monthly_mortgage_calc_widget_free(){
		$owner = 'www.wpcream.com';
		$html_code="
	<div id='mortgage_calc_content_monthly_mortgage_calc'>
		<div id='mortgage_calc_content_inner_monthly_mortgage_calc'>
			<form id='monthly_mortgage_calc_form_widget_free' method='post' action='".admin_url( 'admin-ajax.php' )."'>
				<input type='hidden' name='action' value='smmc_calculate' />
				<div class='mortgage_item_monthly_mortgage_calc'>Loan: <br /><input type='text' value='' name='monthly_mortgage_monthly_mortgage_calc' id='monthly_mortgage_monthly_mortgage_calc_free' class='mortgage-values_monthly_mortgage_calc'/></div>
				<div class='mortgage_item_monthly_mortgage_calc'>Interest rate: <br /><input type='text' value='' name='rate_monthly_mortgage_calc' id='rate_monthly_mortgage_calc_free' class='mortgage-values_monthly_mortgage_calc'/> </div>
				<div class='mortgage_item_monthly_mortgage_calc'>Years: <br /><input type='text' value='' name='years_monthly_mortgage_calc' id='years_monthly_mortgage_calc_free' class='mortgage-values_monthly_mortgage_calc' /></div>
				<div class='clear'></div>
			<center><input type='hidden' value='1' id='monthly_mortgage_calc_widget_free' name='monthly_mortgage_calc_widget'/><input type='submit' value='Calculate' id='mortgage_submit_monthly_mortgage_calc_free'/></center>
			</form>
			<div id='result1_monthly_mortgage_calc'><center><div id='result_monthly_mortgage_calc_widget_free'></div></center></div>
			</div>
	</div>
	
	";
		//return $html_code;
		echo $html_code;
	}
	
	function widget($args, $instance){
	
		extract( $args );
		$default_title = apply_filters('widget_title', $instance['default_title'] );
	
		echo $before_widget;
	
		#Display the widget title if one was input (before and after defined by themes)
		echo $before_title . $default_title . $after_title;
	
		$this->generate_monthly_mortgage_calc_widget_free ( );
	
		echo $after_widget;
	}
	
}

?>