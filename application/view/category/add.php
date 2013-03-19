<script type="text/javascript">
  $('#send').click(function(){
    var title = $('#title').val();
    var keyword = $('#keyword').val();
    var parent_id = $('#parent_id').val();
    var order_id = $('#order_id').val();
    param={'data[title]':title,'data[keyword]':keyword,'data[parent_id]':parent_id,'data[order_id]':order_id};
    $.post('http://localhost/raspina/category/add',param,function(){
      // alert('insert');
    });
  });
</script>


<table width="500" border="1">
  <tr>
    <td width="70">name:</td>
    <td width="414"><input type="text" name="data[title]" maxlength="255" style="width:180px;" id="title" /></td>
  </tr>
  <tr>
    <td>keyword:</td>
    <td><textarea name="data[keyword]" style="width:180px;" id='keyword'></textarea></td>
  </tr>
  <tr>
    <td>parent:</td>
    <td>
 <select name="data[parent_id]" id="parent_id">
 	<option value=""></option>
{% for key,value in categories %}
	<option value="{{ value.id }}">{{ value.title }}</option>  
{% endfor %}
 </select> 
 
    </td>
  </tr>  
  <tr>
    <td colspan="2" align="center"><input type="submit" name="sub" value="add" id="send" /></td>
  </tr>
</table>
<input type="hidden" name="data[order_id]" value="{{ id }}" id="order_id">

 {{ message }}   
