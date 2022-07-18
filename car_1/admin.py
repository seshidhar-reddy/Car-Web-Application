from django.contrib import admin

# Register your models here.

from .models import *

admin.site.register(Used_Car_Details)

admin.site.register(car_company)

admin.site.register(car_info)

admin.site.register(model_info)

admin.site.register(user_info)

admin.site.register(car_details)

admin.site.register(suggest_details)

admin.site.register(buy_details)

