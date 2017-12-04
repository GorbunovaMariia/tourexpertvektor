<?php

use yii2mod\google\maps\markers\GoogleMaps;

/* @var $this yii\web\View */

$this->title = 'ТурЭксперт';
?>
<div class="site-index">


    <div class="body-content">
    	<?php
    	$userLocation = [];
    	foreach(
    		(new \yii\db\Query())
    		->select(['ID','ins_org_name_reestr','ins_org_address','ins_org_post_address','inn','rating','ranking_with_abroad','ranking_without_abroad'])
    		->from('insurance_company')->all() as $row)
    		{
    	$touroperators = (new \yii\db\Query())->select('short_name')->from('touroperator')
    						->where(['id_insurance_company'=>$row['ID']])
    						->limit(3)->all();
    						// print_r($touroperators);
    						$tourstring =$touroperators[0]['short_name'].
    						(isset($touroperators[1]['short_name']) ? ', '.$touroperators[1]['short_name'] : '').
    						(isset($touroperators[2]['short_name']) ? ', '.$touroperators[2]['short_name'] : '');
    						$tourstring = $tourstring.' <a href = "/insurance?id='.$row['ID'].'">просмотреть все...</a>';
    	//ВИКА -- блок 'html_content' - это твой. туда нужно засунуть верстку всплывающего окна
    	$userLocation[]=			        
    				[
			            'location' => [
			                'address' => $row['ins_org_address'],
			                'country' => 'Russia',
			            ],
			            'htmlContent' =>  '<h2><a href = "/insurance?id='.$row['ID'].'">'.$row['ins_org_name_reestr'].'</a></h2>
			            					</br><h3>Адрес:</h3>'.$row['ins_org_address'].
			            					'</br><h3>Почтовый адрес:</h3>'.$row['ins_org_post_address'].
			            					'</br><h3>ИНН:</h3>'.$row['inn'].
			            					'</br><h3>Рейтинг*:</h3>'.$row['rating'].
			            					'</br><h3>Рэнкинг с учетом ВЗГ**:</h3>'.$row['ranking_with_abroad'].
			            					'</br><h3>Рэнкинг без учета ВЗГ***:</h3>'.$row['ranking_without_abroad'].
			            					'</br><h3>Страхующиеся туроператоры:</h3>'.$tourstring,
			        ];
    }
    	
			echo GoogleMaps::widget([
			    'userLocations' => $userLocation
			]);
		?>
    </div>
   <!--Вставь сюда описание рэйтингов и рэнкингов + ссылки на страницы в Эксперт РА-->
    
	<div class="jumbotron">
        <h1 style="color:#f45d05;">ТурЭксперт рекомендует</h1>
<p>Теперь вы можете быстро узнать информацию о страхующей вас компании.</p>
<p>Вся информация представлена в удобной визуальной форме - на карте. Цвет “флажка” соответствует цвету региона, что позволяет удобно и быстро ориентироваться на карте.</p>
<p><em>“...спасение утопающих - дело рук самих утопающих...”</br>
из романа “Двенадцать стульев” (гл.34)</em></p>
    </div>

</div>
