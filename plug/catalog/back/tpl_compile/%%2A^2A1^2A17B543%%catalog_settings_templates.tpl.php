<?php /* Smarty version 2.6.27, created on 2014-02-05 12:58:23
         compiled from catalog_settings_templates.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'catalog_settings_templates.tpl', 8, false),)), $this); ?>
<form name="catalog_settings_templates">
	<div class="block">
		<p>Шаблон письма администратора</p>
		
		<div class="field">
			<label>E-mail адрес получателя:</label>
			<div class="padding">
				<input type="text" name="order_email_to_address" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['catalogSettings']['order_email_to_address'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
			</div>
		</div>	
			
		<div class="field">
			<label>Имя получателя:</label>
			<div class="padding">
				<input type="text" name="order_email_to_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['catalogSettings']['order_email_to_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
			</div>
		</div>	
			
		<div class="field">
			<label>E-mail адрес отправителя:</label>
			<div class="padding">
				<input type="text" name="order_email_from_email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['catalogSettings']['order_email_from_email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
			</div>
		</div>		
			
		<div class="field">
			<label>Имя отправителя:</label>
			<div class="padding">
				<input type="text" name="order_email_from_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['catalogSettings']['order_email_from_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
			</div>
		</div>		
			
		<div class="field">
			<label>Тема письма:</label>
			<div class="padding">
				<input type="text" name="order_email_subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['catalogSettings']['order_email_subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
			</div>
		</div>		

		<div class="field">
			<label>Текст письма:</label>
			<div class="padding">
				<textarea name="order_email_template" data-type="editor"><?php echo $this->_tpl_vars['catalogSettings']['order_email_template']; ?>
</textarea>
			</div>
		</div>

		<div class="field">
			<label>Псевдокод:</label>
			<div class="padding">
				%name% - <i>Имя пользователя, сделавшего заказ (может достигать до 50 символов).</i>
			</div>
			<div class="padding">
				%phone% - <i>Телефон пользователя, сделавшего заказ.</i>
			</div>
			<div class="padding">
				%email% - <i>E-mail адрес пользователя, сделавшего заказ (Если пользователь указал свой E-mail).</i>
			</div>
			<div class="padding">
				%count% - <i>Количество товаров в заказе (целое натуральное число).</i>
			</div>
			<div class="padding">
				%cost% - <i>Общая сумма заказа.</i>
			</div>
			<div class="padding">
				%id% - <i>ID заказа в базе данных (целое натуральное число).</i>
			</div>
			<div class="padding">
				%ordertable% - <i>Таблица товаров заказа.</i>
			</div>
		</div>

	</div>



	<div class="block">
		<button type="button" name="save_settings_templates">Сохранить изменения</button>
		<div class="clear"></div>
	</div>
</form>

<?php echo '<script type="text/javascript">catalog.catalogSettingsTemplatesTplInit();</script>'; ?>