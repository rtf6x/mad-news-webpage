var navigatorLang = navigator.language || navigator.userLanguage || '';
var lang = navigatorLang.toLowerCase().indexOf('ru') > -1 ? 'ru' : 'en';

document.addEventListener('DOMContentLoaded', function (event) {
  var madness = new MadNews(lang);
  GetMad();
  document.querySelector('#stage_refresh a').addEventListener('click', function (e) {
    GetMad();
    return false;
  });

  function GetMad() {
    madness.generate();
    document.querySelector('#stage_a0 p').innerText = madness.getPerson();
    document.querySelector('#stage_b0 p').innerText = madness.getAction();
    document.querySelector('#stage_c0 p').innerText = madness.getConclusion();
  }
});
