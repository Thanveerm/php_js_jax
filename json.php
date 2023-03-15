<?php
$data = array(
    array(
        'name' => 'Thanveer',
        'age' => 24,
        'email' => 'thanee@gmail.com'
    ),
    array(
        'name' => 'Sanoop',
        'age' => 30,
        'email' => 'sanoop@gmail.com'
    ),
    array(
        'name' => 'Chinmya',
        'age' => 98,
        'email' => 'chinmaya@gmail.com'
    ),
    array(
        'name' => 'Adithya',
        'age' => 38,
        'email' => 'adithya@gmail.com'
    ),
    array(
        'name' => 'sharanya',
        'age' => 12,
        'email' => 'saranya@gmail.com'
    ),
    array(
        'name' => 'Rishan',
        'age' => 306,
        'email' => 'risha@gmail.com'
    ),
    array(
        'name' => 'shibil',
        'age' => 33,
        'email' => 'sibil@gmail.com'
    ),
    array(
        'name' => 'Liya',
        'age' => 24,
        'email' => 'liya@gmail.com'
    )
);

$json = json_encode($data);

echo $json;
?>
