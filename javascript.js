



$(document).ready(function () {


// randon image
    const imgArr = ["KillBill.jpg","movieicon.jpg"];
    

    // function randomnum(){
    var num = Math.floor(Math.random() * (imgArr.length));
    var l ="images/"+imgArr[num];
    console.log(l);

    // }

  
   
  
    let posL = 400;
    let pstT = 100;
    
  
    for (let i = 0; i < 88; i++) {
      posL = Math.floor(Math.random() * 1000) + 1;
      posT = Math.floor(Math.random() * 1000) + 1;

      var r = Math.random() * 50 - 5;
      
  
      console.log(r);
  
      $("body").append(
        `<div style="background-image: url(${l}); background-size: contain; transform: rotate(${r}deg); left: ${posL}px; top: ${posT}px" class="bckcard"> </div>`
      );
    }
  });

