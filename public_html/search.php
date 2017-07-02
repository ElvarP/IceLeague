<?php
require_once '../config.php';
require_once '../vendor/autoload.php';
require_once 'header.php';
?>

<div class="container">
  <h1>SEARCH</h1>

  <div class="row">
    <div class="col-xs-12 col-md-4">
      <form id="search_input" class="testing new stuff" action="search_results.php" method="get">
        <label class="search-label" for="server">Server</label>
        <select class="form-control" name="server">
          <option value="eune">EUNE</option>
          <option value="euw">EUW</option>
          <option value="na">NA</option>
        </select>
        <label class="search-label" for="league">League</label>
        <select class="form-control" name="league">
          <option value="DIAMOND">Diamond</option>
          <option value="PLATINUM">Platinum</option>
          <option value="GOLD">Gold</option>
          <option value="SILVER">Silver</option>
          <option value="Bronze">Bronze</option>
        </select>
        <label class="search-label" for="queue">Queue</label>
        <select class="form-control" name="queue">
          <option value="ranked_solo_5x5">Ranked Solo (Summoners Rift)</option>
          <option value="ranked_flex_sr">Ranked Flex (Summoners Rift)</option>
          <option value="ranked_flex_tt">Ranked Flex (Twisted Treeline)</option>
        </select>
        <label class="search-label" for="mainRole">Main Role</label>
        <select class="form-control" name="role">
          <option value="top">Top</option>
          <option value="jungle">Jungle</option>
          <option value="mid">Mid</option>
          <option value="adc">Adc</option>
          <option value="support">Support</option>
        </select>
        <input type="submit" value="Submit" class="btn btn-primary search-button">
      </div>

      <div class="col-xs-12 col-md-8">
        <div id="search_output">
        </div>
      </div>

    </div>
  </form>

  <?php require_once 'footer.php'; ?>
