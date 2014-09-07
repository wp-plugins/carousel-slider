<div id="wpbody">
	<div class="wrap">
		<h2><?php _e('Carousel Settings' ,'carouselslider'); ?></h2>
		<form action="options.php" method="post">
			<?php
				settings_fields( 'sis_carousel_settings' );
				$options = get_option( 'sis_carousel_settings' );
			?>
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_settings[max_items]"><?php _e('Maximum Items' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="number" min="1" max="10" name="sis_carousel_settings[max_items]" id="" value="<?php esc_attr_e($options['max_items']); ?>">
							<p class="description">This variable allows you to set the maximum amount of items displayed at a time with the widest browser width &#40;window &gt;= 1200&#41;</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Items Desktop</label>
						</th>
						<td>
							<input type="number" min="1" max="10" name="sis_carousel_settings[items_desktop]" id="" value="<?php esc_attr_e($options['items_desktop']); ?>">
							<p class="description">This allows you to preset the number of slides visible with  &#40;window &lt;= 1199&#41; browser width</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Items Desktop Small</label>
						</th>
						<td>
							<input type="number" min="1" max="10" name="sis_carousel_settings[items_desktop_small]" id="" value="<?php esc_attr_e($options['items_desktop_small']); ?>">
							<p class="description">This allows you to preset the number of slides visible with  &#40;window &lt;= 979&#41; browser width</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Items Tablet</label>
						</th>
						<td>
							<input type="number" min="1" max="10" name="sis_carousel_settings[items_tablet]" id="" value="<?php esc_attr_e($options['items_tablet']); ?>">
							<p class="description">This allows you to preset the number of slides visible with  &#40;window &lt;= 768&#41; browser width</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Items Mobile</label>
						</th>
						<td>
							<input type="number" min="1" max="10" name="sis_carousel_settings[items_mobile]" id="" value="<?php esc_attr_e($options['items_mobile']); ?>">
							<p class="description">This allows you to preset the number of slides visible with  &#40;window &lt;= 479&#41; browser width</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_settings[items_single]">Single Item</label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[items_single]' value='false' <?php if ( 'false' == $options['items_single'] ) echo 'checked="checked"'; ?> /> NO
                            <input type='radio' name='sis_carousel_settings[items_single]' value='true' <?php if ( 'true' == $options['items_single'] ) echo 'checked="checked"'; ?> /> Yes
                    		<p class="description">If you select 'Yes', it will display only one item and top five options will be automatically stopped.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_settings[transitionstyle]">Transition Style</label>
						</th>
						<td>
							<select name="sis_carousel_settings[transitionstyle]">
								<option value="fade" <?php selected( $options['transitionstyle'], 'fade' ); ?>>fade</option>
								<option value="backSlide" <?php selected( $options['transitionstyle'], 'backSlide' ); ?>>backSlide</option>
								<option value="goDown" <?php selected( $options['transitionstyle'], 'goDown' ); ?>>goDown</option>
								<option value="scaleUp" <?php selected( $options['transitionstyle'], 'scaleUp' ); ?>>scaleUp</option>
							</select>
							<p class="description">Transition style works only in modern browsers that support CSS3 translate3d methods and only with single item on screen.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Slide Speed</label>
						</th>
						<td>
							<input type="number" name="sis_carousel_settings[slide_speed]" id="" value="<?php esc_attr_e($options['slide_speed']); ?>">
							<p class="description">Slide speed in milliseconds. Default speed is &lsquo;200&rsquo; milliseconds.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Pagination Speed</label>
						</th>
						<td>
							<input type="number" name="sis_carousel_settings[pagination_speed]" id="" value="<?php esc_attr_e($options['pagination_speed']); ?>">
							<p class="description">Pagination speed in milliseconds. Default speed is &lsquo;800&rsquo; milliseconds.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Rewind Speed</label>
						</th>
						<td>
							<input type="number" name="sis_carousel_settings[rewind_speed]" id="" value="<?php esc_attr_e($options['rewind_speed']); ?>">
							<p class="description">Rewind speed in milliseconds. Default speed is &lsquo;1000&rsquo; milliseconds.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_autoplay">AutoPlay</label>
						</th>
						<td>
							<input type="text" name="sis_carousel_settings[autoplay]" id="" value="<?php esc_attr_e($options['autoplay']); ?>">
							<p class="description">Change to any integrer for example &lsquo;autoPlay : 5000&rsquo; to play every 5 seconds. If you set &lsquo;autoPlay: true&rsquo; default speed will be 5 seconds.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Stop On Hover</label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[stoponhover]' value='false' <?php if ( 'false' == $options['stoponhover'] ) echo 'checked="checked"'; ?> /> NO
                            <input type='radio' name='sis_carousel_settings[stoponhover]' value='true' <?php if ( 'true' == $options['stoponhover'] ) echo 'checked="checked"'; ?> /> Yes
							<p class="description">Stop autoplay on mouse hover.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Navigation</label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[navigation]' value='false' <?php if ( 'false' == $options['navigation'] ) echo 'checked="checked"'; ?> /> NO
                            <input type='radio' name='sis_carousel_settings[navigation]' value='true' <?php if ( 'true' == $options['navigation'] ) echo 'checked="checked"'; ?> /> Yes
							<p class="description">Display &lsquo;next&rsquo; and &lsquo;prev&rsquo; buttons.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_settings[navigation_bg_color]">Navigation Color</label>
						</th>
						<td>
							<input type="text" name="sis_carousel_settings[navigation_bg_color]" id="navigation_bg_color" value="<?php esc_attr_e($options['navigation_bg_color']); ?>">
							<p class="description">Choose color for Navigation Background.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_settings[navigation_arrow_color]">Navigation Arrow Color</label>
						</th>
						<td>
							<input type="text" name="sis_carousel_settings[navigation_arrow_color]" id="navigation_arrow_color" value="<?php esc_attr_e($options['navigation_arrow_color']); ?>">
							<p class="description">Choose color for Navigation Arrow.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Scroll Per Page</label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[scrollperpage]' value='false' <?php if ( 'false' == $options['scrollperpage'] ) echo 'checked="checked"'; ?> /> NO
                            <input type='radio' name='sis_carousel_settings[scrollperpage]' value='true' <?php if ( 'true' == $options['scrollperpage'] ) echo 'checked="checked"'; ?> /> Yes
							<p class="description">Scroll per page not per item. This affect next/prev buttons and mouse/touch dragging.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Pagination</label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[pagination]' value='false' <?php if ( 'false' == $options['pagination'] ) echo 'checked="checked"'; ?> /> NO
                            <input type='radio' name='sis_carousel_settings[pagination]' value='true' <?php if ( 'true' == $options['pagination'] ) echo 'checked="checked"'; ?> /> Yes
							<p class="description">Show pagination.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Pagination Color</label>
						</th>
						<td>
							<input type="text" name="sis_carousel_settings[pagination_bg_color]" id="pagination_bg_color" value="<?php esc_attr_e($options['pagination_bg_color']); ?>">
							<p class="description">Choose color for Pagination Background.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Pagination Numbers</label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[paginationnumbers]' value='false' <?php if ( 'false' == $options['paginationnumbers'] ) echo 'checked="checked"'; ?> /> NO
                            <input type='radio' name='sis_carousel_settings[paginationnumbers]' value='true' <?php if ( 'true' == $options['paginationnumbers'] ) echo 'checked="checked"'; ?> /> Yes
							<p class="description">Show numbers inside pagination buttons</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="">Pagination Number Color</label>
						</th>
						<td>
							<input type="text" name="sis_carousel_settings[pagination_num_color]" id="pagination_num_color" value="<?php esc_attr_e($options['pagination_num_color']); ?>">
							<p class="description">Choose color for Pagination Number.</p>
						</td>
					</tr>
				</tbody>
			</table>
			<p class="submit"><input type="submit" value="<?php _e('Save Changes' ,'carouselslider') ?>" class="button button-primary" id="submit" name="submit"></p>
		</form>
	</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>