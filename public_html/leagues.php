<div class="container">

	<?php
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
			include '404.php';
		}

		echo "<h1 class='text-uppercase'>$server $ranked_queue</h1>";

	}
	else {
		include('404.php');
	}
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
			<?php $sth = $pdo->prepare("SELECT leagues.playerOrTeamId, leagues.playerOrTeamName, leagues.tier, leagues.division, leagues.leaguePoints, leagues.wins, leagues.losses,
				champions.id, champions.championName1, champions.championName2, champions.championName3, ROUND(100 * leagues.wins / (leagues.wins + leagues.losses)) as 'winPercentage'
				FROM {$server}_{$queue} leagues INNER JOIN {$server}_most_played_champions champions ON leagues.playerOrTeamId = champions.id
				order by case
				when leagues.tier = 'CHALLENGER' then 1
				when leagues.tier = 'MASTER' then 2
				when leagues.tier = 'DIAMOND' then 3
				when leagues.tier = 'PLATINUM' then 4
				when leagues.tier = 'GOLD' then 5
				when leagues.tier = 'SILVER' then 6
				when leagues.tier = 'BRONZE' then 7
				End,
				leagues.tier ASC, leagues.division ASC, leagues.leaguePoints DESC");
				$sth->execute(); ?>
			</thead>
			<?php $rank = 0; while($row = $sth->fetch()) { ?>
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
				<?php } ?>
			</table>
		</div>
		<?php include 'footer.php'; ?>
