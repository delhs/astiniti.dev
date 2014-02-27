<?php /* Smarty version 2.6.27, created on 2014-02-17 21:29:31
         compiled from itemPage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'itemPage.tpl', 7, false),)), $this); ?>
<?php echo '<div class="catalog_item_page"><div class="topblock"></div><h1 class="item_title">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</h1><div class="leftblock"><div class="photo">'; ?><?php if (isset ( $this->_tpl_vars['item']['full_logo_src'] )): ?><?php echo '<img alt="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '" title="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '" width="400" src="'; ?><?php echo $this->_tpl_vars['item']['full_logo_src']; ?><?php echo '"/>'; ?><?php else: ?><?php echo '<div class="no_photo"></div>'; ?><?php endif; ?><?php echo '</div></div><div class="rightblock">'; ?><?php if (isset ( $this->_tpl_vars['itemImages'] ) && isset ( $this->_tpl_vars['item']['full_logo_src'] )): ?><?php echo '<ul class="otherimages">'; ?><?php $_from = $this->_tpl_vars['itemImages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['img']):
?><?php echo '<li><a href="#"><img src="'; ?><?php echo $this->_tpl_vars['img']['filename']; ?><?php echo '" /></a></li>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['attrArray'] )): ?><?php echo '<div class="attributes"><h2>Характеристики:</h2><ul>'; ?><?php $_from = $this->_tpl_vars['attrArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attr']):
?><?php echo '<li>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['attr']['attribute_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo ':&nbsp;<strong>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['attr']['attribute_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</strong>'; ?><?php if ($this->_tpl_vars['attr']['attribute_units'] != ''): ?><?php echo '<b>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['attr']['attribute_units'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</b>'; ?><?php endif; ?><?php echo '</li>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul></div>'; ?><?php endif; ?><?php echo '<div class="clear"></div></div><div class="tabs"><div class="tabcontrols">'; ?><?php if ($this->_tpl_vars['item']['item_desc'] != ''): ?><?php echo '<a href="#" class="ctrl"><h3>Описание</h3></a>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['catalog']['show_comments'] == '1'): ?><?php echo '<a href="#" class="ctrl"><h3>Комментарии</h3></a>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['analogsArray'] )): ?><?php echo '<a href="#" class="ctrl"><h3>Похожие товары</h3></a>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['accompanyingArray'] )): ?><?php echo '<a href="#" class="ctrl"><h3>Сопутствующие товары</h3></a>'; ?><?php endif; ?><?php echo '</div><div class="tabcontents">'; ?><?php if ($this->_tpl_vars['item']['item_desc'] != ''): ?><?php echo '<div class="tab"><div class="desc">'; ?><?php echo $this->_tpl_vars['item']['item_desc']; ?><?php echo '</div><button type="button" name="buy" class="buy" data-id="'; ?><?php echo $this->_tpl_vars['item']['id']; ?><?php echo '">Купить</button></div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['catalog']['show_comments'] == '1'): ?><?php echo '<div class="tab"><div class="comments">'; ?><?php if (isset ( $this->_tpl_vars['itemCommentsArray'] )): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "item_comments.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo '<div class="editorblock"><a name="editor_block"></a><form name="comment" item-id="'; ?><?php echo $this->_tpl_vars['item']['id']; ?><?php echo '"><label>Ваше имя:</label><div class="inputwrapper"><input type="text" name="username" maxlength="50"/></div><div class="clear"></div><div class="reply_to"><span>Ответить: </span><apan class="reply_list"></span></div><textarea class="wisibb_editor"></textarea><textarea name="text" class="wisibb_editor_pseudo"></textarea><label>Защита от спама:</label><img src="/captcha.php?to=catalogComments&type=rnd" /><input type="text" name="captcha" maxlength="5"/></form></div><div class="clear"></div><button type="button" name="send_comment">Отправить</button><div class="clear"></div></div></div>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['analogsArray'] )): ?><?php echo '<div class="tab"><ul>'; ?><?php $_from = $this->_tpl_vars['analogsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['analog']):
?><?php echo '<li><a href="'; ?><?php echo $this->_tpl_vars['analog']['href']; ?><?php echo '" title="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['analog']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '" >'; ?><?php if ($this->_tpl_vars['analog']['item_logo'] != ''): ?><?php echo '<img src="'; ?><?php echo $this->_tpl_vars['analog']['item_logo']; ?><?php echo '" alt="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['analog']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '"/>'; ?><?php else: ?><?php echo '<div class="no_photo"><i></i></div>'; ?><?php endif; ?><?php echo '</a></li>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul></div>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['accompanyingArray'] )): ?><?php echo '<div class="tab"><ul>'; ?><?php $_from = $this->_tpl_vars['accompanyingArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ccompanying']):
?><?php echo '<li><a href="'; ?><?php echo $this->_tpl_vars['ccompanying']['href']; ?><?php echo '" title="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ccompanying']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '" >'; ?><?php if ($this->_tpl_vars['ccompanying']['item_logo'] != ''): ?><?php echo '<img src="'; ?><?php echo $this->_tpl_vars['ccompanying']['item_logo']; ?><?php echo '" alt="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ccompanying']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '"/>'; ?><?php else: ?><?php echo '<div class="no_photo"><i></i></div>'; ?><?php endif; ?><?php echo '</a></li>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul></div>'; ?><?php endif; ?><?php echo '</div></div></div><div class="clear"></div><script type="text/javascript">'; ?><?php echo '
	$(document).ready(function(){
		plug_catalog.itemPage( '; ?><?php echo ''; ?><?php echo $this->_tpl_vars['settings']; ?><?php echo ''; ?><?php echo ' );
	});
	'; ?><?php echo '</script>'; ?>