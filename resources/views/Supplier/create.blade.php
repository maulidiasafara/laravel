<form method="POST"
action="/Supplier">
{{csrf_field()}}
<input type="text" name="txt_id" /> <br />
<input type="text" name="txt_name" /><br />
<input type="text" name="txt_address" /><br />
<input type="submit"
 name="sbm_save"
 value="save"/>
</form>
