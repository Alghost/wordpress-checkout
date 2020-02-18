<?php
	ob_start();
?>
	<div class="iamport-modal result" id="iamport-result-box" style="display:none">
		<div class="iamport-modal-header">
			<div class="iamport-modal-close"><img src="<?=plugin_dir_url(__FILE__)?>../../assets/img/close-button.png" /></div>
			<div class="main-title">결제결과</div>
			<div class="sub-title"></div>
		</div>
		<div class="iamport-modal-container">
			<div class="iamport-modal-content">
				<p class="content"></p>
			</div>
		</div>
	</div>
<?php
	$html_result_box = ob_get_clean();
	$trim_html_result_box = preg_replace($regexNewline, '', $html_result_box);
	ob_start();
?>
	<script type="text/javascript">
		jQuery(function($) {
			if ( $('#iamport-result-box').length == 0 ) { 
				$('body').append('<?=$trim_html_result_box?>');
			}
		});
	</script>
<?php
	$trim_html_result_box .= ob_get_clean();
?>
