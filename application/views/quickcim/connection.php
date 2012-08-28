<<<<<<< HEAD
<section id="connection-container" class="shadow span4 offset4">
	<h2><span class="number">1</span> <?=$this->lang->line('quickcim_db_title')?></h2>
	<form id="connection">
		<div class="input-prepend">
        	<span class="add-on"><i class="icon-wrench"></i></span><select name="driver">
				<option value="mysql" 	<?=strcasecmp($this->db->dbdriver,"mysql") == 0?"selected='selected'":""?>>MySQL</option>
				<option value="oci8" 	<?=strcasecmp($this->db->dbdriver,"oci8") == 0?"selected='selected'":""?>>Oracle</option>
				<option value="postgre" <?=strcasecmp($this->db->dbdriver,"postgre") == 0?"selected='selected'":""?>>PostgreSQL</option>
				<option value="sqlite" 	<?=strcasecmp($this->db->dbdriver,"sqlite") == 0?"selected='selected'":""?>>SQLite</option>
			</select>
		</div>
		<div class="input-prepend">
        	<span class="add-on"><i class="icon-home"></i></span><input type="text" name="host" placeholder="hostname or IP" value="<?=$this->db->hostname?>" maxlength="15" />
		</div>
		<div class="input-prepend">
        	<span class="add-on"><i class="icon-th-large"></i></span><input type="text" id="db" name="db" placeholder="database" value="<?=$this->db->database?>" />
        </div>
		<div class="input-prepend">
        	<span class="add-on"><i class="icon-user"></i></span><input type="text" name="user" placeholder="user" value="<?=$this->db->username?>" />
        </div>
		<div class="input-prepend">
        	<span class="add-on"><i class="icon-asterisk"></i></span><input type="password" name="pwd" placeholder="password" value="<?=$this->db->password?>" />
		</div>
		<input type="button" class="btn btn-large btn-primary" id="connect" value="<?=$this->lang->line('quickcim_db_button')?>" />
		<div id="connection-error" class="alert alert-error" style="display: none;"><?=$this->lang->line('quickcim_db_error')?></div>
		<div id="no-tables" class="alert alert-info" style="display: none;"><?=$this->lang->line('quickcim_tables_none')?></div>
	</form>
</section>
=======
<div id="connection-container" class="shadow span4 offset4">
	<h2><span class="number">1</span> <?=$this->lang->line('quickcim_db_title')?></h2>
	<form id="connection">
		<div class="input-prepend">
        	<span class="add-on"><i class="icon-wrench"></i></span><select name="driver">
				<option value="mysql" 	<?=strcasecmp($this->db->dbdriver,"mysql") == 0?"selected='selected'":""?>>MySQL</option>
				<option value="oci8" 	<?=strcasecmp($this->db->dbdriver,"oci8") == 0?"selected='selected'":""?>>Oracle</option>
				<option value="postgre" <?=strcasecmp($this->db->dbdriver,"postgre") == 0?"selected='selected'":""?>>PostgreSQL</option>
				<option value="sqlite" 	<?=strcasecmp($this->db->dbdriver,"sqlite") == 0?"selected='selected'":""?>>SQLite</option>
			</select>
		</div>
		<div class="input-prepend">
        	<span class="add-on"><i class="icon-home"></i></span><input type="text" name="host" placeholder="hostname or IP" value="<?=$this->db->hostname?>" maxlength="15" />
		</div>
		<div class="input-prepend">
        	<span class="add-on"><i class="icon-th-large"></i></span><input type="text" id="db" name="db" placeholder="database" value="<?=$this->db->database?>" />
        </div>
		<div class="input-prepend">
        	<span class="add-on"><i class="icon-user"></i></span><input type="text" name="user" placeholder="user" value="<?=$this->db->username?>" />
        </div>
		<div class="input-prepend">
        	<span class="add-on"><i class="icon-asterisk"></i></span><input type="password" name="pwd" placeholder="password" value="<?=$this->db->password?>" />
		</div>
		<input type="button" class="btn btn-large btn-primary" id="connect" value="<?=$this->lang->line('quickcim_db_button')?>" />
		<div id="connection-error" class="alert alert-error" style="display: none;"><?=$this->lang->line('quickcim_db_error')?></div>
		<div id="no-tables" class="alert alert-info" style="display: none;"><?=$this->lang->line('quickcim_tables_none')?></div>
	</form>
</div>
>>>>>>> branch 'master' of https://github.com/dburgos/QuickCIM.git
