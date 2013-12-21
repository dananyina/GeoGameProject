function nextPicture(){
	$.ajax({
	    dataType: "json",
	    url: "/main/getjson",
	    async: false,
	     success: function(jsondata){
	    	 var path = jsondata[0]["path_img"];
	    	 current_id_of_record = jsondata[0]["id"];
	    	 $("#main_image").attr("src", path);
	     }
	  });
}