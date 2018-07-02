$(document).ready(function(){
	$("#level").change(function(){
		var id = $("#level option:selected").val();

    $("#val").load("php/action.php", "id="+id);
	});
});
