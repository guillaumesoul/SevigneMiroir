$(document).ready(function() {

    var enjoyhint_instance = new EnjoyHint({});

    //detection de la page pour déterminer le script de tour a executer

    var pathname = window.location.pathname.substr(1);

    switch(pathname) {
        case '':
            var enjoyhint_script_steps = [
                {
                    'next .mdl-layout__header' : 'Bienvenue sur votre application de gestion de vos affichages. Cette application vous permet de créer des listes de présentations Google slide sur des créneaux horaires qui défileront automatiquement',
                },
                {
                    'next #presentation-link' : 'Le menu présentations vous permet de gérer vos présentations google slide : ajouter, modifier, supprimer'
                },
                {
                    'next #serie-link' : 'Le menu créneaux horaires vous permet de gérer vos créneaux horaires : déterminer leur heure de début et heure de fin'
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
                    description:'Cliquez maintenant sur le menu présentations',
                    shape: 'circle'
                }
            ];
            break;
        case 'presentation':
            var enjoyhint_script_steps = [
                {
                  'next #presentation-list' : 'Vos présentations déjà enregistrées sont listées ici'
                },
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
                    'next #presentation-duree' : 'facultatif : saisissez la durée totale de votre présentation. Si vou ne saisissez rien, celle-ci sera automatiquement calculée en fonction du nombre de slides et de leurs durées d\'affichage'
                },
                {
                    'next #appbundle_presentation_save' : 'Enregistrez votre présentation'
                },
                {
                    onBeforeStart: function(){
                        $('#serie-link').click(function(e){
                            enjoyhint_instance.trigger('serie-link');
                        });
                    },
                    selector:'#serie-link',
                    event:'serie-link',
                    event_type:'custom',
                    description:'Cliquez maintenant sur le menu créneaux horaires',
                    shape: 'circle'
                }
            ];
            break;
        case 'serie':
            var enjoyhint_script_steps = [
                {
                    'next #serie-list' : 'Vos créneaux horaires déjà enregistrés sont listés ici'
                },
                {
                    onBeforeStart: function(){
                        $('#serie-add').click(function(e){
                            enjoyhint_instance.trigger('serie-add');
                        });
                    },
                    selector:'#serie-add',
                    event:'serie-add',
                    event_type:'custom',
                    description:'Cliquez sur le bouton + pour ajouter un nouveau créneau horaire',
                    shape: 'circle'
                }
            ];
            break;
        case 'serie/add':
            var enjoyhint_script_steps = [
                {

                    'next #appbundle_serie_name' : 'Obligatoire : saisissez le nom du créneau horaire'
                },
                {
                    'next #heureDebut' : 'Obligatoire : saisissez l\'heure de début du créneau horaire'
                },
                {
                    'next #heureFin' : 'Obligatoire : saisissez l\'heure de fin du créneau horaire'
                },
                {
                    'next #appbundle_serie_save' : 'Enregistrez votre créneau horaire'
                },
                {
                    onBeforeStart: function(){
                        $('#serie-link').click(function(e){
                            enjoyhint_instance.trigger('previsualisation-link');
                        });
                    },
                    selector:'#previsualisation-link',
                    event:'previsualisation-link',
                    event_type:'custom',
                    description:'Cliquez maintenant sur le menu prévisualisation',
                    shape: 'circle'
                }
            ];
            break;
    }





    //set script config
    enjoyhint_instance.set(enjoyhint_script_steps);

    //run Enjoyhint script
    enjoyhint_instance.run();

});
