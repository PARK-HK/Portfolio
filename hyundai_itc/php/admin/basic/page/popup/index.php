<div class="a-content a01">
                <h2>팝업 관리<span>총 <?php echo element('total_rows', element('data', $view), 0); ?>건</span></h2>
                <div class="ban-list mt60">
                    <div class="btn-area position">
                        <button class="btn btn-gray btn-102 btn-list-delete btn-list-selected disabled" data-list-delete-url = "<?php echo element('list_delete_url', $view); ?>">선택삭제</button>
                        <button class="btn btn-blue btn-102" onclick="location.href='<?php echo element('write_url', $view); ?>';">팝업생성</button>
                    </div>
					<form name="fsearch" id="fsearch" action="<?php echo current_full_url(); ?>" method="get">
						<div class="box-search">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<select class="form-control" name="sfield" >
										<?php echo element('search_option', $view); ?>
									</select>
									<div class="input-group">
										<input type="text" class="form-control" name="skeyword" value="<?php echo html_escape(element('skeyword', $view)); ?>" placeholder="검색어 입력" />
										<span class="input-group-btn">
											<button class="btn btn-blue btn-sm" name="search_submit" type="submit">검색</button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</form>
					<?php
					echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
					$attributes = array('class' => 'form-inline', 'name' => 'flist', 'id' => 'flist');
					echo form_open(current_full_url(), $attributes);
					?>
                    <table>
                        <colgroup>
                            <col width="10%" />
                            <col width="10%" />
                            <col width="25%" />
                            <col width="20%" />
                            <col width="25%" />
                            <col width="10%" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th>선택</th>
                                <th>번호</th>
                                <th>팝업제목</th>
                                <th>위치/크기</th>
                                <th>게시기간</th>
                                <th>관리</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
						if (element('list', element('data', $view))) {
							foreach (element('list', element('data', $view)) as $result) {
						?>
                            <tr>
                                <th style="text-align:center;"><label for="p0<?php echo element(element('primary_key', $view), $result); ?>"><input type="checkbox" name="chk[]" class="list-chkbox" value="<?php echo element(element('primary_key', $view), $result); ?>" id="p0<?php echo element(element('primary_key', $view), $result); ?>"/><span class="chkimg"></span></label></th>
                                <td><?php echo number_format(element('num', $result)); ?></td>
                                <td><span class="pop-name"><?php echo html_escape(element('pop_title', $result)); ?></span></td>
                                <td>
									Left :<?php echo element('pop_left', $result); ?>px, Top: <?php echo element('pop_top', $result); ?>px
									<br/>
									너비 : <?php echo element('pop_width', $result); ?>px, 높이 : <?php echo element('pop_height', $result); ?>px
                                </td>
                                <td><span class="pop-date"><?php echo element('pop_start_date', $result); ?> ~ <?php echo element('pop_end_date', $result); ?></span></td>
                                <td><a href="<?php echo admin_url($this->pagedir); ?>/write/<?php echo element(element('primary_key', $view), $result); ?>?<?php echo $this->input->server('QUERY_STRING', null, ''); ?>" class="btn btn-sky">수정</a></td>
                            </tr>
						<?php
							}
						}
						if ( ! element('list', element('data', $view))) {
						?>
							<tr>
								<td colspan="10" class="nopost">자료가 없습니다</td>
							</tr>
						<?php
						}
						?>
                        </tbody>
                    </table>
					<?php echo form_close(); ?>
					<?php echo element('paging', $view); ?>
					
                </div>
				
</div>

