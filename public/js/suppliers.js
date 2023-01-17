async function getAllSuppliers() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
            document.getElementById('output').innerHTML = this.responseText;
        }
    }
    xmlHttp.open("GET", "?c=api&a=suppliers", true);
    xmlHttp.send();
}