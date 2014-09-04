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
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="navs">
  <div class="navlist">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Forum</a></li>
      <li><a href="#">Register</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="#">FAQ</a></li>
    </ul>
   </div>
</div>
<div id="wrapper">
<div id="position">
  <aside>
    <div class="SideTools">
      <div class="SideTitle">
        Login Form
      </div>
      <div class="SideBody">
        <form action="#" method="post">
          <input class="textbox" type="text" name="uname" placeholder="USERNAME" required autofocus /><br>
          <input class="textbox" type="password" name="pass" placeholder="Password" required /><br>
          <input class="loginbutton" type="submit" value="Login">
        </form>
      </div>
    </div>
    <div class="SideTools">
      <div class="SideTitle">
        Tools
      </div>
      <div class="SideBody">
        <div class="tool">
          <a href="#">Armory</a>
        </div>
        <div class="tool">
          <a href="#">Recruit</a>
        </div>
        <div class="tool">
          <a href="#">Apply for GM</a>
        </div>
      </div>
    </div>
    <div class="SideTools">
      <div class="SideTitle">
        Chat
      </div>
      <div class="SideBody">
        <center><textarea cols="30" rows="4">
          </textarea></center>
      </div>
    </div>
  </aside>
  <div id="BoxBody">
    <div id="MyLogo">
    </div>
<!-- Start of Bar -->
    <div class="Bar">
      <div class="bartitle">News</div>
      <div class="upndown"></div>
    </div>
    <div class="MainBody">

    </div>
<!-- End of Bar -->
<!-- Start of Bar -->
    <div class="Bar">
      <div class="bartitle">Announcement</div>
      <div class="upndown"></div>
    </div>
    <div class="MainBody">

    </div>
<!-- End of Bar -->
<!-- Start of Bar -->
    <div class="Bar">
      <div class="bartitle">Random Test</div>
      <div class="upndown"></div>
    </div>
    <div class="MainBody">

    </div>
<!-- End of Bar -->
<!-- Start of Bar -->
    <div class="Bar">
      <div class="bartitle">Random Test2</div>
      <div class="upndown"></div>
    </div>
    <div class="MainBody">

    </div>
<!-- End of Bar -->
  </div>
</div>
 <footer id="foot01"></footer>
 <script src="JS/script.js"></script>
</div>
</body>
</html>
