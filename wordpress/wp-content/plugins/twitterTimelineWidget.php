<?php
/*
  Plugin Name: twitterTimelineWidget
  Plugin URI: https://dev.twitter.com/docs/api/1/get/statuses/user_timeline
  Description: This is a widget for showing all twitters tweets of a spesific user (timeline) in a frienly.
  Version: 1.0.
  Author: Dudi Halabi
  Author URI: @DavidHala1
 */

  class TwitterTimelineWidget extends WP_Widget{

  	function TwitterTimelineWidget(){
  		$widget_options = array(
  			'classname'		=>		'twitter-widget',
  			'description' 	=>		'twitter timeline widget'
  			);

  		parent::WP_Widget('twitter_widget', 'Twitter Widget', $widget_options);
  	}

	/*
	* $args: getting the arguments from the theme view.
	*/
	function widget($args, $instance){
		extract( $args, EXTR_SKIP);
		$twitterUser = ( $instance['title'] ) ? $instance['title'] : 'Twitter Widget';
		$twitterNums = ( $instance['body'] ) ? $instance['body'] : 5;
		?>

		<script type="text/javascript">
			var twitterUserName = "<?php echo $twitterUser ?>";		//let the js files know the name of the twetter-user-name
			var numberOfTwittes = "<?php echo $twitterNums ?>";		//let the js files know the name of the twetter-user-name
		</script>

		<div class="footer tweeter">
			<div class="left-side">
				<a href="https://twitter.com/<?php echo $twitterUser ?>"></a>
			</div>
			<div class="right-side">
				<a href="https://twitter.com/<?php echo $twitterUser ?>">@<?php echo $twitterUser ?></a>
				<span>somebody had to write this. thank you.</span>
				<div class="twitter-list-frame">
					<nav id="twitter-list"></nav>
				</div>
				<nav><a id="more-tweets">more tweets...</a></nav>
			</div>
		</div>

	<?php } //end of function widget

	/*
	* what will be shown on the wp-admin GUI
	*/
	function form( $instance){
		?>
		<div for="<?php echo $this->get_field_id('title'); ?>">
			Twitter user-name:</br>
			@<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>"
			value="<?php echo $instance['title'];?>" />
		</div>

		<div for="<?php echo $this->get_field_id('body'); ?>">
			Number of tweets:

			<select id="<?php echo $this->get_field_id('body'); ?>" name="<?php echo $this->get_field_name('body'); ?>">
				<?php for($i=2; $i<=5; $i++) : ?>
				<option value="<?php echo $i?>"
					<?php if( (esc_attr($instance['body'])) == $i ) :?>
					selected
					<?php endIf; ?>
					><?php echo $i ?></option>
				<?php endfor;?>
			</select>
		</div>
		<?php
	} //end form function

} //end TwitterTimelineWidget class


function TwitterTimelineWidget_init(){
	register_widget('TwitterTimelineWidget');
}

add_action('widgets_init', 'TwitterTimelineWidget_init');

?>
