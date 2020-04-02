
function show_loader() {
    $(document).ready(function(){
        $('.deem').css('display','block');
        $('.loader').css('display','inline-block');
    });
}
function hide_loader() {
    $(document).ready(function(){
        $('.deem').css('display','none');
        $('.loader').css('display','none');
    });
}
function encrypt() {
        show_loader();  
        var _data = document.getElementById('data');
        var key = document.getElementById('key'); 
        var status = document.getElementById('status');
        var result = document.getElementById('result'); 
        var hiddenresult = document.getElementById('hiddenresult'); 
        $(document).ready(function(){
            $.post("request/encrypt.php",{
                data: _data.value,
                key: key.value
            },
            function (data,status){
                if (status == 'success'){
                    hide_loader();
                    resultobj = JSON.parse(data);
                    $("#result_case").slideDown();
                    $("#status").html(resultobj.successtxt);
                    $("#result").html(resultobj.htmlresult);
                    $("#hiddenresult").val(resultobj.result);
                    
                    
                }
            });
        });
        return false;
}
function decrypt() {  
        show_loader();  
        var _data = document.getElementById('data');
        var key = document.getElementById('key'); 
        var status = document.getElementById('status');
        var result = document.getElementById('result'); 
        var hiddenresult = document.getElementById('hiddenresult'); 
        $(document).ready(function(){
            $.post("request/decrypt.php",{
                data: _data.value,
                key: key.value
            },
            function (data,status){
                if (status == 'success'){
                    hide_loader(); 
                    resultobj = JSON.parse(data);
                        $("#result_case").slideDown();
                        $("#status").html(resultobj.successtxt);
                        $("#result").html(resultobj.htmlresult);
                        $("#hiddenresult").val(resultobj.result);
                    
                    
                }
            });
        });
        return false;
}



function copy(element_id){
  var aux = document.createElement("div");
  aux.setAttribute("contentEditable", true);
  aux.innerHTML = document.getElementById(element_id).innerHTML;
  aux.setAttribute("onfocus", "document.execCommand('selectAll',false,null)"); 
  document.getElementById('result_case').appendChild(aux);
  aux.focus();
  var success = document.execCommand("copy");
  if (success == true) {
     $("#status").html("<b>STATUS:</b>Text copied");
  }else{
     $("#status").html("<b>STATUS:</b>Text not copied");
  }
  document.getElementById('result_case').removeChild(aux);
}
