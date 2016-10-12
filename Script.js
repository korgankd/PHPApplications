function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var takes = false;
    var data = ev.dataTransfer.getData("text");
    if(ev.target.id != data && ev.target.id.charAt(0) != data.charAt(0)){
        ev.target.innerHTML = "";
        var targetElement = ev.target;
        if(ev.target.id.charAt(0) == "w" || ev.target.id.charAt(0) == "b"){ //dropping onto another piece
            takes = true;
            note(data,ev.target.id,takes);
            targetElement = ev.target.parentNode;
            targetElement.innerHTML = "";
            targetElement.appendChild(document.getElementById(data));
        }
        else{
            targetElement.appendChild(document.getElementById(data));
            note(data,ev.target.id,takes);
        }
    }
}

function note(pi, sq, takes) {
	var output = "";
	var piece = pi;
	var square = sq;
	var color = piece.charAt(0);
	var type = piece.charAt(1);
    if(takes)
    {
        square = document.getElementById(square).parentNode.id.toLowerCase();
        if (type === "p")
            output = piece.charAt(2) + "x" + square;
        else
            output = type.toUpperCase() + "x" + square;
    } 
	else if (type === "p") {
		output = square.toLowerCase();
	}
	else{
		output = type.toUpperCase() + square.toLowerCase();
	}
    //castles
    if (output == "Kg1" || output == "Kg8") // kingside
        output = "0-0";
    else if (output == "Kc1" || output == "Kc8") // queenside
        output = "0-0-0";
	var line = document.getElementById("note").innerHTML;
	document.getElementById("note").innerHTML = (line + " " + output);
    var ar = document.getElementById("note").innerHTML;
    var array = ar.split(/\s+/);
    var search = displayLine(array);
    doSearch(search);
}

function sqlCreate() {
    var notes = document.getElementById("note").innerHTML;
    var line = document.getElementById("lineName").value;
    var n = notes.split(/\s+/);
    var output = "";
    var values = "";
    var columns = "";
    for (i = 0; i < n.length-1; i++) {
        columns = columns + "move" + (i+1) + ",";
        values = values + "'" + n[i+1] + "',";
    }
    columns = columns + "lineName)";
    values = "(" + values + "'" + line + "')";
    output = "INSERT INTO Lines (" + columns + " VALUES " + values;
    window.location.href = "PHPPage.php?added=true&qry=" + output;
}

function clearBoard() {
    window.location.href = "http://localhost:40220/PHPPage.php";
}

function doSearch(searchText) {
    var searchText = document.getElementById('note').innerHTML;
    var searchTexts = searchText.toLowerCase();
    var targetTable = document.getElementById('display');
    var targetTableColCount;
            
    //Loop through table rows
    for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
        var rowData = '';
        var rowDatas = '';
        //Get column count from header row
        if (rowIndex == 0) {
           targetTableColCount = targetTable.rows.item(rowIndex).cells.length;
           continue; //do not execute further code for header row.
        }
        //Process data rows. (rowIndex >= 1)
        for (var colIndex = 0; colIndex < targetTableColCount; colIndex++) {
            rowData += targetTable.rows.item(rowIndex).cells.item(colIndex).textContent;
        }
        rowDatas = rowData.toLowerCase();
        //If search term is not found in row data
        //then hide the row, else show
        if (rowData.indexOf(searchText) == -1 && rowDatas.indexOf(searchTexts) == -1)
            targetTable.rows.item(rowIndex).style.display = 'none';
        else
            targetTable.rows.item(rowIndex).style.display = 'table-row';
    }
}

function displayLine(array){
    var output = "";
    var j = 1;
    for(var i = 1; i < 20 && array[j] != null; i++){
        output = output +i+"."+array[j]+" ";
        if(array[j+1] != undefined)
            output = output +array[j+1]+" ";
        j = j + 2;
    }
    return output;
}

function showAll() {
    var targetTable = document.getElementById('display');
    for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
        targetTable.rows.item(rowIndex).style.display = 'table-row';
    }
}