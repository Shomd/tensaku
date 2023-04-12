document.getElementById("btn").onclick = function () {
  navigator.geolocation.getCurrentPosition(success, error);
};
if (navigator.geolocation) {
  function success(position) {
    let latitude = position.coords.latitude;
    document.getElementById("latitude").value = latitude;
    let longitude = position.coords.longitude;
    document.getElementById("longitude").value = longitude;
  }

  function error(error) {
    alert("位置情報が取得できませんでした");
  }
} else {
  alert("位置情報が利用できません");
}
