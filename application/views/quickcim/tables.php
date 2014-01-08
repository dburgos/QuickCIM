<section id="tables-container" class="shadow span6" style="display: none;">
	<h2><span class="number">2</span> <?=$this->lang->line('quickcim_tables_title')?></h2>
	<div id="database-controllers" class="row-fluid">
		<div class="span6">
			<a href="#" id="select-all" class="btn"><i class="icon-check"></i> <?=$this->lang->line('quickcim_tables_sall')?></a>
			<a href="#" id="select-none" class="btn"><i class="icon-remove"></i> <?=$this->lang->line('quickcim_tables_snone')?></a>
		</div>
		<div class="span4">
			<a href="#" id="add-suffix" class="btn btn-info"><i class="icon-tags icon-white"></i> <?=$this->lang->line('quickcim_tables_suffix')?></a>
		</div>
	</div>
	<br class="clear" />
	<div id="database-content">
		<table class="table table-striped">
			<thead>
				<tr><th><?=$this->lang->line('quickcim_table_headname')?></th><th><?=$this->lang->line('quickcim_table_headclassname')?> <i id="classname-info" class="icon-info-sign"></i></th></tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
</section>