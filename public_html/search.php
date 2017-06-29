<?php
require_once '../config.php';
require_once '../vendor/autoload.php';
require_once 'header.php';
?>

<div class="container">
  <h1>SEARCH</h1>


  <form id="search_input" class="testing new stuff" action="search_results.php" method="get">
    <p>

      PLACEHOLDER TILL I FIX SERVER PICKING
      <select name="server">
        <option value="eune">eune</option>
        <option value="euw">euw</option>
        <option value="na">na</option>
      </select>
      PLACEHOLDER TILL I FIX SOMETHING ELSE LOL..
      <select name="queue">
        <option value="ranked_flex_sr">flex</option>
        <option value="ranked_solo_5x5">soloq</option>
        <option value="ranked_flex_tt">twisted treeline</option>
        <option value="ranked_stats">Every queue counted together</option>
      </select>

      I'm looking for a player who's in
      <select name="rank">
        <option value="diamond">Diamond+</option>
        <option value="platinum">Platinum+</option>
        <option value="gold">Gold+</option>
      </select>

      Has

      <select name="lp">
        <option value="0">0+</option>
        <option value="10">10+</option>
        <option value="20">20+</option>
        <option value="30">30+</option>
      </select>

      league points, Has a

      <select name="winRatio">
        <option value="10">10%+</option>
        <option value="20">20%+</option>
        <option value="30">30%+</option>
        <option value="40">40%+</option>
        <option value="50">50%+</option>
        <option value="60">60%+</option>
        <option value="70">70%+</option>
        <option value="80">80%+</option>
        <option value="90">90%+</option>

      </select>
      Win ratio, Plays
      <select name="role">
        <option value="top">TOP</option>
        <option value="jungle">JUNGLE</option>
        <option value="mid">MID</option>
        <option value="adc">ADC</option>
        <option value="support">SUPPORT</option>
      </select>
      does on average
      <select name="dmgPerGame">
        <option value="1000">1.000+</option>
        <option value="2000">2.000+</option>
        <option value="3000">3.000+</option>
        <option value="4000">4.000+</option>
        <option value="5000">5.000+</option>
      </select>
      damage per game, and has a KDA of
      <select name="kda">
        <option value="1.00">1.0+</option>
        <option value="1.25">1.25+</option>
        <option value="1.50">1.50+</option>
        <option value="1.75">1.75+</option>
        <option value="2.00">2.00+</option>

      </select>
    </p>
    <input type="submit" value="Submit">

  </form>

<div id="search_output">



</div>

</div>
<?php require_once 'footer.php'; ?>
