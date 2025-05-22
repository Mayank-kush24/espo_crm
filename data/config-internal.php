<?php
return [
  'database' => [
    'host' => '192.168.1.60',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espocrm_dev',
    'user' => 'postgres',
    'password' => 'h2s@2025',
    'platform' => 'Postgresql'
  ],
  'smtpPassword' => NULL,
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => false,
    'sql' => false,
    'sqlFailed' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => true,
  'cleanupAppLogPeriod' => '30 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1747733416.030215,
  'cryptKey' => '5ff67196c2bf20469c5301fd73e62a9b',
  'hashSecretKey' => '6d7ab293eb6bc4a076ed35b91c7aaf44',
  'actualDatabaseType' => 'postgresql',
  'actualDatabaseVersion' => '17.2',
  'instanceId' => '8ffe2952-f1e4-4f0d-b1a2-37ac44cc9a82'
];
