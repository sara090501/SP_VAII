class Suppliers {
    async constructor() {
        window.onload = () => this.reloadData();

        setInterval(() => {
            this.reloadData()
        }, 2000);
    }

    async getSuppliers() {
        try {
            let response = await fetch("?c=supplier&a=suppliers");
            let dataCollection = await response.json();
            let text = document.getElementById("suppliers-table");
            text.textContent = '';
            dataCollection.suppliers.forEach((supplier) => {
                let row = document.createElement("tr");
                row.innerText = supplier.company;
                row.innerText = supplier.country;
                row.innerText = supplier.slogan;
                text.appendChild(row);
                text.appendChild(document.createElement('br'));
            });
        } catch (e) {
            console.error('Chyba: ' + e.message);
        }
    }

    async reloadData() {
        await this.getSuppliers();
    }
}

var suppliers;
document.addEventListener(
    'DOMContentLoaded', () => {
        suppliers = new Suppliers();
    }, false);