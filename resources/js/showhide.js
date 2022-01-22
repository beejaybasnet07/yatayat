
  document.getElementById("checkclass").style.display="none";
  var a;
  function showhide(){
    if(a==1){
      document.getElementById("checkclass").style.display="none";
      return a=0;
    }
    else{
      document.getElementById("checkclass").style.display="inline";
      return a=1;
    }
  }
