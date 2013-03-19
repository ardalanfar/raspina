<?php

/* add.php */
class __TwigTemplate_ca501969d3ab94ad8dbc34d359dfc1e1 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
  \$('#send').click(function(){
    var title = \$('#title').val();
    var keyword = \$('#keyword').val();
    var parent_id = \$('#parent_id').val();
    var order_id = \$('#order_id').val();
    param={'data[title]':title,'data[keyword]':keyword,'data[parent_id]':parent_id,'data[order_id]':order_id};
    \$.post('http://localhost/raspina/category/add',param,function(){
      alert('insert');
    });
  });
</script>


<table width=\"500\" border=\"1\">
  <tr>
    <td width=\"70\">name:</td>
    <td width=\"414\"><input type=\"text\" name=\"data[title]\" maxlength=\"255\" style=\"width:180px;\" id=\"title\" /></td>
  </tr>
  <tr>
    <td>keyword:</td>
    <td><textarea name=\"data[keyword]\" style=\"width:180px;\" id='keyword'></textarea></td>
  </tr>
  <tr>
    <td>parent:</td>
    <td>
 <select name=\"data[parent_id]\" id=\"parent_id\">
 \t<option value=\"\"></option>
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 30
            echo "\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "title"), "html", null, true);
            echo "</option>  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo " </select> 
 
    </td>
  </tr>  
  <tr>
    <td colspan=\"2\" align=\"center\"><input type=\"submit\" name=\"sub\" value=\"add\" id=\"send\" /></td>
  </tr>
</table>
<input type=\"hidden\" name=\"data[order_id]\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" id=\"order_id\">

 ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "   
";
    }

    public function getTemplateName()
    {
        return "add.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 42,  72 => 40,  62 => 32,  51 => 30,  47 => 29,  17 => 1,);
    }
}
