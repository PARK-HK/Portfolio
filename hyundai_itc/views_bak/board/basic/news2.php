<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="sub sub05-1">
            <div class="sub-top" data-aos="fade-down">
                <h2 data-aos="zoom-in">홍보 자료실</h2>
                <ul data-aos="zoom-in">
                    <li><a href="">H</a></li>
                    <li><a href="">홍보센터</a></li>
                    <li><a href="">정보 자료실</a></li>
                </ul>
            </div>
            <div class="sub-content" data-aos="fade-up">
				<div class="nav">
                    <ul>
                        <li><a href="/ITC/News1">with ITC</a></li>
						<li class="on"><a href="javascript:;">News</a></li>
                    </ul>
                </div>
                <div class="layout">
                    <div class="list-top">
                        <p class="t-ver">
                            Total <strong><?=$view['list']['total_rownum']?></strong> / <?=$view['list']['num_pages']?> Page
                        </p>
                        <form action="<?php echo board_url(element('brd_key', element('board', element('list', $view)))); ?>" onSubmit="return postSearch(this);" class="search-box">
							<input type="hidden" name="sfield" value="post_both"/>
                            <input id="searchKeyword" name="skeyword" class="input px150" onkeyup="enterkey();return false;" placeholder="검색어를 입력하세요." type="text" value="<?php echo html_escape($this->input->get('skeyword')); ?>">
                            <button class="btn-primary" type="submit"><span class="text_blind">검색</span></button>
                        </form>
                    </div>
                    <ul class="newslist">
							<?php
							if (element('list', element('data', element('list', $view)))) {
								foreach (element('list', element('data', element('list', $view))) as $result) {									
							?>
							<li>
								<a href="<?php echo element('post_url', $result); ?>">
									<?php if (element('post_file', $result)) { ?>
										<img src="/<?php echo thumbnail('post',$result['fuid'][0]['pfi_filename'],366,210); ?>" />
									<?php }else{ ?>
										<img src="../img/sub05/sub05-2-news2.png" alt="">
									<?php }?>
									<div class="txt-area">
										<span class="tit"><?php echo html_escape(element('title', $result)); ?></span>
										<p><?php echo element('content_yo', $result); ?></p>
										<span class="date"><?php echo element('display_datetime', $result,'Y-m-d'); ?></span>
									</div>
								</a>
							</li>
							<?php
								}
							}
							if ( ! element('notice_list', element('list', $view)) && ! element('list', element('data', element('list', $view)))) {
							?>
								<li class="tbody">
									<div style="width:100%;text-align:center;">게시물이 없습니다</div>
								</li>
							<?php } ?>
                     </ul>
					<?php echo element('paging', element('list', $view)); ?>
                </div>
            </div>
        </div>
        <!-- 내용끝 -->

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

<?php echo element('footercontent', element('board', element('list', $view))); ?>

<?php
if (element('highlight_keyword', element('list', $view))) {
	$this->managelayout->add_js(base_url('assets/js/jquery.highlight.js')); ?>
<script type="text/javascript">
//<![CDATA[
$('#fboardlist').highlight([<?php echo element('highlight_keyword', element('list', $view));?>]);
//]]>
</script>
<?php } ?>
