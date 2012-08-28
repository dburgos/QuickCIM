window.ConnectionView = Backbone.View.extend({
	el: $('#connection'),
    initialize: function () {
    },

    render: function () {
    },

    events:{
        'click #connect':  'connectDb' // This button is declared in my HTML code and calls main method successfully.
     },
    
    connectDb: function (e) {
<<<<<<< HEAD
    	 $.ajax({
			  type: 'POST',
			  url: "index.php/quickcim/connect",
			  data: $("#connection").serialize(),
			  dataType: "json",
			  error: function(data) 
			  	{
					utils.toogleFade("#connection-error", 5000);
			  	},
			  success: function(data) 
			  	{
					if (data.length == 0)
					{
						utils.toogleFade("#no-tables", 5000);
					}
					else
					{
						$("#database-controllers").show();				
						var tables = "";
				     	$.each(data, function(index, value) 
				     	{ 
				     		tables += utils.newCheckTable(index, data[index].table);
				     	});
				     	$("table.table > tbody").html(tables);
				     	$("#connection-container").removeClass("offset4");
				    	$("#tables-container, #output-container").fadeIn("slow");
					}
			   }
		});
    }
});
=======
    	 
    	 $.ajax({
			  type: 'POST',
			  url: "quickcim/connect",
			  data: $("#connection").serialize(),
			  dataType: "json",
			  error: function(data) 
			  	{
					utils.toogleFade("#connection-error", 5000);
			  	},
			  success: function(data) 
			  	{
					if (data.length == 0)
					{
						utils.toogleFade("#no-tables", 5000);
					}
					else
					{
						$("#database-controllers").show();				
						var tables = "";
				     	$.each(data, function(index, value) 
				     	{ 
				     		tables += utils.newCheckTable(index, data[index].table);
				     	});
				     	$("table.table > tbody").html(tables);
				     	$("#connection-container").removeClass("offset4");
				    	$("#tables-container, #output-container").fadeIn("slow");
					}
			   }
		});
    }
});
>>>>>>> branch 'master' of https://github.com/dburgos/QuickCIM.git
