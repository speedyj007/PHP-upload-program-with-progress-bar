
  function _(e1)
  {
	  return document.getElementById(e1);
  }
  
  function uploadFile()
  {
		var file = _("file").files[0];
		 // alert(file.name+" | "+ file.size+ " | " + file.type);
		
		var bytemb = 1048576;
		var y = file.name;
		var z = (file.size/bytemb).toFixed(2);
		var w = file.type;
		
		document.getElementById("fileName").innerHTML = y;
		document.getElementById("fileSize").innerHTML = z+ " mb";
		document.getElementById("fileType").innerHTML = w;
		
		var formdata = new FormData();
		formdata.append("file",file);
		
		var ajax = new XMLHttpRequest();
		
		ajax.upload.addEventListener("progress", progressHandler, false);
		ajax.addEventListener("load",completeHandler, false);
		ajax.addEventListener("error",errorHandler, false);
		ajax.addEventListener("abort",abortHandler, false);
		ajax.open("POST", "file_upload.php" );
		ajax.send(formdata);
		
  }
  
  
  function progressHandler(event)
  {
	  var bytemb = 1048576;
	  var mb = (event.total/bytemb).toFixed(2);
	  var sendmb = (event.loaded/bytemb).toFixed(2);
	  
	  
	  _("totalStatus").innerHTML = "uploaded "+sendmb+" mb bytes of "+mb+" mb";
	  var percent = (event.loaded/event.total) * 100;
	  var width = Math.round(percent)-1;
	  width++;
	  _("progressBar").style.width = width  + '%';
	  _("progressBar").innerHTML = width + '%';
	  _("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
	  
  }
  
    function completeHandler(event)
  {
	  _("status").innerHTML = event.target.responseText;
	  _("progressBar").value = 0;
	
	  
  
  
  }
  
   
function errorHandler(event)
  {
	  _("status").innerHTML = "upload failed";
	 
	
	  
  }
  
  
     function abortHandler(event)
  {
	  _("status").innerHTML = "upload aborted";
	 
	
	  
  }