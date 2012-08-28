window.outputView = Backbone.View.extend({
	el: $('#output-container'),
    initialize: function () {
        this.render();
    },

    render: function () {
    	return this;
    },

    events:{
        'click #download'	:  'download'
    },
     
    download: function(e){
    	// Check if there is any table checked
 		if ($(".checktable:checked").size() > 0)
		{
 			// Declares the JSON var where save all
			var jsonTables = [];
			// For each table checked, saves it into the previous var declared
			$(".checktable:checked").each(function(index, data){
				jsonTables.push(	{"tableName": $(this)[0].value , 
									 "className": $("#"+$(this)[0].id+"-classname").val()
									 });
			});
			// XHR for download as ZIP
	 		$.ajax({
	 			type: 	'POST',
	 			url: 	"index.php/quickcim/generate",
	 			data: 	{	tables: JSON.stringify(jsonTables) },
	 			dataType: "json",
	 			error: function(data) 
	 				{
	 					// Some goes wrong
						utils.toogleFade("#connection-error", 5000);
				  	},
				  success: function(data) 
				  	{
				  		// Get the file
				  		window.location = "index.php/quickcim/download/"+data.filename;
				   }
			});
		} else {
			// If anyone table is not checked, may know
			utils.toogleFade("#select-table", 5000);
		}
	 }
});
