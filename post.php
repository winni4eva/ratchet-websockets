<?php
// post.php ???
// This all was here before  ;)
$entryData = array(
    'category' => $_POST['category']
    ,'title' => $_POST['title']
    ,'article' => $_POST['article']
    ,'when' => time()
);

//$pdo->prepare("INSERT INTO blogs (title, article, category, published) VALUES (?, ?, ?, ?)")
    //->execute($entryData['title'], $entryData['article'], $entryData['category'], $entryData['when']);

// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://localhost:5555");

$socket->send(json_encode($entryData));