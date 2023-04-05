<?php

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use App\DB\Post;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$post = new Post;

$arrayPosts = [
    [
        'title' => 'Lorem Ipsum Dolor Sit Amet',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a 
        nulla sed dolor hendrerit interdum. Nullam vel pharetra augue. Fusce vulputate justo vel 
        justo luctus, at ullamcorper velit eleifend.',
        'user_id' => 1
    ],
    [
        'title' => 'Vestibulum Euismod Dolor',
        'description' => 'Vestibulum euismod dolor ac elit pellentesque, eu tristique ipsum 
        bibendum. Curabitur vehicula, leo non feugiat dignissim, odio lectus consequat augue, 
        vitae vulputate augue nisi vel libero.',
        'user_id' => 1
    ],
    [
        'title' => 'Pellentesque Habitant Morbi',
        'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada 
        fames ac turpis egestas. Fusce consequat varius leo sit amet finibus. Nunc consectetur 
        sem eu turpis commodo vestibulum.',
        'user_id' => 1
    ],
    [
        'title' => 'Cras Nec Magna Quis Tristique',
        'description' => 'Cras nec magna quis tristique tincidunt. Pellentesque sed urna 
        elementum, imperdiet nunc vel, accumsan ex. Duis rhoncus augue et felis iaculis, nec 
        commodo sapien ullamcorper. ',
        'user_id' => 1
    ],
    [
        'title' => 'Interdum Et Malesuada Fames',
        'description' => 'Interdum et malesuada fames ac ante ipsum primis in faucibus. 
        Aenean vestibulum nunc sit amet justo pellentesque, ac malesuada sapien commodo. 
        Suspendisse non libero in mi blandit efficitur.',
        'user_id' => 1
    ],
    [
        'title' => 'Suspendisse Non Libero In Mi',
        'description' => 'Suspendisse non libero in mi blandit efficitur. Nulla facilisi. 
        Nunc congue est ut quam convallis, a mollis nulla auctor. Vivamus eu enim eget sem 
        sollicitudin volutpat at vel quam.',
        'user_id' => 1
    ],
    [
        'title' => 'Mauris Sodales Nisl Eget',
        'description' => 'Mauris sodales nisl eget massa tempor, non hendrerit sapien 
        bibendum. Donec ac efficitur augue, a laoreet augue. Aliquam porta, enim quis euismod 
        bibendum, mi odio maximus ante, a sollicitudin justo purus sit amet ipsum.',
        'user_id' => 1
    ],
    [
        'title' => 'Phasellus Ultricies Lorem',
        'description' => 'Phasellus ultricies lorem quis sapien ullamcorper auctor. Fusce 
        sollicitudin accumsan felis, ac tristique enim maximus sit amet. Donec sed dolor 
        lacinia, elementum leo a, vulputate magna.',
        'user_id' => 1
    ],
    [
        'title' => 'Nam Dignissim Mauris',
        'description' => 'Nam dignissim mauris ac convallis volutpat.
         Sed pharetra nisl sit amet blandit euismod. Nullam ullamcorper,
         sem vel fermentum dignissim, quam nulla sagittis nisl, id ultrices nulla turpis vel nunc.
         urna a faucibus sagittis.',
        'user_id' => 1,
    ],
];

foreach($arrayPosts as $postLorem) {
    $result = $post->insert($postLorem);
    
    if ( $result ) {
        echo "Record inserted successfully!" . PHP_EOL;
    } else {
        echo "Failed to insert record!" . PHP_EOL;
        exit;
    }
}