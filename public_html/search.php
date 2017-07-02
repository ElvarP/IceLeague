<?php
require_once '../config.php';
require_once '../vendor/autoload.php';

  $server = $_GET['server'];
  $queue = $_GET['queue'];
  $league = $_GET['league'];
  $role = $_GET['role'];
?>

<div class="container">
  <h1>SEARCH</h1>

  <div class="row">
    <div class="col-xs-12 col-md-4">
      <form id="search_input" class="testing new stuff" action="index.php" method="get">
        <input type="hidden" name="sida" value="search" />

        <label class="search-label" for="server">Server</label>
        <select class="form-control" name="server">
          <option value="eune" <?php if($server=="eune"){echo "selected";}?> >EUNE</option>
          <option value="euw" <?php if($server=="euw"){echo "selected";}?> >EUW</option>
          <option value="na" <?php if($server=="na"){echo "selected";}?> >NA</option>
        </select>
        <label class="search-label" for="league">League</label>
        <select class="form-control" name="league">
          <option value="DIAMOND" <?php if($league=="DIAMOND"){echo "selected";}?> >Diamond</option>
          <option value="PLATINUM" <?php if($league=="PLATINUM"){echo "selected";}?> >Platinum</option>
          <option value="GOLD" <?php if($league=="GOLD"){echo "selected";}?> >Gold</option>
          <option value="SILVER" <?php if($league=="SILVER"){echo "selected";}?> >Silver</option>
          <option value="BRONZE" <?php if($league=="BRONZE"){echo "selected";}?> >Bronze</option>
        </select>
        <label class="search-label" for="queue">Queue</label>
        <select class="form-control" name="queue">
          <option value="ranked_solo_5x5" <?php if($queue=="ranked_solo_5x5"){echo "selected";}?> >Ranked Solo (Summoners Rift)</option>
          <option value="ranked_flex_sr" <?php if($queue=="ranked_flex_sr"){echo "selected";}?> >Ranked Flex (Summoners Rift)</option>
          <option value="ranked_flex_tt" <?php if($queue=="ranked_flex_tt"){echo "selected";}?> >Ranked Flex (Twisted Treeline)</option>
        </select>
        <label class="search-label" for="mainRole">Main Role</label>
        <select class="form-control" name="role">
          <option value="top" <?php if($role=="top"){echo "selected";}?> >Top</option>
          <option value="jungle" <?php if($role=="jungle"){echo "selected";}?> >Jungle</option>
          <option value="mid" <?php if($role=="mid"){echo "selected";}?> >Mid</option>
          <option value="adc" <?php if($role=="adc"){echo "selected";}?> >Adc</option>
          <option value="support" <?php if($role=="support"){echo "selected";}?> >Support</option>
        </select>
        <input type="submit" value="Submit" class="btn btn-primary search-button">
      </div>

      <div class="col-xs-12 col-md-8">
        <div id="search_output">
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
            if ($row = $sth->rowCount() > 0) {
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
                $rank = 0;
                while ($row = $sth->fetch()) {
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
              } else {
                ?>
                <div class="jumbotron">
                  <h1>No players found</h1>
                  <p>Try changing the search parameters</p>
                </div>
                <?php
              }
              ?>
            </table>
          </div>
        </div>
      </div>
    </form>
