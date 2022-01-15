<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.container{
    text-align: center;
    margin-top: 25px;

}
table{
    margin: auto;
}
input{
    font-size: 34px;
    border: 5px solid black;
    border-radius: 20px;

}
button{
    font-size: 40px;
    background-color: rgb(86, 150, 192);
    width: 102px;
    height: 58px;
    border-radius: 10px;
}
.calculator{
    display: inline-block;
    background-color: rgb(168, 62, 172);
    padding: 20px;
    border-radius: 20px;
    
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculator</h1>
        <div class="calculator">
        <input type="text" name="screen" id="screen">
        <table>
         <tr>
             <td><button>(</button></td>
             <td><button>)</button></td>
             <td><button>C</button></td>
             <td><button>%</button></td>
         </tr>
         <tr>
            <td><button>7</button></td>
            <td><button>8</button></td>
            <td><button>9</button></td>
            <td><button>X</button></td>
        </tr>
        <tr>
            <td><button>4</button></td>
            <td><button>5</button></td>
            <td><button>6</button></td>
            <td><button>-</button></td>
        </tr>
        <tr>
            <td><button>1</button></td>
            <td><button>2</button></td>
            <td><button>3</button></td>
            <td><button>+</button></td>
        </tr>
        <tr>
            <td><button>0</button></td>
            <td><button>.</button></td>
            <td><button>/</button></td>
            <td><button>=</button></td>
        </tr>
        </table>
    </div>
    </div>
    <script>
var screen= document.getElementById('screen');
buttons =document.querySelectorAll('button')
var screenValue='';
for(item of buttons){
    item.addEventListener('click',(e)=>{
        buttonText = e.target.innerText
        console.log('button text is', buttonText)
        if(buttonText=='X'){
            buttonText='*';
            screenValue+=  buttonText;
            // screenValue is a variable
            screen.value= screenValue;
            // screen.value is a value of screen



        }
        else if(buttonText=='C'){
            screenValue= "";
            screen.value=screenValue;

}
        
        else if(buttonText=='='){
            screen.value=eval(screenValue)

        }
      else  if(buttonText=='%'){
            buttonText='%';
            screenValue=  buttonText;
           
            screen.value= screenValue;
      }
        else{
            screen.value= "=";
            screenValue+=  buttonText;
            screen.value=screenValue;
        }
    })
}
</script>
</body>

</html>
