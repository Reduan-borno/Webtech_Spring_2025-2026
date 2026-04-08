function formValidate() {

    var name = document.getElementById("nameTF").value;
    var age = document.getElementById("ageTF").value;
    var email = document.getElementById("emailTF").value;

    var male = document.getElementById("maleRB").checked;
    console.log(male);
    var female = document.getElementById("femaleRB").checked;

    var cricket = document.getElementById("cricketCMB").checked;
    var football = document.getElementById("footballCMB").checked;

    var country = document.getElementById("country").value;
    var file = document.getElementById("fileUpload").value;

    if (name == "") {
        alert("Name empty");
        return false;
    }

    if (age < 1 || age > 100) {
        alert("Age 1-100");
        return false;
    }

    if (email == "" || email.indexOf("@") == -1) {
        alert("Invalid email");
        return false;
    }

    if (!male && !female) {
        alert("Select gender");
        return false;
    }

    if (!cricket && !football) {
        alert("Select sport");
        return false;
    }

    if (country == "") {
        alert("Select country");
        return false;
    }

    if (file == "") {
        alert("Upload file");
        return false;
    }

    return true;
}