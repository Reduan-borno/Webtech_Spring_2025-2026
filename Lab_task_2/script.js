console.log("connected");

let count = 0;

function ValidateForm() {

    let email =document.getElementById("email").value;
    let password =document.getElementById("password").value;

    let errormessege = "";
    if (!email.includes("@")) {
        errormessege +="Email not valid <br>";
    }

        if (password.length<6){
            errormessege +="password must 6 characters<br>";
        }

        if (!password.includes("#")){
            errormessege +="password must include #<br>";
        }
        if(errormessege !=""){
            count++;
            document.getElementById("error").innerHTML=errormessege;

            document.getElementById("count").innerHTML =
            "wrong submit count: "+count;
            
        }
    }