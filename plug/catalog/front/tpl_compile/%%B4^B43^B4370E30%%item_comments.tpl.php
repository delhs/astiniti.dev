<?php /* Smarty version 2.6.27, created on 2014-02-19 14:07:06
         compiled from item_comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'item_comments.tpl', 14, false),)), $this); ?>
<?php echo '<ul class="comments_list">'; ?><?php $_from = $this->_tpl_vars['itemCommentsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['comment']['hide'] == '0'): ?><?php echo '<li><div class="comment"><div class="comment_inner'; ?><?php if ($this->_tpl_vars['comment']['remove'] != '0'): ?><?php echo ' removed'; ?><?php endif; ?><?php echo '"><div class="info"><div><a class="anchor" href="#comment_'; ?><?php echo $this->_tpl_vars['comment']['id']; ?><?php echo '" name="comment_'; ?><?php echo $this->_tpl_vars['comment']['id']; ?><?php echo '" title="Ссылка на комментарий">#</a>'; ?><?php if ($this->_tpl_vars['comment']['remove'] == '0'): ?><?php echo '<a href="#" class="reply_to" data-id="'; ?><?php echo $this->_tpl_vars['comment']['id']; ?><?php echo '">Ответить</a>'; ?><?php endif; ?><?php echo '</div><span class="username">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</span><span class="date">'; ?><?php echo $this->_tpl_vars['comment']['comment_date']; ?><?php echo ' г. '; ?><?php echo $this->_tpl_vars['comment']['comment_time']; ?><?php echo '</span></div><span class="text">'; ?><?php if ($this->_tpl_vars['comment']['remove'] == '0'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['comment']['comment_text']; ?><?php echo ''; ?><?php else: ?><?php echo 'Комментарий удален.'; ?><?php endif; ?><?php echo '</span></div>'; ?><?php if (isset ( $this->_tpl_vars['comment']['childNodes'] )): ?><?php echo '<div class="reply">'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "item_comments.tpl", 'smarty_include_vars' => array('itemCommentsArray' => $this->_tpl_vars['comment']['childNodes'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo '</div>'; ?><?php endif; ?><?php echo '</div></li>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul>'; ?>