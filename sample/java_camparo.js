let cars = [
    {
        name: "creta",
        Price: "15-20 Lakhs",
        engine: "2.0 Litre turbopetrol/1.5 litre diesel",
        powertorque: "144 hp & 250 Nm(petrol)/115 hp & 180 Nm(diesel)",
        gearbox: "7 speed DCT(Petrol)/6 speed MT(All)/6 speed AT(Diesel)",
        fueleconomy: "16 kmpl(petrol)/20 kmpl(diesel)",
        wheelbase: "2750 mm",
        infoitainment: "10.25 inch touchscreen"
    },
    {
        name: "seltos",
        Price: "14-19 Lakhs",
        engine: "1.5 Litre turbopetrol/1.0 litre diesel",
        powertorque: "140 hp & 280 Nm(petrol)/115 hp & 175 Nm(diesel)",
        gearbox: "7 speed DCT(Petrol)/6 speed MT(All)/6 speed AT(Diesel)",
        fueleconomy: "15 kmpl(petrol)/19 kmpl(diesel)",
        wheelbase: "2750 mm",
        infoitainment: "10 inch touch screen"
    },
    {
        name: "harrier",
        Price: "18-23 Lakhs",
        engine: "2.0 Litre diesel/1.5 litre petrol",
        powertorque: "170 hp & 300 Nm(diesel)/140 hp & 200 Nm(petrol)",
        gearbox: "7 speed DCT(Petrol)/6 speed MT(All)/6 speed AT(Diesel)",
        fueleconomy: "13 kmpl(petrol)/16 kmpl(diesel)",
        wheelbase: "3000 mm",
        infoitainment: "8 inch touch screen"
    }
  ]
function button_click(){
    console.log("hi");
    var c1=document.querySelector('.car_name1');
    var c2=document.querySelector('.car_name2');
    var car1=document.getElementById('car1').value;
    var car2=document.getElementById('car2').value;
    var car1l = car1.toLowerCase();
    var car2l = car2.toLowerCase();
    var s1=document.querySelector('#spec11');
    var s2=document.querySelector('#spec12');
    var s3=document.querySelector('#spec13');
    var s4=document.querySelector('#spec14');
    var s5=document.querySelector('#spec15');
    var s6=document.querySelector('#spec16');
    var s7=document.querySelector('#spec17');
    var t1=document.querySelector('#spec21');
    var t2=document.querySelector('#spec22');
    var t3=document.querySelector('#spec23');
    var t4=document.querySelector('#spec24');
    var t5=document.querySelector('#spec25');
    var t6=document.querySelector('#spec26');
    var t7=document.querySelector('#spec27');
    for(var i=0;i<cars.length;i++){
        console.log("hi1");
        if(cars[i].name==car1l){
            console.log("hi2");
            c1.innerText=cars[i].name.toUpperCase();
            s1.innerText=cars[i].Price;
            s2.innerText=cars[i].engine;
            s3.innerText=cars[i].powertorque;
            s4.innerText=cars[i].gearbox;
            s5.innerText=cars[i].fueleconomy;
            s6.innerText=cars[i].wheelbase;
            s7.innerText=cars[i].infoitainment;
        }
        if(cars[i].name==car2l){
            c2.innerText=cars[i].name.toUpperCase();
            t1.innerText=cars[i].Price;
            t2.innerText=cars[i].engine;
            t3.innerText=cars[i].powertorque;
            t4.innerText=cars[i].gearbox;
            t5.innerText=cars[i].fueleconomy;
            t6.innerText=cars[i].wheelbase;
            t7.innerText=cars[i].infoitainment;
        }
    }
    var compare=document.querySelector('.compare');
    compare.style.display= "flex";
}
