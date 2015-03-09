<?php

class MadNews {
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
    array('message' => 'В Ульяновске изготовитель гашиша', 'sex' => 'm'),
    array('message' => 'Пенсионер', 'sex' => 'm'),
    array('message' => 'Омичи', 'sex' => 'plural'),
    array('message' => 'В Казахстане четыре студентки', 'sex' => 'plural'),
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
      'вломился в чужой дом',
      'ограбил автомат с игрушками',
      'изнасиловал кондитера',
      'взорвал беседку с молодежью'
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
      'вломилась в чужой дом',
      'ограбила автомат с игрушками',
      'взорвала беседку с молодежью'
    ),
    'plural' => array(
      'УГНАЛи ПОЕЗД',
      'УГНАЛи МАРШРУТКУ, НАБРАЛи ПАССАЖИРОВ',
      'УКРАЛи СОБАКУ И ЯЩИК ВОДКИ',
      'УКРАЛи ЯЩИК ВОДКИ',
      'РАЗВЕЛи КОСТЕР В МЕТРО',
      'ПОДожгли СВОИ ДОКУМЕНТЫ',
      'заподозрили соседей в заговоре против них',
      'вломились в чужой дом',
      'ограбили автомат с игрушками',
      'изнасиловали кондитера',
      'взорвали беседку с молодежью',
      'пытались покончить с собой',
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
      default:
        return 'И УМЕР';
    }
  }

  public function __construct() {
    $this->seed = array_rand($this->predict);
    $this->sex = $this->predict[$this->seed]['sex'];
  }
}

$mad = new MadNews();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>MAD News - Только драма</title>
  <meta content="article" property="og:type">
  <meta content="http://strangefoxes.ru/madnews/" property="og:url">
  <meta content="MAD News - Только драма" property="og:title">
  <meta content="Генератор самых драматических новостей в мире Breaking Mad. Сенсационные факты о Российской глубинке!" property="og:description">
  <link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="center-wrapper">
  <div id="stage">

    <div id="stage_a0" class="stage"><p><?php print $mad->getNew(1); ?></p></div>
    <div id="stage_b0" class="stage"><p><?php print $mad->getNew(2); ?></p></div>
    <div id="stage_c0" class="stage"><p><?php print $mad->getNew(3); ?></p></div>
    <div id="stage_refresh" class="stage"><a href="/madnews/"></a></div>

  </div>
</div>

</body></html>