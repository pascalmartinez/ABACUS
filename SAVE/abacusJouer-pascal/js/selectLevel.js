$(document).ready(function(){
	$("#test").change(function(){
		var id = $("#test option:selected").val();


    $("#main").load("php/action.php", "id="+id);
	});
});
