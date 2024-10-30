<?php
header('Content-Type: application/json');

// Danh sách các liên kết với các tên miền cụ thể
$domains = [
    "https://789bet98.co/",
    "https://789bet32.biz/",
    "https://789bet9.biz/",
    "https://789bb26.com/",
    "https://789bb15.com/",
    "https://789eh.com/",
    "https://789eg.com/",
    "https://789ef.com/",
    "https://789ed.com/"
];

// Tạo một mảng JSON với các tên miền chia cho di động và máy tính
$response = [
    "links1" => $domains[0],
    "links2" => $domains[1],
    "links3" => $domains[2],
    "links4" => $domains[3],
    "links5" => $domains[4],
    "links6" => $domains[5],
    "links7" => $domains[6],
    "links8" => $domains[7]
];

// Trả về dữ liệu JSON
echo json_encode($response);
?>
