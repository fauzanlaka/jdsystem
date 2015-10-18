<?php if (!is_single() && get_option('thestyle_postinfo1') <> '') { ?>
	<p class="post-meta"><?php esc_html_e('Posted','TheStyle'); ?> <?php if (in_array('author', get_option('thestyle_postinfo1'))) { ?> <?php esc_html_e('by','TheStyle'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('thestyle_postinfo1'))) { ?> <?php esc_html_e('on','TheStyle'); ?> <?php the_time(get_option('thestyle_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('thestyle_postinfo1'))) { ?> <?php esc_html_e('in','TheStyle'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('thestyle_postinfo1'))) { ?> | <?php comments_popup_link(esc_html__('0 comments','TheStyle'), esc_html__('1 comment','TheStyle'), '% '.esc_html__('comments','TheStyle')); ?><?php }; ?></p>
	<div class="clear"></div>
<?php } elseif (is_single() && get_option('thestyle_postinfo2') <> '') { ?>
	<p class="post-meta">
		<?php esc_html_e('Posted','TheStyle'); ?> <?php if (in_array('author', get_option('thestyle_postinfo2'))) { ?> <?php esc_html_e('by','TheStyle'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('thestyle_postinfo2'))) { ?> <?php esc_html_e('on','TheStyle'); ?> <?php the_time(get_option('thestyle_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('thestyle_postinfo2'))) { ?> <?php esc_html_e('in','TheStyle'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('thestyle_postinfo2'))) { ?> | <?php comments_popup_link(esc_html__('0 comments','TheStyle'), esc_html__('1 comment','TheStyle'), '% '.esc_html__('comments','TheStyle')); ?><?php }; ?>
	</p>
<?php }; ?>