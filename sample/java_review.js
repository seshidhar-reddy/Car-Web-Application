function display_cars(){
    var car = document.getElementById('select_car');
    var price = document.getElementById('select_price');
    var form = document.getElementsByClassName('ff');
    var selected = document.querySelectorAll('.sub');
    var selected_car = car.value;
    var selected_price = price.value;
    if(selected_car=="all"){
        if(selected_price=="all"){
            for(var i=0;i<selected.length;i++){
                selected[i].style.display='block';
            }
        }
        if(selected_price=="5-10 Lakhs"){
            for(var i=0;i<selected.length;i++){
                if(i<4){
                    selected[i].style.display='block';
                }
                else{
                    selected[i].style.display='none';
                }
            }
        }
        if(selected_price=="10-15 Lakhs"){
            for(var i=0;i<selected.length;i++){
                if(i>=4 && i<10){
                    selected[i].style.display='block';
                }
                else{
                    selected[i].style.display='none';
                }
            }
        }
        if(selected_price=="15-20 Lakhs"){
            for(var i=0;i<selected.length;i++){
                if(i>=10 && i<18){
                    selected[i].style.display='block';
                }
                else{
                    selected[i].style.display='none';
                }
            }
        }
        if(selected_price=="20-25 Lakhs"){
            for(var i=0;i<selected.length;i++){
                if(i>=18 && i<selected.length){
                    selected[i].style.display='block';
                }
                else{
                    selected[i].style.display='none';
                }
            }
        }
    }
    if(selected_car=="sedan"){
        if(selected_price=="all"){
            for(var i=0;i<selected.length;i++){
                selected[i].style.display='block';
            }
        }
        if(selected_price=="5-10 Lakhs"){
            for(var i=0;i<selected.length;i++){
                if(i<4){
                    selected[i].style.display='block';
                }
                else{
                    selected[i].style.display='none';
                }
            }
        }
        if(selected_price=="10-15 Lakhs"){
            for(var i=0;i<selected.length;i++){
                if(i>=4 && i<10){
                    selected[i].style.display='block';
                }
                else{
                    selected[i].style.display='none';
                }
            }
        }
        if(selected_price=="15-20 Lakhs"){
            for(var i=0;i<selected.length;i++){
                if(i>=10 && i<18){
                    selected[i].style.display='block';
                }
                else{
                    selected[i].style.display='none';
                }
            }
        }
        if(selected_price=="20-25 Lakhs"){
            for(var i=0;i<selected.length;i++){
                if(i>=18 && i<selected.length){
                    selected[i].style.display='block';
                }
                else{
                    selected[i].style.display='none';
                }
            }
        }
    }
}