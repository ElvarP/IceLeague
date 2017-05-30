<div id="hero" class="jumbotron text-center">
	<h1>
		IceLeague
		<br>
		<small>Listi yfir íslenska LoL Spilara</small>
	</h1>

	<form class="form-inline container" id="summoner_input" action="summoner_input.php" method="post">
		<div class="input-group">
			<div class="form-group">
				<input size="40" maxlength="16" type="text" class="form-control" name="summoner" required placeholder="Summoner Nafn">
			</div>
			<div class="form-group">
				<select class="form-control" required name="server">
					<option value="">Server</option>
					<option value="eune">EUNE</option>
					<option value="euw">EUW</option>
					<option value="na">NA</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary"><span class="loading"></span>Áfram</button>
			</div>
		</div>
	</form>
	<small>Þú verður að endurskíra eitt mastery page í "iceleague"</small>
</div>

<div class="container">
	<div class="response"></div>
	<hr>
	<div class="row">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-signal center-block text-center" style="font-size:8em;"></span>
		</div>
		<div class="col-sm-8">
			<h3><b>Ranked Stats</b></h3>
			<p>Hefur þér alltaf langað að sýna fram á að þú ert með bestu stats á Íslandi? Núna getur þú það! Við höldum ítarlega stats eins og penta kills, damage dealt, damage taken og fleira.</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-4">
			<img class="img-responsive center-block" src="images/ChallengerBadge.png" alt="...">
		</div>
		<div class="col-sm-8">
			<h3><b>League Stats</b></h3>
			<p>Þú getur einnig sýnt að þú ert með þeim bestu á Íslandi! Þú getur borið saman þína league stats við aðra spilara eins og t.d. sigur prósentuna þína, sigra, töp og fleira.</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-4">
			<img class="img-responsive center-block" src="images/ChampionMastery.png" alt="...">
		</div>
		<div class="col-sm-8">
			<h3><b>Champion Mastery Stats</b></h3>
			<p>Ert þú one trick pony? Snilld. Núna getur þú sýnt hversu tileinkaður þú ert þinni aðal hetju. Við höldum mastery points fyrir þínar top 3 hetjur.</p>
		</div>
	</div>
	<hr>
</div>
