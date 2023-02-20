
  function soloLetras(e) 
  {

    tecla = (document.all) ? e.keyCode : e.which;

      //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) 
    {
      return true;
    }


    patron = /[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
  }
   


function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}

function filterFloat(evt,input){
  // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
  var key = window.Event ? evt.which : evt.keyCode;    
  var chark = String.fromCharCode(key);
  var tempValue = input.value+chark;
  if(key >= 48 && key <= 57){
      if(filter(tempValue)=== false){
          return false;
      }else{       
          return true;
      }
  }else{
        if(key == 8 || key == 13 || key == 0) {     
            return true;              
        }else if(key == 46){
              if(filter(tempValue)=== false){
                  return false;
              }else{       
                  return true;
              }
        }else{
            return false;
        }
  }
}
function filter(_val_){
  var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
  if(preg.test(_val_) === true){
      return true;
  }else{
     return false;
  }
  
}
