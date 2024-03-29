<!-- #rooms -->
<div id="rooms" class="bpanel-content">

    <!-- .bpanel-main-content -->
    <div class="bpanel-main-content">

        <ul class="sub-panel">
			<li><a href="#tab1"><?php esc_html_e('Rooms', 'kids-world');?></a></li>
        </ul>

        <!-- #tab1 - Room Custom Post Type -->
        <div id="tab1" class="tab-content">
            <!-- .bpanel-box -->
            <div class="bpanel-box">

              <div class="box-title">
                  <h3><?php esc_html_e('Room Archives Page Layout', 'kids-world');?></h3>
              </div>

              <div class="box-content">
                  <h6><?php esc_html_e('Layout', 'kids-world');?></h6>
                  <p class="note no-margin"> <?php esc_html_e("Choose the room archives page layout Style", 'kids-world');?></p>
                  <div class="hr_invisible"> </div>
                  <div class="bpanel-option-set">
                      <ul class="bpanel-post-layout bpanel-layout-set" id="room-archives-layout">
                      <?php $layout = array('content-full-width'=>'without-sidebar','with-left-sidebar'=>'left-sidebar','with-right-sidebar'=>'right-sidebar','with-both-sidebar'=>'both-sidebar');
                            $v =  kidsworld_option('pageoptions',"room-archives-page-layout");
                            $v = !empty($v) ? $v : "content-full-width";
                            foreach($layout as $key => $value):
                                $class = ( $key ==   $v ) ? " class='selected' " : "";
                                echo "<li><a href='#' rel='{$key}' {$class}><img src='" . KIDSWORLD_THEME_URI . "/framework/theme-options/images/columns/{$value}.png' /></a></li>";
                            endforeach; ?>
                      </ul>
                      <input name="dttheme[pageoptions][room-archives-page-layout]" type="hidden" value="<?php echo esc_attr($v);?>"/>
                  </div><?php 
                  $sb_layout = kidsworld_option('pageoptions',"room-archives-page-layout");
				  $sb_layout = !empty($sb_layout) ? $sb_layout : "content-full-width";
                  $sidebar_both = $sidebar_left = $sidebar_right = '';
                  if($sb_layout == 'content-full-width') {
                    $sidebar_both = 'style="display:none;"'; 
                  } elseif($sb_layout == 'with-left-sidebar') {
                    $sidebar_right = 'style="display:none;"'; 
                  } elseif($sb_layout == 'with-right-sidebar') {
                    $sidebar_left = 'style="display:none;"'; 
                  } ?>
                  <div id="bpanel-widget-area-options" <?php echo 'class="room-archives-layout" '.$sidebar_both;?>>
                    <div id="left-sidebar-container" class="bpanel-page-left-sidebar" <?php echo ($sidebar_left); ?>>
                        <!-- 2. Standard Sidebar Left Start -->
                        <div id="page-commom-sidebar" class="bpanel-sidebar-section custom-box">
                            <h6><?php esc_html_e('Show Standard Left Sidebar', 'kids-world');?></label></h6>
                            <?php kidsworld_switch("",'pageoptions','show-standard-left-sidebar-for-room-archives'); ?>
                        </div><!-- Standard Sidebar Left End-->
                    </div>

                    <div id="right-sidebar-container" class="bpanel-page-right-sidebar" <?php echo ($sidebar_right); ?>>
                        <!-- 3. Standard Sidebar Right Start -->
                        <div id="page-commom-sidebar" class="bpanel-sidebar-section custom-box">
                            <h6><?php esc_html_e('Show Standard Right Sidebar', 'kids-world');?></label></h6>
                            <?php kidsworld_switch("",'pageoptions','show-standard-right-sidebar-for-room-archives'); ?>
                        </div><!-- Standard Sidebar Right End-->
                    </div>
                  </div>
              </div>

              <div class="box-title">
                  <h3><?php esc_html_e('Room Archives Post Layout', 'kids-world');?></h3>
              </div>

              <div class="box-content">
                  <h6><?php esc_html_e('Layout', 'kids-world');?></h6>
                  <p class="note no-margin"><?php esc_html_e("Choose the Post Layout Style in Room Archives", 'kids-world');?></p>
                  <div class="hr_invisible"> </div>
                  <div class="bpanel-option-set">
                      <ul class="bpanel-post-layout bpanel-layout-set">
                      <?php $posts_layout = array( 'one-column'=>esc_html__("One post per row.", 'kids-world'), 'one-half-column'=>esc_html__("Two posts per row.", 'kids-world'),
					  							   'one-third-column' => esc_html__("Three posts per row.", 'kids-world'), 'one-fourth-column' => esc_html__("Four posts per row.", 'kids-world'));
                            $v = kidsworld_option('pageoptions',"room-archives-post-layout");
                            $v = !empty($v) ? $v : "one-half-column";
                            foreach($posts_layout as $key => $value):
                               $class = ( $key ==  $v ) ? " class='selected' " :"";
                               echo "<li><a href='#' rel='{$key}' {$class} title='{$value}'><img src='" . KIDSWORLD_THEME_URI . "/framework/theme-options/images/columns/{$key}.png' /></a></li>";
                            endforeach;?>
                      </ul>
                      <input name="dttheme[pageoptions][room-archives-post-layout]" type="hidden" value="<?php echo esc_attr($v);?>"/>
                  </div>
              </div>

              <div class="box-title">
                <h3><?php esc_html_e('Room Custom Fields', 'kids-world');?></h3>
              </div>

              <div class="box-content">
                  <div class="portfolio-custom-fields">
                    <input type="button" class="black add-custom-field" value="<?php esc_attr_e('Add New Field', 'kids-world');?>" />
                    <div class="hr_invisible"> </div>
                    <?php $custom_fields = kidsworld_option("pageoptions","room-custom-fields");
                      $custom_fields = is_array($custom_fields) ? array_filter($custom_fields) : array();
                      $custom_fields = array_unique( $custom_fields);

                      foreach( $custom_fields as $field ){ ?>
                        <div class="custom-field-container">
                          <div class="hr_invisible"> </div>
                            <input class="medium" type="text" name="<?php echo "dttheme[pageoptions][room-custom-fields][]";?>" value="<?php echo esc_attr($field);?>">
                            <a href='' class='remove-custom-field'><?php esc_html_e('Remove', 'kids-world');?></a>
                          </div><?php
                      } ?>

                      <div class="clone hidden">
                        <div class="custom-field-container">
                          <div class="hr_invisible"> </div>
                            <input class="medium" type="text" name="<?php echo "dttheme[pageoptions][room-custom-fields][]";?>" value="">
                            <a href='' class='remove-custom-field'><?php esc_html_e('Remove', 'kids-world');?></a>
                        </div>
                      </div>
                  </div>
              </div>

              <div class="box-title">
                <h3><?php esc_html_e('Permalinks', 'kids-world');?></h3>
              </div>

              <div class="box-content">
                <div class="column one-third"><label><?php esc_html_e('Single Room slug', 'kids-world');?></label></div>
                <div class="column two-third last">
                  <input name="dttheme[pageoptions][single-room-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','single-room-slug')));?>" />
                  <p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. room-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
                </div>
                <div class="hr"></div>

                <div class="column one-third"><label><?php esc_html_e('Room Category slug', 'kids-world');?></label></div>
                <div class="column two-third last">
                  <input name="dttheme[pageoptions][room-category-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','room-category-slug')));?>" />
                  <p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. room-types <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
                </div>
                <div class="hr"></div>

                <div class="column one-half">
                  <label><?php esc_html_e('Singular Room Name', 'kids-world');?></label>
                  <div class="clear"></div>
                  <input name="dttheme[pageoptions][singular-room-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-room-name')));?>" />
                  <p class="note"><?php esc_html_e('By default "Room", save options & reload.', 'kids-world');?></p>
                  <div class="hr"></div>
                </div>
                <div class="column one-half last">
                  <label><?php esc_html_e('Plural Room Name', 'kids-world');?></label>
                  <div class="clear"></div>
                  <input name="dttheme[pageoptions][plural-room-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-room-name')));?>" />
                  <p class="note"><?php esc_html_e('By default "Rooms". save options & reload.', 'kids-world');?></p>
                  <div class="hr"></div>
                </div>

                <div class="column one-half">
                  <label><?php esc_html_e('Singular Room Category Name', 'kids-world');?></label>
                  <div class="clear"></div>
                  <input name="dttheme[pageoptions][singular-room-tax-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-room-tax-name')));?>" />
                  <p class="note"><?php esc_html_e('By default "Category". save options & reload.', 'kids-world');?></p>
                  <div class="hr"></div>
                </div>
                <div class="column one-half last">
                  <label><?php esc_html_e('Plural Room Category Name', 'kids-world');?></label>
                  <div class="clear"></div>
                    <input name="dttheme[pageoptions][plural-room-tax-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-room-tax-name')));?>" />
                    <p class="note"><?php esc_html_e('By default "Categories". save options & reload.', 'kids-world');?></p>
                    <div class="hr"></div>
                </div>                              
              </div>
            </div><!-- .bpanel-box end -->
        </div><!-- #tab1 End -->
      
    </div><!-- .bpanel-main-content end-->
</div><!-- #roomoptions end-->