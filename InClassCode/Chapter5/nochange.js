// computes the total cost of the wizarding supplies and puts the value in the total input
function computeCost() {

    var robes = document.getElementById("robes").value; // $32.49
    var hat = document.getElementById("hat").value; // $13.95
    var gloves = document.getElementById("gloves").value; // $9.59

    if (isNaN(robes)){
        document.getElementById("cost").value = "Fix robes value";
        return;
    }
    if (isNaN(hat)){
        document.getElementById("cost").value = "Fix hat value";
        return;
    }
    if (isNaN(gloves)){
        document.getElementById("cost").value = "Fix gloves value";
        return;
    }

    var totalPrice = 32.49 * robes + 13.95 * hat + 9.59 * gloves;

    document.getElementById("cost").value = totalPrice.toFixed(2);

}

function addBlurListeners(){
    document.getElementById("robes").addEventListener("blur", computeCost);
    document.getElementById("hat").addEventListener("blur", computeCost);
    document.getElementById("gloves").addEventListener("blur", computeCost);
}

