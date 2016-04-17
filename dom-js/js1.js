/**
 * Created by Emmanuelle on 10/01/2016.
 */
window.addEventListener("load", function () {
    var notes = [
            {fr: "Sélectionnez une note"}, {
                fr: "do", am: "C"
            }, {
                fr: "ré", am: "D"
            }, {
                fr: "mi", am: "E"
            }, {
                fr: "fa", am: "F"
            }, {
                fr: "sol", am: "G"
            }, {
                fr: "la", am: "L"
            }, {
                fr: "si", am: "S"
            }
        ]
        ;
//Création des nouveaux éléments
    var titre = document.createElement('h1');
    var newform = document.createElement('form');
    newform.id = "form_notes";
    var newselect = document.createElement('select');
    newselect.size = "1";
    newselect.className = "list";

    var newdiv = document.createElement('div');
    newdiv.id = "answer";


//Insertion des nouveaux éléments
    document.body.appendChild(titre);
    titre.innerHTML = "Ma note de musique en américain";
    document.body.appendChild(newform);
    newform.appendChild(newselect);
    addSelects(); // crée et insère les élèments select
    document.body.appendChild(newdiv);


//remplissage des options du select
    function addSelects() {
        for (var id in notes) {
            var option = document.createElement('option');
            option.label = notes[id].fr;


            if (id == 0) {
                option.value = "default";
                option.id = "default";
                option.disabled = true;
                option.selected = true;
            }
            else {
                option.value = id;
            }
            newselect.appendChild(option);
        }

    }

    function translate() {
        var selection = notes[newselect.value].fr;
        var translation = notes[newselect.value].am;

        newdiv.innerHTML = "Le " + selection + " correspond à la notation " + translation + " en américain.";
        document.getElementById("default").selected = true;
    }

    newselect.addEventListener("change", translate, false);
})
; //s'assure que la page est chargée
