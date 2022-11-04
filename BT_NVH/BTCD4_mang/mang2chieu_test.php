<?php 
$authors = array(
    array(
        'name' => 'Nguyễn Văn Cường',
        'blog' => 'freetuts.net',
        'position' => 'admin'
    ),
    array(
        'name' => 'Trương Phúc Hoài Minh',
        'blog' => 'freetuts.net',
        'position' => 'author'
    ),
    array(
        'name' => 'Hoàng Văn Tuyền',
        'blog' => 'freetuts.net',
        'position' => 'author'
    ),
    array(
        'name' => 'Nguyễn Tình',
        'blog' => 'freetuts.net',
        'position' => 'author'
    )
);
echo $authors[1]['name'];
// Thêm vào cuối mảng (cách 1)
$authors[] = 'hưng';
var_dump($authors);

?>