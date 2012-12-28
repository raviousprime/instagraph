<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Webarto" />

	<title>Create Instagram Filters With PHP</title>

<style type="text/css">
<!--
@import url(http://fonts.googleapis.com/css?family=Droid+Sans:400,700);
@import url(http://fonts.googleapis.com/css?family=Droid+Serif:400,700);

*{margin:0;padding:0;}

a{color:#fff;}

h1{font-family:Droid Serif;color:#fff !important;margin:15px 0;text-shadow:0 2px 0 #352F2A;}

body{background:#F6F6E2 url(http://instagraph.me/static/gfx/paper.png);font-size:14px;font-family:'Droid Sans', Arial, Helvetica, sans-serif;}
.wrapper{width:960px;margin:0 auto;text-align:center;}

#logo{text-align:center;padding-top:50px;}
.frame{background-color:#352F2A;border-bottom:1px solid #555555;border-radius:1em;box-shadow:0 0 40px #000000 inset;width:612px;position:relative;margin:30px auto;padding:20px;}
#content{background:url(http://instagraph.me/static/gfx/aura.png) no-repeat top center;min-height:600px;}

input[type=text]{background:#7c7264;padding:10px;font-size:2em;color:#fff;font-weight:bold;border:3px solid #514a40;border-radius:8px;}
.upload{background:#7c7264;padding:10px;font-size:2em;color:#fff;font-weight:bold;border:3px solid #514a40;border-radius:8px;}

form{text-align:center;padding:20px 0;}

.button{
    padding:10px 20px;border-radius:8px;
    background-image:-moz-radial-gradient(center top , ellipse farthest-corner, #7c7264 0%, #514a40 100%), url(http://instagraph.me/static/gfx/noise.png);
    background-image:-webkit-radial-gradient(center top , ellipse farthest-corner, #7c7264 0%, #514a40 100%), url(http://instagraph.me/static/gfx/noise.png);
    font-size:2em;
    border:1px solid #7c7264;
    box-shadow:0 5px 0 #352F2A, 0 5px 0.5em rgba(0, 0, 0, 0.2);
    color:#fff;
    font-weight:bold;
    opacity:1;cursor:pointer;
}

#footer
{
    background:#1D5B4D;
    border-radius: 5px 5px 5px 5px;
    border-top: 1px solid #3E938A;
    bottom: 0;
    clear: both !important;
    color: #fff;
    height: 50px;
    line-height: 50px;
    margin-top: 150px;
    position: relative;
    text-align: center;
    width: 100%;
    z-index: 2;
}

#nettuts{margin-top:-30px;position:absolute;}

#filters img{margin:10px;box-shadow:0 0 1em #352F2A;opacity:0.8;}
#filters img:hover{opacity:1;cursor:pointer;}

#social{text-align:center;}

#url {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #CCCCCC;
    font-family: Helvetica,Arial,sans-serif;
    font-size: 12px;
    padding: 7px 5px;
    width: 384px;
}
.field {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0.06);
    padding: 2px;
    position: relative;
    display:inline-block;
}
-->
</style>

</head>
<body>

<div class="wrapper">

<div>
<img alt="" src="http://instagraph.me/static/gfx/instagraph.png" />
</div>

<div class="field">
<input id="url" name="url" value="" />
</div>

<br />
<img alt="" src="<?=$output?>"/>

</div>

</body>
</html>