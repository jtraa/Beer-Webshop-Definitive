 // OPenweathermap Opencagedata.com

 window.addEventListener('load', ()=> {

    
    let long = document.querySelector('.lon');
    let lat = document.querySelector('.let');
    let temperatureDescription = document.querySelector('.temperature-description');
    let temperatureDegree = document.querySelector('.temperature-degree');
    let locationTimezone = document.querySelector(".location-timezone");
    let temperatureSection = document.querySelector('.temperature');
    const temperatureSpan = document.querySelector('.temperature span');
    
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(position =>{
            console.log(position);
            long = position.coords.longitude;
            lat = position.coords.latitude;

            const proxy = `https://cors-anywhere.herokuapp.com/`;
            const api = `${proxy}https://samples.openweathermap.org/data/2.5/forecast?id=524901&appid=a11898d44e32530a0b93f777508811a4/${lat},${long}`;
            // const api = `${proxy}https://api.darksky.net/forecast/acbd414f65ee3fb171b9579adbad6aee/52.370216,4.895168`; //Amsterdam
            // const api = `${proxy}https://api.darksky.net/forecast/acbd414f65ee3fb171b9579adbad6aee/55.755825,40.617298`; //MOSCOW
            // const api = `${proxy}https://api.darksky.net/forecast/acbd414f65ee3fb171b9579adbad6aee/51.270527,30.219433`; //KIEV
            // const api = `${proxy}https://api.darksky.net/forecast/acbd414f65ee3fb171b9579adbad6aee/40.712776,-110.617298`; // DENVER
            // const api = `${proxy}https://api.darksky.net/forecast/acbd414f65ee3fb171b9579adbad6aee/20.712776,-110.617298`; // MEXICO CITY
            // const api = `${proxy}https://api.darksky.net/forecast/acbd414f65ee3fb171b9579adbad6aee/20.712776,110.617298`; //Shanghai
            
            fetch(api)
            .then(response =>{
                return response.json();
            })
            .then(data =>{
                console.log(data);
                const {description, icon } = data.list.weather;
                const {temp} = data.list.main;
                //SET DOM Elements from the API
                temperatureDegree.textContent = Math.floor(temp);
              
                temperatureDescription.textContent = description;
                locationTimezone.textContent = data.timezone;
                //FORMULA for Celsius
                let celsius = (temp - 32) * (5 / 9);
                //Set Icon
                setIcons(icon, document.querySelector(".icon"));

                //Change temperature to Celsius/Fahrenheit
                temperatureSection.addEventListener('click', () =>{
                    if(temperatureSpan.textContent === "°F"){
                        temperatureSpan.textContent = "°C";
                        temperatureDegree.textContent = Math.floor(celsius);
                    }else{
                        temperatureSpan.textContent = "°F";
                        temperatureDegree.textContent = Math.floor(temp);
                    }
                });
            });
        });
       
       
}
function setIcons(icon, iconID) {
    const skycons = new Skycons({color:"white"});
    const currentIcon = icon.replace(/-/g, "_").toUpperCase();
    skycons.play();
    return skycons.set(iconID, Skycons[currentIcon]);

}
});


