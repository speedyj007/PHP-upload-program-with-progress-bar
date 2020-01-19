<!doctype html>
<html lang = "us-en">
<title>MySQL Upload Progress Bar</title>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <link rel="stylesheet" href = "w3.css">
  <link rel="stylesheet" href = "style.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <style>
  
  
  </style>
  </head>
  
  <body>
  <div class = "w3-container">
  <br>
  
  <h1>MySQL Upload Progress Bar</h1>
  <hr>
  <div class = "section">
  <form name ="form1" id="form1" enctype = "multipart/form-data" method = "post" > 
  
  <input type = "file" name = "file" id = "file"> <br>
  <br>
  <input type = "button" class = 'b1' value = "upload" onclick = "uploadFile()"> &nbsp;
  <br><br>
  <div class="w3-light-grey w3-round-xlarge w3-mobile pbar">
  <div class="w3-container w3-blue w3-round-xlarge" id = "progressBar" style="height:24px;width:0%;">0%
  </div>
  </div>
  <br>
  <br>
  
  <h3 id = "status" ></h3>
  
  <h4 >File Name : <span id = 'fileName' ></span> </h4>
  <h4>File Size  : <span id = 'fileSize' ></span> </h4>
  <h4>File Type  : <span id = 'fileType' ></span> </h4>
  <label class = 'l1' id = 'totalStatus' ></label> 

  </form>
  
  
  </div>
  
  </div>
  
  <script src = "script.js" > </script>
  </body>
  </html>