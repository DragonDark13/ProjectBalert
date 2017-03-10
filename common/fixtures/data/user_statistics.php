<?php

$statistics = [];
$currentDate = date('Y-m-d H:i:s');
$stop_date = date('Y-m-d H:i:s', strtotime($currentDate . ' +1 day'));
for ($i=0;$i<20;$i++) {
    $statistics[] =
        [
            'id' => $i+1,
            'user_id' => 2,
            'plan' => rand(0,1),
            'action' => rand(0,1),
            'learning' => rand(0,1),
            'exercises' => rand(0,1),
            'relaxing' => rand(0,1),
            'thinking' => rand(0,1),
            'created_at' => strtotime($currentDate . ' -' . $i .' day')
        ];
}
return $statistics;
