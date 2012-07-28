window.utils = {

	toogleFade: function(selector, time)
	{
		$(selector).fadeIn();
		setTimeout("$('"+selector+"').fadeOut();", time);
	},
	
	newCheckTable: function(index, name)
	{
		return "<tr><td><input type='checkbox' id='table-"+index+"' value='"+name+"' class='checktable'> "+name+"</td><td><input type='text' id='table-"+index+"-classname' value='"+name+"' class='classname'/></tr>";
	},
	
	// From Prototype
	endsWith: function(string, pattern) 
	{
	    var d = string.length - pattern.length;
	    return d >= 0 && string.lastIndexOf(pattern) === d;
	}
};