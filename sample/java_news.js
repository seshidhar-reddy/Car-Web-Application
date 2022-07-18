var counter = 0;
function button_click(){
    var items = document.querySelectorAll('.flexx');
    counter++;
    if((counter+1)*4 >items.length){
        for(var i=0;i<items.length;i++){
            items[i].style.display = 'block';
        }
    }
    else{
        for(var i=0;i<(counter+1)*4;i++){
            items[i].style.display = 'block';
        }
    }
}