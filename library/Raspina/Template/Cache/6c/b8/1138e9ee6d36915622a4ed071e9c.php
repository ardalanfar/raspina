<?php

/* index.php */
class __TwigTemplate_6cb81138e9ee6d36915622a4ed071e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
<script type=\"text/javascript\" src=\"application/theme/default/js/jquery.js\"></script>
<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$('#testAjax').load('http://localhost/raspina/category/add');
\t/*
\t\tvar text = \$('input#text').val();
\t\tvar linkUrl = \$('input#url').val();
\t\tvar description = \$('input#description').val();
\t\tparam={'data[text]':text,'data[url]':linkUrl,'data[description]':description,'send':'send_val'};
*/
});
</script>
</head>
<body>
<h1>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
";
        // line 22
        echo "\t";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
";
        // line 24
        echo "
<div id=\"testAjax\"></div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  45 => 22,  41 => 20,  23 => 5,  17 => 1,);
    }
}
