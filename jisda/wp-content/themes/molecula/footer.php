<?php global $SMTheme;?>
  
    </div>
    </div>
</div>
<?php	
if ($SMTheme->get( 'social', 'showsocial')) {
	$SMTheme->block_social();
}
?>
<div id='content-bottom' class='container'></div>
<div id='footer'>
	
		<div class='container clearfix'>
		<?php if ($SMTheme->get("layout","footerwidgets")) { ?>
		<div class='footer-widgets-container'><div class='footer-widgets'>
			<div class='widgetf'>
				<?php if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("footer_1") ) : ?>
				<?php
					$SMTheme->go_func("footer_1");
				?>
				<?php endif; ?>
			</div>
			
			<div class='widgetf'>
				<?php if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("footer_2") ) : ?>
				<?php
					$SMTheme->go_func("footer_2");
				?>
				<?php endif; ?>
			</div>
			
			<div class='widgetf widgetf_last'>
				<?php if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("footer_3") ) : ?>
				<?php
					$SMTheme->go_func("footer_3");
				?>
				<?php endif; ?>
			</div>
		</div></div>
		<?php } ?>
		
</div>
<div class='footer_txt'><div class='container clearfix'>
			<?php
                    if ($SMTheme->get( "layout","footertext" )) {
                        echo $SMTheme->get( "layout","footertext" );
                    } else { 
                        ?>
			<div align="center">
				<b>Jamiah Islam Syeikh Daud Ai-Fathani</b><br>
		
				762 Jalan siroros, Muang, Yala. <br>
				Tel. 073-212937,  086-2983065 Fax. 073-240167.	<br>		
			</div>
			<br>

<div align="center">Copyright &copy; <?php echo date("Y"); ?>  <a href="<?php echo home_url(); ?>"><?php bloginfo("name"); ?></a><?php
						echo (get_bloginfo('description'))?' - '.get_bloginfo('description'):'';
                    }
                ?> </div>
				<?php /* 
					All links in the tag <div class='smthemes'> are attribution of the theme developers and should remain intact. 
					It's protected by Creative Commons License (http://creativecommons.org/licenses/by/3.0/).
					Warning! Your site will not be able to work if these links are edited or deleted.
					You can buy this theme without footer links online at http://smthemes.com/buy/molecula/
				*/ ?>
<div align="center">
				
<div class='smthemes'>Designed by <a href='http://greatwordpressthemes.com/' target='_blank'>Great WordPress Themes</a>, thanks to: <a href='http://www.thegrizasonline.com/inmotion-hosting-review-inmotion-hosting-coupon' target='_blank'>InMotion Hosting Coupon</a>, <a href='http://www.1001freewpthemes.com/' target='_blank'>WordPress Themes</a> and <a href='http://www.themeelegant.com/' target='_blank'>Professional WordPress Templates</a></div>
				</div></div></div>
				
<?php wp_footer(); ?>

</div> <?php //footer ?>
</div> <?php //all ?>
<?php
	echo $SMTheme->get( "integration","footercode" );
?>
</body>
</html>