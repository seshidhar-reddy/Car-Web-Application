from unicodedata import name
from django.http import HttpResponseRedirect
from django.shortcuts import render, redirect
from .models import *

from .forms import *

from django.contrib.auth.forms import UserCreationForm

from django.contrib.auth import authenticate , login , logout


# Create your views here.
def sort_by_lowest(request):
    car_details = Used_Car_Details.objects.order_by('Price').all()
    return render(request,'buy.html',{'car_details' : car_details})
def sort_by_highest(request):
    car_details = Used_Car_Details.objects.order_by('-Price').all()
    return render(request,'buy.html',{'car_details' : car_details})
def sort_by_popularity(request):
    car_details = Used_Car_Details.objects.order_by('-status').all()
    return render(request,'buy.html',{'car_details' : car_details})
def suggest(request):
    if request.method == 'POST':
        price_range_1 = request.POST['select_car']
        car1_type = request.POST['select_price']
        id_1 = 4
        if price_range_1 != "All" and car1_type != "All":
            try:
                price_range_11 = str(request.POST['select_car'])
                car1_type1 = str(request.POST['select_price'])
                car_1 = suggest_details.objects.order_by('-Rating').all().filter(Price_Range = price_range_11)
                return render(request,'suggest.html',{'car_1' : car_1,'price' : price_range_11,'car' : car1_type1})
            except Exception:
                return render(request,'suggest.html')
        elif price_range_1 == "All" and car1_type == "All":
            car_1 = suggest_details.objects.order_by('-Rating').all()
            return render(request,'suggest.html',{'car_1' : car_1})
        elif price_range_1 == "All":
            try:
                car_1 = suggest_details.objects.filter(car_type = car1_type)
                return render(request,'suggest.html',{'car_1' : car_1})
            except:
                return render(request,'suggest.html')
        elif car1_type == "All":
            try:
                car_1 = suggest_details.objects.filter(Price_Range = price_range_1)
                return render(request,'suggest.html',{'car_1' : car_1})
            except:
                return render(request,'suggest.html')
    return render(request,'suggest.html')
def comparo(request):
    if request.method == 'POST':
        car1 = request.POST.get('car1')
        car2 = request.POST.get('car2')
        cars_1 = car_details.objects.get(name = car1)
        cars_2 = car_details.objects.get(name = car2)
        return render(request,'comparo.html',{'car_1' : car1 ,'car_2' : car2,'car1' : cars_1,'car2' : cars_2})
    return render(request,'comparo.html')
def sell(request):
    sellForm = SellForm1()
    user = request.user
    if request.method == 'POST':
        Used_Car_Details1 = Used_Car_Details(name = user,status = 0)
        sellForm = SellForm1(request.POST,request.FILES,instance=Used_Car_Details1)
        sellForm.save()
        return HttpResponseRedirect('/home/')
    return render(request,'sell.html',{'form' : sellForm})
def buy(request):
    car_details = Used_Car_Details.objects.filter(name = request.user)
    car_details1 = Used_Car_Details.objects.all()
    result = car_details1.difference(car_details)
    selled_cars = buy_details.objects.filter(name = request.user)
    arr1 = Used_Car_Details.objects.none()
    for j in selled_cars:
        arr1 = arr1.union(Used_Car_Details.objects.filter(id = j.car.id))
    result = result.difference(arr1)
    return render(request,'buy.html',{'car_details' : result})
def home(request):
    SellForm = SellForm(request.POST)
    companys = car_company.objects.all()
    years = []
    photos = [1,2,3,4,5,6,7,8,9,10]
    for i in range(2000,2022):
        years.append(i)
    return render(request,'index.html',{'companys' : companys, 'years' : years, 'photos' : photos})
def home_page(request):
    return render(request, 'home.html')
def signup(request):
    form = UserCreateForm()
    if request.method == 'POST':
        form = UserCreateForm(request.POST)
        if form.is_valid():
            form.save()
            return HttpResponseRedirect('/login/')
    context = {'form' : form}
    return render(request,'signup.html',context)
def loginuser(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        pwd = request.POST.get('password')
        user = authenticate(request, username = username , password = pwd)
        if user is not None :
            login(request,user)
            return HttpResponseRedirect('/home/')
    return render(request,'login.html')
def logoutuser(request):
    logout(request)
    return HttpResponseRedirect('/login/')
def profile(request):
    arr = buy_details.objects.none()
    requests = Used_Car_Details.objects.filter(name = request.user)
    for i in requests:
        request_1 = buy_details.objects.filter(car = i)
        arr = arr.union(request_1)
    selled_cars = buy_details.objects.filter(name = request.user)
    arr1 = Used_Car_Details.objects.none()
    for j in selled_cars:
        arr1 = arr1.union(Used_Car_Details.objects.filter(id = j.car.id))
    return render(request,'profile.html',{'arr' : arr,'arr1' : arr1})
def process(request,id):
    user_1 = Used_Car_Details.objects.get(id = id)
    user = request.user
    b_details = buy_details(name = user,car = Used_Car_Details.objects.get(id = id))
    b_details.save()
    st = user_1.status
    user1 = Used_Car_Details.objects.filter(id = id).update(status = st+1)
    return HttpResponseRedirect('/home/')