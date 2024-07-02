document.addEventListener("DOMContentLoaded", function() {
    // Hide preloader after 3 seconds
    const preloader = document.querySelector(".preloader");
    const content = document.querySelector(".content");
  
    setTimeout(function() {
      preloader.style.display = "none";
      content.style.display = "block";
    }, 10); // 3000 milliseconds = 3 seconds
});
  

function sub() {

  var email = document.getElementById("email");

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
      if (r.readyState == 4) {
          var t = r.responseText;
          if (t == "Success") {

            alert("Subscription Successful. Please check your Email");
            window.location.reload();
              
          } else {
              alert(t);
          }

      }
  }

  r.open("GET", "subProcess.php?e=" + email.value, true);
  r.send();

}

function sendMsg() {

    var name = document.getElementById("name");
    var em = document.getElementById("email");
    var sub = document.getElementById("subject");
    var msg = document.getElementById("message");
   

    var f = new FormData();
    f.append("name", name.value);
    f.append("email", em.value);
    f.append("subject", sub.value);
    f.append("message", msg.value);
    

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;

            if (t == "Your message was sent, thank you!") {

                document.getElementById("msg").innerHTML = t;
                document.getElementById("msg").className = "alert alert-success text-center mb-4 p-4 border rounded-4 fs-5";
                document.getElementById("msgdiv").className = "d-block";
                setTimeout(function() {
                    window.location.reload();
                }, 1500);

            } else {

                document.getElementById("msg").innerHTML = t;
                document.getElementById("msgdiv").className = "d-block";

            }

        }
    }

    r.open("POST", "contactusProcess.php", true);
    r.send(f);
    return false;
}