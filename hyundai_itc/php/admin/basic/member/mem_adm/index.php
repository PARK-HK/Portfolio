<div class="a-content a04">
                <h2>전체 관리자 목록<span>총 <?php echo element('total_rows', element('data', $view), 0); ?>건</span></h2>
                <div class="ban-register mt60">
                    
					<?php
					echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
					$attributes = array('class' => 'form-inline', 'name' => 'flist', 'id' => 'flist');
					echo form_open(current_full_url(), $attributes);
					?>
					<div class="btn-area position">
                        <button type="button"  class="btn btn-darkgray btn-102 btn-list-delete btn-list-selected disabled" data-list-delete-url = "<?php echo element('list_delete_url', $view); ?>">선택삭제</button>
                        <button type="button" class="btn btn-blue btn-102" onclick="javascript:write_btn();">계정등록</button>
                    </div>
                    <table class="mt40">
                        <colgroup>
                            <col width="10%" />
                            <col width="10%" />
                            <col width="20%" />
                            <col width="15%" />
                            <col width="35%" />
                            <col width="10%" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th>선택</th>
                                <th>번호</th>
                                <th>아이디</th>
                                <th>실명 (닉네임)</th>
                                <th>권한</th>
                                <th>관리</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
							if (element('list', element('data', $view))) {
								foreach (element('list', element('data', $view)) as $result) {
							?>
                            <tr>
                                <th style="text-align:center;">
									<?php
									if(element('mem_userid', $result) <> "admin"){
									?>
									<label for="manage0<?php echo element(element('primary_key', $view), $result); ?>">
										<input type="checkbox" name="chk[]" class="list-chkbox" id="manage0<?php echo element(element('primary_key', $view), $result); ?>" value="<?php echo element(element('primary_key', $view), $result); ?>" />
									<span class="chkimg"></span></label>
									<?php }?>
								</th>
                                <td><?php echo number_format(element('num', $result)); ?></td>
                                <td><?php echo html_escape(element('mem_userid', $result)); ?></td>
                                <td><?php echo html_escape(element('mem_username', $result)); ?> (<?php echo element('display_name', $result); ?>)</td>
                                <td>
									<?php if ($this->cbconfig->item('use_sociallogin_facebook') && element('facebook_id', element('social', $result))) { ?>
										<a href="javascript:;" onClick="social_open('facebook', '<?php echo element('mem_id', $result); ?>');"><img src="<?php echo base_url('assets/images/social_facebook.png'); ?>" width="15" height="15" alt="페이스북 로그인" title="페이스북 로그인" /></a>
									<?php } ?>
									<?php if ($this->cbconfig->item('use_sociallogin_twitter') && element('twitter_id', element('social', $result))) { ?>
										<a href="javascript:;" onClick="social_open('twitter', '<?php echo element('mem_id', $result); ?>');"><img src="<?php echo base_url('assets/images/social_twitter.png'); ?>" width="15" height="15" alt="트위터 로그인" title="트위터 로그인" /></a>
									<?php } ?>
									<?php if ($this->cbconfig->item('use_sociallogin_google') && element('google_id', element('social', $result))) { ?>
										<a href="javascript:;" onClick="social_open('google', '<?php echo element('mem_id', $result); ?>');"><img src="<?php echo base_url('assets/images/social_google.png'); ?>" width="15" height="15" alt="구글 로그인" title="구글 로그인" /></a>
									<?php } ?>
									<?php if ($this->cbconfig->item('use_sociallogin_naver') && element('naver_id', element('social', $result))) { ?>
										<a href="javascript:;" onClick="social_open('naver', '<?php echo element('mem_id', $result); ?>');"><img src="<?php echo base_url('assets/images/social_naver.png'); ?>" width="15" height="15" alt="네이버 로그인" title="네이버 로그인" /></a>
									<?php } ?>
									<?php if ($this->cbconfig->item('use_sociallogin_kakao') && element('kakao_id', element('social', $result))) { ?>
										<a href="javascript:;" onClick="social_open('kakao', '<?php echo element('mem_id', $result); ?>');"><img src="<?php echo base_url('assets/images/social_kakao.png'); ?>" width="15" height="15" alt="카카오 로그인" title="카카오 로그인" /></a>
									<?php } ?>
                                </td>
                                <td><button type="button" class="btn btn-sky" onclick="javascript:mem_detail('<?php echo element(element('primary_key', $view), $result); ?>');">상세보기</button></td>
                            </tr>


					<?php
						}
					}
					if ( ! element('list', element('data', $view))) {
					?>
						<tr>
							<td colspan="17" class="nopost">자료가 없습니다</td>
						</tr>
					<?php
					}
					?>
                        </tbody>
                    </table>
					<?php echo form_close(); ?>
					<?php echo element('paging', element('list', $view)); ?>
					
                    <form id="form" name="fsearch" id="fsearch" class="search-box" action="<?php echo current_full_url(); ?>"  method="get">
						<div class="row">
							<div class="col-md-6">
								<select class="form-control" name="sfield" style="height:40px;padding:0px 5px;">
									<option value="mem_userid">회원아이디</option>
									<option value="mem_username">실명</option>
									<option value="mem_nickname">닉네임</option>
								</select>
							</div>
							<div class="col-md-12">
							<input id="skeyword" name="skeyword" class="input px150" onkeyup="enterkey();return false;" placeholder="검색어를 입력하세요." type="text" value="<?php echo html_escape(element('skeyword', $view)); ?>">
							<button class="btn-primary" type="button" name="search_submit" type="submit"><span class="text_blind">검색</span></button>
							</div>
						</div>
                    </form>
                </div>

            </div>



<script type="text/javascript">
//<![CDATA[
function social_open(stype, mem_id) {
	var pop_url = cb_admin_url + '/member/members/socialinfo/' + stype + '/' + mem_id;
	window.open(pop_url, 'win_socialinfo', 'left=100,top=100,width=730,height=500,scrollbars=1');
	return false;
}

$(document).on('click', '#export_to_excel', function(){
	exporturl = '<?php echo admin_url($this->pagedir . '/excel' . '?' . $this->input->server('QUERY_STRING', null, '')); ?>';
	document.location.href = exporturl;
})
function write_btn(){
	document.location.href="<?php echo element('write_url', $view); ?>";
}
function mem_detail(muuid){
	document.location.href="<?php echo admin_url($this->pagedir); ?>/write/"+muuid+"?<?php echo $this->input->server('QUERY_STRING', null, ''); ?>";
}

//]]>
</script>
