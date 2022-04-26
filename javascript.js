



$(document).ready(function () {


// Add image here (jpg only)
    const imgArr = ["brothers.jpg","dune.jpg","1917.jpg","dora.jpg","panther.jpg","joker.jpg","driver.jpg","bean.jpg","yard.jpg","furious7.jpg","KillBill.jpg","JurassicPark.jpg","IT.jpg", "Guardians.jpg","Terminator.jpg","ET.jpg","Looper.jpg","Avatar.jpg","Jaws.jpg","Zombie.jpg","Pirates.jpg","Nacho.jpg"];
    

    let posL = 400;
    let posT = 100;
    
  
    for (let i = 0; i < 100; i++) {
      posL = Math.floor(Math.random() * 1500) + 1;
      posT = Math.floor(Math.random() * 900) + 1;

      var r = Math.random() * 80 - 40;
      
      var num = Math.floor(Math.random() * (imgArr.length));
      l = "images/"+imgArr[num];

      

    console.log(num, l);
      console.log(r);
  
      $("body").append(
        `<div style="background-image: url(${l}); background-size: contain; transform: rotate(${r}deg); left: ${posL}px; top: ${posT}px" class="bckcard"> </div>`
      );
    }
  });

