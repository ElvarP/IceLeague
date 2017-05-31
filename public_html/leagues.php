<div class="container">

	<?php
	$showTable = True;
	$server = $_GET['server'];
	$queue = $_GET["queue"];
	if (!empty($server) && (!empty($queue)) && ($server == "eune") || ($server == "euw") || ($server == "na")) {

		if ($queue == "ranked_solo_5x5") {
			$ranked_queue = "Solo Queue";
		}
		elseif ($queue == "ranked_flex_sr") {
			$ranked_queue = "Flex Queue";
		}
		elseif ($queue == "ranked_flex_tt") {
			$ranked_queue = "Twisted Treeline";
		}
		else {
			$showTable = False;
			include('404.php');
		}
		echo "<h1 class='text-uppercase'>$server $ranked_queue</h1>";
	}
	else {
		$showTable = False;
		include('404.php');
	}


	if ($showTable = True) {
	?>
	<table class="leagues table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>Rank</th>
				<th>Summoner</th>
				<th>Tier</th>
				<th>LP</th>
				<th>Wins</th>
				<th>Losses</th>
				<th>Win %</th>
				<th>Most Played Champions</th>
			</tr>
		</thead>
		<?php
			$sth = $pdo->prepare("
			SELECT
				league.playerOrTeamId,
				league.playerOrTeamName,
				league.tier,
				league.division,
				league.leaguePoints,
				league.wins,
				league.losses,
				champion.id,
				champion.championName1,
				champion.championName2,
				champion.championName3,
				ROUND(100 * league.wins / (league.wins + league.losses)) as 'winPercentage'
			FROM
				{$server}_{$queue} league
			INNER JOIN
				{$server}_most_played_champions champion ON league.playerOrTeamId = champion.id
			ORDER BY CASE
				when league.tier = 'CHALLENGER' then 1
				when league.tier = 'MASTER' then 2
				when league.tier = 'DIAMOND' then 3
				when league.tier = 'PLATINUM' then 4
				when league.tier = 'GOLD' then 5
				when league.tier = 'SILVER' then 6
				when league.tier = 'BRONZE' then 7
				End,
				league.tier ASC, league.division ASC, league.leaguePoints DESC");
			$sth->execute();

			$rank = 0;
			while($row = $sth->fetch()) {
				?>
				<tr>
					<td><?php echo $rank += 1; ?></td>
					<td><a href="http://<?php echo $server ?>.op.gg/summoner/userName=<?php echo $row['playerOrTeamName']; ?>"><?php echo $row['playerOrTeamName']; ?></a></td>
					<td><?php echo $row['tier']; ?> <?php echo $row['division']; ?></td>
					<td><?php echo $row['leaguePoints']; ?></td>
					<td class="win"><?php echo $row['wins']; ?></td>
					<td class="loss"><?php echo $row['losses']; ?></td>
					<td><div class="progress"><div class="progress-bar progress-bar-info win_percentage" style="width: <?php echo $row['winPercentage'] ?>%"><?php echo $row['winPercentage'] ?>%</div></div></td>
					<td>
						<img src="http://ddragon.leagueoflegends.com/cdn/7.4.3/img/champion/<?php echo $row['championName1']; ?>.png" alt="<?php echo $row['championName1']; ?>" height="30" width="30">
						<img src="http://ddragon.leagueoflegends.com/cdn/7.4.3/img/champion/<?php echo $row['championName2']; ?>.png" alt="<?php echo $row['championName2']; ?>" height="30" width="30">
						<img src="http://ddragon.leagueoflegends.com/cdn/7.4.3/img/champion/<?php echo $row['championName3']; ?>.png" alt="<?php echo $row['championName3']; ?>" height="30" width="30">
					</td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</div>
