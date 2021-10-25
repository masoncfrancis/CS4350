// parallel.js
// This script illustrates the use of the methods for 
//  drawing lines by drawing a parallelogram.

function draw() {
  var dom = document.getElementById("myCanvas");
  if (dom.getContext) {
    var context = dom.getContext('2d');

    drawL(context);
  }
}

function drawL(context) {
  context.beginPath();
  context.moveTo(50, 50);
  context.lineTo(50, 200);
  context.lineTo(100, 200);
  context.stroke();
}
 