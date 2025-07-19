<?php

require_once '../app/func-db.php';
require_once '../database/db-config.php';


//extracting the Blog dummy data from json file
$dataFilePath = "../database/blog_dummy_data.json";
$dataJson = file_get_contents($dataFilePath);
$blogDataArr = json_decode($dataJson, 1);


//seeding of table site_info
$columns = "(`site_name`,`phone`,`linkedin`,`facebook`,`twitter`,`bio`)";
$values = "('Nourix Blog',
            '01011111111',
            'www.linkedin.com',
            'www.facebook.com',
            'www.twitter.com',
            'Nourix BlogPost 5 is evolving with each release to better utilize CSS variables for global theme styles and even utilities.')";
dataInsert($conn,  dbaseName, 'site_info', $columns, $values);



//seeding table users
$columns = "(`name`,`username`,`password`,`email`, `created_at`)";

for ($i = 1; $i < 11; $i++) {

    $name = "name" . "{$i}";
    $username = "username" . "{$i}";
    $password = password_hash("password" . "{$i}",PASSWORD_DEFAULT);
    $email = "email" . "{$i}" . "@gmail.com";
    $timeStamp = Date("Y-m-d G:i:s"); //2025-04-04 21:42:08

    $values = "('$name',
                '$username',
                '$password',
                '$email',
                '$timeStamp'
                )";

    dataInsert($conn,  dbaseName, 'users', $columns, $values);
}


//seeding table messages
$columns = "(`user_id`, `name`,`phone`,`email`,`content`)";
for ($i = 1; $i < 51; $i++) {
    $user_id = rand(1, 10);
    $values = "('$user_id',
                'sender$i',
                '010111111$i',
                'email$i@gmail.com',
                'message contents release to better utilize CSS variables for global theme styles'
                )";
    dataInsert($conn,  dbaseName, 'messages', $columns, $values);
}

//seeding table posts
$columns = "(`user_id`,`title`,`content`,`image`,`publisher`,`created_at`)";

for ($i = 0; $i < 20; $i++) {

    $user_id = rand(1, 10);
    $title = $blogDataArr[$i]['post_title'];
    $content = $blogDataArr[$i]['post_content'];
    $image = $blogDataArr[$i]['post_image'];
    $publisher = $blogDataArr[$i]['publisher_name'];
    $timeStamp = $blogDataArr[$i]['timestamp'];

    $values = "('$user_id',
                '$title',
                '$content',
                '$image',
                '$publisher',
                '$timeStamp'
                )";

    dataInsert($conn,  dbaseName, 'posts', $columns, $values);
}
