<?php

return [
    'adminEmail' => 'admin@example.com',
    'googleMapsUrlOptions' => [
        'key' => 'AIzaSyDLF4hmSLjYvCMvPtqOSBj6VEXyFvWBUNk',
        'language' => 'id',
        'version' => '3.1.18',
     ],
    'googleMapsOptions' => [
        'mapTypeId' => 'roadmap',
        'tilt' => 45,
        'zoom' => 3,
        'center' => [
        	'lat' => 63,
        	'lng' => 100
        	],
    ],
    'googleMapsListeners' => [
    	'object' => 'infowindow',
    	'event' => 'domready',
    	'handler' => (new \yii\web\JsExpression('function() {
    		console.log("!!!");
    	}'))	
    ],
];
