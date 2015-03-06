<?php
  $a = array(
    'ВОДИТЕЛЬ КАМАЗА',
    'ЖИТЕЛЬ ВЛАДИМИРСКОЙ ОБЛАСТИ',
    'ЖИТЕЛЬ ХАБАРОВСКА',
    'МУЖЧИНА ИЗ САРАТОВА',
    'ЧЕРЕПОВЧАНИН',
    'МУЖЧИНА В ЧЕЛЯБИНСКЕ',
    'КЕМЕРОВЧАНИН',
    'МУЖЧИНА В КЕМЕРОВО',
  );
  $b = array(
    'ХОТЕЛ НАПУГАТЬ ЖЕНУ',
    'ХОТЕЛ УБИТЬ ТЁЩУ',
    'УГНАЛ ПОЕЗД',
    'УГНАЛ МАРШРУТКУ, НАБРАЛ ПАССАЖИРОВ',
    'УКРАЛ СОБАКУ И ЯЩИК ВОДКИ',
    'УКРАЛ ЯЩИК ВОДКИ',
    'РАЗВЕЛ КОСТЕР В МЕТРО',
    'ОБЛИЛСЯ БЕНЗИНОМ, ЗАГОРЕЛСЯ',
    'ПОДЖЕГ СВОИ ДОКУМЕНТЫ',
  );
  $c = array(
    'И ПРИ ЭТОМ, СМЕЯЛСЯ',
    'И УМЕР',
    'И ПОПРОСИЛ НЕ БЕСПОКОИТЬ',
    'И ЕДВА НЕ ЛИШИЛСЯ ПОЛОВОГО ОРГАНА',
    'ЧТОБЫ СОГРЕТЬСЯ',
  );

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>MAD News - Только драма</title>
  <meta content="article" property="og:type">
  <meta content="http://strangefoxes.ru/madnews/" property="og:url">
  <meta content="MAD News - Только драма" property="og:title">
  <meta content="Генератор самых драматических новостей в мире Breaking Mad. Сенсационные факты о Российской глубинке!" property="og:description">

</head>
<body style="margin:0;padding:0;">
<div style="width: 1px; height: 314px;" class="flow-wrapper">
  <div class="center-wrapper">
    <div id="Stage">

      <div id="Stage_c0" style="background: none repeat scroll 0 0 #000;
    bottom: auto;
    color: rgb(255, 255, 255);
    font-family: Arial Black,Gadget,sans-serif;
    font-size: 24px;
    font-weight: normal;
    left: 679px;
    margin: 0;
    padding: 5px 15px;
    position: absolute;
    right: auto;
    text-decoration: none;
    top: 393px;
    white-space: normal;" class="Stage_c0_id"><?php print $c[rand(0, count($c) - 1)] ?></div>
      <div id="Stage_b0" style="background: none repeat scroll 0 0 #000;
    bottom: auto;
    color: rgb(255, 255, 255);
    font-family: Arial Black,Gadget,sans-serif;
    font-size: 24px;
    font-weight: normal;
    left: 679px;
    margin: 0;
    padding: 5px 15px;
    position: absolute;
    right: auto;
    text-decoration: none;
    top: 340px;
    white-space: normal;" class="Stage_b0_id"><?php print $b[rand(0, count($b) - 1)] ?></div>
      <div id="Stage_a0" style="background: none repeat scroll 0 0 #000;
    bottom: auto;
    color: rgb(255, 255, 255);
    font-family: Arial Black,Gadget,sans-serif;
    font-size: 24px;
    font-weight: normal;
    left: 679px;
    margin: 0;
    padding: 5px 15px;
    position: absolute;
    right: auto;
    text-decoration: none;
    top: 288px;
    white-space: normal;" class="Stage_a0_id"><?php print $a[rand(0, count($a) - 1)] ?></div>

      <div id="Stage_refresh4" style="position: absolute; margin: 0px; left: 679px; top: 442px; width: 42px; height: 42px; right: auto; bottom: auto; background-image: url('refresh.jpg'); background-color: transparent; background-repeat: no-repeat; background-size: 100% 100%; cursor: pointer; background-position: 0px 0px; display: block;" class="Stage_refresh4_id"></div>
      <div id="Stage_refresh3" style="position: absolute; margin: 0px; width: 42px; height: 42px; left: 679px; top: 442px; right: auto; bottom: auto; z-index: 0; display: none;" class="Stage_refresh3_id">
        <div id="Stage_refresh3_refresh2" style="position: absolute; margin: 0px; left: 0px; top: 0px; width: 42px; height: 42px; right: auto; bottom: auto; background-image: url('refresh2.jpg'); background-color: transparent; background-repeat: no-repeat; background-size: 100% 100%; cursor: pointer; background-position: 0px 0px; transform: translate(0px, 0px) rotate(0deg) scale(1, 1);" class="Stage_refresh3_refresh2_id"></div>
      </div>

      </div>
      </div>
    </div>
  </div>
</div>

</body></html>