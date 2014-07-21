$( document ).ready(function() {
	readOnlyFields();
});
function readOnlyFields()
{
	var user_role=$("#user_role").val();
	var purchase_stage=$("#sales_stage").val();

	if(user_role=='Accounts Manager')
	{

		$('#detailpanel_2').find('input, textarea, select').attr('disabled', true);
		$('#detailpanel_2').find('input, textarea, select').css("background-color", "#EEEEEE");
		$('#detailpanel_4').find('input, textarea, select').attr('disabled', true);
		$('#detailpanel_4').find('input, textarea, select').css("background-color", "#EEEEEE");
		$('#detailpanel_5').find('input, textarea, select').attr('disabled', true);
		$('#detailpanel_5').find('input, textarea, select').css("background-color", "#EEEEEE");
	}
	else if(user_role=='Purchase Manager' )
	{	
			$('#detailpanel_3').find('input, textarea, select').attr('disabled', true);
			$('#detailpanel_3').find('input, textarea, select').css("background-color", "#EEEEEE");
			$('#detailpanel_5').find('input, textarea, select').attr('disabled', true);
			$('#detailpanel_5').find('input, textarea, select').css("background-color", "#EEEEEE");
	}
	else if(user_role=='Warehouse Manager')
	{
		
		$('#detailpanel_2').find('input, textarea, select').attr('disabled', true);
		$('#detailpanel_2').find('input, textarea, select').css("background-color", "#EEEEEE");
		$('#detailpanel_3').find('input, textarea, select').attr('disabled', true);
		$('#detailpanel_3').find('input, textarea, select').css("background-color", "#EEEEEE");
		$('#detailpanel_4').find('input, textarea, select').attr('disabled', true);
		$('#detailpanel_4').find('input, textarea, select').css("background-color", "#EEEEEE");

	}
	else if(user_role=='Sales Manager')
	{
		
		$('#detailpanel_2').find('input, textarea, select').attr('disabled', true);
		$('#detailpanel_2').find('input, textarea, select').css("background-color", "#EEEEEE");
		$('#detailpanel_3').find('input, textarea, select').attr('disabled', true);
		$('#detailpanel_3').find('input, textarea, select').css("background-color", "#EEEEEE");
		$('#detailpanel_4').find('input, textarea, select').attr('disabled', true);
		$('#detailpanel_4').find('input, textarea, select').css("background-color", "#EEEEEE");
		$('#detailpanel_5').find('input, textarea, select').attr('disabled', true);
		$('#detailpanel_5').find('input, textarea, select').css("background-color", "#EEEEEE");
	}


}