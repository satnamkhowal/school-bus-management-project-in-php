<?php  ?>

<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".country").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "ajax_city.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city").html(html);
} 
});

});

});
</script>
//HTML Code
Country :
<select name="country" class="country">
<option selected="selected">--Select Country--</option>
<?php
include "library/dbFunction.php";
$sql=mysql_query("select id,data from data where weight='1'");
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$data=$row['data'];
echo '<option value="'.$id.'">'.$data.'</option>';
} ?>
</select> <br/><br/>

City :
<select name="city" class="city">
<option selected="selected">--Select City--</option>
</select>