$(document).ready(function() {

  var elephantAnimation = null;
  var featherAnimation = null; 

  //initialize our canvas object
  var canvas = new fabric.Canvas('myCanvas', {renderOnAddRemove: false});
  //Add background image to our canvas
  canvas.setBackgroundImage('img/sky.jpg', canvas.renderAll.bind(canvas));

  fabric.Image.fromURL('img/elephant.png', function(oImg) {
    oImg.set('left', 250).set('top', 30).set('selectable', false);
    oImg.selection = false; 
    canvas.setActiveObject(oImg);
    elephantAnimation = canvas.getActiveObject();
    canvas.add(oImg);
  });

  fabric.Image.fromURL('img/Feather.png', function(oImg) {
    oImg.set('left', 500).set('top', 80).set('selectable', false);
    canvas.setActiveObject(oImg);
    featherAnimation = canvas.getActiveObject();
    canvas.add(oImg);
  })

  fabric.Image.fromURL('img/building.gif', function(oImg) {
    oImg.set('left', 525).set('top', 80).set('selectable', false);
    canvas.setActiveObject(oImg);
    buildingInstance = canvas.getActiveObject();
    canvas.add(oImg);
  })

  fabric.Image.fromURL('img/ar.gif', function(oImg) {
    canvas.setActiveObject(oImg);
  })


  $('#button').click(function() {

    elephantAnimation.animate('top', 475, {
      onChange: canvas.renderAll.bind(canvas), duration: 1000, easing: fabric.util.ease.easeOutBounce,
      onComplete: function () {

        var firstInfo = new fabric.Text('The elephant hit the ground first!', {
          left: 25, 
          top: 30,
          fontSize: 20,
          fontFamily: 'Open Sans',
          fill: 'red'
          });

        var secondInfo = new fabric.Text('Approximately three minutes later.......', {
          left: 25, 
          top: 60,
          fontSize: 20,
          fontFamily: 'Open Sans',
          fill: 'white'
          });

        var thirdInfo = new fabric.Text('The feather finally hit the ground.', {
          left: 25, 
          top: 90,
          fontSize: 20,
          fontFamily: 'Open Sans',
          fill: 'blue'
          });

        

        canvas.add(firstInfo);
        canvas.add(secondInfo);
        canvas.add(thirdInfo);

      }
    })

    featherAnimation.animate('top', 540, {
      onChange: canvas.renderAll.bind(canvas), duration: 5000, easing: fabric.util.ease.easeOutCubic,

    })
      
  });

});



