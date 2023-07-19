function callValue(myValue) {
  const elem = document.getElementById("app").innerHTML = `${myValue}`;
  document.write(elem);
}
callValue(myValue);

console.log(myValue);

$(document).ready(function() {
  $("#app").html(myValue);
  alert(myValue);
});

