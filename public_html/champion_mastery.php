<div class="container">

	<?php
	$showTable = True;
	$server = $_GET['server'];
	if (!empty($server) && ($server == "eune") || ($server == "euw") || ($server == "na")) {
		echo "<h1 class='text-uppercase'>$server Ranked Stats</h1>";
	}
	else {
		include('404.php');
		$showTable = False;
	}
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
		if ($showTable = True) {

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
						<img src="http://ddragon.leagueoflegends.com/cdn/7.4.3/img/champion/<?php echo $row['championName1']; ?>.png" alt="<?php echo $row['championName1']; ?>" heigh="30px" width="30px">
						<img src="http://ddragon.leagueoflegends.com/cdn/7.4.3/img/champion/<?php echo $row['championName3']; ?>.png" alt="<?php echo $row['championName2']; ?>" heigh="30px" width="30px">
						<img src="http://ddragon.leagueoflegends.com/cdn/7.4.3/img/champion/<?php echo $row['championName2']; ?>.png" alt="<?php echo $row['championName3']; ?>" heigh="30px" width="30px">
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
