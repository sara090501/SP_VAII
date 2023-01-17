async function showOffers(str) {
    if (str.length === 0) {
        document.getElementById('output').innerHTML = '';
    } else {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                document.getElementById('output').innerHTML = this.responseText;
            }
        }
        xmlHttp.open("GET", "?c=api&a=suggestions&q="+str, true);
        xmlHttp.send();
    }
}