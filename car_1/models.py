from django.db import models
from django.contrib.auth.models import User
# Create your models here.
class car_company(models.Model):
    name = models.CharField(max_length= 50,null=True)
    def __str__(self):
        return self.name
class car_info(models.Model):
    name = models.CharField(max_length= 50,null=True)
    company = models.ForeignKey(car_company,on_delete=models.CASCADE,null=True)
    def __str__(self):
        return self.name
class user_info(models.Model):
    username = models.CharField(max_length= 50,null=True)
    mail = models.EmailField(null=True)
    first_name = models.CharField(max_length= 50,null=True)
    last_name = models.CharField(max_length= 50,null=True)
    pwd = models.CharField(max_length= 50,null=True)
    def __str__(self):
        return self.username
class Used_Car_Details(models.Model):
    id = models.AutoField(primary_key=True)
    name = models.ForeignKey(User,on_delete=models.CASCADE,null=True)
    status = models.IntegerField(null = True)
    Price = models.CharField(max_length = 30,null=True)
    Mobile_No = models.PositiveBigIntegerField(null=True)
    Company = models.CharField(max_length = 30,null=True)
    Car_name = models.CharField(max_length= 30,null=True)
    Car_Model = models.CharField(max_length= 20,null=True)
    Car_Year = models.IntegerField(null=True)
    reg_no = models.IntegerField(null = True)
    Car_KM = models.IntegerField(null=True)
    photo1 = models.ImageField(upload_to = '',null = True,blank = True)
    photo2 = models.ImageField(upload_to = '',null = True,blank = True)
    photo3 = models.ImageField(upload_to = '',null = True,blank = True)
    photo4 = models.ImageField(upload_to = '',null = True,blank = True)
    photo5 = models.ImageField(upload_to = '',null = True,blank = True)
    photo6 = models.ImageField(upload_to = '',null = True,blank = True)
    photo7 = models.ImageField(upload_to = '',null = True,blank = True)
    photo8 = models.ImageField(upload_to = '',null = True,blank = True)
    photo9 = models.ImageField(upload_to = '',null = True,blank = True)
    photo10 = models.ImageField(upload_to = '',null = True,blank = True)
    def __str__(self) -> str:
        return str(self.id)
class model_info(models.Model):
    name = models.CharField(max_length= 50,null=True)
    car = models.ForeignKey(car_info,on_delete=models.CASCADE,null=True)
    def __str__(self):
        return self.name
class car_details(models.Model):
    id = models.AutoField(primary_key=True)
    name = models.CharField(max_length = 50,null=True)
    Price = models.CharField(max_length = 50,null=True)
    engine =  models.CharField(max_length = 50,null=True)
    powertorque = models.CharField(max_length = 50,null=True)
    gearbox = models.CharField(max_length = 50,null=True)
    fueleconomy = models.CharField(max_length = 50,null=True)
    wheelbase = models.CharField(max_length = 50,null=True)
    infoitainment = models.CharField(max_length = 50,null=True)
    def __str__(self):
        return str(self.id)
class suggest_details(models.Model):
    name = models.CharField(max_length = 50,null=True)
    Price_Range = models.CharField(max_length = 50,null=True)
    car_type = models.CharField(max_length = 50,null=True)
    Price = models.CharField(max_length = 50,null=True)
    Rating = models.CharField(max_length = 50,null=True)
    car_image = models.ImageField(upload_to = '',null = True,blank = True)
    pro1 = models.CharField(max_length = 50,null=True)
    pro2 = models.CharField(max_length = 50,null=True)
    pro3 = models.CharField(max_length = 50,null=True)
    con1 = models.CharField(max_length = 50,null=True)
    con2 = models.CharField(max_length = 50,null=True)
    def __str__(self):
        return str(self.name)
class buy_details(models.Model):
    id = models.AutoField(primary_key=True)
    name = models.ForeignKey(User,on_delete=models.CASCADE,null=True)
    car = models.ForeignKey(Used_Car_Details,on_delete=models.CASCADE,null=True)
    def __str__(self):
        return str(self.id)