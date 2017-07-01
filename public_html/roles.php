<div class="container">

	<?php
	$server = $_GET['server'];
	if (in_array($server, $supported_league_servers)) {

		$showTable = True;
		echo "<h1 class='text-uppercase'>$server main roles</h1>";

	}
	else {
		$showTable = False;
		include('404.php');
	}

	if ($showTable == True) {
	?>
	<table class="roles table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>Summoner</th>
				<th>Top</th>
				<th>Jungle</th>
				<th>Mid</th>
				<th>Adc</th>
				<th>Support</th>
        <th>Samtals</th>
			</tr>
		</thead>
		<?php
			$sth = $pdo->prepare("
			SELECT
				id,
				summonerName,
				totalGamesPlayed,
				topGamesPlayed,
				jungleGamesPlayed,
				midGamesPlayed,
				adcGamesPlayed,
				supportGamesPlayed
			FROM
				{$server}_roles
			ORDER BY
				totalGamesPlayed DESC");
			$sth->execute();

			while($row = $sth->fetch()) {
				?>
				<tr>
					<td><a href="http://<?php echo $server ?>.op.gg/summoner/userName=<?php echo $row['summonerName']; ?>"><?php echo $row['summonerName']; ?></a></td>
					<td><?php echo $row['topGamesPlayed']; ?></td>
					<td><?php echo $row['jungleGamesPlayed']; ?></td>
					<td><?php echo $row['midGamesPlayed']; ?></td>
					<td><?php echo $row['adcGamesPlayed']; ?></td>
					<td><?php echo $row['supportGamesPlayed']; ?></td>
          <td><?php echo $row['totalGamesPlayed']; ?></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</div>
