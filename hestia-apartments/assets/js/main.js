
window.addEventListener("load", init);

function init() {
    let burgerMenu = document.querySelector("nav#burger-menu");
    let iconContainer = document.querySelector("nav.icon-container");
    iconContainer.addEventListener("click", () => {
        iconContainer.classList.toggle("change");
        burgerMenu.classList.toggle("hidden");
    });


/*     fetch('https://api.openweathermap.org/data/2.5/weather?q=Athens&appid=beda86a09ebe5fdfbdde59c0e833a9a0')
        .then(response => response.json())
        .then((json) => {
            let temp = json.main.temp - 273;
            temp = temp.toFixed(2);
            document.querySelector("div#athens-temp > span").textContent = temp;
        })   */  
}

function sendEmail(event) {
    event.preventDefault();

    let email = document.querySelector("form input:nth-child(1)").value;

    const xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var resposnse = xhttp.responseText;  //ανάγνωση δεδομένων

            let p = document.querySelector("p#message");
            if(resposnse === email) {
                p.className = "success";
                p.textContent = "Thanks for registering";
            } else {
                p.className = "error";
                p.textContent = "oops, something went wrong, please try again"
            }
        }
    };

    xhttp.open("POST", "ajax.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //xhttp.send("email="+email);
    xhttp.send(`email=${email}`);
}


