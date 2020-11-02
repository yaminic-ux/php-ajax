jQuery(document).ready(function($){
	//insert data to db
function load_data(){
	$.ajax({
			url:"ajax-load.php",
			type:"POST",
			success: function(data){
				console.log(data);
				$("#results").html(data);
			}
	});
}
load_data();

$("#insertbtn").on("click", function(e){
	e.preventDefault();
	var fname= $("#fname").val();
	var lname= $("#lname").val();
if(fname==" " || lname==""){
	$("#successmessage").slideUp();
	$("#errormessage").html("All fileds are required").slideDown().delay(2000).fadeOut('slow');

}else{
	$.ajax({
		url:"ajax-insert.php",
		type:"POST",
		data:{fname:fname,lname:lname},
		success:function(data){
		console.log(data);
		if(data=="1"){
			load_data();
			$("#thisform").trigger("reset");
			$("#errormessage").html("All fileds are required").slideUp();
			$("#successmessage").html("recod store successfully").slideDown().delay(2000).fadeOut('slow');
		}else{
		$("#errormessage").html("record not instert").slideDown().delay(2000).fadeOut('slow');
		$("#successmessage").slideUp();
		}
		}
	});
	}
});

//show data from db
$("#loaddata").on("click", function(){
	$.ajax({
			url:"ajax-load.php",
			type:"POST",
			success: function(data){
				console.log(data);
				$("#showdata").html(data);
			}
	});

});
//Delete ajax
$(document).on("click",".deleteBtn", function(){
if(confirm("Do you really want to delete this record")){
	var empId = $(this).attr("data-id");
	var element = this;
	$.ajax({
		url:"ajax-delete.php",
		type:"POST",
		data:{eid:empId},
		success:function(data){
		if(data == "1"){
			$(element).closest("tr").fadeOut("slow");
		}else{
	    $("#errormessage").html("record not instert").slideDown().delay(2000).fadeOut('slow');
		$("#successmessage").slideUp();
		}	
		}	
	});
}
});
});