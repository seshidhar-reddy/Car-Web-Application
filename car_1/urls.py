from unicodedata import name
from django.urls import path

from car_1.models import car_company, car_info, model_info
from . import views
from django.http import JsonResponse

def get_cars_ajax(request):
    data = []
    if request.method == "POST":
        company_id = request.POST['company_id']
        try:
            company1 = car_company.objects.filter(name = company_id).first()
            car = car_info.objects.filter(company = company1)
        except Exception:
            return JsonResponse(data,safe=False)
        return JsonResponse(list(car.values('name')), safe = False)
def get_models_ajax(request):
    data = []
    if request.method == "POST":
        car_id = request.POST['car_id']
        try:
            car1 = car_info.objects.filter(name = car_id).first()
            model = model_info.objects.filter(car = car1)
        except Exception:
            return JsonResponse(data,safe=False)
        return JsonResponse(list(model.values('name')), safe = False)
urlpatterns = [
    path('home/',views.home_page,name = 'home_page'),
    path('login/',views.loginuser,name = 'login'),
    path('logout/',views.logoutuser,name = 'logout'),
    path('signup/',views.signup,name = 'signup'),
    path('sell/',views.sell,name = 'sell'),
    path('buy/',views.buy,name = 'buy'),
    path('profile/',views.profile,name = 'profile'),
    path(r'^process_request/(?P<id>\d+)$',views.process,name = 'process_request'),
    path('comparo/',views.comparo,name = 'comparo'),
    path('suggest/',views.suggest,name = 'suggest'),
    path('get-cars-ajax/',get_cars_ajax, name="get_cars_ajax"),
    path('buy/sort_by_popularity/',views.sort_by_popularity,name = 'sort_by_popularity'),
    path('buy/sort_by_lowest/',views.sort_by_lowest,name = 'sort_by_lowest'),
    path('buy/sort_by_highest/',views.sort_by_highest,name = 'sort_by_highest'),
    path('get-models-ajax/',get_models_ajax, name="get_models_ajax")
]