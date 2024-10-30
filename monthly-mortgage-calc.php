<?php 
/*
Plugin Name: Simple Mortgage Calculator 
Description: Simple Mortgage Calculator worpdress plugin and widget. Plugin can be used inside any article by placing code: [simple-mortgage-calculator]. For advanced features such as <strong>Extra Payments</strong> and <strong>Sending report to an email</strong> you can check out our <a href="http://wpcream.com/premium-plugins/mortgage-and-loan-calculator.php" target="_blank" ><strong>Premium Mortgage and Loan Calculator Plugin</strong></a>.
Version: 1.0
Author: http://www.wpcream.com/
Author Name: WPCream,AcerDream
Website: http://www.wpcream.com
Plugin URI: http://wpcream.com/demo/mortgage-and-loan-calculator.php
License: GPL2
*/

define( 'SIMPLE_MMC_PLUGIN_BASENAME', plugin_dir_path(__FILE__));
define( 'SIMPLE_MMC_PLUGIN_URL', plugin_dir_url(__FILE__));

function generate_monthly_mortgage_calc_free($atts){
	$owner = 'www.wpcream.com';
	$html_code = '<div id="advanced_mortgagecalculator">
	<div id="advanced_mortgage_calculator_content">
		<form id="advanced_mortgage_calc" method="post" action="'.admin_url( 'admin-ajax.php' ).'">
			<input type="hidden" name="action" value="smmc_calculate" />
			<div id="top_content" class="right_content">
				<table>
					<tbody>
						<tr>
							<td colspan="2">
								<div><strong>Enter Your Mortgage Details</strong></div>
							</td>
						</tr>
						<tr>
							<td style="width: 160px;">Mortgage amount: $</td>
							<td><input id="advanced_mortgage_calc_loan" class="required number values_advanced_mortgage_calc" name="advanced_mortgage_calc_loan" type="text" /></td>
						</tr>
						<tr>
							<td>Mortgage term:</td>
							<td><input id="advanced_mortgage_calc_years" class="required number values_advanced_mortgage_calc" name="advanced_mortgage_calc_years" type="text" /> years or <input id="advanced_mortgage_calc_months" class="required number values_advanced_mortgage_calc" name="advanced_mortgage_calc_months" type="text" /> months</td>
						</tr>
						<tr>
							<td>Interest rate:</td>
							<td><input id="advanced_mortgage_calc_rate" class="required number values_advanced_mortgage_calc" name="advanced_mortgage_calc_rate" type="text" /> % per year</td>
						</tr>
						<tr>
							<td>Mortgage start date:</td>
							<td>
								<select id="advanced_mortgage_calc_month_start_date" name="advanced_mortgage_calc_month_start_date"> 
									<option value="1">Jan</option> <option value="2">Feb</option> <option value="3">Mar</option> <option value="4">Apr</option> <option value="5">May</option> <option value="6">Jun</option> <option value="7">Jul</option> <option value="8">Aug</option> <option value="9">Sep</option> <option value="10">Oct</option> <option value="11">Nov</option> <option value="12">Dec</option> 
								</select>
								<select id="advanced_mortgage_calc_day_start_date" name="advanced_mortgage_calc_day_start_date"> 
									<option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> <option value="11">11</option> <option value="12">12</option> <option value="13">13</option> <option value="14">14</option> <option value="15">15</option> <option value="16">16</option> <option value="17">17</option> <option value="18">18</option> <option value="19">19</option> <option value="20">20</option> <option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option> <option value="25">25</option> <option value="26">26</option> <option value="27">27</option> <option value="28">28</option> <option value="29">29</option> <option value="30">30</option> <option value="31">31</option> 
								</select> 
								<select id="advanced_mortgage_calc_year_start_date" name="advanced_mortgage_calc_year_start_date"> 
									<option value="2010">2010</option> <option value="2011">2011</option> <option value="2012">2012</option> <option value="2013">2013</option> <option value="2014">2014</option> <option value="2015">2015</option> <option value="2016">2016</option> <option value="2017">2017</option> <option value="2018">2018</option> <option value="2019">2019</option> <option value="2020">2020</option> <option value="2021">2021</option> <option value="2022">2022</option> <option value="2023">2023</option> <option value="2024">2024</option> <option value="2025">2025</option> <option value="2026">2026</option> <option value="2027">2027</option> <option value="2028">2028</option> <option value="2029">2029</option> <option value="2030">2030</option> <option value="2031">2031</option> <option value="2032">2032</option> <option value="2033">2033</option> <option value="2034">2034</option> <option value="2035">2035</option> <option value="2036">2036</option> <option value="2037">2037</option> <option value="2038">2038</option> <option value="2039">2039</option> <option value="2040">2040</option> 
								</select>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<hr />
			<div class="right_content">
				<table>
					<tbody>
						<tr>
							<td colspan="2"><input id="advanced_mortgage_calculate" name="advanced_mortgage_calculate" type="submit" value="Calculate" /></td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>
		<div id="advanced_mortgage_calc_result"></div>
	</div>
</div>';
	echo $html_code;
}

add_shortcode( 'simple-mortgage-calculator', 'generate_monthly_mortgage_calc_free' );

// WIDGET SECTION
include_once( SIMPLE_MMC_PLUGIN_BASENAME . "monthly-mortgage-calc-widget.php" );
// Register our widget.
function monthly_mortgage_init_free() {
	register_widget( 'monthly_mortgage_free_Widget' );
}
add_action( 'widgets_init', 'monthly_mortgage_init_free');

// STYLING AND JS
add_action( 'init', 'load_scripts');
function load_scripts(){
	
	wp_register_style('monthly-mortgage-css-free', plugins_url('monthly-mortgage-style.css',__FILE__ ));
	wp_enqueue_style('monthly-mortgage-css-free');
	
	wp_register_script('monthly-mortgage-validator-free', plugins_url('jquery.validate.js',__FILE__ ));
	wp_enqueue_script('monthly-mortgage-validator-free', array( 'jquery' ));
	
	wp_register_script('monthly-mortgage-action-free', plugins_url('monthly-mortgage-actions.js',__FILE__ ));
	wp_enqueue_script('monthly-mortgage-action-free', array( 'jquery-form' ));
}

if ( is_admin() )
{
    add_action('wp_ajax_smmc_calculate', 'smmc_calculate_callback');
    add_action('wp_ajax_nopriv_smmc_calculate', 'smmc_calculate_callback');
    // Add other back-end action hooks here
}

function smmc_calculate_callback(){
	// response output
	include_once( SIMPLE_MMC_PLUGIN_BASENAME . "mortgage-calc.php" );
	exit;
}
?>