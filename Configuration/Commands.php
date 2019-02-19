<?php

return [
    'openimmo:generateCode' => [
        'class' => \Ujamii\OpenImmoTypo3\Command\GenerateTypo3WrapperCommand::class,
        'schedulable' => false,
    ],
    'openimmo:import' => [
        'class' => \Ujamii\OpenImmoTypo3\Command\ImportCommand::class,
        'schedulable' => true,
    ],
];
