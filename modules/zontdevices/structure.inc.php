<?php

$this->device_types = array(
    'T100' => array(
        'TITLE' => 'ZONT H-1/H-1V',
        'manual' => '',
        'commands' =>
            array(
                'thermostat_ext_mode'=>array(
                    'CANSET'=>1,
                ),
                'thermostat_mode'=>array(
                    'CANSET'=>1,
                    'COMMENTS'=>'idle,comfort,econom,schedule'
                ),

            )
    ),
    'T102' => array(
        'TITLE' => 'ZONT H-2',
        'manual' => '',
        'commands' =>
            array(
                'thermostat_ext_mode'=>array(
                    'CANSET'=>1,
                ),
                'thermostat_mode'=>array(
                    'CANSET'=>1,
                    'COMMENTS'=>'idle,comfort,econom,schedule'
                ),

            )
    ),
    'GTW-100' => array(
        'TITLE' => 'ZONT EXPERT',
        'manual' => '',
        'commands' =>
            array(
                'gtw_mode'=>array(
                    'CANSET'=>1,
                    'COMMENTS'=>'off — Выключен, water — Водонагрев, floor — Теплый пол, air — Комнатный, week — Недельный, party — Вечеринка, econom — Эконом, workday — Рабочий день, weekend — Выходной день',
                ),
                /*
                'gtw_gvs'=>array(
                    'CANSET'=>1,
                    'COMMENTS'=>'1/(empty)'
                )
                */
            )
    ),
    'H2000' => array (
        'TITLE'=> 'ZONT H-2000',
        'manual' => '',
        'commands' =>array(
                'thermostat_ext_mode'=>array(
                    'CANSET'=>1,
                ),
                'thermostat_mode'=>array(
                    'CANSET'=>1,
                    'COMMENTS'=>'idle,comfort,econom,schedule'
                ),

            )
    ),


    'H2000+' => array (
        'TITLE'=> 'ZONT H-2000+',
        'manual' => '',
        'commands' =>array(
                'heating_circuits_0'=>array(
                'CANSET'=>1,
                ),
                'heating_circuits_1'=>array(
                    'CANSET'=>1,
                ),
                'heating_circuits_2'=>array(
                    'CANSET'=>1,
                ),
                'heating_circuits_3'=>array(
                    'CANSET'=>1,
                ),
                'heating_circuits_4'=>array(
                    'CANSET'=>1,
                ),
                'heating_circuits_5'=>array(
                    'CANSET'=>1,
                ),
                'heating_circuits_6'=>array(
                    'CANSET'=>1,
                ),
                'heating_circuits_7'=>array(
                    'CANSET'=>1,
                ),
                'heating_circuits_8'=>array(
                    'CANSET'=>1,
                ),
                'heating_circuits_9'=>array(
                    'CANSET'=>1,
                ),
            )
    ),
);

foreach($this->device_types as $k=>$v) {
    if ($v['copy']) {
        foreach($v as $kv=>$vv) {
            if (!isset($this->device_types[$k][$kv])) {
                $this->device_types[$k][$kv]=$this->device_types[$v['copy']][$kv];
            }
        }
    }
}