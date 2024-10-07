import "./bootstrap";
import "~resources/scss/app.scss";
import "~icons/bootstrap-icons.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const delBtns = document.querySelectorAll(".del-btn");

delBtns.forEach((btn) => {
    btn.addEventListener('click', function (ev) {
        ev.preventDefault();

        const delModal = document.getElementById("destroyModal");
        let newModal = new bootstrap.Modal(delModal);
        newModal.show();

        const pgs_name = btn.getAttribute("data-pg-name");
        let modalAlert = document.getElementById("modal-text");
        modalAlert.innerText = `Sei ben certo di voler bandire ${pgs_name}?`;

        const confirm = document.getElementById("confirm-del");
        confirm.addEventListener("click", function () {
            btn.parentElement.submit();
        });
    });
});
