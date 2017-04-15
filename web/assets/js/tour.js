$(document).ready(function() {

    var enjoyhint_instance = new EnjoyHint({});

    //detection de la page pour déterminer le script de tour a executer

    var pathname = window.location.pathname.substr(1);

    switch(pathname) {
        case '':
            var enjoyhint_script_steps = [
                {
                    'next .mdl-layout__header' : 'Bienvenue sur votre application de gestion de vos affichages',
                },
                {
                    'next #presentation-link' : 'Le menu présentations vous permet de gérer vos présentations (ajouter, modifier, supprimer)'
                },
                {
                    'next #serie-link' : 'Le menu créneaux horaires vous permet de gérer vos créneaux horaires (ajouter, modifier, supprimer)'
                },
                {
                    'next #previsualisation-link' : 'Le menu prévisualisation vous permet  d\'avoir un apercu du rendu final'
                },
                {
                    onBeforeStart: function(){
                        $('#presentation-link').click(function(e){
                            enjoyhint_instance.trigger('presentation');
                        });
                    },
                    selector:'#presentation-link',
                    event:'presentation',
                    event_type:'custom',
                    description:'Cliquez maintenant sur le menu présentations pour gérer vos présentations (ajouter, modifier, supprimer)',
                }
            ];
            break;
        case 'presentation':
            var enjoyhint_script_steps = [
                {
                    onBeforeStart: function(){
                        $('#presentation-add').click(function(e){
                            enjoyhint_instance.trigger('presentation-add');
                        });
                    },
                    selector:'#presentation-add',
                    event:'presentation-add',
                    event_type:'custom',
                    description:'Cliquez sur le bouton + pour ajouter une nouvelle présentation',
                    shape: 'circle'
                }
            ];
            break;
        case 'presentation/add':
            var enjoyhint_script_steps = [
                {

                    'next #appbundle_presentation_name' : 'Obligatoire : saisissez le nom de votre présentation'
                },
                {
                    'next #appbundle_presentation_url' : 'Obligatoire : saisissez l\'url de votre présentation google slide. Vous retrouvez cette information dans l\'application google slide dans le menu fichier > publier sur le web. Attention! Seules les présentations google slide sont acceptées'
                },
                {
                    'next #appbundle_presentation_slidesNumber' : 'Obligatoire : saisissez le nombre de slides de votre présentation'
                },
                {
                    'next #appbundle_presentation_slideDuration' : 'facultatif : saisissez la durée en seconde pendant laquelle chaque slide restera affichée'
                },
                {
                    'next #appbundle_presentation_slideTransitionDuration' : 'facultatif : saisissez la durée de transition en secondes entre chaque slide'
                },
                {
                    'next #presentation-duree' : 'facultatif : saisissez la durée totale de votre présentation'
                },
                {
                    'next #appbundle_presentation_save' : 'Enregistrez votre présentation'
                }
            ];
            break;

    }





    //set script config
    enjoyhint_instance.set(enjoyhint_script_steps);

    //run Enjoyhint script
    enjoyhint_instance.run();

});
