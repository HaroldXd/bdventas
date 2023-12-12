var confirmBtn = document.getElementById('confirmPosition');
var onClickPositionView = document.getElementById('onClickPositionView');

var onIdlePositionView1 = document.getElementById('onIdlePositionView');

// Initialize locationPicker plugin
var lp = new locationPicker('map', {
    setCurrentPosition: true, // You can omit this, defaults to true
}, {
    zoom: 15 // You can set any google map options here, zoom defaults to 15
});

// Listen to button onclick event
confirmBtn.onclick = function() {
    // Get current location and show it in HTML
    var location = lp.getMarkerPosition();
    onClickPositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
};

// Listen to map idle event, listening to idle event more accurate than listening to ondrag event
google.maps.event.addListener(lp.map, 'idle', function(event) {
    // Get current location and show it in HTML
    var location = lp.getMarkerPosition();
    //onIdlePositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
    onIdlePositionView1.innerHTML = location.lat + ',' + location.lng;
    $('#ubicacion').val(location.lat + ',' + location.lng);
});

const someCheckbox = document.getElementById('checkbox1');
var firstName = "";
var lastName = "";
someCheckbox.addEventListener('change', e => {
    if (e.target.checked === true) {
        console.log("Checkbox is checked - boolean value: ", e.target.checked)
        $('#aea').val('"Ventas"');
        firstName = $('#aea').val();
        $('#idservicio').val(firstName + ' ' + lastName);
    }
    if (e.target.checked === false) {
        console.log("Checkbox is not checked - boolean value: ", e.target.checked)
        $('#aea').val('');
        firstName = $('#aea').val();
        $('#idservicio').val(firstName + ' ' + lastName);
    }
});

const someCheckbox1 = document.getElementById('checkbox2');

someCheckbox1.addEventListener('change', e1 => {
    if (e1.target.checked === true) {
        console.log("Checkbox is checked - boolean value: ", e1.target.checked)
        $('#aea1').val('"Servicio Tecnico"');
        lastName = $('#aea1').val();
        $('#idservicio').val(firstName + ' ' + lastName);
    }
    if (e1.target.checked === false) {
        console.log("Checkbox is not checked - boolean value: ", e1.target.checked)
        $('#aea1').val('');
        lastName = $('#aea1').val();
        $('#idservicio').val(firstName + ' ' + lastName);
    }
});