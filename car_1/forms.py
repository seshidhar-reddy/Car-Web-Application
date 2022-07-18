
from django import forms
from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth.models import User
from django.forms import ModelForm
from .models import *

class signupForm(ModelForm):
    class Meta:
        model = user_info
        fields = '__all__'

class UserCreateForm(UserCreationForm):
    class Meta:
        model = User
        fields = ['username','email','password1','password2']
class SellForm1(ModelForm):
    class Meta:
        model = Used_Car_Details
        exclude = ['name','status']
        choice_comp = ["Select Company"]
        car_companys =car_company.objects.all()
        choice_comp = choice_comp + list(car_companys.values_list('name', flat=True))
        choice_companys = []
        for i in range(len(choice_comp)):
            choice_companys.append((choice_comp[i],choice_comp[i]))
        choice_car = ["Select Car"]
        choice_cars = []
        for i in range(len(choice_car)):
            choice_cars.append((choice_car[i],choice_car[i]))
        car = forms.ChoiceField(widget=forms.Select,choices=choice_cars)
        car_model = ["Select Model"]
        choice_models = []
        for i in range(len(car_model)):
            choice_models.append((car_model[i],car_model[i]))
        car_year = ["Select Year",2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021]
        choice_years = []
        for i in range(len(car_year)):
            choice_years.append((car_year[i],car_year[i]))
        widgets = {
            'Company': forms.Select(attrs={'class': 'form-select'},choices = choice_companys),
            'Car_name': forms.Select(attrs={'class': 'form-select'},choices=choice_cars),
            'Car_Model': forms.Select(attrs={'class': 'form-select'},choices=choice_models),
            'Car_Year': forms.Select(attrs={'class': 'form-select'},choices=choice_years),
        }