<!DOCTYPE html><html lang="en"><head>
<title>hindex</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 minimal-ui" />
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/prosperful.css">
<link rel="stylesheet" type="text/css" href="../assets/css/hindex.css">
<link rel="image_src" type="image/png" href="../assets/img/hindex.png" />
<link rel="icon" type="image/png" href="../assets/img/hindex.png" />
<style>
li {
	margin-bottom:16px;
	font-size:18px;
}
img.icon {
	width:64px;
	height:64px;
}

* {
	outline:none;
}
h1 {
	margin:0px;
}
</style>
</head><body>

<a href="../" style="text-decoration:none;border-bottom-width:0px;">
<img class="svg" src="../assets/img/prospermore.svg" style="width:64px;height:64px;margin:16px;" /></a>

<div class="container">

<div class="row">
<div class="col-lg-12">

<center class="visible-xs"><img src="../assets/img/hindex.svg" class="icon"></center>
<h1 class="hidden-xs hindexception">hindex</h1>
<p>hindex injects an index in hindsight. Now you can focus on your content again, and dynamically generate a fully nested and hyperlinked index of headings. The headings in the following dummy text are editable, make changes and <a id="refresh" style="cursor:pointer;">click here to refresh the hindex</a>.</p>
</div>
</div>

<div class="row">
<div class="col-lg-12" id="hindex"></div><!-- .col -->
</div><!-- .row -->

<div class="row">
<div class="col-lg-12">

<h1 contenteditable="true">Usage</h1>

<p>Include <a href="../assets/js/hindex.js">hindex.js</a> after <a href="//jquery.com">jQuery</a></p>
<p>then call the hindex function on the element you'd like your hindex to appear in</p>:

<code>$ ("#hindex").hindex (); // Simple!</code>

<h2 contenteditable="true">Customization</h2>

<p>The CSS style classes are <code>ol.hindex-h*</code>. The default <a href="../assets/css/hindex.css">hindex.css</a> h* list-style-types are <a href="http://www.w3schools.com/cssref/pr_list-style-type.asp">h1:decimal, h2:decimal-leading-zero, h3:upper-alpha, h4:lower-roman, h5:lower-alpha, h6:square</a>.</p>

<p>Add the class <code>.hindexception</code> to any heading you'd like hindex to ignore; like the following heading.</p>

<h3 class="hindexception" contenteditable="true">Exception</h3>

<p class="filler"></p>

<h2 contenteditable="true">Nested</h2>

<blockquote class="filler"></blockquote>
<p class="filler"></p>

</div><!-- .col -->
</div><!-- .row -->
</div><!-- .container -->

<footer>
<div class="container">
<div class="row">
<div class="col-sm-12">
<p><a href="http://prosperful.com">Prosperful</a> &copy; 2014. All Rights Reserved</p>
</div>
</div>
</div>
</footer>

<script src="../assets/js/jquery.2.0.1.min.js"></script>
<script src="../assets/js/filler.js"></script>
<script src="hindex.js"></script>
<script>
$ (document).ready (function () {
	$ ("#refresh").click (function (e) {
		$ ("#hindex").hindex ();
	});
	
	$ ("#hindex").hindex ();
});
</script>
<script src="../assets/js/smooth.js"></script>
</body></html>