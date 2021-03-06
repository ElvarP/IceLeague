<div class="container">

	<?php
	$server = $_GET['server'];
	if (in_array($server, $supported_league_servers)) {

		$showTable = True;
		echo "<h1 class='text-uppercase'>$server champion mastery</h1>";

	}
	else {
		$showTable = False;
		include('404.php');
	}

	if ($showTable == True) {
	?>
	<table class="championmastery table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Summoner</th>
				<th>Total Mastery Points</th>
				<th>Champions</th>
				<th>#1 Points</th>
				<th>#2 Points</th>
				<th>#3 Points</th>
			</tr>
		</thead>
		<?php
			$sth = $pdo->prepare("
			SELECT
				id,
				summonerName,
				championName1,
				championPoints1,
				championName2,
				championPoints2,
				championName3,
				championPoints3,
				(championPoints1 + championPoints2 + championPoints3) as 'totalMasteryPoints'
			FROM
				{$server}_champion_mastery
			ORDER BY
				totalMasteryPoints DESC");
			$sth->execute();

			while($row = $sth->fetch()) {
				?>
				<tr>
					<td></td>
					<td><a href="http://<?php echo $server ?>.op.gg/summoner/userName=<?php echo $row['summonerName']; ?>"><?php echo $row['summonerName']; ?></a></td>
					<td><?php echo $row['totalMasteryPoints']; ?></td>
					<td>
						<img src="http://ddragon.leagueoflegends.com/cdn/<?php echo $data_dragon_version; ?>/img/champion/<?php echo $row['championName1']; ?>.png" alt="<?php echo $row['championName1']; ?>" height="30">
						<img src="http://ddragon.leagueoflegends.com/cdn/<?php echo $data_dragon_version; ?>/img/champion/<?php echo $row['championName2']; ?>.png" alt="<?php echo $row['championName2']; ?>" height="30">
						<img src="http://ddragon.leagueoflegends.com/cdn/<?php echo $data_dragon_version; ?>/img/champion/<?php echo $row['championName3']; ?>.png" alt="<?php echo $row['championName3']; ?>" height="30">
					</td>
					<td><?php echo $row['championPoints1']; ?></td>
					<td><?php echo $row['championPoints2']; ?></td>
					<td><?php echo $row['championPoints3']; ?></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</div>
