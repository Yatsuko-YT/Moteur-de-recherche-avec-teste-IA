document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.color-button');

    // Marquer les autres boutons comme 'not-selected' si le premier est déjà sélectionné
    buttons.forEach(button => {
        if (!button.classList.contains('selected')) {
            button.classList.add('not-selected');
        }
    });

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Retirer les classes 'selected' et 'not-selected' de tous les boutons
            buttons.forEach(btn => {
                btn.classList.remove('selected', 'not-selected');
            });

            // Ajouter la classe 'selected' au bouton cliqué
            button.classList.add('selected');

            // Ajouter la classe 'not-selected' aux autres boutons
            buttons.forEach(btn => {
                if (!btn.classList.contains('selected')) {
                    btn.classList.add('not-selected');
                }
            });
        });
    });
});
let myprofil = document.getElementById('myprofil');
let pub = document.getElementById('pub');
let setting = document.getElementById('setting');
let amis = document.getElementById('amis');
let message = document.getElementById('message');
let notif = document.getElementById('notif');
let deco = document.getElementById('deco');
let w1 = document.getElementById('wrapper1');
let w2 = document.getElementById('wrapper2');
let w3 = document.getElementById('wrapper3');
let w4 = document.getElementById('wrapper4');

myprofil.addEventListener("click", () => {
    w1.style.display = "block";
    w2.style.display = "none";
    w3.style.display = "none";
    w4.style.display = "none";
})
pub.addEventListener("click", () => {
    w1.style.display = "none";
    w2.style.display = "block";
    w3.style.display = "none";
    w4.style.display = "none";
})
setting.addEventListener("click", () => {
    w1.style.display = "none";
    w2.style.display = "none";
    w3.style.display = "block";
    w4.style.display = "none";
})
// amis.addEventListener("click", () => {

// })
// message.addEventListener("click", () => {

// })
notif.addEventListener("click", () => {
    w1.style.display = "none";
    w2.style.display = "none";
    w3.style.display = "none";
    w4.style.display = "block";
})
deco.addEventListener("click", () => {

})


// document.addEventListener('DOMContentLoaded', () => {
//     const buttons = document.querySelectorAll('.color-button');

//     buttons.forEach(button => {
//         button.addEventListener('click', () => {
//             // Retirer les classes 'selected' et 'not-selected' de tous les boutons
//             buttons.forEach(btn => {
//                 btn.classList.remove('selected', 'not-selected');
//             });

//             // Ajouter la classe 'selected' au bouton cliqué
//             button.classList.add('selected');

//             // Ajouter la classe 'not-selected' aux autres boutons
//             buttons.forEach(btn => {
//                 if (!btn.classList.contains('selected')) {
//                     btn.classList.add('not-selected');
//                 }
//             });
//         });
//     });
// });

































// let myprofil = document.getElementById('myprofil');
// let pub = document.getElementById('pub');
// let setting = document.getElementById('setting');
// let amis = document.getElementById('amis');
// let message = document.getElementById('message');
// let notif = document.getElementById('notif');
// let deco = document.getElementById('deco');

// pub.addEventListener("click", () => {
//     myprofil.style.background = "transparent";
//     setting.style.background = "transparent";
//     amis.style.background = "transparent";
//     message.style.background = "transparent";
//     notif.style.background = "transparent";
//     deco.style.background = "transparent";
//     pub.style.background = "blue";
// })
// myprofil.addEventListener("click", () => {
//     pub.style.background = "transparent";
//     setting.style.background = "transparent";
//     amis.style.background = "transparent";
//     message.style.background = "transparent";
//     notif.style.background = "transparent";
//     deco.style.background = "transparent";
//     myprofil.style.background = "blue";
// })
// setting.addEventListener("click", () => {
//     myprofil.style.background = "transparent";
//     pub.style.background = "transparent";
//     amis.style.background = "transparent";
//     message.style.background = "transparent";
//     notif.style.background = "transparent";
//     deco.style.background = "transparent";
//     setting.style.background = "blue";
// })
// amis.addEventListener("click", () => {
//     myprofil.style.background = "transparent";
//     setting.style.background = "transparent";
//     pub.style.background = "transparent";
//     message.style.background = "transparent";
//     notif.style.background = "transparent";
//     deco.style.background = "transparent";
//     amis.style.background = "blue";
// })
// message.addEventListener("click", () => {
//     myprofil.style.background = "transparent";
//     setting.style.background = "transparent";
//     amis.style.background = "transparent";
//     pub.style.background = "transparent";
//     notif.style.background = "transparent";
//     deco.style.background = "transparent";
//     message.style.background = "blue";
// })
// notif.addEventListener("click", () => {
//     myprofil.style.background = "transparent";
//     setting.style.background = "transparent";
//     amis.style.background = "transparent";
//     message.style.background = "transparent";
//     pub.style.background = "transparent";
//     deco.style.background = "transparent";
//     notif.style.background = "blue";
// })
// deco.addEventListener("click", () => {
//     myprofil.style.background = "transparent";
//     setting.style.background = "transparent";
//     amis.style.background = "transparent";
//     message.style.background = "transparent";
//     notif.style.background = "transparent";
//     pub.style.background = "transparent";
//     deco.style.background = "blue";
// })