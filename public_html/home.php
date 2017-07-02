<div id="hero" class="jumbotron">
	<div class="row">
		<div class="container">
			<div class="col-sm-12 col-md-6 col-md-offset-3">
				<h1 class="text-center">
					ICELEAGUE
				</h1>
				<form id="summonerName_input" action="summoner_input.php" method="post">
					<div class="form-group">
						<label for="summoner">Summoner Nafn</label>
						<input maxlength="16" type="text" class="form-control" name="summoner" placeholder="Álfasteinn" required>
						<small class="form-text text-muted">Þú verður að endurskíra mastery page í "iceleague"</small>
					</div>
					<div class="form-group">
						<label for="server">Server</label>
						<select class="form-control" required name="server">
							<option value="eune">EUNE</option>
							<option value="euw">EUW</option>
							<option value="na">NA</option>
						</select>
					</div>
					<div class="form-group">
						<label for="kennitala">Kennitala</label>
						<input maxlength="10" type="text" class="form-control" name="kennitala" placeholder="2104982739" required>
						<small class="form-text text-muted">Ekki hafa áhyggjur, þetta er bara til þess að staðfesta að þú ert Íslendingur</small>
					</div>
					<button type="submit" class="btn btn-primary btn-block"><span class="loading"></span>Áfram</button>
				</form>

			</div>
			<div class="col-sm-12 col-md-7">
			</div>
		</div>
	</div>
</div>
<div id="summonerName_output"></div>

<div class="container">
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
