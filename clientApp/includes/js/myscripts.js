

document.getElementById("sumGet").addEventListener("click", function(){  
  CalcGet("sum");
});

document.getElementById("avgGet").addEventListener("click", function(){  
  CalcGet("avg");
});

document.getElementById("multGet").addEventListener("click", function(){  
  CalcGet("mult");
});

document.getElementById("sumPost").addEventListener("click", function(){  
  CalcPost("sum");
});

document.getElementById("avgPost").addEventListener("click", function(){  
  CalcPost("avg");
});

document.getElementById("multPost").addEventListener("click", function(){  
  CalcPost("mult");
});

document.getElementById("sumPut").addEventListener("click", function(){  
  CalcPut("sum");
});

document.getElementById("avgPut").addEventListener("click", function(){  
  CalcPut("avg");
});

document.getElementById("multPut").addEventListener("click", function(){  
  CalcPut("mult");
});

function CalcPost(funcType){
    
   $.post("http://shenkar.html5-book.co.il/2017-2018/dcs/dev_22/BonusExercise/service_calcultor/ReutLeibBonus.php", 
    {func:funcType,num1:10,num2:15,num3:20},

    function( data ) {      
    $(".result").append(" / => ");
    $(".result").append(data.retVal);  
    $(".result").append(" <= / ");
    });
}

function CalcGet(funcType){

    var qString = "http://shenkar.html5-book.co.il/2017-2018/dcs/dev_22/BonusExercise/service_calcultor/ReutLeibBonus.php"
    +"?num1=10&num2=15&num3=20&func="+funcType;
   $.get(qString, 
    function( data ) {      
    $(".result").append(" / => ");
    $(".result").append(data.retVal);  
    $(".result").append(" <= / ");
    });
}

function CalcPut(funcType){

  var dataObj = 'func='+funcType+'&num1=10&num2=15&num3=20';
  $.ajax({
    url: 'http://shenkar.html5-book.co.il/2017-2018/dcs/dev_22/BonusExercise/service_calcultor/ReutLeibBonus.php',
    dataType: 'json',
    type: 'PUT',
    data:dataObj,
    success: function( data ) {

    $(".result").append(" / => ");
    $(".result").append(data.retVal);  
    $(".result").append(" <= / ");
    }

  });
}

