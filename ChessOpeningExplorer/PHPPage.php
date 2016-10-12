<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <script src="Script.js" type="text/javascript"></script>
	    <script src="jquery-2.2.3.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="StyleSheet.css">
        <title>Chess Page</title>
    </head>
    <body>
        <table align= "center" id="board">
        <tr><td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="A8"><img id="br1" src="/Images/br.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="B8"><img id="bn1" src="/Images/bn.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="C8"><img id="bb1" src="/Images/bb.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="D8"><img id="bq" src="/Images/bq.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="E8"><img id="bk" src="/Images/bk.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="F8"><img id="bb2" src="/Images/bb.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="G8"><img id="bn2" src="/Images/bn.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="H8"><img id="br2" src="/Images/br.png" ondragstart="drag(event)" class="piece"></td></tr>
        <tr><td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="A7"><img id="bpa" src="/Images/bp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="B7"><img id="bpb" src="/Images/bp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="C7"><img id="bpc" src="/Images/bp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="D7"><img id="bpd" src="/Images/bp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="E7"><img id="bpe" src="/Images/bp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="F7"><img id="bpf" src="/Images/bp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="G7"><img id="bpg" src="/Images/bp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="H7"><img id="bph" src="/Images/bp.png" ondragstart="drag(event)" class="piece"></td></tr>
        <tr><td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="A6"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="B6"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="C6"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="D6"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="E6"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="F6"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="G6"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="H6"></td></tr>
        <tr><td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="A5"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="B5"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="C5"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="D5"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="E5"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="F5"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="G5"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="H5"></td></tr>
        <tr><td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="A4"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="B4"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="C4"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="D4"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="E4"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="F4"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="G4"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="H4"></td></tr>
        <tr><td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="A3"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="B3"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="C3"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="D3"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="E3"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="F3"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="G3"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="H3"></td></tr>
        <tr><td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="A2"><img id="wpa" src="/Images/wp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="B2"><img id="wpb" src="/Images/wp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="C2"><img id="wpc" src="/Images/wp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="D2"><img id="wpd" src="/Images/wp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="E2"><img id="wpe" src="/Images/wp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="F2"><img id="wpf" src="/Images/wp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="G2"><img id="wpg" src="/Images/wp.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="H2"><img id="wph" src="/Images/wp.png" ondragstart="drag(event)" class="piece"></td></tr>
        <tr><td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="A1"><img id="wr1" src="/Images/wr.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="B1"><img id="wn1" src="/Images/wn.png" ondragstart="drag(event)" class="piece"></</td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="C1"><img id="wb1" src="/Images/wb.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="D1"><img id="wq" src="/Images/wq.png" ondragstart="drag(event)" class="piece"></</td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="E1"><img id="wk" src="/Images/wk.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="F1"><img id="wb2" src="/Images/wb.png" ondragstart="drag(event)" class="piece"></td>
            <td class="dark" ondrop="drop(event)" ondragover="allowDrop(event)" id="G1"><img id="wn2" src="/Images/wn.png" ondragstart="drag(event)" class="piece"></td>
            <td class="light" ondrop="drop(event)" ondragover="allowDrop(event)" id="H1"><img id="wr2" src="/Images/wr.png" ondragstart="drag(event)" class="piece"></td></tr>
        </table>
        <table id="clear" style="float: left;">
        <tr><td>
        <button onclick="clearBoard()">Clear</button>
        </td></tr>
        </table>

        <p id="note"></p>
        <table>
        <tr><td>
        <input type="text" placeholder="Add Line Name" name="lineName" id="lineName"> </td><td>
        <button id="add" onclick="sqlCreate()">Add to Database</button>
        </td></tr>
        </table>
        <br>
        <table id="display"><tr><td>
        Matching Opening Lines: <button id="showAll" onclick="showAll()">Show All Lines</button>
        </td></tr><tr><td>
        <?php
            if(($result = sqlsrv_query($conn,"SELECT * FROM Lines"))){
                while( $obj = sqlsrv_fetch_array( $result, SQLSRV_FETCH_NUMERIC )) {
                    displayLine($obj);
                }
                echo "true";
            }
        ?>
        </table>
        <p id="notation"></p>
    </body>
</html>
