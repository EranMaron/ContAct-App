
var locationList = document.getElementById("SortLocation");
var themeList = document.getElementById("SortTheme");
var eventNum;


window.onload = function(){

    var myRequest = new XMLHttpRequest();
    myRequest.open('GET', './includes/sort.json');
    myRequest.onload = function(){
        var data = JSON.parse(myRequest.responseText);
        optionsShow(data);
    };
        myRequest.send();
    
};

const events = document.querySelectorAll ('.itemCard');

for (const itemCard of events) {
    itemCard.addEventListener('click', eventOnclick);
}

    /* Get Data From JSON */

function optionsShow(_data) {
    var locationOption = document.createElement("option");
    var locationList = document.getElementById("SortLocation");
    locationList.appendChild(locationOption);
    locationOption.text = "Location...";
    locationOption.disabled = true;
    var themeOption = document.createElement("option");
    var themeList = document.getElementById("SortTheme");
    themeList.appendChild(themeOption);
    themeOption.text = "Theme...";
    themeOption.disabled = true;

    for (var i = 0; i < _data.city.length; i++) {
        locationOption = document.createElement("option");
        locationList = document.getElementById("SortLocation");
        locationList.appendChild(locationOption);
        locationOption.text = _data.city[i];
        locationOption.value = _data.city[i];
    }

    for (var i = 0; i < _data.theme.length; i++) {
        themeOption = document.createElement("option");
        themeList = document.getElementById("SortTheme");
        themeList.appendChild(themeOption);
        themeOption.text = _data.theme[i];
        themeOption.value = _data.theme[i];
    }

};

function eventOnclick() {
    eventNum = this.getAttribute("id");
    console.log(eventNum);
};
