import requests
import json
import sys


api_key = "fdf8cffc2baaeac74190cf42c496e07b"

base_url = "http://api.openweathermap.org/data/2.5/weather?"

# if len(sys.argv) > 1:
#     city_name = sys.argv[1]
#     print(city_name)
city_name = sys.argv[1]
# print(city_name)    
complete_url = base_url+"q="+city_name+"&"+"appid="+api_key
# print(complete_url)
response = requests.get(complete_url)

current_weather = response.json()

if current_weather["cod"] != "404":
    # print("API is active")
    y = current_weather["main"]
#     print(y)
    current_temperature = y["temp"]
    current_pressure = y["pressure"]
    current_humidity = y["humidity"]
    z = current_weather["weather"]
#     print(z)
    weather_description = z[0]["description"]
    print("Temperature (in kelvin) = " +str(current_temperature)+
         ",\n Atmospheric Pressure (in hPa) = " +str(current_pressure)+
         ",\n Humidity (in Percentage) = " +str(current_humidity)+
         ",\n Weather Description = " +str(weather_description))
    
else :
    print("City Not Found")