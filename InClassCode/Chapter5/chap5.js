function setupRadioButtons() {
    var buttons = document.getElementById('radioForm').children;

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', radioClick);
        //buttons[i].onclick = radioClick(i);
    }
}

function radioClick(e) {
    const theParagraph = document.getElementById('theParagraph');
    if (e.target.id === "radio1") {
        theParagraph.innerHTML = "Radio selection: 1";
    } else if (e.target.id === "radio2") {
        theParagraph.innerHTML = "Radio selection: 2";
    } else if (e.target.id === "radio3") {
        theParagraph.innerHTML = "Radio selection: 3";
    } else if (e.target.id === "radio4") {
        theParagraph.innerHTML = "Radio selection: 4";
    }
}

