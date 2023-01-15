async function showOffers(str) {
    // let response = await fetch("?c=offer&a=offerNames");
    // let dataCollection = await response.json();

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
        xmlHttp.open("GET", "?c=api&a=suggestions&q="+str, true);
        xmlHttp.send();
    }
}