//alert("hello");
function checkForm(){ 
    var timetip = checktime(); 
    var adresstip = checkadress();  
    //var conpasstip = ConfirmPassword(); 
    return timetip && adresstip; 
} 
function checkadress()
{
    var me_adress = document.getElementById('adress');
    if(me_adress.value.length == 0){
        alert("请输入开会地址");
        return false;
    }
    else{
        return true;
    }
}
function checktime()
{
    var me_time = document.getElementById('time');
    if(me_time.value.length == 0)
    {
        alert("请输入开会时间");
        return false;
    }else{
        return true;
    }
}     