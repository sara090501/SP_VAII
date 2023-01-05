class Offer {
    async getOffers() {
        try {
            let response = await fetch("?c=offer&a=offers");
            let data = await response.json();

            let list = document.getElementById("offer-list");
            list.textContent = '';
            data.offers.forEach((offer) => {
                let link = document.createElement("a");
                link.href = "#";
                link.innerText = user.login;
                link.onclick = () => document.getElementById('message-to').value = link.innerText;
                list.appendChild(link);
                list.appendChild(document.createElement('br'));
            });
        } catch (e) {
            console.error('Chyba: ' + e.message);
        }
    }
}