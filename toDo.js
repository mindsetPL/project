function newTask() {
    "use strict";
    
    if (document.getElementById("tenantIn").value === "blank") {
        window.alert("You must declare a tenant for this task.");
    } else if (document.getElementById("priorityIn").value === "blank") {
        window.alert("You must declare a priority for this task.");
    } else if (document.getElementById("taskIn").value === "") {
        window.alert("You must declare a description for this task.");
    } else if (document.getElementById("dateIn").value === "") {
        window.alert("You must declare a due date for this task.");
    } else {
        //Find the <table> element
        var toDo = document.getElementById("toDo");
        //Create the new row to hold the task info
        var task = toDo.insertRow(-1);
        //create the cells to hold the info
        //checkbox
        var check = task.insertCell(0); //create the <td>
        var checkbox = document.createElement("input"); //create the input
        checkbox.type = "checkbox"; //set input to be checkbox
        checkbox.className = document.getElementById("tenantIn").value + "-check" +" checkboxes"; //make id unique for styling
        check.appendChild(checkbox);
        //priority
        var priority = task.insertCell(1); //create the <td>
        var prioNum = document.getElementById("priorityIn").value; //get value
        priority.innerHTML = prioNum;
        //task description
        var descript = task.insertCell(2); //create the <td>
        var descriptVal = document.getElementById("taskIn").value; //get value
        descript.innerHTML = descriptVal;
        //due date
        var due = task.insertCell(3);
        var dueVal = document.getElementById("dateIn").value;
        due.innerHTML = dueVal;
        //time spent
        var time = task.insertCell(4);
        var timeVal = document.getElementById("minIn").value;
        var timeInput = document.createElement("input");
        var minText = document.createTextNode(" minutes");
        timeInput.type = "number";
        timeInput.value = timeVal;
        timeInput.step = 5;
        timeInput.className = "timeAdd";
        time.appendChild(timeInput);
        time.appendChild(minText);
        //create delete button
        var del = task.insertCell(5);
        var delVal = document.createElement("P")
        delVal.innerHTML = "&times;";
        delVal.className = "delTask";
        del.appendChild(delVal);
        del.onclick = function () {
            var i = del.parentNode.rowIndex;
            document.getElementById("toDo").deleteRow(i);
        };
        //make inputs blank
        document.getElementById("tenantIn").value = "blank";
        document.getElementById("priorityIn").value = "blank";
        document.getElementById("taskIn").value = "";
        document.getElementById("dateIn").value = "";
        document.getElementById("minIn").value = "";
        closeAdd();
        
    }
    
    
}