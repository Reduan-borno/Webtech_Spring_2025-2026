function addStudent() {

    var name = document.getElementById("name").value;
    var marks = document.getElementById("marks").value;

    // simple validation
    if (name == "") {
        alert("Enter name");
        return;
    }

    if (marks < 0 || marks > 100 || marks == "") {
        alert("Enter valid marks");
        return;
    }

    var table1 = document.getElementById("table");

    // show table
    table1.style.display = "table";

    // add row
    var row = table1.insertRow();
    var c1 = row.insertCell(0);
    var c2 = row.insertCell(1);

    c1.innerHTML = name;
    c2.innerHTML = marks;

    // color
    if (marks > 50) {
        row.style.backgroundColor = "green";
    } else {
        row.style.backgroundColor = "red";
    }
}
