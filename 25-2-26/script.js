console.log("connected");

function showName(value) {
    document.getElementById("nameErr").innerHTML = "Name changed: " + value;
}

function addData() {
    alert("Login form submitted");
    const name = document.getElementsByName("name")[0].value;
    const id = document.getElementById("ID").value;

    console.log("Collected data from form");
    console.log(name);
    console.log(id);

    if (!name) {
        document.getElementById("nameErr").innerHTML = "Name is required";
    } else {
        document.getElementById("nameErr").innerHTML = "";
    }

    if (!id) {
        document.getElementById("idErr").innerHTML = "ID is required";
    } else {
        document.getElementById("idErr").innerHTML = "";
    }

    return false;
}
