<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<style>
            body,html{height: 100%;}
        </style>
<div class="adminsub admin-login">
            <div class="logo-img">
                <div class="in">
                    <h1><img src="../img/common/logo.svg" alt=""></h1>
                    <p class="txt1">HYUNDAI ITC <span>Admin</span></p>
                    <p class="txt2">Hyundai Innovative Technologies for our Colleague</p>
                </div>
            </div>
			<div class="login-area">
                <div class="in">
					<?php
					echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
					echo show_alert_message(element('message', $view), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
					echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
					$attributes = array('class' => 'form-horizontal', 'name' => 'flogin', 'id' => 'flogin');
					echo form_open(current_full_url(), $attributes);
					?>
                    <input type="text" name="mem_userid" placeholder="아이디" accesskey="L">
                    <input type="password" name="mem_password" placeholder="비밀번호">
                    <div class="keep-chk">
                        <label for="keep">
                            <input type="checkbox" id="keep">
                            <span class="chkimg"></span>
                            아이디저장
                        </label>
                    </div>
                    <button type="submit" class="btn_norm mnp">로그인</button>
					<?php echo form_close(); ?>
                </div>
			</div>
        </div>

<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#flogin').validate({
		rules: {
			mem_userid : { required:true, minlength:3 },
			mem_password : { required:true, minlength:4 }
		}
	});
});
$(document).on('change', "input:checkbox[name='autologin']", function() {
	if (this.checked) {
		$('.autologinalert').show(300);
	} else {
		$('.autologinalert').hide(300);
	}
});
//]]>
</script>
