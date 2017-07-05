$("#summonerForm_input").submit(function(e) {
	e.preventDefault();

	$("#summonerForm_buttonText").addClass("glyphicon glyphicon-refresh spinning");
	$("#summonerForm_buttonText").empty();
	$.ajax({
		type: $(this).attr('method'),
		url: $(this).attr('action'),
		data: $(this).serialize(),
		success: function(data)	{
			$("#summonerForm_output").html(data);
			$("#summonerForm_buttonText").removeClass("glyphicon glyphicon-refresh spinning");
			$("#summonerForm_buttonText").html('Áfram');
		},
		error: function(data) {
			$("#summonerForm_output").html("<div class='alert alert-danger'>Fyrirgefðu, það kom upp villa. Prufaðu aftur seinna.</div>");
			$("#summonerForm_buttonText").removeClass("glyphicon glyphicon-refresh spinning");
			$("#summonerForm_buttonText").html('Áfram');
		}
	});
});
