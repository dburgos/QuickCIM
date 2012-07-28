window.tableControlsView = Backbone.View.extend({
	el: $('#database-controllers'),
    initialize: function () {
        this.render();
    },

    render: function () {
    	$('#classname-info').popover({	animation: true,
    									placement: 'bottom',
    									title: classname_title_txt,
    									content: classname_content_txt});
    	return this;
    },

    events:{
        'click #select-all'	:  'selectAll'	,
        'click #select-none':  'selectNone'	,
        'click #add-suffix'	:  'addSuffix'
     },
     
	selectAll: function () {
    	 $(".checktable").attr("checked", "checked");
	},
	
	selectNone: function () {
   	 	$(".checktable").removeAttr("checked");
	},
	
	addSuffix: function () {
		$.each($(".classname"), function(index, value) { 
			if (!utils.endsWith($(this).val(), "_model"))
			{
				$(this).val($(this).val() + '_model');
			}
		});
	}
});