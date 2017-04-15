$(document).ready(function() {

    //initialize instance
    var enjoyhint_instance = new EnjoyHint({});

    //simple config.
    //Only one step - highlighting(with description) "New" button
    //hide EnjoyHint after a click on the button.
    var enjoyhint_script_steps = [
        {
            'next .mdl-layout__header' : 'Bienvenue sur votre application de gestion de vos affichages',
        },
        {
            'next #presentation-link' : 'Cliquez sur le menu présentations pour gérer vos présentations (ajouter, modifier, supprimer)'
        },
        {
            'next #serie-link' : 'Cliquez sur le menu créneaux horaires pour gérer vos créneaux horaires (ajouter, modifier, supprimer)'
        },
        {
            'next #presentation-link' : 'Cliquez sur le menu prévisualisation pour avoir un apercu du rendu final'
        },

    ];

    //set script config
    enjoyhint_instance.set(enjoyhint_script_steps);

    //run Enjoyhint script
    enjoyhint_instance.run();

});
