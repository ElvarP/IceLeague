<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/dt-1.10.13/r-2.1.0/datatables.min.js"></script>
<script type="text/javascript">
//Loada Datatables fyrir tables
$(document).ready(function() {
	$('.leagues').dataTable( {
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Icelandic.json"
		},
		"iDisplayLength": 15,
		"lengthMenu": [10, 15, 25, 50, 100],
		//Raða DIVISION eftir RANK í LEAGUES table
		columnDefs: [
			{
				targets: [2],
				orderData: [0]
			}
		],
		responsive: true,
	});
	$('.rankedstats').dataTable( {
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Icelandic.json"
		},
		"iDisplayLength": 15,
		"lengthMenu": [10, 15, 25, 50, 100],
		responsive: true,
	});
	$('.championmastery').dataTable( {
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Icelandic.json"
		},
		"iDisplayLength": 15,
		"lengthMenu": [10, 15, 25, 50, 100],
		responsive: true,
	});
});
//Bæta við Index (númer) við Ranked stats og Champion Mastery tables
$('.rankedstats').on( 'draw.dt', function () {
	$('tr').each(function (i) {
		$("td:first", this).html(i);
	});
});
$('.championmastery').on( 'draw.dt', function () {
	$('tr').each(function (i) {
		$("td:first", this).html(i);
	});
});
//Breyta liti á KDA eftir hversu hátt KDA-ið er
$('.kda').each(function() {
	var $this = $(this);
	var value = $this.text();
	if(value >= 2) {
		$this.addClass('kda_green');
	}
	if (value >= 3) {
		$this.addClass('kda_blue');
	}
	if (value >= 4) {
		$this.addClass('kda_orange');
	}
});
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
//Google analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-63930962-1', 'auto');
ga('send', 'pageview');
</script>
</body>
</html>
