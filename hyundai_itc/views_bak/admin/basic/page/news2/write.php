<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>

<?php echo element('headercontent', element('board', $view)); ?>
<div class="a-content a03">
						<h2>ITC News 등록</h2>
						<?php 
						echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
						echo show_alert_message(element('message', $view), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
						$attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onsubmit' => 'return submitContents(this)');
						echo form_open_multipart(current_full_url(), $attributes);
						?>
						<input type="hidden" name="<?php echo element('primary_key', $view); ?>"	value="<?php echo element(element('primary_key', $view), element('post', $view)); ?>" />
						

						<div class="file-area mt30">
						<span class="s-tit">썸네일</span>
						
						
							<?php
									if (element('use_upload', element('board', $view))) {
										$file_count = element('upload_file_count', element('board', $view));
										for ($i = 0; $i < $file_count; $i++) {
											$download_link = html_escape(element('download_link', element($i, element('file', $view))));
											$file_column = $download_link ? 'post_file_update[' . element('pfi_id', element($i, element('file', $view))) . ']' : 'post_file[' . $i . ']';
											$del_column = $download_link ? 'post_file_del[' . element('pfi_id', element($i, element('file', $view))) . ']' : '';
									?>
										<label for="choice0<?php echo $i+1; ?>" class="file-choice"><input type="file" name="<?php echo $file_column; ?>" id="choice0<?php echo $i+1; ?>" class="file">파일선택</label><span class="upload-name"></span>
										<?php if ($download_link) { ?>
												<a href="<?php echo $download_link; ?>"><?php echo html_escape(element('pfi_originname', element($i, element('file', $view)))); ?></a>
												&nbsp;
												<label for="<?php echo $del_column; ?>">
													<input type="checkbox" name="<?php echo $del_column; ?>" id="<?php echo $del_column; ?>" value="1" <?php echo set_checkbox($del_column, '1'); ?> /> <span class="chkimg"></span> 삭제
												</label>
										<?php } ?>
										<br/>
									<?php
										}
									}
							?>
						</div>
						<br/><small>목록에서 보여질 이미지 첨부 (본문 이미지는 별도 아래 본문 글쓰기창을 이용해 주세요)</small>

						<div class="mt20">
							<span class="s-tit">제목</span>
							<input type="text" class="news-tit" name="post_title" id="post_title" value="<?php echo set_value('post_title', element('post_title', element('post', $view))); ?>" placeholder="제목을 입력해주세요.">
						</div>

						<span class="s-tit">내용</span>
						<div class="write-area">
							<?php echo display_dhtml_editor('post_content', set_value('post_content', element('post_content', element('post', $view))), $classname = 'dhtmleditor', $is_dhtml_editor = element('use_dhtml', element('board', $view)), $editor_type = $this->cbconfig->item('post_editor_type')); ?>
						</div>


						<div class="table-bottom text-center mt20">
							<button type="button" class="btn btn-danger btn-lg btn-history-back">취소</button>
							<button type="submit" class="btn btn-success btn-lg">작성완료</button>
						</div>
						<?php echo form_close(); ?>

</div>


<?php echo element('footercontent', element('board', $view)); ?>


<script type="text/javascript">
// 글자수 제한
var char_min = parseInt(<?php echo (int) element('post_min_length', element('board', $view)); ?>); // 최소
var char_max = parseInt(<?php echo (int) element('post_max_length', element('board', $view)); ?>); // 최대

<?php if ( ! element('use_dhtml', element('board', $view)) AND (element('post_min_length', element('board', $view)) OR element('post_max_length', element('board', $view)))) { ?>

check_byte('post_content', 'char_count');
$(function() {
	$('#post_content').on('keyup', function() {
		check_byte('post_content', 'char_count');
	});
});
<?php } ?>

function submitContents(f) {
	if ($('#char_count') && false) {
		if (char_min > 0 || char_max > 0) {
			var cnt = parseInt(check_byte('post_content', 'char_count'));
			if (char_min > 0 && char_min > cnt) {
				alert('내용은 ' + char_min + '글자 이상 쓰셔야 합니다.');
				$('#post_content').focus();
				return false;
			} else if (char_max > 0 && char_max < cnt) {
				alert('내용은 ' + char_max + '글자 이하로 쓰셔야 합니다.');
				$('#post_content').focus();
				return false;
			}
		}
	}
	var title = '';
	var content = '';
	$.ajax({
		url: cb_url + '/postact/filter_spam_keyword',
		type: 'POST',
		data: {
			title: f.post_title.value,
			content: f.post_content.value,
			csrf_test_name : cb_csrf_hash
		},
		dataType: 'json',
		async: false,
		cache: false,
		success: function(data) {
			title = data.title;
			content = data.content;
		}
	});

	if (title) {
		alert('제목에 금지단어(\'' + title + '\')가 포함되어있습니다');
		f.post_title.focus();
		return false;
	}
	if (content) {
		alert('내용에 금지단어(\'' + content + '\')가 포함되어있습니다');
		f.post_content.focus();
		return false;
	}
}
</script>

<?php
if (element('is_post_name', element('post', $view))) {
	if ($this->cbconfig->item('use_recaptcha')) {
		$this->managelayout->add_js(base_url('assets/js/recaptcha.js'));
	} else {
		$this->managelayout->add_js(base_url('assets/js/captcha.js'));
	}
}
?>

<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#fwrite').validate({
		rules: {
			post_title: {required :true, minlength:2, maxlength:60},
			post_content : {<?php echo (element('use_dhtml', element('board', $view))) ? 'required_' . $this->cbconfig->item('post_editor_type') : 'required'; ?> : true }
		<?php if (element('is_post_name', element('post', $view))) { ?>
			, post_nickname: {required :true, minlength:2, maxlength:20}
			, post_email: {required :true, email:true}
		<?php } ?>
		<?php if ($this->member->is_member() === false) { ?>
			, post_password: {required :true, minlength:4, maxlength:100}
		<?php if ($this->cbconfig->item('use_recaptcha')) { ?>
			, recaptcha : {recaptchaKey:true}
		<?php } else { ?>
			, captcha_key : {required: true, captchaKey:true}
		<?php } ?>
		<?php } ?>
		<?php if (element('use_category', element('board', $view))) { ?>
			, post_category : {required: true}
		<?php } ?>
		},
		messages: {
			recaptcha: '',
			captcha_key: '자동등록방지용 코드가 올바르지 않습니다.'
		}
	});
});

<?php if (element('has_tempsave', $view)) { ?>get_tempsave(cb_board); <?php } ?>
<?php if ( ! element('post_id', element('post', $view))) { ?>window.onbeforeunload = function () { auto_tempsave(cb_board); } <?php } ?>
//]]>
</script>
