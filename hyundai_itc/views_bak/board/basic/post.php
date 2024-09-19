<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<?php	$this->managelayout->add_js(base_url('plugin/zeroclipboard/ZeroClipboard.js')); ?>

<?php
if (element('syntax_highlighter', element('board', $view)) OR element('comment_syntax_highlighter', element('board', $view))) {
	$this->managelayout->add_css(base_url('assets/js/syntaxhighlighter/styles/shCore.css'));
	$this->managelayout->add_css(base_url('assets/js/syntaxhighlighter/styles/shThemeMidnight.css'));
	$this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shCore.js'));
	$this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushJScript.js'));
	$this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushPhp.js'));
	$this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushCss.js'));
	$this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushXml.js'));
?>
	<script type="text/javascript">
	SyntaxHighlighter.config.clipboardSwf = '<?php echo base_url('assets/js/syntaxhighlighter/scripts/clipboard.swf'); ?>';
	var is_SyntaxHighlighter = true;
	SyntaxHighlighter.all();
	</script>
<?php } ?>

<?php echo element('headercontent', element('board', $view)); ?>

<!--내용시작 -->
        <div class="sub sub05-1">
			<?php echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>'); ?>
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
                        <li><a href="">with ITC</a></li>
                        <li class="on"><a href="">News</a></li>
                    </ul>
                </div>
                <div class="layout">
                    <div class="news-view">
                        <h3><?php echo html_escape(element('post_title', element('post', $view))); ?></h3>
                        <span class="current-date"><?php echo element('display_datetime', element('post', $view)); ?></span>
                        <p class="detail">
                            <?php echo element('content', element('post', $view)); ?>
                        </p>
                        <ul class="news-arrow">
                            <li>
								<?php if (element('prev_post', $view)) { ?>
									<a href="<?php echo element('url', element('prev_post', $view)); ?>">
										<span class="guide">PREV</span>
										<p>이전글 제목</p>
										<span class="s-date">2022.08.01</span>
									</a>
								<?php }else{ ?>
									<a href="javascript:;">
										<span class="guide">PREV</span>
										<p class="no-txt">이전글이 없습니다.</p>
										<span class="s-date"></span>
									</a>  
								<?php } ?>
                            </li>
                            <li>
								<?php if (element('next_post', $view)) { ?>
									<a href="<?php echo element('url', element('next_post', $view)); ?>">
										<span class="guide">NEXT</span>
										<p>다음글 제목</p>
										<span class="s-date">2022.08.01</span>
									</a>
								<?php }else{ ?>
									<a href="javascript:;">
										<span class="guide">NEXT</span>
										<p class="no-txt">다음글이 없습니다.</p>
										<span class="s-date"></span>
									</a>  
								<?php } ?>
                            </li>
                        </ul>
                        <a href="<?php echo element('list_url', $view); ?>" class="go-list">목록</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 내용끝 -->


