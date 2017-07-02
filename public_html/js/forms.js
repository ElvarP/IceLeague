$("#summonerName_input").submit(function(e) {
	e.preventDefault();

	$(".loading").addClass("glyphicon glyphicon-refresh spinning");
	$.ajax({
		type: $(this).attr('method'),
		url: $(this).attr('action'),
		data: $(this).serialize(),
		success: function(data)	{
			$("#summonerName_output").html(data);
			$(".loading").removeClass("glyphicon glyphicon-refresh spinning");
		},
		error: function(data) {
			$("#summonerName_output").html("<div class='alert alert-danger'>Fyrirgefðu, það kom upp villa. Prufaðu aftur seinna.</div>");
			$(".loading").removeClass("glyphicon glyphicon-refresh spinning");
		}
	});
});
