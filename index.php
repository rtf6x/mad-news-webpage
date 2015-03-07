<?php

class madnews {
  private $sex;
  private $seed;
  private $predict = array(
    array('message' => 'ВОДИТЕЛЬ КАМАЗА', 'sex' => 'm'),
    array('message' => 'ЖИТЕЛЬ ВЛАДИМИРСКОЙ ОБЛАСТИ', 'sex' => 'm'),
    array('message' => 'ЖИТЕЛЬ ХАБАРОВСКА', 'sex' => 'm'),
    array('message' => 'МУЖЧИНА ИЗ САРАТОВА', 'sex' => 'm'),
    array('message' => 'ЧЕРЕПОВЧАНИН', 'sex' => 'm'),
    array('message' => 'МУЖЧИНА В ЧЕЛЯБИНСКЕ', 'sex' => 'm'),
    array('message' => 'КЕМЕРОВЧАНИН', 'sex' => 'm'),
    array('message' => 'МУЖЧИНА В КЕМЕРОВО', 'sex' => 'm'),
    array('message' => 'Житель Кузбасса', 'sex' => 'm'),
    array('message' => 'Житель Ярославской области', 'sex' => 'm'),
    array('message' => 'Селянин', 'sex' => 'm'),
    array('message' => 'Омская полиция', 'sex' => 'f'),
    array('message' => 'Омич, стрелявший в прохожих из окна', 'sex' => 'm'),
    array('message' => 'Депутат Братска', 'sex' => 'm'),
    array('message' => 'Группа томичей', 'sex' => 'f'),
    array('message' => 'В Волгограде двое чеченцев', 'sex' => 'plural'),
  );
  private $action = array(
    'm' => array(
      'ХОТЕЛ НАПУГАТЬ ЖЕНУ',
      'ХОТЕЛ УБИТЬ ТЁЩУ',
      'УГНАЛ ПОЕЗД',
      'УГНАЛ МАРШРУТКУ, НАБРАЛ ПАССАЖИРОВ',
      'УКРАЛ СОБАКУ И ЯЩИК ВОДКИ',
      'УКРАЛ ЯЩИК ВОДКИ',
      'РАЗВЕЛ КОСТЕР В МЕТРО',
      'ОБЛИЛСЯ БЕНЗИНОМ, ЗАГОРЕЛСЯ',
      'ПОДЖЕГ СВОИ ДОКУМЕНТЫ',
      'заподозрил соседей в заговоре против него',
      'взял в заложницы тещу',
      'вломился в чужой дом'
    ),
    'f' => array(
      'ХОТЕЛа НАПУГАТЬ мужа',
      'ХОТЕЛа УБИТЬ свекровь',
      'УГНАЛа ПОЕЗД',
      'УГНАЛа МАРШРУТКУ, НАБРАЛа ПАССАЖИРОВ',
      'УКРАЛа СОБАКУ И ЯЩИК ВОДКИ',
      'УКРАЛа ЯЩИК ВОДКИ',
      'РАЗВЕЛа КОСТЕР В МЕТРО',
      'ОБЛИЛась БЕНЗИНОМ, ЗАГОРЕЛась',
      'ПОДожгла СВОИ ДОКУМЕНТЫ',
      'заподозрила соседей в заговоре против нее',
      'взяла в заложницы тещу',
      'вломилась в чужой дом'
    ),
    'plural' => array(
      'УГНАЛи ПОЕЗД',
      'УГНАЛи МАРШРУТКУ, НАБРАЛи ПАССАЖИРОВ',
      'УКРАЛи СОБАКУ И ЯЩИК ВОДКИ',
      'УКРАЛи ЯЩИК ВОДКИ',
      'РАЗВЕЛи КОСТЕР В МЕТРО',
      'ПОДожгли СВОИ ДОКУМЕНТЫ',
      'заподозрили соседей в заговоре против них',
      'вломились в чужой дом'
    ),
    
  );
  private $conclusion = array(
    'm' => array(
      'И ПРИ ЭТОМ СМЕЯЛСЯ',
      'И УМЕР',
      'И ПОПРОСИЛ НЕ БЕСПОКОИТЬ',
      'И ЕДВА НЕ ЛИШИЛСЯ ПОЛОВОГО ОРГАНА',
      'ЧТОБЫ СОГРЕТЬСЯ',
      'чтобы вернуть жену',
      'и просил у Путина винтовку'
    ),
    'f' => array(
      'И ПРИ ЭТОМ СМЕЯЛась',
      'И УМЕРла',
      'И ПОПРОСИЛа НЕ БЕСПОКОИТЬ',
      'ЧТОБЫ СОГРЕТЬСЯ',
      'чтобы вернуть мужа',
      'и просила у Путина винтовку'
    ),
    'plural' => array(
      'И ПРИ ЭТОМ СМЕЯЛись',
      'И УМЕРли',
      'И ПОПРОСИЛи НЕ БЕСПОКОИТЬ',
      'И ЕДВА НЕ ЛИШИЛись ПОЛОВых ОРГАНов',
      'ЧТОБЫ СОГРЕТЬСЯ',
    ),
  );
  public function getNew($stage) {
    switch ($stage) {
      case 1:
        return mb_strtoupper($this->predict[$this->seed]['message'], 'utf-8');
      case 2:
        return mb_strtoupper($this->action[$this->sex][array_rand($this->action[$this->sex])], 'utf-8');
      case 3:
        return mb_strtoupper($this->conclusion[$this->sex][array_rand($this->conclusion[$this->sex])], 'utf-8');
    }
  }

  public function __construct() {
    $this->seed = array_rand($this->predict);
    $this->sex = $this->predict[$this->seed]['sex'];
  }
}

$mad = new madnews();

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
    white-space: normal;" class="Stage_c0_id"><?php print $mad->getNew(3); ?></div>
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
    white-space: normal;" class="Stage_b0_id"><?php print $mad->getNew(2); ?></div>
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
    white-space: normal;" class="Stage_a0_id"><?php print $mad->getNew(1); ?></div>

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