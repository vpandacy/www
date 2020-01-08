
// ------ditu------

var map, geolocation;
map = new AMap.Map('container', {
    resizeEnable: true
});
map.plugin('AMap.Geolocation', function() {
    geolocation = new AMap.Geolocation({
        enableHighAccuracy: true,
        timeout: 10000,        
        buttonOffset: new AMap.Pixel(10, 20),
        zoomToAccuracy: true, 
        buttonPosition:'RB'
    });
    map.addControl(geolocation);
    geolocation.getCurrentPosition();
    AMap.event.addListener(geolocation, 'complete', onComplete);
    // AMap.event.addListener(geolocation, 'error', onError); 
});



function onComplete(data) {
    document.getElementById('lng').value = data.position.getLng();
    document.getElementById('lat').value = data.position.getLat();

    document.getElementById('finger').value = new Fingerprint().get();
}