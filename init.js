if (navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/)) {
    //IF MOBILE
    document.addEventListener("deviceready", onDeviceReady, false);

     } else {

     onDeviceReady();

     }