<div class="a-content a01">
                <h2>팝업 등록</h2>
                <div class="ban-list mt60">
				<?php
				echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
				$attributes = array('class' => 'form-horizontal', 'name' => 'fadminwrite', 'id' => 'fadminwrite');
				echo form_open(current_full_url(), $attributes);
				?>
				<input type="hidden" name="<?php echo element('primary_key', $view); ?>"	value="<?php echo element(element('primary_key', $view), element('data', $view)); ?>" />
				<input type="hidden" name="pop_is_center" value="0"/><input type="hidden" name="pop_page" value="0"/><input type="hidden" name="pop_device" value="all"/><input type="hidden" name="pop_activated" value="1"/>

				
                    <div class="btn-area position">
                        <button type="button" class="btn btn-gray btn-102 btn-history-back">취소</button>
                        <button type="submit" class="btn btn-blue btn-102">등록</button>
                    </div>
                    <!-- <p class="notice">※ PC 배너 권장 사이즈 : 1920 X 980 / MOBILE 배너 권장 사이즈 : 360 X 640</p> -->
					<div class="pop-where">
                        <div class="s-tit">팝업 크기</div>
                        <span>
                            가로 : <input type="text" name="pop_width" value="<?php echo set_value('pop_width', element('pop_width', element('data', $view))); ?>"> px
                        </span>
                        <span>
                            세로 : <input type="text" name="pop_height" value="<?php echo set_value('pop_height', element('pop_height', element('data', $view))); ?>"> px
                        </span>
                    </div>
                    <div class="pop-tit">
                        <div class="s-tit">관리 타이틀</div>
                        <input type="text" name="pop_title" value="<?php echo set_value('pop_title', element('pop_title', element('data', $view))); ?>" placeholder="관리 타이틀을 입력해주세요." class="write-input">
                        <table>
                            <colgroup>
                                <col width="95%" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>팝업 내용 (텍스트 및 이미지를 크기에 맞게 작성하여 주세요)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
										<?php echo display_dhtml_editor('pop_content', set_value('pop_content', element('pop_content', element('data', $view))), $classname = 'form-control dhtmleditor', $is_dhtml_editor = $this->cbconfig->item('use_popup_dhtml'), $editor_type = $this->cbconfig->item('popup_editor_type')); ?>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pop-close">
                        <div class="s-tit">닫기 영역 (시간 설정)</div>
                        <input type="number" class="form-control" name="pop_disable_hours" value="<?php echo set_value('pop_disable_hours', element('pop_disable_hours', element('data', $view))); ?>" /> 시간, 닫기 버튼 클릭시 쿠키적용시간, 해당 시간동안 팝업이 더이상 보이지 않습니다
                    </div>
                    <div class="pop-where">
                        <div class="s-tit">팝업 위치</div>
                        <span>
                            좌측위치 : <input type="text" name="pop_left" value="<?php echo set_value('pop_left', element('pop_left', element('data', $view))); ?>"> px
                        </span>
                        <span>
                            상단위치 : <input type="text" name="pop_top" value="<?php echo set_value('pop_top', element('pop_top', element('data', $view))); ?>"> px
                        </span>
                    </div>
                    <div class="pop-show">
                        <div class="s-tit">팝업 게시기간</div>
                        <span>
                            <input type="text" class="datepicker" name="pop_start_date" value="<?php echo set_value('pop_start_date', element('pop_start_date', element('data', $view))); ?>">
                            <a href="javascript:;"><i><img src="/img/admin/ico-calendar.svg" alt=""></i></a>
                        </span>
                        ~
                        <span>
                            <input type="text" class="datepicker" name="pop_end_date" value="<?php echo set_value('pop_end_date', element('pop_end_date', element('data', $view))); ?>">
                            <a href="javascript:;"><i><img src="/img/admin/ico-calendar.svg" alt=""></i></a>
                        </span>
                    </div>
                </div>
				<?php echo form_close(); ?>
            </div>
        </div>
        <!-- 내용끝 -->


<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#fadminwrite').validate({
		rules: {
			pop_title: 'required',
			pop_start_date: { alpha_dash:true, minlength:10, maxlength:10 },
			pop_end_date: { alpha_dash:true, minlength:10, maxlength:10 },
			pop_is_center: { required:true, number:true },
			pop_left: { required :'#pop_is_center_1:checked', number:true },
			pop_top: { required:true, number:true },
			pop_width: { required:true, number:true },
			pop_height: { required:true, number:true },
			pop_device: 'required',
			pop_page: 'required',
			pop_disable_hours: { required:true, number:true },
			pop_activated: 'required',
			pop_content : {<?php echo ($this->cbconfig->item('use_popup_dhtml')) ? 'required_' . $this->cbconfig->item('popup_editor_type') : 'required'; ?> : true }
		}
	});
});
//]]>
</script>
