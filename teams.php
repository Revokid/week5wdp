<?php

// Connect to the MySQL database
$connect = mysqli_connect(
    'localhost',
    'root',
    '',
    'demo'
);

// Create a query
$query = 'SELECT *
    FROM teams
    ORDER BY name';
$result = mysqli_query($connect, $query);

//Output the number of rows
echo 'Rows: '.mysqli_num_rows($result);

//loop through each record
while($record = mysqli_fetch_assoc($result))
{
    //output each record
    //print_r($record);

    echo '<h2>'.$record['name'].'</h2>';
    echo '<p>
         League: '.$record['league'].'
         <br>
         Rank: '.$record['rank'].'
         </p>';
if($record['logo'])
{
    echo '<img src="images/'.$record['logo'].'" width="100">';
}
    echo '<hr>';

}
