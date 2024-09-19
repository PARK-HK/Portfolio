<!-- [e]: lnb -->
            <div class="a-content a04">
                <h2>상세 관리자 정보</h2>
                <div class="ban-register mt60">
					<?php
					echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
					echo show_alert_message(element('message', $view), '<div class="alert alert-warning">', '</div>');
					$attributes = array('class' => 'form-horizontal', 'name' => 'fadminwrite', 'id' => 'fadminwrite');
					echo form_open_multipart(current_full_url(), $attributes);
					?>
					<input type="hidden" name="<?php echo element('primary_key', $view); ?>" value="<?php echo element(element('primary_key', $view), element('data', $view)); ?>" />
					<input type="hidden" name="mem_is_admin" value="1"/>
					<input type="hidden" name="mem_level" value="100"/>
					
                    <div class="btn-area position">
                        <button type="button" class="btn btn-darkgray btn-102 btn-history-back">취소</button>
                        <button type="submit" class="btn btn-blue btn-102">등록</button>
                    </div>
					
                    <table class="mt40 manage-infor">
                        <colgroup>
                            <col width="30%" />
                            <col width="70%" />
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>상태</th>
                                <td>
                                    <div><label for="active-on"><input type="radio" name="mem_denied" id="active-on" value="0" <?php echo element('mem_denied', element('data', $view))=="0" ? "checked" : ""; ?>><span class="rdimg"></span>활성화</label></div>
                                    <div><label for="active-off"><input type="radio" name="mem_denied" id="active-off" value="1" <?php echo element('mem_denied', element('data', $view))<>"0" ? "checked" : ""; ?>><span class="rdimg"></span>비활성화</label></div>
                                </td>
                            </tr>
                            <tr>
                                <th>아이디</th>
                                <td>
									<input type="text" name="mem_userid" value="<?php echo set_value('mem_userid', element('mem_userid', element('data', $view))); ?>">
								</td>
                            </tr>
                            <tr>
                                <th>이름</th>
                                <td>
									<input type="text" name="mem_username" value="<?php echo set_value('mem_username', element('mem_username', element('data', $view))); ?>">
								</td>
                            </tr>
							<tr>
                                <th>닉네임</th>
                                <td>
									<input type="text" name="mem_nickname" value="<?php echo set_value('mem_nickname', element('mem_nickname', element('data', $view))); ?>">
								</td>
                            </tr>
                            <tr>
                                <th>비밀번호</th>
                                <td>
									<input type="password" name="mem_password" value="" >
								</td>
                            </tr>
                        </tbody>
                    </table>
                    <span class="s-tit mt50">권한</span>
					<?php
					if(element('mem_userid', element('data', $view)) <> "admin"){
					?>
                    <table class="mt30 manage-infor">
                        <colgroup>
                            <col width="30%" />
                            <col width="70%" />
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>메인페이지 관리</th>
                                <td>
                                    <div><label for="mainok"><input type="radio" id="mainok" name="auth_1" value="1" <?php echo element('auth_1', element('data', $view))=="1" ? "checked" : ""; ?>><span class="rdimg"></span>허용</label></div>
                                    <div><label for="mainno"><input type="radio" id="mainno" name="auth_1" value="0" <?php echo element('auth_1', element('data', $view))<>"1" ? "checked" : ""; ?>><span class="rdimg"></span>허용안함</label></div>
                                </td>
                            </tr>
                            <tr>
                                <th>투자정보 관리</th>
                                <td>
                                    <div><label for="isok"><input type="radio" id="isok" name="auth_2" value="1" <?php echo element('auth_2', element('data', $view))=="1" ? "checked" : ""; ?>><span class="rdimg"></span>허용</label></div>
                                    <div><label for="isno"><input type="radio" id="isno" name="auth_2" value="0" <?php echo element('auth_2', element('data', $view))<>"1" ? "checked" : ""; ?>><span class="rdimg"></span>허용안함</label></div>
                                </td>
                            </tr>
                            <tr>
                                <th>홍보센터 관리</th>
                                <td>
                                    <div><label for="cfok"><input type="radio" id="cfok" name="auth_3" value="1" <?php echo element('auth_3', element('data', $view))=="1" ? "checked" : ""; ?>><span class="rdimg"></span>허용</label></div>
                                    <div><label for="cfno"><input type="radio" id="cfno" name="auth_3" value="0" <?php echo element('auth_3', element('data', $view))<>"1" ? "checked" : ""; ?>><span class="rdimg"></span>허용안함</label></div>
                                </td>
                            </tr>
                            <tr>
                                <th>권한 관리</th>
                                <td>
                                    <div><label for="mgok"><input type="radio" id="mgok" name="auth_4" value="1" <?php echo element('auth_4', element('data', $view))=="1" ? "checked" : ""; ?>><span class="rdimg"></span>허용</label></div>
                                    <div><label for="mgno"><input type="radio" id="mgno" name="auth_4" value="0" <?php echo element('auth_4', element('data', $view))<>"1" ? "checked" : ""; ?>><span class="rdimg"></span>허용안함</label></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
					<?php }else{ ?>
						<div class="mt30 manage-infor">admin 계정은 전체 권한만 가능</div>
						<input type="hidden" name="auth_1" value="1"/>
						<input type="hidden" name="auth_2" value="1"/>
						<input type="hidden" name="auth_3" value="1"/>
						<input type="hidden" name="auth_4" value="1"/>
					<?php }?>
					<?php echo form_close(); ?>
                </div>

        </div>

		

<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#fadminwrite').validate({
		rules: {
			mem_userid: { required: true, minlength:3, maxlength:20 },
			mem_username: {required :true,minlength:2, maxlength:20 },
			mem_nickname: {required :true, minlength:2, maxlength:20 },
			mem_password: {minlength :4 }
		}
	});
});
//]]>
</script>
