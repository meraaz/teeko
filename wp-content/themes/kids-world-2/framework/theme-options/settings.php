<?php
/* ---------------------------------------------------------------------------
 * Load all theme options in back-end
 * --------------------------------------------------------------------------- */
function kidsworld_options_page(){ ?>
<!-- wrapper -->
<div id="wrapper">

	<!-- Result -->
    <div id="bpanel-message" style="display:none;"></div>
    <div id="ajax-feedback" style="display:none;"><img src="<?php echo esc_url( KIDSWORLD_THEME_URI . '/framework/theme-options/images/loading.png' );?>" alt="<?php esc_attr_e('loader', 'kids-world');?>" /> </div>
    <!-- Result -->

	<!-- panel-wrap -->
	<div id="panel-wrap">

       	<!-- bpanel-wrapper -->
        <div id="bpanel-wrapper">

           	<!-- bpanel -->
           	<div id="bpanel">

                	<!-- bpanel-left -->
                	<div id="bpanel-left">
                    	<div id="logo"><?php
                        	 $logo =  KIDSWORLD_THEME_URI . '/framework/theme-options/images/logo.png';
							 $advance = kidsworld_option('general');
							 if(isset($advance['bpanel-logo-url']) && isset( $advance['enable-bpanel-logo-url']))
							  	$logo = $advance['bpanel-logo-url']; ?>
                             <img src="<?php echo esc_url($logo);?>" width="186" height="101" alt="<?php esc_attr_e('dtlogo', 'kids-world');?>" />
						</div><?php
						/* ---------------------------------------------------------------------------
						 * Load all theme option tabs.
						 * --------------------------------------------------------------------------- */
						$tabs = array(
							'general' 	  => array('icon' => 'dashicons-admin-home', 'name'=>esc_html__('General','kids-world'), 'display'=>true),
							'layout'  	  => array('icon' => 'dashicons-exerpt-view', 'name'=>esc_html__('Layout','kids-world'), 'display'=>true),
							'widgetarea'  => array('icon' => 'dashicons-welcome-widgets-menus', 'name'=>esc_html__('Widget Area','kids-world'), 'display'=>true),
							'pageoptions' => array('icon' => 'dashicons-admin-page', 'name'=>esc_html__('Page Options','kids-world'), 'display'=>true),
							'woocommerce' => array('icon' => 'dashicons-cart', 'name'=>esc_html__('WooCommerce','kids-world'), 'display'=>false),
							'models'	  => array('icon' => 'dashicons-businessman', 'name'=>esc_html__('Models','kids-world'), 'display'=>false),
							'programs'	  => array('icon' => 'dashicons-index-card', 'name'=>esc_html__('Programs','kids-world'), 'display'=>false),
							'medical'	  => array('icon' => 'dashicons-admin-users', 'name'=>esc_html__('Medical','kids-world'), 'display'=>false),
							'attorney'	  => array('icon' => 'dashicons-admin-users', 'name'=>esc_html__('Attorney','kids-world'), 'display'=>false),
							'restaurant'  => array('icon' => 'dashicons-carrot', 'name'=>esc_html__('Restaurant','kids-world'), 'display'=>false),
							'university'  => array('icon' => 'dashicons-welcome-learn-more', 'name'=>esc_html__('University','kids-world'), 'display'=>false),
							'rooms' 	  => array('icon' => 'dashicons-store', 'name'=>esc_html__('Rooms','kids-world'), 'display'=>false),
							'yoga'	 	  => array('icon' => 'dashicons-universal-access', 'name'=>esc_html__('Yoga','kids-world'), 'display'=>false),
							'event'	 	  => array('icon' => 'dashicons-calendar', 'name'=>esc_html__('Event','kids-world'), 'display'=>false),
							'colors'	  => array('icon' => 'dashicons-admin-appearance', 'name'=>esc_html__('Colors','kids-world'), 'display'=>true),
							'fonts'		  => array('icon' => 'dashicons-editor-spellcheck', 'name'=>esc_html__('Fonts','kids-world'), 'display'=>true),
							'backup'	  => array('icon' => 'dashicons-backup', 'name'=>esc_html__('Backup','kids-world'), 'display'=>true),
							'changelog'   => array('icon' => 'dashicons-info', 'name'=> constant('KIDSWORLD_THEME_NAME').esc_html__(' Version ', 'kids-world').constant('KIDSWORLD_THEME_VERSION'), 'display'=>true)
						);

						if(class_exists('woocommerce')) $tabs['woocommerce']['display'] = true;
						if(class_exists('DTModelAddon')) $tabs['models']['display'] = true;
						if(class_exists('DTProgramAddon')) $tabs['programs']['display'] = true;
						if(class_exists('DTDoctorAddon')) $tabs['medical']['display'] = true;
						if(class_exists('DTAttorneyAddon')) $tabs['attorney']['display'] = true;
						if(class_exists('DTRestaurantAddon')) $tabs['restaurant']['display'] = true;
						if(class_exists('DTUniversityAddon')) $tabs['university']['display'] = true;
						if(class_exists('DTRoomAddon')) $tabs['rooms']['display'] = true;
						if(class_exists('DTYogaAddon')) $tabs['yoga']['display'] = true;
						if(class_exists('DTEventAddon')) $tabs['event']['display'] = true;

						$output = "<!-- bpanel-mainmenu -->\n\t\t\t\t\t\t<ul id='bpanel-mainmenu'>\n";
							foreach($tabs as $tabkey => $tab ):
								if($tab['display'])							
									$output .= "\t\t\t\t\t\t\t\t<li><a href='#{$tabkey}' title='{$tab['name']}'><span class='dashicons {$tab['icon']}'></span>{$tab['name']}</a></li>\n";
							endforeach;
						$output .= "\t\t\t\t\t\t</ul><!-- #bpanel-mainmenu -->\n";
						echo ($output);?>
                    </div><!-- #bpanel-left  end-->
                    
                    <form id="dttheme_options_form" name="dttheme_options_form" enctype="multipart/form-data" method="post" action="options.php">
		                <?php settings_fields( 'dttheme' );?>
                        <input type="hidden" id="dttheme-full-submit" name="dttheme-full-submit" value="0" />
                        <input type="hidden" name="dttheme_admin_wpnonce" value="<?php echo wp_create_nonce('dttheme_wpnonce');?>" /><?php
						/* ---------------------------------------------------------------------------
						 * Load theme options php files
						 * --------------------------------------------------------------------------- */
						foreach($tabs as $tabkey => $tab ):
							if($tab['display']) 
								require_once( KIDSWORLD_THEME_DIR .'/framework/theme-options/' .$tabkey. '.php' );
						endforeach; ?>
						<!-- #bpanel-bottom -->
                        <div id="bpanel-bottom">
                           <input type="submit" value="<?php esc_attr_e('Reset All','kids-world');?>" class="save-reset dttheme-reset-button bpanel-button white-btn" name="dttheme[reset]" />
						   <input type="submit" value="<?php esc_attr_e('Save All','kids-world');?>" name="submit"  class="save-reset dttheme-footer-submit bpanel-button white-btn" />
                        </div><!-- #bpanel-bottom end-->        
                    </form>

            </div><!-- #bpanel -->

        </div><!-- #bpanel-wrapper -->
    </div><!-- #panel-wrap end -->
</div><!-- #wrapper end-->
<?php
} ?>