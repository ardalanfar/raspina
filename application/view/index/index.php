<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{title}}</title>
<script type="text/javascript" src="application/theme/default/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#testAjax').load('http://localhost/raspina/category/add');
});
</script>
</head>
<body>
<h1>{{title}}</h1>
{% autoescape 'html' %}
	{{content|raw}}
{% endautoescape %}
<div id="testAjax"></div>
</body>
</html>