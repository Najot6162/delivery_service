How to run this project
1.cp .env.example .env    
2.configuration database
3.composer install
4.php artisan migrate
5.php artisan db:seed --class=CreateProductSeeder  

Documentation api

1.Orderlarni statusini o'zgartirish uchun
  put  request - http://localhost:8001/api/update-product-status/id
body -
{
    "status":"yetkazildi"
}

response -  return "order status updated successfully";

2.Yetkazilishi kerak bo'lgan tovarlar ro'yxati
get request - http://localhost:8001/api/show-delivery-orders  

response - 
  "data": [
        {
            "id": 2,
            "first_name": "vali",
            "last_name": "soliyev",
            "phone_number": 1234898,
            "courier_name": "anvar",
            "address": "tashkent",
            "status": "yetkazilmoqda",
            "product_id": 1,
            "created_at": "2022-06-01T20:57:25.000000Z",
            "updated_at": "2022-06-01T20:57:25.000000Z",
            "arrival_time": "6 minutes before",
            "products": [
                {
                    "id": 1,
                    "name": "redmi note 9",
                    "category": "phone",
                    "created_at": "2022-06-01T20:57:25.000000Z",
                    "updated_at": "2022-06-01T20:57:25.000000Z"
                }
            ]
        },
        {
            "id": 3,
            "first_name": "sobr",
            "last_name": "valiyev",
            "phone_number": 9877898,
            "courier_name": "sanjar",
            "address": "fargona",
            "status": "yetkazilmoqda",
            "product_id": 2,
            "created_at": "2022-06-01T20:57:25.000000Z",
            "updated_at": "2022-06-01T20:57:25.000000Z",
            "arrival_time": "6 minutes before",
            "products": [
                {
                    "id": 2,
                    "name": "hp probook 450 g5",
                    "category": "computer",
                    "created_at": "2022-06-01T20:57:25.000000Z",
                    "updated_at": "2022-06-01T20:57:25.000000Z"
                }
            ]
        }
       .....
    ]
    
    3.Qaysi yetkazuvchi nechta order yetkazganligini o'rsatuvchi api
    
   get request - http://localhost:8001/api/show-courier
    
    response - 
    {
    "data": [
        {
            "courier_name": "sanjar",
            "total": 5
        },
        {
            "courier_name": "anvar",
            "total": 3
        }
    ]
    4.Qaysi project nechta sotilganligi haqida malumotlar chqarauvchi api
    
   get request - http://localhost:8001/api/sold-product-count
    
    response - 
    
    {
    "data": [
        {
            "id": 1,
            "name": "redmi note 9",
            "category": "phone",
            "created_at": "2022-06-01T20:57:25.000000Z",
            "updated_at": "2022-06-01T20:57:25.000000Z",
            "sold_count": 2
        },
        {
            "id": 2,
            "name": "hp probook 450 g5",
            "category": "computer",
            "created_at": "2022-06-01T20:57:25.000000Z",
            "updated_at": "2022-06-01T20:57:25.000000Z",
            "sold_count": 2
        },
        {
            "id": 3,
            "name": "Samsung A 72",
            "category": "phone",
            "created_at": "2022-06-01T20:57:25.000000Z",
            "updated_at": "2022-06-01T20:57:25.000000Z",
            "sold_count": 4
        }
    ]
}

5.Qaysi viloyatdan nechta sotilganligini ko'rsatuvchi api 

get resuest - http://localhost:8001/api/sold-country-count

response - 
{
    "data": [
        {
            "address": "fargona",
            "total": 4
        },
        {
            "address": "andijon",
            "total": 2
        },
        {
            "address": "tashkent",
            "total": 2
        }
    ]
}
