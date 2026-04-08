console.log('Connected');
const unit_price = 1000;

let quantity = document.getElementById('quantity');
let totalprice = document.getElementById("totalPrice");

quantity.addEventListener('input', function () {
    let qty = parseInt(this.value);
    console.log(qty);
    if (qty == 0) {
        alert("Error: Please Enter a Quantity");
        return false;
    }
    if (qty < 0) {
        alert("Error: Quantity cann't less then zero");
        quantity.value = "0";
        return false;
    }
    if (qty > 0) {
        let ttp = unit_price * qty;
        totalprice.innerHTML = `${ttp}`;
        if (ttp > 1000) {
            alert("Congratulation: You are eligable for gift cupon");
            return false;
        }
        return false;
    }

});