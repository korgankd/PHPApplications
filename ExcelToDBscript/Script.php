<?php
include 'PHPExcel/IOFactory.php';
//server=.\SQLEXPRESS;database=KentDatabase;trusted_connection=True
//connect to database
$serverName = ".\sqlexpress";
$connectionInfo = array( "Database"=>"testData", "UID"=>"testDataU", "PWD"=>"zXp)U@n7a#=+");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "<div style='floating:left;'>Connection established. </div>";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

//functions
function dbFunction($query, $con){
    $results = sqlsrv_query($con,$query);
    if(!$results)
        echo "<script type='text/javascript'>alert('Insert Failed!');</script>";
}

function displayLine($objArray){
    echo $objArray[1]."<br>";
    $j = 2;
    for($i = 1; $i < 15 && $objArray[$j] != null; $i++){
        echo $i.".".$objArray[$j]." ".$objArray[$j+1]." ";
        $j = $j + 2;
    }
    echo "</td></tr><tr><td>";
    //echo "<br><br>";
}

function loadDB() {
    $inputFileName = './Players.xlsx';
    try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0); 
    $highestRow = $sheet->getHighestRow(); 
    $highestColumn = $sheet->getHighestColumn();
    $serverName = ".\sqlexpress";
    $connectionInfo = array( "Database"=>"KentDatabase",);
    $co = sqlsrv_connect( $serverName, $connectionInfo);

    if( $co ) {
         echo "<div style='floating:left;'>Connection established. </div>";
    }else{
         echo "Connection could not be established.<br />";
         die( print_r( sqlsrv_errors(), true));
    }

    for ($row = 1; $row <= $highestRow; $row++){ 
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                        NULL,
                                        TRUE,
                                        FALSE);
    //  Insert row data array into your database of choice here
        $A = $rowData[0][0];
        $B = $rowData[0][1];
        $C = $rowData[0][2];
        $D = $rowData[0][3];
        $E = $rowData[0][4];
        switch ($E) {
            case "BAL":
                $E = 1;
                break;
            case "CIN":
                $E = 2;
                break;
            case "CLE":
                $E = 3;
                break;
            case "PIT":
                $E = 4;
                break;
            case "HOU":
                $E = 5;
                break;
            case "IND":
                $E = 6;
                break;
            case "JAX":
                $E = 7;
                break;
            case "TEN":
                $E = 8;
                break;
            case "BUF":
                $E = 9;
                break;
            case "MIA":
                $E = 10;
                break;
            case "NE":
                $E = 11;
                break;
            case "NYJ":
                $E = 12;
                break;
            case "KC":
                $E = 13;
                break;
            case "OAK":
                $E = 14;
                break;
            case "SD":
                $E = 15;
                break;
            case "DEN":
                $E = 16;
                break;
            case "CHI":
                $E = 17;
                break;
            case "DET":
                $E = 18;
                break;
            case "GB":
                $E = 19;
                break;
            case "MIN":
                $E = 20;
                break;
            case "ATL":
                $E = 21;
                break;
            case "CAR":
                $E = 22;
                break;
            case "NO":
                $E = 23;
                break;
            case "TB":
                $E = 24;
                break;
            case "DAL":
                $E = 25;
                break;
            case "NYG":
                $E = 26;
                break;
            case "PHI":
                $E = 27;
                break;
            case "WAS":
                $E = 28;
                break;
            case "ARI":
                $E = 29;
                break;
            case "LA":
                $E = 30;
                break;
            case "SF":
                $E = 31;
                break;
            case "SEA":
                $E = 32;
                break;
            case "NFL":
                $E = 33;
                break;
            default:
                echo $C."NOT REGULAR TEAM SOMEWHERE";
                $E = 33;
                break;
        }
        if ($B == null){
            $E = 33;
        }
        $output = "INSERT INTO Players (Name,Number,Position,TId) VALUES ('";
        $output = $output. $C."','".$B."','".$A."',".$E.")";
        echo $output."<br>";
        $results = sqlsrv_query($co,$output);
        if( !$results ) {
            die( print_r( sqlsrv_errors(), true));
        }
    }
    echo " IT WORKS!".$highestRow;
}
?>