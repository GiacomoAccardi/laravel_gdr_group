import "./bootstrap";
//TEST
import Choices from "choices.js";
//
import "~resources/scss/app.scss";
import "~icons/bootstrap-icons.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

//cambio preview al cambio della classe nella select
const selectTypeBtns = document.querySelectorAll('.type_id')

function deletion(btn, entity) {
    btn.addEventListener('click', function (ev) {
        ev.preventDefault();

        const delModalId = entity === 'pg' ? "destroyCharactersModal" : "destroyItemsModal";
        const delModal = document.getElementById(delModalId)
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

// TEST
// Inizializzazione di Choices.js su tutti gli elementi select con multiple
const selectElement = document.querySelector('.choices-select');
if (selectElement) {
    const choices = new Choices(selectElement, {
        removeItemButton: true,  // Aggiunge il pulsante per rimuovere le selezioni
        searchEnabled: true,     // Abilita la ricerca tra le opzioni
        placeholderValue: 'Filtra gli oggetti',  // Placeholder personalizzato
    });
}