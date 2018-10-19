<?php

$entryData = array(
    'category' => $_POST['category']
    ,'party' => $_POST['party']
    ,'votes' => $_POST['votes']
    ,'when' => time()
);

$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://localhost:5555");

$socket->send(json_encode($entryData));