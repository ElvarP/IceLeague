<div class="container">

	<?php
	$server = $_GET['server'];
	if (!empty($server) && ($server == "eune") || ($server == "euw") || ($server == "na")) {
		echo "<h1 class='text-uppercase'>$server Ranked Stats</h1>";
	}
	else {
		include('404.php');
	}
	?>

	<table class="rankedstats table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Summoner</th>
				<th>Win %</th>
				<th>Wins</th>
				<th>Losses</th>
				<th>KDA</th>
				<th>Kills</th>
				<th>Deaths</th>
				<th>Assists</th>
				<th>DMG Dealt</th>
				<th>DMG Taken</th>
				<th>Penta Kills</th>
			</tr>
			<?php
			$sth = $pdo->prepare("SELECT id, summonerName, totalSessionsPlayed, totalSessionsLost, totalSessionsWon, totalChampionKills, totalAssists, totalDeathsPerSession, totalDamageDealt,	totalDamageTaken,
				totalMinionKills, totalPentaKills,	ROUND(100 * totalSessionsWon / totalSessionsPlayed) as 'winPercentage',	ROUND((totalChampionKills +  totalAssists) / totalDeathsPerSession, 2) as 'kda'
				FROM {$server}_ranked_stats order by winPercentage DESC");
				$sth->execute(); ?>
			</thead>
			<?php while($row = $sth->fetch()) { ?>
				<tr>
					<td></td>
					<td><a href="http://<?php echo $server ?>.op.gg/summoner/userName=<?php echo $row['summonerName']; ?>"><?php echo $row['summonerName']; ?></a></td>
					<td><div class="progress"><div class="progress-bar progress-bar-info win_percentage" style="width: <?php echo $row['winPercentage'] ?>%"><?php echo $row['winPercentage'] ?>%</div></div></td>
					<td class="win"><?php echo $row['totalSessionsWon']; ?></td>
					<td class="loss"><?php echo $row['totalSessionsLost']; ?></td>
					<td class="kda"><strong><?php echo $row['kda']; ?></strong></td>
					<td><?php echo $row['totalChampionKills']; ?></td>
					<td><?php echo $row['totalDeathsPerSession']; ?></td>
					<td><?php echo $row['totalAssists']; ?></td>
					<td><?php echo $row['totalDamageDealt']; ?></td>
					<td><?php echo $row['totalDamageTaken']; ?></td>
					<td><?php echo $row['totalPentaKills'] ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
