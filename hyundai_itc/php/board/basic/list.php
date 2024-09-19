<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>

<?php echo element('headercontent', element('board', element('list', $view))); ?>

<?php
$this->load->model('Post_file_model');
?>
<!--내용시작 -->
<?php

$view_file=strtolower($view['board_key']).".php";
include ($view_file);
?>
        