async function showOffers(str) {
    let response = await fetch("?c=offer&a=offerNames");
    let dataCollection = await response.json();

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
        xmlHttp.open("GET", getTypedWord(str, dataCollection), true);
        xmlHttp.send();
    }
}

async function getTypedWord(str, dataCollection) {
    let suggestion = "";
    if (str !== "") {
        str = str.toLowerCase();
        dataCollection.forEach((name) => {
            name = name.toLowerCase();
            let currentString = name.substring(0, str.length - 1);
            if (currentString === name) {
                if (suggestion === "") {
                    suggestion = name;
                } else {
                    suggestion.concat(", ", name);
                }
            }
        })
    }
}