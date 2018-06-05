$(document).ready(function () {
	
// Fetch Totals ==============================================================
	
getTotals(); // fetch on page load
	
 $("#monthx").on('change', function() {
	 getTotals(); // fetch on changing month
});	
	
function getTotals(){
	var month = $('#monthx :selected').val();
	var totData = {
			'month'	: month
	};
	
	$.ajax({
	type 		: 'POST', 
	url 		: 'inc/fetch.php', 
	data 		: totData,
	dataType 	: 'json',
	encode 		: true
	})

	.done(function(totals) {
		console.log(totals); 
		
		$('#received').html('Rs. '+totals.receive);
		$('#issued').html('Rs. '+totals.issue);
		$('#balance').html('Rs. '+totals.balance);
		$('#t_received').html('Rs. '+totals.t_receive);
		$('#t_issued').html('Rs. '+totals.t_issue);
		$('#t_balance').html('Rs. '+totals.t_balance);
			
	})	

}
	
// Auto Date =================================================================		
	
	function autotoday() { 
	var date = new Date();

	var day = date.getDate();
	var month = date.getMonth() + 1;
	var year = date.getFullYear();

	if (month < 10) month = "0" + month;
	if (day < 10) day = "0" + day;
	var today = year + "-" + month + "-" + day;
	//document.getElementsByClassName('pickyDate').value = today;
	document.getElementById('pickyDate').value = today;
	document.getElementById('iou_date').value = today;
}
 
autotoday();
	
// Cash number check ========================================================
	
 $("#emp_name").on('change', function() {
	 var emp_name = $(this).val();

	 $.post("inc/no_check.php", {iou_name: emp_name} , function(data) {

		 if (data.status == true) {
			$('input[name=iou_no]').val(data.etf_no); 
		 } else {
			$('input[name=iou_no]').val('Error'); 
		 }
	 },'json');

});	
	
// Date Picker =============================================================================	
	
	$('.pickyDate').datepicker({
		autoclose: true,
		weekStart: 1,
		daysOfWeekHighlighted: "0,6",
		todayHighlight: true,
		format: "yyyy-mm-dd"
	});
	
// Check cash number is added or not =======================================================	
	
	 $('#c_no').keyup(function() {
	 var chechno = $(this).val();
		// $('#c_no').html('');

	 $.post("inc/no_check.php", {c_no: chechno} , function(data) {
		 if (data.status == true) {
			 $('#c_no').removeClass('is-invalid').addClass('is-valid');
			 $('#error-msg').addClass('valid-feedback').removeClass('invalid-feedback'); 
			 $('#c_submit').removeClass('disabled').prop("disabled", false);
		 } else {
			 $('#c_no').removeClass('is-valid').addClass('is-invalid');
			 $('#error-msg').addClass('invalid-feedback').removeClass('valid-feedback');
			 $('#c_submit').addClass('disabled' ).prop("disabled", true);
		 }
		 $('#error-msg').html(data.msg);
	 },'json');
	 });
	
// Reset input field =======================================================================

	$(document).click(function() {
		 $('#c_no').removeClass('is-invalid');
		 $('#c_no').removeClass('is-valid');
	});

// Cash Form submit ===================================================================

	$( "#c_form" ).submit(function( event ) {
		$('#msg').remove();
		var customRadioInline1 = $('input[name=customRadioInline1]:checked').val()
		
		if(customRadioInline1 == 'receive'){
			var receive = $('input[name=c_amount]').val();
			var issue = 0;	
		};		
		
		if(customRadioInline1 == 'issue'){
			var receive = 0;
			var issue = $('input[name=c_amount]').val();	
		};
		   
		var formData = {
			'c_date'	: $('input[name=c_date]').val(),
			'c_no'		: $('input[name=c_no]').val(),
			'c_name'	: $('input[name=c_name]').val(),
			'c_receive'	: receive,
			'c_issue'	: issue
		};
		
		$.ajax({
			type 		: 'POST', 
			url 		: 'inc/process.php', 
			data 		: formData,
			dataType 	: 'json',
			encode 		: true
		})
		
		.done(function(data) {
			console.log(data); 

			if ( ! data.success) {
				 alert(data.message);				
			} else {
				alert(data.message);
			}
			$('#c_form')[0].reset();
			getTotals();
			autotoday();
		})		
		
	 // alert( "Handler for .submit() called. - "+issue+" "+receive);
	  event.preventDefault();
	});

// IOU Form submit ===============================================================
	
	$( "#i_form" ).submit(function( event ) {
		
//		var iou_date= $('input[name=iou_date]').val();
//		var iou_no	= $('input[name=iou_no]').val();
//		var iou_amt	= $('input[name=iou_amt]').val();
		
		var iouData = {
			'iou_date'	: $('input[name=iou_date]').val(),
			'iou_no'	: $('input[name=iou_no]').val(),
			'iou_amt'	: $('input[name=iou_amt]').val()
		};
		
		$.ajax({
			type 		: 'POST', 
			url 		: 'inc/process.php', 
			data 		: iouData,
			dataType 	: 'json',
			encode 		: true
		})
		
		.done(function(data) {
			console.log(data); 

			if (!data.success) {
				 alert(data.message);				
			} else {
				alert(data.message);
			}
			$('#i_form')[0].reset();
			autotoday();
			getTotals();
		})		
		
//	  alert( "Handler for .submit() called."+iou_amt);
	  event.preventDefault();
	});	
	
	
	
});

