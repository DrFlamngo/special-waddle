

// var img = new Array(2);

// for(var p=0;p<2;p++){ 
// img[p] = new Image(); 
// img[p].src = 'images/' + p + '.jpg'; }


$(document).ready(function () {

  
   
  
    let posL = 400;
    let pstT = 100;
    
  
    for (let i = 0; i < 88; i++) {
      posL = Math.floor(Math.random() * 1000) + 1;
      posT = Math.floor(Math.random() * 1000) + 1;

      var r = Math.random() * 50 - 5;
      
  
      console.log(r);
  
      $("body").append(
        `<div style="background-image: url('images/KillBill.jpg'); background-size: contain; transform: rotate(${r}deg); left: ${posL}px; top: ${posT}px" class="bckcard"> ${posL} </div>`
      );
    }
  });

