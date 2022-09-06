<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page With Youtube Video Background</title>
<style>
body{ margin:0px; background:#000; }
#bg_container{ height:500px; overflow:hidden; }
#bg{ width:100%; height:900px; }
#content{ position:absolute; top:0px; padding:30px; color:#FFF; text-shadow:#000 2px 2px; }
</style>
</head>
<body>
<div id="bg_container">
  <iframe id="bg" src="//www.youtube.com/embed/LuD3_umIxgw?autoplay=1&amp;controls=0&amp;loop=1&amp;showinfo=0&amp;modestbranding=1&amp;disablekb=1&amp;enablejsapi=1&amp;playlist=PLAYLIST_ID_HERE" frameborder="0"></iframe>
</div>
<div id="content">
  <h1>Web page with HD looping video background</h1>
  <h2>Using CSS the video is simply placed underneath our HTML content</h2>
</div>
</body>
</html>