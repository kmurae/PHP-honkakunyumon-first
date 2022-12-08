<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\TaskSheet;

$tasks = [
  [
    'name' => 'パスポート更新',
    'priority' => '中',
    'progress' => '100%'
  ],
  [
    'name' => '食材の買い出し',
    'priority' => '高',
    'progress' => '50%'
  ],
  [
    'name' => 'イベント会場の下見',
    'priority' => '低',
    'progress' => '0%'
  ],
];

$taskSheet = new TaskSheet($tasks);

$taskSheet->getTaskSheet();
