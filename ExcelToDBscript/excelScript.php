<?php
include 'PHPExcel/IOFactory.php';

	// input file .xlsx
    $inputFileName = './Book1.xlsx';
    try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    }
	
    $serverName = ".\sqlexpress";
    $connectionInfo = array( "Database"=>"KentDatabase" ); //db name
    $con = sqlsrv_connect( $serverName, $connectionInfo);

    if( $con ) {
         echo "Connection established. <br />";
    }else{
         echo "Connection could not be established. <br />";
         die( print_r( sqlsrv_errors(), true));
    }

    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0); 
    $highestRow = $sheet->getHighestRow(); 
    $highestColumn = $sheet->getHighestColumn();

    for ($row = 1; $row <= $highestRow; $row++){ 
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                        NULL,
                                        TRUE,
                                        FALSE);
    //  Insert row data array into your database of choice here
        $A = $rowData[0][0];	// A column of row
        $B = $rowData[0][1];	// B column 
        $C = $rowData[0][2];
        $D = $rowData[0][3];
        $E = $rowData[0][4];

        $output = "INSERT INTO Players ("/*COLUMNS*/.") VALUES ('";
        $output = $output. $A."','".$B."','".$C."','".$D."'')";
        echo $output."<br>";
        //add to db
        /*$results = sqlsrv_query($con,$output);
        if( !$results ) {
            die( print_r( sqlsrv_errors(), true));
        }*/
    }
    echo "scoop";

?>