<?php

//$name;
//$name = "Sumon Khan";
//echo $name.'<br/>';

//$data = Array();
//$data[0] = 10;
//$data[1] = 20;
//$data[2] = 30;
//
//$data['name'] = "Sumon";
//$data['city'] = "Dhaka";

//$data = [10, 20, 30, 'Sumon', 'khan'];
//
//foreach ($data as $value){
//    echo $value.'<br/>';
//}
//echo $data['city'];

//$data = [
//    'name' => 'Sumon',
//    'city' => 'Dhaka',
//    'country' => 'Bangladesh',
//    'mobile' => '01821444450'
//];

//$students = [];

$students = [
    '0' => [
        'name' => 'Sumon',
        'city' => 'Dhaka',
        'country' => 'Bangladesh',
        'mobile' => '01821444450',
        'gender' => 'Male'
    ],
    '1' => [
        'name' => 'Ashraful',
        'city' => 'Pabna',
        'country' => 'USA',
        'mobile' => '01916168206',
        'gender' => 'Male'
    ],
    '2' => [
        'name' => 'Jami',
        'city' => 'Rajshahi',
        'country' => 'Canada',
        'mobile' => '01821445544',
        'gender' => 'Male'
    ],
    '3' => [
        'name' => 'Rasel',
        'city' => 'Chittagong',
        'country' => 'Sweden',
        'mobile' => '01821447770',
        'gender' => 'Male'
    ],
    '4' => [
        'name' => 'Tonmoy',
        'city' => 'Sylhet',
        'country' => 'Switzerland',
        'mobile' => '01821446699',
        'gender' => 'Male'
    ]
];

function test($x, $y=null){
    $z = $x + $y ;
//    echo $z;
    return $z;
}
echo '<br/>=============<br/>';
echo test(10);
echo '<br/>=============<br/>';
$res = test(4, 7);
echo $res;
echo '<br/>=============<br/>';
$a = test(100, 400);
$b = $a +100;
echo $b;






//echo '<pre>';
//print_r($students);

//var_dump($students);


//foreach ($students as $student){
//    echo $student['name'].' '.$student['city'].' '.$student['country'].' '.$student['mobile'].'<br/>';
//}
?>
<table border="1" width="500">
    <tr>
        <th>Name</th>
        <th>City</th>
        <th>Country</th>
        <th>Mobile</th>
        <th>Gender</th>
    </tr>
    <?php
        foreach ($students as $student) {
            echo "<tr>";
                echo '<td>'. $student['name'].'</td>';
                echo "<td> $student[city]</td>";
                echo "<td> $student[country]</td>";
                echo "<td> $student[mobile]</td>";
                echo "<td> $student[gender]</td>";
            echo "</tr>";
            }
     ?>
</table>





<!--//$students[0]['name'] = 'Sumon';-->
<!--//$students[0]['city'] = 'Dhaka';-->
<!--//$students[0]['country'] = 'Bangladesh';-->
<!--//$students[0]['mobile'] = '01821444450';-->
<!--//-->
<!--//$students[1]['name'] = 'Ashraful';-->
<!--//$students[1]['city'] = 'pabna';-->
<!--//$students[1]['country'] = 'Bangladesh';-->
<!--//$students[1]['mobile'] = '01916168206';-->
<!---->
<!--//foreach ($students as $datum){-->
<!--//    echo $datum.'<br/>';-->
<!--//}-->