const addBtn = document.querySelector(".add");
const input = document.querySelector(".inp-group");

function removeInput() {
    this.parentElement.remove();
}

function addInput() {
    const JenisProduk = document.createElement("input");
    JenisProduk.type = "text";
    JenisProduk.placeholder = "Jenis Produk";

    const nilai = document.createElement("input");
    nilai.type = "text";
    nilai.placeholder = "Masukan Jumlah/Nama";


    const btn = document.createElement("button");
    btn.className = "delete";
    btn.innerHTML = "-";

    btn.addEventListener("click", removeInput)

    const flex = document.createElement("div");
    flex.className = "flex"

    input.appendChild(flex);
    flex.appendChild(JenisProduk);
    flex.appendChild(nilai);
    flex.appendChild(btn);

}
addBtn.addEventListener("click", addInput);
