//Form input
var frm = $('#summoner_input');
frm.submit(function (ev) {
	$('#summoner_input').find(':submit').attr("disabled", true);
	$(".loading").addClass("glyphicon glyphicon-refresh spinning");
	$.ajax({
		type: frm.attr('method'),
		url: frm.attr('action'),
		data: frm.serialize(),
		success: function (data) {
			$(".loading").removeClass("glyphicon glyphicon-refresh spinning");
			$(".response").html(data);
			$('#summoner_input').find(':submit').removeAttr("disabled");
		}
	});
	ev.preventDefault();
});
$("#search_input").submit(function(e) {
	e.preventDefault();
	$.ajax({
		type: $(this).attr('method'),
		url: $(this).attr('action'),
		data: $(this).serialize(),
		success: function(data)	{
			$("#search_output").html(data);
		},
		error: function(data) {
			$("#search_output").html(data);
		}
	});
});
