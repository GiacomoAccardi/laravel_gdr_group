import "./bootstrap";
import "~resources/scss/app.scss";
import "~icons/bootstrap-icons.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

//cambio preview al cambio della classe nella select
const selectTypeBtns = document.querySelectorAll('.type_id')

// // eliminazione personaggio
// const delChBtns = document.querySelectorAll(".del-btn");
// // eliminazione personaggio in show
// const delChFromShow = document.querySelectorAll(".characters-del")
// // eliminazione oggetto
// const delObBtns = document.querySelectorAll(".obj-delete")
// // eliminazione oggetto in show
// const delObFromShow = document.querySelectorAll(".object-show-delete")

// //gestione modale per eliminazione
// delChBtns.forEach((btn) => {
//     btn.addEventListener('click', function (ev) {
//         ev.preventDefault();

//         const delModal = document.getElementById("destroyModal");
//         let newModal = new bootstrap.Modal(delModal);
//         newModal.show();

//         const pgs_name = btn.getAttribute("data-pg-name");
//         let modalAlert = document.getElementById("modal-text");
//         modalAlert.innerText = `Sei ben certo di voler bandire ${pgs_name}?`;

//         const confirm = document.getElementById("confirm-del");
//         confirm.addEventListener("click", function () {
//             btn.parentElement.submit();
//         });
//     });
// });

// delChFromShow.forEach((btn) => {
//     btn.addEventListener('click', function (ev) {
//         ev.preventDefault();

//         const delModal = document.getElementById("destroyModal");
//         let newModal = new bootstrap.Modal(delModal);
//         newModal.show();

//         const pgs_name = btn.getAttribute("data-pg-name");
//         let modalAlert = document.getElementById("modal-text");
//         modalAlert.innerText = `Sei ben certo di voler bandire ${pgs_name}?`;

//         const confirm = document.getElementById("confirm-del");
//         confirm.addEventListener("click", function () {
//             btn.parentElement.submit();
//         });
//     });
// });

// delObBtns.forEach((btn) => {
//     btn.addEventListener('click', function (ev) {
//         ev.preventDefault();

//         const delModal = document.getElementById("destroyModal");
//         let newModal = new bootstrap.Modal(delModal);
//         newModal.show();

//         const obj_name = btn.getAttribute("data-obj-name");
//         let modalAlert = document.getElementById("modal-text");
//         modalAlert.innerText = `Sei ben certo di voler bandire ${obj_name}?`;

//         const confirm = document.getElementById("confirm-del");
//         confirm.addEventListener("click", function () {
//             btn.parentElement.submit();
//         });
//     });
// });

// delObFromShow.forEach((btn) => {
//     btn.addEventListener('click', function (ev) {
//         ev.preventDefault();

//         const delModal = document.getElementById("destroyModal");
//         let newModal = new bootstrap.Modal(delModal);
//         newModal.show();

//         const obj_name = btn.getAttribute("data-obj-name");
//         let modalAlert = document.getElementById("modal-text");
//         modalAlert.innerText = `Sei ben certo di voler bandire ${obj_name}?`;

//         const confirm = document.getElementById("confirm-del");
//         confirm.addEventListener("click", function () {
//             btn.parentElement.submit();
//         });
//     });
// });

function deletion(btn, entity) {
    btn.addEventListener('click', function (ev) {
        ev.preventDefault();

        const delModal = document.getElementById("destroyModal");
        let newModal = new bootstrap.Modal(delModal);
        newModal.show();

        const data_name = btn.getAttribute(`data-${entity}-name`);
        let modalAlert = document.getElementById("modal-text");

        if(entity === 'pg') {
            modalAlert.innerText = `Siete certo di voler bandire ${data_name}?`;
        } else if(entity === 'obj') {
            modalAlert.innerText = `Sicuro di volerVi disfare di ${data_name}?`;
        }

        const confirm = document.getElementById("confirm-del");
        confirm.addEventListener("click", function () {
            btn.parentElement.submit();
        })
    });
}

// listener
function deleteEvent(buttons, entity) {
    buttons.forEach((btn) => deletion(btn, entity));
}

// Delete pgs
deleteEvent(document.querySelectorAll(".del-btn"), "pg");
deleteEvent(document.querySelectorAll(".characters-del"), "pg");

// Delete objs
deleteEvent(document.querySelectorAll(".obj-delete"), "obj");
deleteEvent(document.querySelectorAll(".object-show-delete"), "obj");

//gestione anteprima
selectTypeBtns.forEach((selectType) => {
    selectType.addEventListener('change', function() {
        //opzione scelta
        const optionSelected = this.options[this.selectedIndex];
        //prendo il valore dell'attributo che ho creato in create.blade.php, cioè il path
        const imgPath = optionSelected.getAttribute('data-img');
        //recupero l'elemento in cui voglio mostrare previeww
        const preview = document.querySelector('.selected-img');
    
        //se esiste immagine associata all'opzione che ho selezionato
        if (imgPath) {
            preview.src = imgPath;
            preview.classList.remove('d-none');
        } else {
            preview.src = ''
            preview.classList.add('d-none');
        }
    })
    
})