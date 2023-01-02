function showSuggestions(str) {
    if (str.length === 0) {
        document.getElementById('output').innerHTML = '';
    } else {
        var xmlHttp = new XMLHttpRequest();
        //onreadystatechange - defines a function to be called when the readyState property changes
        xmlHttp.onreadystatechange = function () {
            //4: request finished and response is ready, 200: "OK"
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                document.getElementById('output').innerHTML = this.responseText;
            }
        }
        xmlHttp.open("GET", "App/Views/User/suggest.php?q="+str, true);
        xmlHttp.send();
    }
}

function visibilityOfPassword() {
    const password = document.getElementById("password");
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}