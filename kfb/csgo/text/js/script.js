function put(person1,person2){
  document.getElementById("person1").innerHTML = person1
  document.getElementById("person2").innerHTML = person2
};

function nameInp(){
  var person1 = prompt("Please enter first name", "Adolf Hitler");
  var person2 = prompt("Please enter last name", "Adolf Hitler")
  put(person1,person2)
};

function getParameterByName(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};

function nameGet(){
  var p1 = getParameterByName('person1')
  var p2 = getParameterByName('person2')
  put(p1,p2)
};

function genImg(){
  html2canvas(document.getElementById('container')).then(function(canvas) {
   document.write(canvas.toDataURL());
 });
};
