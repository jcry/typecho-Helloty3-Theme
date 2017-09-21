<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowSearch' => _t('显示搜索栏'),
    'ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowSearch', 'ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());

    $decBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('decBlock', 
    array('ShowDec' => _t('显示站点描述(顶部公告)'),'ShowKeywords' => _t('显示站点关键词(标签)')),
    array('ShowDec','ShowKeywords'), _t('站点外观'));
    $form->addInput($decBlock->multiMode());

    $footerText = new Typecho_Widget_Helper_Form_Element_Text('footerText',NULL,NULL, _t('页脚声明'),_t('请在这里填写入页脚声明文字或 HTML 代码，亦可以放置 站长统计JS 等'));
    $form->addInput($footerText);

}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

