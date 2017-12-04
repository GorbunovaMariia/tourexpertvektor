<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Рейтинг страхующих фирм';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact"  style="font-size:18px">
    <h1 style="color:#f45d05;"><?= Html::encode($this->title) ?></h1>
<table class="fortable">
<tr>
  <th  colspan="8" style="font-size: 20px; background:#ffffff;">
Рейтинги финансовой надежности страховых компаний</th>
  </tr>
  <tr>
    <th>Компания</th>
    <th>Рейтинг</th>
    <th>Дата</th>
    <th>Прогноз</th>
  </tr>
  <tr>
    <td>Абсолют<br>  Cтрахование</td>
    <td>ruA+</td>
    <td>21.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Адонис</td>
    <td>ruBB+</td>
    <td>04.07.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>АИГ</td>
    <td>ruAA</td>
    <td>25.05.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>АльфаСтрахование</td>
    <td>ruAA</td>
    <td>12.09.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Страховая компания «Альянс»</td>
    <td>ruAA</td>
    <td>31.07.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>АРСЕНАЛЪ</td>
    <td>ruBB-</td>
    <td>12.05.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Страховая группа «АСКО»</td>
    <td>ruB-</td>
    <td>12.10.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Астро-Волга</td>
    <td>ruBBB</td>
    <td>11.05.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Британский Страховой Дом</td>
    <td>ruB-</td>
    <td>14.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>ВЕРНА</td>
    <td>ruCCC</td>
    <td>25.09.2017</td>
    <td>Негативный</td>
  </tr>
  <tr>
    <td>ВСК</td>
    <td>ruAA</td>
    <td>27.11.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>ВТБ Страхование</td>
    <td>ruAAA</td>
    <td>27.11.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Страховая Компания «Гелиос»</td>
    <td>ruBB-</td>
    <td>18.07.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Геополис</td>
    <td>ruBBB-</td>
    <td>20.09.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Гранта</td>
    <td>ruBB-</td>
    <td>16.10.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Д2 Страхование</td>
    <td>ruBBB+</td>
    <td>04.07.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>ЕВРОИНС</td>
    <td>ruBB+</td>
    <td>25.09.2017</td>
    <td>Развивающийся</td>
  </tr>
  <tr>
    <td>ЕРВ Туристическое Страхование</td>
    <td>ruA+</td>
    <td>28.04.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Зетта Страхование</td>
    <td>ruA+</td>
    <td>23.11.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>СПАО «Ингосстрах»</td>
    <td>ruAAA</td>
    <td>03.07.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Капитал Ре</td>
    <td>ruBBB</td>
    <td>09.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Капитал-полис</td>
    <td>ruBBB+</td>
    <td>13.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Капитал Страхование</td>
    <td>ruA</td>
    <td>13.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Либерти Страхование</td>
    <td>ruAA+</td>
    <td>01.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>МАКС</td>
    <td>ruAA-</td>
    <td>14.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Медэкспресс</td>
    <td>ruA+</td>
    <td>31.05.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>НАСКО</td>
    <td>ruB</td>
    <td>01.11.2017</td>
    <td>Развивающийся</td>
  </tr>
  <tr>
    <td>СК «Независимая страховая<br>  группа»</td>
    <td>ruA</td>
    <td>21.11.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Объединенная страховая<br>  компания</td>
    <td>ruBBB</td>
    <td>11.07.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Орбита</td>
    <td>ruCCC</td>
    <td>06.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Пари</td>
    <td>ruA-</td>
    <td>11.05.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Паритет-СК</td>
    <td>ruBB</td>
    <td>28.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Поволжский страховой альянс</td>
    <td>ruCCC</td>
    <td>25.05.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>ПОЛИС-ГАРАНТ</td>
    <td>ruBBB</td>
    <td>13.10.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Помощь</td>
    <td>ruCCC</td>
    <td>08.09.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Проминстрах</td>
    <td>ruBB-</td>
    <td>23.08.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Группа Ренессанс Страхование</td>
    <td>ruBBB</td>
    <td>17.07.2017</td>
    <td>Развивающийся</td>
  </tr>
  <tr>
    <td>РЕСО-Гарантия</td>
    <td>ruAA</td>
    <td>29.08.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>ПАО СК «Росгосстрах»</td>
    <td>ruBBB+</td>
    <td>16.10.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>РСХБ-Страхование</td>
    <td>ruAA</td>
    <td>14.09.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Сбербанк страхование</td>
    <td>ruAA</td>
    <td>23.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>СК "Селекта"</td>
    <td>ruRD</td>
    <td>19.05.2017</td>
    <td>Негативный</td>
  </tr>
  <tr>
    <td>Сибирский Спас</td>
    <td>ruBBB+</td>
    <td>01.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>СМП-Страхование</td>
    <td>ruBB</td>
    <td>23.11.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>СОГАЗ</td>
    <td>ruAAA</td>
    <td>04.07.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Согласие</td>
    <td>ruBBB</td>
    <td>02.08.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Спасские ворота</td>
    <td>ruA-</td>
    <td>22.05.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>РСК «Стерх»</td>
    <td>ruBBB+</td>
    <td>14.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Страховая бизнес группа</td>
    <td>ruBB+</td>
    <td>13.10.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Страховое общество<br>  «Сургутнефтегаз»</td>
    <td>ruA+</td>
    <td>23.05.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Тинькофф Страхование</td>
    <td>ruBBB-</td>
    <td>13.07.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>ТИТ</td>
    <td>ruBBB-</td>
    <td>22.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Уралсиб Страхование</td>
    <td>ruBB-</td>
    <td>19.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Чрезвычайная страховая<br>  компания</td>
    <td>ruA</td>
    <td>12.05.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Чулпан</td>
    <td>ruA+</td>
    <td>25.05.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>Энергогарант</td>
    <td>ruAA-</td>
    <td>05.06.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>САО ЭРГО</td>
    <td>ruAA+</td>
    <td>11.07.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>ГСК «Югория»</td>
    <td>ruBB+</td>
    <td>25.09.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>СК ЮЖУРАЛ-АСКО</td>
    <td>ruBB</td>
    <td>30.05.2017</td>
    <td>Стабильный</td>
  </tr>
  <tr>
    <td>ЮжУралЖАСО</td>
    <td>ruCCC</td>
    <td>28.09.2017</td>
    <td>Негативный</td>
  </tr>
  <tr>
    <td>Якорь</td>
    <td>ruCCC</td>
    <td>28.06.2017</td>
    <td>Стабильный</td>
  </tr>
</table>
<p style="float:right;font-size: 14px;"><em>Источник: RAEX (Эксперт РА)</em></p>
</div>
