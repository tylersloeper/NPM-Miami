<?php
/*
Plugin Name: Before After
Plugin URI: http://www.instruite.com
Description: Before After Photo viewer
Author: Hemant Nandrajog
Version: 1.0.2
Date: February 16, 2016
Author URI: http://www.instruite.com
*/
/*  Copyright 2010-2011  Hemant Nandrajog (email : before-after-plugin@instruite.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/******************************************************************************
 * Revision History
 * ----------------------------------------------------------------------------
 * -V1.0.2
 * -2016-02-16
 * --Version bump
 * ----------------------------------------------------------------------------
 * ----------------------------------------------------------------------------
 * -V1.0.1
 * -2011-07-21
 * --Minor Bug Fix
 * ----------------------------------------------------------------------------
 * -V1.0.0
 * -2011-07-08
 * --Total revamped of code
 * --Using modified version of Jquery Before After original script to V1.3
 * --Added options page
 * --Before After Javascripts options can be provided through shortcode attributes now
 *
 *
 *****************************************************************************/
//global $this->class_vars;
//$this->class_vars = array();
if (!class_exists("before_after_class")) {
	class before_after_class {
		public $options = array();
		public $class_vars = array();
		public $input_parameters = array();
		public $options_name = "before_after_options";
		public $posted_input = array();
		//$this->class_vars = array();
		/**
		* Default Function for the class
		*
		* @param  none
		* @return void
		* @output activate all actions and filters
		**/
		function before_after_class(){
			//use this area to activate actions and filters in future
		}
		/**
		* Default Function for the class
		*
		* @param  none
		* @return void
		* @output activate all actions and filters
		**/
		function _initialise(){
			//global $this->class_vars;
			$this->class_vars = array();
			$this->options = get_option($this->options_name);
			$this->class_vars['bacode_counts'] = 1;
			$this->class_vars['bacode'] = array();

		}
		/**
			* Before after activation code
			*
			* @param  none
			* @return void
			* @output none
			**/
		function _activate() {
			//$before_after_options['id_count'] = 1;
			//$before_after_options['max_ids'] = 1;
			$_options =  get_option($this->options_name);
			//$before_after_options = "";
			//if ($before_after_options == ""){
				$_options['plugin_imagepath'] = 'http://playground.instruite.com/wordpress/wp-content/plugins/before-after/images/';
				$_options['js_type'] = 'wordpress';
				if (!$_options['custom_css_enabled']) $_options['custom_css_enabled'] = 'off';
				//$_options['jscustom_enable'] = 'off';
				$_options['auto_detect_dimensions'] = 'off';
				$_options['jscustom_enable'] = 'on';
				$_options['jsdefaults']['animateIntro'] = 'on';
				$_options['jsdefaults']['introDelay'] = '1000';
				$_options['jsdefaults']['introDuration'] = '1000';
				$_options['jsdefaults']['introPosition'] = '0.5';
				$_options['jsdefaults']['showFullLinks'] = 'on';
				$_options['jsdefaults']['beforeLinkText'] = 'Show only before';
				$_options['jsdefaults']['afterLinkText'] = 'Show only after';
				$_options['jsdefaults']['imagePath'] = plugins_url()."/before-after/images/";
				$_options['jsdefaults']['cursor'] = 'pointer';
				$_options['jsdefaults']['clickSpeed'] = '600';
				$_options['jsdefaults']['linkDisplaySpeed'] = '200';
				$_options['jsdefaults']['dividerColor'] = '888';
				//$_options['jsdefaults']['$auto_detect_dimensions'] = 'off';
				$_options['jsdefaults']['imgWidth'] = '640';
				$_options['jsdefaults']['imgHeight'] = '480';
				//initialize not set custom options to defaults
				foreach ($_options['jsdefaults'] as $key => $val) {
					if (!(isset($_options['jscustom'][$key]))) {
						$_options['jscustom'][$key] = $_options['jsdefaults'][$key];
					}
				}
				$_options['plugin_like'] = 'off';
				//add_option($this->options_name, $_options, '', 'yes');
				update_option($this->options_name, $_options);
			//}

		}
		/**
		 * Deactivation code
			*
			* @param  none
			* @return void
			* @output none
		**/
		function _deactivate() {
			delete_option("before_after_options");
		}
		/**
		* Load inline css
		*
		* @param  none
		* @return void
		* @output css on to the use page
		**/
		function user_inline_style() {
			if ($this->options['custom_css_enabled']=="on") {
				if ($this->options['custom_css_value']) {
?>
					<style type="text/css">
						<?php echo $this->options['custom_css_value'];	?>
					</style>
<?php
				}

			} else {
?>
			<style type="text/css">
				.ba-container {
					margin-left:auto;
					margin-right:auto;
				}
				.ba-container + div.balinks {
					margin: 0 auto;
				}
				.ba-container div img {
					max-width: none;
				}
			</style>
<?php
			}
		}

		/**
		* Load Javascript libraries
		*
		* @param  none
		* @return void
		* @output register and enqueue the required javascript libraries
		**/
		function user_scripts(){
			if (!is_admin()) {
				if ($this->options['js_type']=="custom") {
					echo $this->options['custom_js'];
				} elseif ($this->options['js_type']=="plugin") {
					wp_deregister_script('jquery');
					wp_deregister_script('jquery-ui-core');
					wp_deregister_script('jquery-ui-draggable');
					wp_enqueue_script('jquery',plugins_url('/js/jquery-1.6.1.min.js', __FILE__));
					wp_enqueue_script('jquery-ui-custom',plugins_url('/js/jquery-ui-1.8.13.custom.min.js', __FILE__) ,array('jquery'));
					wp_register_script('jquery-ui-core', ' ',array('jquery-ui-custom'));
					wp_register_script('jquery-ui-draggable', ' ' ,array('jquery-ui-custom'));
					wp_enqueue_script('jquery-before-after',plugins_url('/js/jquery.beforeafter-1.3.instruite.min.js', __FILE__) ,array('jquery','jquery-ui-custom'));
				} else {
					wp_enqueue_script('jquery-before-after',plugins_url('/js/jquery.beforeafter-1.3.instruite.min.js', __FILE__) ,array('jquery','jquery-ui-core','jquery-ui-draggable'));
				}
			}
		}

		/**
		* Load inline  script
		*
		* @param  none
		* @return void
		* @output inline javascript code at footer of page
		**/
		function inline_script() {
			if (!($this->class_vars['bacode'] =="")) {
?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
<?php
				foreach ($this->class_vars['bacode'] as $bacode) {
					//print_r ($bacode);
					$jscode = "('#ba-container-".$bacode['id']."').beforeAfter(";
					//foreach ($this->options['jsdefaults'] as $key => $val) {
					$firstvalue = true;
					foreach ($bacode as $key => $val) {

							//if (!($val == $this->options['jsdefaults'][$key])) {
								if (is_string($val)) $val="'".$val."'";
								if ($val == "'on'") $val=true;
								if (($val == "'off'") or ($val == "''")) $val="false";
								//if ($val == false) $val = "false";
								if ($firstvalue) {
									$jscode .= "{".$key.":".$val;
									$firstvalue = false;
								}else {
									$jscode .= ",".$key.":".$val;
								}
							//}
					}
					if ($firstvalue) {
						$jscode .= ");";
					} else {
						$jscode .= "});";
					}
?>
					$<?php echo $jscode; ?>

<?php
				}
?>
					});
				</script>
<?php
			}
		}

		/**
		* Provides the Powered by Link
		*
		* @param  none
		* @return void
		* @output Ouptut text in get_footer
		**/
		function powered_by() {
			if ($this->options['plugin_like'] == 'on') echo "<br />Powered by <a href='http://www.instruite.com/blog/2010/03/04/before-after-photo-effect-plugin/' title='Wordpress Before After Plugin'> Wordpress Before After Plugin</a>";
		}

		/**
		 * Load inline  script in post editor
		 *
		 * @param  none
		 * @return void
		 * @output add inline scripts for post editor
		**/
		function inline_admin_script() {
			wp_print_scripts( 'quicktags' );
?>
			<script type="text/javascript">
				edButtons[edButtons.length] = new edButton('ed_beforeafter' ,'Before After' ,'[beforeafter]' ,'[/beforeafter]' ,'c' );
			</script>
<?php
		}

		/**
		 * Before after short code
		 *
		 * @param  none
		 * @return $beforeafter_content
		 * @output none
		**/
		function shortcode($attributes, $content = null) {
			//$custom_atts = shortcode_atts( array(
			//				'imgWidth' => $this->options['jsdefaults']['imgWidth'],
			//				'imgHeight' => $this->options['jsdefaults']['imgHeight'],
			//				), $atts );
			//global $this->class_vars;
			$bacode_no = $this->class_vars['bacode_counts'];
			//$this->class_vars['bacode'][$bacode_no] = $custom_atts;
			//print_r ($this->options);
			if ($this->options['jscustom_enable'] == 'on') {
				foreach ($this->options['jscustom'] as $key => $val) {

					if ($key == "imagePath") {
						$this->class_vars['bacode'][$bacode_no][$key] = $val;
					}
					if (isset($attributes[strtolower($key)])) {
						$val = $attributes[strtolower($key)];
					}
					if (!($val == $this->options['jsdefaults'][$key])){
						$this->class_vars['bacode'][$bacode_no][$key] = $val;
					}

				}
			}
			//echo "<br /><br />";
			//print_r ($this->class_vars['bacode'][$bacode_no]);

			if (!($custom_atts['id'])) {
				$this->class_vars['bacode'][$bacode_no]['id'] = $bacode_no;
				$this->class_vars['bacode_counts'] = $bacode_no + 1;
			}

			//global $beforeafter_values;
			$isBeforeAfterEnabled = true; //For future purposes

			if ($isBeforeAfterEnabled) {
				$img_start_code = 'img ';
				$img_end_code = '>';
				$img_align_start = 'class="';
				$img_align_end = '"';
				$caption_start_code = 'caption';
				$caption_stop_code = '[/caption]';
				$caption_align_start = 'align="';
				$caption_align_end = '"';
				$caption_left_code = 'alignleft';
				$caption_right_code = 'alignright';

				$mod_content = $content;
				$beforeafter_content = "";
				//need to do this loop twice for 2 find the 2 image data
				for ($imgcount = 1; $imgcount <= 2; $imgcount++) {
					if (strpos($mod_content, $caption_start_code)){
						$sub_str = substr($mod_content, strpos($mod_content, $caption_start_code) + 1, (strpos($mod_content, $caption_stop_code) - 1 - strpos($mod_content,$caption_stop_code))) ;
						$align = substr($sub_str, strpos($sub_str, $caption_align_start), strpos($sub_str, $caption_align_end, strpos($sub_str,$caption_align_start)+7)-strpos($sub_str,$caption_align_start));
						$img_str = substr($sub_str, strpos($sub_str, $img_start_code) - 1, strpos($sub_str, $img_end_code, strpos($sub_str, $img_start_code))-strpos($sub_str, $img_start_code)+1);
						$mod_content = substr($mod_content, strpos($mod_content,'[/caption]')+10);
					}else {
						//echo "<!--".$mod_content."-->";
						$img_str = substr($mod_content, strpos($mod_content, $img_start_code) - 1, strpos($mod_content, $img_end_code, strpos($mod_content, $img_start_code))-strpos($mod_content, $img_start_code)+1);
						$align = substr($img_str, strpos($img_str, $img_align_start) , strpos($img_str, $img_align_end, strpos($img_str, $img_align_start) + 8)- strpos($img_str, $img_align_start));
						//$mod_content = substr($mod_content, strpos($mod_content, $img_end_code, strpos($mod_content, $img_start_code) ) + 2);
						$mod_content = substr($mod_content, strpos($mod_content, $img_end_code, strpos($mod_content, $img_start_code) ) + 1);
					}
					if (strpos($align, 'alignleft')) {
						$before_image = $img_str;
					    $before_image .= '>';
					} else {
						$after_image = $img_str;
						$after_image .= '>';
					}
				}
				//Adding height and width along with js inoke code (can be used only with version 1.3.instruite(min).js)
				$auto_detect_dimensions = $this->options['auto_detect_dimensions'];
				if (($auto_detect_dimensions=="off") or ($auto_detect_dimensions=="")) {
					$auto_detect_dimensions = false;
				} else {
					$auto_detect_dimensions = true;
				}

				if ($auto_detect_dimensions) {
					if (($custom_atts['imgHeight']==$this->options['jsdefaults']['imgHeight']) or ($custom_atts['imgHeight']=="")) {
						$heightstart = "height";
						$heightend = '"';
						$imgheight = substr($before_image,strpos($before_image,$heightstart)+8,(strpos($before_image,$heightend,strpos($before_image,$heightstart)+8)) - (strpos($before_image,$heightstart)+8));
						if ($imgheight) $this->class_vars['bacode'][$bacode_no]['imgHeight']=$imgheight;
					} else {
						$this->class_vars['bacode'][$bacode_no]['imgHeight'] = $custom_atts['imgHeight'];
					}
					if (($custom_atts['imgWidth']==$this->options['jsdefaults']['imgWidth']) or ($custom_atts['imgWidth']=="")) {
						$widthstart = "width";
						$widthend = '"';
						$imgwidth = substr($before_image,strpos($before_image,$widthstart)+7,(strpos($before_image,$widthend,strpos($before_image,$widthstart)+7)) - (strpos($before_image,$widthstart)+7));
						if ($imgwidth) $this->class_vars['bacode'][$bacode_no]['imgWidth']=$imgwidth;
					} else {
						$this->class_vars['bacode'][$bacode_no]['imgWidth'] = $custom_atts['imgWidth'];
					}
				}
				if ($beforeafter_content==""){
					$beforeafter_content = '<div class="ba-container" id="ba-container-'.$bacode_no.'">';
					$beforeafter_content .= $before_image;
					$beforeafter_content .= $after_image;
					$beforeafter_content .= '</div>';
				}
			}else {
				//return the content as is
				$beforeafter_content =  $content;
			}
			return  do_shortcode($beforeafter_content);
		}

		/**
		 * Register Settings for Before After Plugin
		 *
		 *@param  none
		 *@return void
		 *@output none
		**/
		function register_settings() {
			//$this->input_parameters = array();
			$form_parameters = array();
				$form_parameters['type']="";
				$form_parameters['maintag']="";
				$form_parameters['subtag']="";
				$form_parameters['size']="";
				$form_parameters['maxvalue']="";
				$form_parameters['rows']="";
				$form_parameters['start_message']="";
				$form_parameters['end_message']="";
			register_setting( 'before_after_settings', 'before_after_options', array(&$this,'update_settings') );
			add_settings_section('plugin_custom', 'Plugin Customization Settings',  array(&$this,'plugin_custom_section'), 'plugin_custom');
				$form_parameters['type']="checkbox";
				$form_parameters['maintag']="custom_css_enabled";
				$form_parameters['subtag']="";
				$form_parameters['size']="";
				$form_parameters['maxvalue']="";
				$form_parameters['end_message']="[Enable to use custom styling (css) code and provide the custom css in below box]";
				add_settings_field('custom_css_enabled', 'Use Custom Styling', array(&$this,'form_inputs'), 'plugin_custom', 'plugin_custom', $form_parameters);
				$form_parameters['type']="textarea";
				$form_parameters['maintag']="custom_css_value";
				$form_parameters['subtag']="";
				$form_parameters['size']="50";
				$form_parameters['maxvalue']="";
				$form_parameters['rows']="5";
				$form_parameters['end_message']="";
				add_settings_field('custom_css_value', 'Custom Styling Code', array(&$this,'form_inputs'), 'plugin_custom', 'plugin_custom', $form_parameters);
				$form_parameters['type']="select";
				$form_parameters['maintag']="js_type";
				$form_parameters['subtag']="";
				$form_parameters['size']="1";
				$form_parameters['maxvalue']="";
				$form_parameters['rows']="";
				$form_parameters['end_message']="<br />&nbsp;&nbsp;<i>wordpres</i>: (<i>recommended option</i>) Use stack javascripts bundled with wordpress<br />&nbsp;&nbsp;<i>plugin</i>: uses javascripts from plugin folder jquery(1.6.1) jquery-ui.custom(1.8.13)<br />&nbsp;&nbsp;<i>custom</i>: provide your own scripts (provide complete information including the script tags";
				$form_parameters['select_values']=array('wordpress','plugin','custom');
				add_settings_field('js_type', 'Javascripts', array(&$this,'form_inputs'), 'plugin_custom', 'plugin_custom', $form_parameters);
				$form_parameters['type']="textarea";
				$form_parameters['maintag']="custom_js_value";
				$form_parameters['subtag']="";
				$form_parameters['size']="50";
				$form_parameters['maxvalue']="";
				$form_parameters['rows']="5";
				$form_parameters['end_message']="";
				add_settings_field('custom_js_value', 'Custom JS Code', array(&$this,'form_inputs'), 'plugin_custom', 'plugin_custom', $form_parameters);
				$form_parameters['type']="checkbox";
				$form_parameters['maintag']="auto_detect_dimensions";
				$form_parameters['subtag']="";
				$form_parameters['size']="";
				$form_parameters['maxvalue']="";
				$form_parameters['end_message']="[Default:  unchecked]<br />Enable this if before after effect is not working on your site with chrome or safari browsers";
				add_settings_field('auto_detect_dimensions', 'Auto Detect Dimensions', array(&$this,'form_inputs'), 'plugin_custom', 'plugin_custom', $form_parameters);

			add_settings_section('js_custom', 'JS Parameter Settings', array(&$this,'jscustom_section'), 'js_custom');
				$form_parameters['type']="checkbox";
				$form_parameters['maintag']="jscustom_enable";
				$form_parameters['subtag']="";
				$form_parameters['size']="";
				$form_parameters['maxvalue']="";
				$form_parameters['end_message']="[if you want to use default settings then just uncheck this.]";
				//add_settings_field('jscustom_enable', 'Use Custom Parameters', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="checkbox";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="animateIntro";
				$form_parameters['size']="";
				$form_parameters['maxvalue']="";
				$form_parameters['end_message']="[Default: checked]";
				add_settings_field('animateIntro', 'Introduction Animation <br /> [animateIntro]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="introDelay";
				$form_parameters['size']="5";
				$form_parameters['maxvalue']="5";
				$form_parameters['end_message']="(millisceconds) [Default: 1000]";
				add_settings_field('introDelay', 'Introduction Delay <br /> [introDelay]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="introDuration";
				$form_parameters['size']="5";
				$form_parameters['maxvalue']="5";
				$form_parameters['end_message']="(millisceconds) [Default: 1000]";
				add_settings_field('introDuration', 'Introduction Duration<br /> [introDuration]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="introPosition";
				$form_parameters['size']="5";
				$form_parameters['maxvalue']="3";
				$form_parameters['end_message']="(value between 0 and 1) [Default: 0.5]";
				add_settings_field('introPosition', 'Introduction Position<br /> [introPosition]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="checkbox";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="showFullLinks";
				$form_parameters['size']="3";
				$form_parameters['maxvalue']="3";
				$form_parameters['end_message']="[Default:  checked]";
				add_settings_field('showFullLinks', 'Show Full Links<br /> [showFullLinks]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="beforeLinkText";
				$form_parameters['size']="50";
				$form_parameters['maxvalue']="100";
				$form_parameters['end_message']="[Default: Show only before]";
				add_settings_field('beforeLinkText', 'Before link Text<br /> [beforeLinkText]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="afterLinkText";
				$form_parameters['size']="50";
				$form_parameters['maxvalue']="100";
				$form_parameters['end_message']="[Default: Show only after]";
				add_settings_field('afterLinkText', 'After link Text<br /> [afterLinkText]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="imagePath";
				$form_parameters['size']="50";
				$form_parameters['maxvalue']="200";
				$form_parameters['end_message']="[Default: http://path-to-before-after-plugin/images/]";
				add_settings_field('imagePath', 'Path to images<br /> [imagePath]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="cursor";
				$form_parameters['size']="20";
				$form_parameters['maxvalue']="20";
				$form_parameters['end_message']="[Default: pointer]";
				add_settings_field('cursor', 'Cursor Type<br /> [cursor]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="clickSpeed";
				$form_parameters['size']="5";
				$form_parameters['maxvalue']="5";
				$form_parameters['end_message']=" (millisceconds) [Default: 600]";
				add_settings_field('clickSpeed', 'Click Speed<br /> [clickSpeed]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="linkDisplaySpeed";
				$form_parameters['size']="5";
				$form_parameters['maxvalue']="5";
				$form_parameters['end_message']=" (millisceconds) [Default: 200]";
				add_settings_field('linkDisplaySpeed', 'Link Display Speed<br /> [linkDisplaySpeed]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="dividerColor";
				$form_parameters['size']="6";
				$form_parameters['maxvalue']="6";
				$form_parameters['start_message']="#";
				$form_parameters['end_message']=" (color-hexcode) [Default: 888]";
				add_settings_field('dividerColor', 'Divider Color<br /> [dividerColor]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="imgWidth";
				$form_parameters['size']="4";
				$form_parameters['maxvalue']="4";
				$form_parameters['start_message']="";
				$form_parameters['end_message']="px (this value is used in case the plugin code cannot find image width when auto detect dimensions is enabled) [Default: 640]";
				add_settings_field('imgWidth', 'Image Width<br /> [imgWidth]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
				$form_parameters['type']="text";
				$form_parameters['maintag']="jscustom";
				$form_parameters['subtag']="imgHeight";
				$form_parameters['size']="4";
				$form_parameters['maxvalue']="4";
				$form_parameters['start_message']="";
				$form_parameters['end_message']="px (this value is used in case the plugin code cannot find image Height when auto detect dimensions is enabled) [Default: 480]";
				add_settings_field('imgHeight', 'Image Height<br /> [imgHeight]', array(&$this,'form_inputs'), 'js_custom', 'js_custom', $form_parameters);
			add_settings_section('plugin_like', 'Plugin Appreciation', array(&$this,'plugin_like'), 'plugin_like');
				$form_parameters['type']="checkbox";
				$form_parameters['maintag']="plugin_like";
				$form_parameters['subtag']="";
				$form_parameters['size']="3";
				$form_parameters['maxvalue']="3";
				$form_parameters['start_message']="";
				$form_parameters['end_message']="<br />[if enabled, Power By Before After Plugin text will be shown in footer on post/page where before after photo effect is being used]";
				//add_settings_field('plugin_like', 'Link to Plugin', array(&$this,'form_inputs'), 'plugin_like', 'plugin_like', $form_parameters);

		}

		function plugin_custom_section(){
			echo '<legend>Plugin Customization</legend>';
		}

		function jscustom_section(){
			echo '<legend>Javascript Parameters</legend>';
		}

		function plugin_like(){
			echo '<legend>Spread the Word</legend>';
		}

		function form_inputs ($form_field ){
			//print_r($form_field);
			$type = $form_field['type'];
			$maintag = $form_field['maintag'];
			$subtag = $form_field['subtag'];
			$size =  $form_field['size'];
			$maxvalue =	$form_field['$maxvalue'];
			$rows = $form_field['$maxvalue'];
			$start_messagemessage = $form_field['start_message'];
			$end_message = $form_field['end_message'];
			$select_values = $form_field['select_values'];
			$value = "";
			if ($subtag=="") {
				$name = "before_after_options[{$maintag}]";
				$id = $maintag;
				$value = $this->options[$maintag];
				if($this->options[$maintag] == 'on') $value='checked';
			}else {
				$name = "before_after_options[".$maintag."][".$subtag."]";
				$id = $subtag;
				$value = $this->options[$maintag][$subtag];
				if($this->options[$maintag][$subtag] == 'on') $value='checked';

			}
			if ($type == "checkbox") {
				echo "{$start_message}<input id='{$id}' name='{$name}' type='checkbox' {$value} /> {$end_message}";
			}elseif ($type == "text") {
				echo "{$start_message}<input id='{$id}' name='{$name}' size='{$size}' maxvalue='{$maxvalue}' type='text' value='{$value}' /> {$end_message}";
			} elseif ($type == "textarea"){
				echo "{$start_message}<textarea id='{$id}' name='{$name}' rows='{$rows}' cols='{$size}'>{$value}</textarea>{$end_message}";
			} elseif ($type == "select"){
				echo "{$start_message}<select id='{$id}' name='{$name}' size='{$size}' >";
				foreach ($select_values as $select_value) {
					$selected = "";
					if ($value == $select_value) $selected = 'selected="selected"';
					echo "<option value='{$select_value}' {$selected}>{$select_value}</option>";
				}
				echo "</select> {$end_message}";
			}else {
				echo "No input type specified";
			}

		}

		/**
		 * Option Menu
		 *
		 * @param  none
		 * @return void
		 * @output Admin Menu Entry
		**/
		function option_menu() {
			add_options_page('Before After Photo Settings', 'Before After', 'manage_options', 'before_after_settings', array($this, 'option_page'));
		}

		/**
		 * Optiona Page
		 *
		 * @param  none
		 * @return void
		 * @output Admin Menu Entry
		**/
		function option_page(){
			//echo "Before After Settings Page";
			$this->_initialise();
			$this->settings_form();
			//echo "Before After Options";
			//echo "<br /><br />";
			//print_r ($this->options);
		}

		function settings_form(){
			//global $before_after_message, $before_after_notice, $before_after_output;
			$this->admin_inline_style();
?>
			<div class="wrap" id="before_after-custom">
				<?php //screen_icon(); ?><h2>Before After Settings Page</h2>
				<div id="postarea" class="metabox-holder has-right-sidebar">
					<?php //Sidebar
						$this->_sidebar();
					?>
					<div id="post-body-content">
						<div id="postbox">
							<div>
								<form method="post" action="options.php">
								<?php settings_fields('before_after_settings');
									//$before_after_options = get_option($this->options_name); ?>
									<fieldset>
										<?php do_settings_sections('plugin_custom');?>
									</fieldset>
									<fieldset>
										<?php do_settings_sections('js_custom');?>
									</fieldset>
									<fieldset>
										<?php do_settings_sections('plugin_like');?>
										<p>
											If you like this plugin rate it on Wordpress Plugin Database ->
											<a href="http://wordpress.org/extend/plugins/before-after/" title="Before After Plugin on Wordpress">Before After Plugin</a>
										</p>
									</fieldset>
										<input type="hidden" name="action1" value="update_before_after_settings">
										<input type="submit" name="submit" value="<?php _e('Save Changes') ?>" class="button-primary" />
								</form>
							</div>
						</div>
					</div><!-- /post-body-content -->
				</div><!-- /poststuff -->
			</div><!-- /wrap -->
<?php
		}
		/**
		 *Sidebar
		 *
		 *@param $type - string - type of sidebar to be shown
		 *@retrun none
		 *@Output dispalys a sidebar
		 *
		**/
		function _sidebar($type='general'){
			if (!($type=='none')){
?>
				<div id="side-info-column" class="inner-sidebar">
					<fieldset>
						<legend>Support</legend>
							<ul>
								<li>
									<a href="http://www.instruite.com/blog/2010/03/04/before-after-photo-effect-plugin/" title="Support Page" >Plugin Support Page</a>
									<br />
									Use Comments to ask your support queries (Recommended)
								</li>
								<li>
									<a href="http://twitter.com/instruite" title="Twitter Support" >Twitter</a>
									<br />
									Use @instruite and hashtags (like #wp-before-after #wpplugins or #wordpress)
								</li>
								<li>
									<a href="http://www.facebook.com/pages/Instruites-Blog/161951887716?sk=wall" title="Facebook Support" >Facebook</a>
									<br />
									Post your support queries on facebook page wall
								</li>
								<li>
									<a href="https://plus.google.com/108357740742566610994/posts" title="Google plus" >Google +</a>
									<br />

								</li>
							</ul>
					</fieldset>
					<fieldset>
						<legend>Advertisement</legend>
							<ul>
								<li>
									<a href="http://icnd.info" title="Support Us" >Coupons and Discounts</a>
									<br />
									Make your online shopping cheaper using coupons from icnd.info site (and help us by using our affiliate links)
								</li>
							</ul>
					</fieldset>
				</div>
<?php
			}
		}

		/**
			* Load admin inline css
			*
			* @param  none
			* @return void
			* @output inline style on admin page
		**/
		function admin_inline_style() {
?>
			<style type="text/css">
				fieldset {
					margin: 1em 0;
					padding: 0 1em 1em 1em;
					border: 1px solid #bbb;
					border-radius: 11px;
					-webkit-border-radius: 11px;
					-moz-border-radius: 11px;
				}

				fieldset .submit {
					margin: 1em 0 0 0;
					padding: 0;
				}

				legend {
					color: #999;
					padding: 0 5px;
					font-weight: bold;
				}
				fieldset h3{
					display:none;
				}
			</style>
<?php
		}

		/**
		 * Process the submitted form
		 *
		 * @param  submitted form fileds
		 * @return checked form fields
		 * @output none
		**/
		function update_settings($input) {
			$updated_options = get_option($this->options_name);
			$form_error = false;
			$this->posted_input = $input;
			//Settings for checkbox somehow it doesnot provide anyvalue when checkbox is not selected
			if (!(isset($input['custom_css_enabled']))) $input['custom_css_enabled'] = "off";
			//if (!(isset($input['jscustom_enable']))) $input['jscustom_enable'] = "off";
			if (!(isset($input['jscustom']['animateIntro']))) $input['jscustom']['animateIntro'] = "off";
			if (!(isset($input['jscustom']['showFullLinks']))) $input['jscustom']['showFullLinks'] = "off";
			if (!(isset($input['plugin_like']))) $input['plugin_like'] = "off";

			foreach ($input as $key => $val) {
				$skip = false;
				//$error_message = $key." : ".$val;
				//add_settings_error( 'before_after_settings', 'before_after_setting_introPosition', $error_message, 'error' ) ;
				if ($key == "jscustom") {
					$skip = true;
				}
				if ($key == "custom_css_enabled") {
					if ($input['custom_css_enabled'] == "on") {
						if ($input['custom_css_value'] == "") {
							$error_message ='You have enabled Custom Styling but not provided any information in Custom CSS box make sure you add required style information into your stylesheets';
							add_settings_error( 'before_after_settings', 'before_after_setting_css', $error_message , 'updated' );
						}
					}
				}
				if ($key == "js_type") {
					if ($input['js_type'] == "custom") {
						if ($input['custom_js_value'] == "") {
							$error_message ='You have enabled Custom Javascripts but not provided any information in Custom JS box make sure you add required scripts information into your blog';
							add_settings_error( 'before_after_settings', 'before_after_setting_css', $error_message , 'updated' );
						}
					}
				}
				if (!$skip) {
					if (!$form_error) {
						$updated_options[$key] = $val;
					}
				}

			}
			foreach ($input['jscustom'] as $key => $val) {
				if (!($val == $updated_options['jscustom'][$key])){
					if ($key == "introPosition") {
						if (!((0 < $val) or ($val > 1))) {
							$error_message = 'Intro Position values needs to be between 0.0 and 1.0. Submitted Value '.$val;
							add_settings_error( 'before_after_settings', 'before_after_setting_introPosition', $error_message, 'error' );
							$form_error = true;
						}
					}
					if ($key == "beforeLinkText") {
						if ($val == "") {
							$error_message ='Before Link text can not be empty';
							add_settings_error( 'before_after_settings', 'before_after_setting_beforeLinkText', $error_message , 'error' );
							$form_error = true;
						}
					}
					if ($key == "afterLinkText") {
						if ($val == "") {
							$error_message ='After Link text can not be empty';
							add_settings_error( 'before_after_settings', 'before_after_setting_afterLinkText', $error_message , 'error' );
							$form_error = true;
						}
					}
					if ($key == "imagePath") {
						if ($val == "") {
							$error_message ='Image Path can not be empty';
							add_settings_error( 'before_after_settings', 'before_after_setting_imagePath', $error_message , 'error' );
							$form_error = true;
						}
					}
					if (!$form_error) $updated_options['jscustom'][$key] = $val;
				}
			}
			if (!$form_error) {
				//$updated_options =
				add_settings_error( 'before_after_settings', 'before_after_setting_update', 'Before After Settings updated.', 'updated' ) ;
			}
			return $updated_options;
		}

	} //before after class
}

//create the class instance
if (class_exists("before_after_class")) {
    $beforeafter = new before_after_class();
}

//Set Actions and Filters
if (isset($beforeafter)) {
    //Actions
		//Initialize Options and variables
		add_action('wp_head', array(&$beforeafter, '_initialise'));
		//register activation hook
		register_activation_hook( __FILE__, array(&$beforeafter, '_activate'));
		//register deactivation hook
		register_deactivation_hook( __FILE__, array(&$beforeafter, '_deactivate') );
		//Print User inline styles
        add_action('wp_head', array(&$beforeafter, 'user_inline_style'));
		//Enqueue required javascripts
		add_action('init', array(&$beforeafter, 'user_scripts'));
		//add inline javascript code
		add_action('wp_footer', array(&$beforeafter, 'inline_script'));
		//add powered by link
		add_action('wp_footer', array(&$beforeafter, 'powered_by'),1);
		//add inline js in admin panel for shortcode button
		add_action('admin_head',array(&$beforeafter, 'inline_admin_script'));
		//Option page
		add_action('admin_menu', array(&$beforeafter, 'option_menu'));
		//Register Settings
		add_action('admin_init', array(&$beforeafter, 'register_settings'));
    //Filters
		//add shortcode
		add_shortcode('beforeafter', array(&$beforeafter, 'shortcode'));
}
?>
