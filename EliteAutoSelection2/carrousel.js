
    var button1 = document.getElementById("b1");
    var button2 = document.getElementById("b2");
    var button3 = document.getElementById("b3");

    button1.addEventListener("click", function() {
      button1.style.backgroundColor = "white";
      button2.style.backgroundColor = "grey";
      button3.style.backgroundColor = "grey";
    });
    button2.addEventListener("click", function() {
      button1.style.backgroundColor = "grey";
      button2.style.backgroundColor = "white";
      button3.style.backgroundColor = "grey";
    });
    button3.addEventListener("click", function() {
      button1.style.backgroundColor = "grey";
      button2.style.backgroundColor = "grey";
      button3.style.backgroundColor = "white";
    });


    const myFunction = () => {
        document.getElementById("first").style.display ='block';
        document.getElementById("second").style.display ='none'
        document.getElementById("third").style.display ='none'
        
      }

      const myFunction2 = () => {
        document.getElementById("second").style.display ='block'
        document.getElementById("first").style.display ='none'
        document.getElementById("third").style.display ='none'
        
      }

      const myFunction3 = () => {
        document.getElementById("third").style.display ='block'
        document.getElementById("first").style.display ='none'
        document.getElementById("second").style.display ='none' 

      }