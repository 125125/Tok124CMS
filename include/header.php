<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){
  $(".upndown").click(function(e){
    $(this).closest('.Bar').next().toggle()
	e.stopPropagation();
  });
});
  </script>
  <meta charset="UTF-8">
  <meta name="description" content="Free Web Design">
  <meta name="author" content="Tim Levinsson">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="navs">