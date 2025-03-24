<?php
if ( ! class_exists( 'Wise_Blog_Tile_List_Widget' ) ) {
	/**
	 * Adds Wise Blog Tile List Widget.
	 */
	class Wise_Blog_Tile_List_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 */
		public function __construct() {
			$tile_list_widget = array(
				'classname'   => 'widget wise-blog-widget tile-list-widget',
				'description' => __( 'Retrive Tile List Widgets', 'wise-blog' ),
			);
			parent::__construct(
				'wise_blog_tile_list_widget',
				__( 'Artify Widget: Tile List Widget', 'wise-blog' ),
				$tile_list_widget
			);
		}

		/**
		 * Front-end display of widget.
		 *
		 * @see WP_Widget::widget()
		 *
		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget( $args, $instance ) {
			if ( ! isset( $args['widget_id'] ) ) {
				$args['widget_id'] = $this->id;
			}
			$tile_list_title       = ( ! empty( $instance['title'] ) ) ? $instance['title'] : '';
			$tile_list_title       = apply_filters( 'widget_title', $tile_list_title, $instance, $this->id_base );
			$tile_list_post_offset = isset( $instance['offset'] ) ? absint( $instance['offset'] ) : '';
			$tile_list_category    = isset( $instance['category'] ) ? absint( $instance['category'] ) : '';

			echo $args['before_widget'];
			
			if ( ! empty( $tile_list_title ) ) {
				echo $args['before_title'] . esc_html( $tile_list_title ) . $args['after_title'];
			}

			?>
			<div class="widget-content-area">

				<?php
				$tile_list_widgets_args = array(
					'post_type'      => 'post',
					'posts_per_page' => absint( 4 ),
					'offset'         => absint( $tile_list_post_offset ),
					'cat'            => absint( $tile_list_category ),
				);

				$query = new WP_Query( $tile_list_widgets_args );
				if ( $query->have_posts() ) :
					$i = 1;
					while ( $query->have_posts() ) :
						$query->the_post();
						?>
						<div class="single-card-container <?php echo esc_attr( $i === 1 ? 'tile-card' : 'list-card' ); ?>">
							<?php if ( has_post_thumbnail() ) { ?>
								<div class="single-card-image">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>							
									</a>
								</div>
							<?php } ?>
							<div class="single-card-detail">
								<h3 class="card-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>  
								<div class="card-meta">
									<span class="post-author"><?php wise_blog_posted_by(); ?></span>
									<span class="post-date"><?php wise_blog_posted_on(); ?></span>
								</div>
							</div>
						</div>
						<?php
						$i++;
					endwhile;
					wp_reset_postdata();
				endif;
				?>

			</div>
			<?php
			echo $args['after_widget'];
		}

		/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 *
		 * @param array $instance Previously saved values from database.
		 */
		public function form( $instance ) {
			$tile_list_title       = isset( $instance['title'] ) ? $instance['title'] : '';
			$tile_list_post_offset = isset( $instance['offset'] ) ? absint( $instance['offset'] ) : '';
			$tile_list_category    = isset( $instance['category'] ) ? absint( $instance['category'] ) : '';
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Section Title:', 'wise-blog' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $tile_list_title ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'offset' ) ); ?>"><?php esc_html_e( 'Number of posts to displace or pass over:', 'wise-blog' ); ?></label>
				<input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'offset' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'offset' ) ); ?>" type="number" step="1" min="0" value="<?php echo absint( $tile_list_post_offset ); ?>" size="3" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>"><?php esc_html_e( 'Select the category to show posts:', 'wise-blog' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'category' ) ); ?>" class="widefat" style="width:100%;">
					<?php
					$categories = wise_blog_get_post_cat_choices();
					foreach ( $categories as $category => $value ) {
						?>
						<option value="<?php echo absint( $category ); ?>" <?php selected( $tile_list_category, $category ); ?>><?php echo esc_html( $value ); ?></option>
					<?php } ?>      
				</select>
			</p>
			<?php
		}

		/**
		 * Sanitize widget form values as they are saved.
		 *
		 * @see WP_Widget::update()
		 *
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 *
		 * @return array Updated safe values to be saved.
		 */
		public function update( $new_instance, $old_instance ) {
			$instance             = $old_instance;
			$instance['title']    = sanitize_text_field( $new_instance['title'] );
			$instance['offset']   = (int) $new_instance['offset'];
			$instance['category'] = (int) $new_instance['category'];
			return $instance;
		}

	}
}
