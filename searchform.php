<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>/">
	<input type="text" value="<?php esc_html_e( 'To search type and hit enter', 'mellany'  ); ?>" onfocus="if(this.value=='<?php esc_html_e( 'To search type and hit enter', 'mellany'  ); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php esc_html_e( 'To search type and hit enter', 'mellany'  ); ?>';" name="s" id="s3" class="search-input" />
</form>
