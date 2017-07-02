<?php
require_once '../config.php';
require_once '../vendor/autoload.php';
$server = $_GET['server'];
$queue = $_GET['queue'];
$league = $_GET['league'];
$role = $_GET['role'];
?>
<table id="table_search" class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Summoner</th>
      <th>Main</th>
      <th>Ranked</th>
      <th>Wins/Losses</th>
      <th>Win %</th>
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

  stats.id,
  stats.totalChampionKills,
  stats.totalDeathsPerSession,
  stats.totalAssists,

  roles.id,
  roles.mainRole,

  ROUND(100 * stats.totalSessionsWon / (stats.totalSessionsWon + stats.totalSessionsLost)) as 'winPercentage',
  ROUND((stats.totalChampionKills +  stats.totalAssists) / stats.totalDeathsPerSession, 2) as 'kda'
FROM {$server}_{$queue} league
  JOIN {$server}_ranked_stats stats
    ON stats.id = league.playerOrTeamId
  JOIN {$server}_roles roles
    ON roles.id = stats.id
HAVING
  league.tier = '$league' AND
  roles.mainRole = '$role'
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
              <td><?php echo strtoupper($row['mainRole']); ?></td>
              <td><?php echo $row['tier']; ?> <?php echo $row['division']; ?> <span class="lp">(<?php echo $row['leaguePoints']; ?> LP)</span></td>
    					<td><span class="win"><?php echo $row['wins']; ?></span> / <span class="loss"><?php echo $row['losses']; ?></span></td>
    					<td><div class="progress"><div class="progress-bar progress-bar-info win_percentage" style="width: <?php echo $row['winPercentage'] ?>%"><?php echo $row['winPercentage'] ?>%</div></div></td>
    				</tr>
    				<?php
    			}
    		?>
     	</table>
