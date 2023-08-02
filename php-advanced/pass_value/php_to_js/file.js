
// catch value html & write into the elem id "app".
function callValue(myValue) {
  const elem = document.getElementById("app").innerHTML = `${myValue}`;
  document.write(elem);
}
callValue(myValue);

console.log(myValue);

// jQuery to catch value from html (by CDN).
$(document).ready(function() {
  $("#app").html(myValue);
  alert(myValue);
});

