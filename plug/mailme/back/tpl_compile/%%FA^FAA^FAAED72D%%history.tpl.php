<?php /* Smarty version 2.6.27, created on 2014-01-06 15:20:37
         compiled from history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'history.tpl', 23, false),)), $this); ?>
<div class="history">
	<p>История писем</p>
	<div class="form">
		
		<?php if (isset ( $this->_tpl_vars['history'] )): ?>
			<div class="block">
				<table cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td>Дата</td>
							<td>Время</td>
							<td>Отдел</td>
							<td>Имя</td>
							<td>E-mail</td>
							<td>Текст письма</td>
						</tr>
					</thead>
					<tbody>
					<?php $_from = $this->_tpl_vars['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
						<tr>
							<td><?php echo $this->_tpl_vars['row']['request_date']; ?>
</td>
							<td><?php echo $this->_tpl_vars['row']['request_time']; ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['request_departament'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['request_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['request_email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
							<td><span><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['request_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
					</tbody>
				</table>
			</div>

			<div class="block">
				<button type="button" name="clear">Очистить историю</button>
				<div class="clear"></div>
			</div>


		<?php else: ?>
			<div class="block">Пусто.</div>
		<?php endif; ?>
	
	</div>
</div>
<?php echo '<script type="text/javascript">mailme.historyTplInit();</script>'; ?>