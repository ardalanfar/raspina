	<form action="" method="post">
<table width="500" border="1">
  <tr>
    <td width="70">name:</td>
    <td width="414"><input type="text" name="data[title]" maxlength="255" style="width:180px;" value="{{ information.title }}" /></td>
  </tr>
  <tr>
    <td>keyword:</td>
    <td><textarea name="data[keyword]" style="width:180px;">{{ information.keyword }}</textarea></td>
  </tr>
  <tr>
    <td>parent:</td>
    <td>
 <select name="data[parent_id]">
 	<option value=""></option>
{% for key,value in categories %}
	{% if value.id!=information.id %}
        {% if value.id==information.parent_id %}
            <option value="{{ value.id }}" selected="selected">{{ value.title }}</option>
        {% else %}
            <option value="{{ value.id }}">{{ value.title }}</option> 
        {% endif %} 
	{% endif %}                           
{% endfor %}        
 </select> 
 
    </td>
  </tr>  
  <tr>
    <td colspan="2" align="center"><input type="submit" name="sub" value="edit" /></td>
  </tr>
</table>
	</form>
 {{ message }}   
