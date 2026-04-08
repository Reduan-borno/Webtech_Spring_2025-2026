var Items = [
    { name: "Dashboard", count: 0 },
    { name: "Patient Profiles", count: 0 },
    { name: "Appointments", count: 0 },
    { name: "Prescriptions", count: 0 },
    { name: "Lab Results", count: 0 },
    { name: "Messages", count: 0 }
];

function showMenu() {
    var menuList = document.getElementById("menuList");
    menuList.innerHTML = "";

    Items.sort(function(a, b) {
        return b.count - a.count;
    });

    for (var i = 0; i < Items.length; i++) {
        var li = document.createElement("li");
        li.innerHTML = Items[i].name + " (" + Items[i].count + ")";

        if (Items[i].count > 0) {
            li.classList.add("highlight");
        }

        li.onclick = function() {
            var name = this.innerText.split(" (")[0];

            for (var j = 0; j < Items.length; j++) {
                if (Items[j].name === name) {
                    Items[j].count++;
                    break;
                }
            }

            showMenu();
        };

        menuList.appendChild(li);
    }
}

showMenu();