<?php
require_once '../config.php';
require_once '../vendor/autoload.php';

$server = $_GET['server'];
echo $server;
echo "<br>";
$queue = $_GET['queue'];
echo $queue;
echo "<br>";
$rank = $_GET['rank'];
echo $rank;
echo "<br>";
$leaguePoints = $_GET['lp'];
echo $leaguePoints;
echo "<br>";

$winRatio = $_GET['winRatio'];
echo $winRatio;
echo "<br>";

$role = $_GET['role'];
echo $role;
echo "<br>";

$dmgDealt = $_GET['dmgPerGame'];
echo $dmgDealt;
echo "<br>";

$kda = $_GET['kda'];
echo $kda;
echo "<br>";

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

  stats.totalChampionKills,
  stats.totalDeathsPerSession,
  stats.totalAssists,

  stats.totalSessionsWon,
  stats.totalSessionsLost,
  stats.id,

  ROUND(100 * stats.totalSessionsWon / (stats.totalSessionsWon + stats.totalSessionsLost)) as 'winPercentage',
  ROUND((stats.totalChampionKills +  stats.totalAssists) / stats.totalDeathsPerSession, 2) as 'kda'
FROM
  {$server}_{$queue} league
INNER JOIN
{$server}_ranked_stats stats ON league.playerOrTeamId = stats.id
WHERE
  winPercentage > $winRatio,
  AND kda > $kda
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
$sth->debugDumpParams();

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
    				</tr>
    				<?php
    			}
    		?>
     	</table>
