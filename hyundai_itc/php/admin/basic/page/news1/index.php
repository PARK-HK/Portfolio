<?php
$this->load->model('Post_file_model');
?>
<div class="a-content a03">
                <h2>with ITC<span>총 <?=$view['list']['total_rownum']?>건</span></h2>                
                <div class="ban-list">
                    <h3 class="mt70">전체 with ITC 리스트</h3>
                    <div class="btn-area">
                        <button type="button" class="btn btn-outline btn-red btn-102" onClick="post_multi_action('multi_delete', '0', '선택하신 글들을 완전삭제하시겠습니까?');">선택삭제</button> 
						<button class="btn btn-blue btn-102" onclick="document.location.href='./news1/write'">등록</button>
                    </div>
					<?php
						$attributes = array('name' => 'fboardlist', 'id' => 'fboardlist');
						echo form_open('', $attributes);
					?>
                    <table class="mt40">
                        <colgroup>
                            <col width="10%" />
                            <col width="10%" />
                            <col width="35%" />
                            <col width="15%" />
                            <col width="20%" />
                            <col width="10%" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th>선택</th>
                                <th>번호</th>
                                <th>제목</th>
                                <th>작성일</th>
                                <th>첨부파일</th>
                                <th>관리</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
							if (element('list', element('data', element('list', $view)))) {
								foreach (element('list', element('data', element('list', $view))) as $result) {
									//var_dump($result);
									//echo element('post_id', $view);
							?>
							<tr>
                                <th style="text-align:center;"><label for="e0<?php echo element('post_id', $result); ?>"><input type="checkbox" name="chk_post_id[]" id="e0<?php echo element('post_id', $result); ?>" value="<?php echo element('post_id', $result); ?>"><span class="chkimg"></span></label></th>
                                <td><?php echo element('num', $result); ?></td>
                                <td><?php echo html_escape(element('title', $result)); ?></td>
                                <td><?php echo element('display_datetime', $result,'Y-m-d'); ?></td>
                                <td>
									<?php if (element('post_file', $result) && !empty($result['fuid'][1]['pfi_id'])) { ?>
									<a href="javascript:file_download('<?php echo base_url('/postact/download/'.$result['fuid'][1]['pfi_id']); ?>')" download class="down"><img src="../img/admin/ico-download.svg" alt="">다운로드</a>
									<?php }?>
                                </td>
                                <td><button type="button" class="btn btn-blue" onclick="document.location.href='./News1/modify/<?php echo element('post_id', $result); ?>'">수정</button></td>
                            </tr>
							<?php
								}
							}
							if ( ! element('notice_list', element('list', $view)) && ! element('list', element('data', element('list', $view)))) {
							?>
								<tr>
									<td colspan="6">게시물이 없습니다</td>
								</tr>
							<?php } ?>
                            
                        </tbody>
                    </table>
					<?php echo form_close(); ?>
                    <?php echo element('paging', element('list', $view)); ?>
                </div>
            </div>
		<script type="text/javascript">
		//<![CDATA[
		function postSearch(f) {
			var skeyword = f.skeyword.value.replace(/(^\s*)|(\s*$)/g,'');
			if (skeyword.length < 2) {
				alert('2글자 이상으로 검색해 주세요');
				f.skeyword.focus();
				return false;
			}
			return true;
		}
		function file_download(link) {
				document.location.href = link;
		}
		//]]>
		</script>