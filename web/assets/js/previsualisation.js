$(document).ready(function() {


    // il faut que je check tous les x intervalle si je dois changer de presentation en fonction de la duree de chaque presentation

    var firstlaunch = true;

    var serieDisplayed = getSerieToDisplay();

    if(serieDisplayed != null) {
        displaySerie(serieDisplayed);
    }

    /*
     * Interrogation du backend tous les 5 min pour voir si une nouvelle serie doit être affichée
     * */
    var updated = setInterval(function() {

        serieToDisplay = getSerieToDisplay();
        if(serieDisplayed != null) {
            if(serieDisplayed.id != serieToDisplay.id) {
                serieDisplayed = serieToDisplay;
            } else {
                if(firstlaunch) {
                    firstlaunch = false;
                    displaySerie(serieDisplayed);
                }
            }
        }
    }, 30000);



    // TODO P1: gestion de aucune serie retourné par le backend ou serie ne contient aucune presentations
    //Permet de retrouver la serie active a l'heure de la requete
    function getSerieToDisplay()
    {
        var serieActive = {};
        $.ajax({
            //url: 'http://sevignemiroir.local/display/active',
            url: 'active',
            type: 'GET',
            dataType: 'json',
            async: false,
            success: function(response) {
                console.log('success');
                console.log(response);
                serieActive = response;
            },
            error: function (response) {
                console.log('error');
                console.log(response);
                // TODO P1 : gestion des erreurs de récupération
                //alert('Erreur lors de la récupération du diaporama');
            }
        });
        return serieActive;
    }


    /*
     * Permet de generer le code html a inserer dans la page
     * @param affichage : json object representant une presentation avec google id, longueur pres + param lecteur
     * @return : html code of an iframe
     * */
    function generateHtmlIframe(affichage)
    {
        var iframeHtmlCode = '';
        var windowWidth = $(document).width();
        var windowHeight = $(document).height();

        if(
            affichage.presentation._id_google_slide != undefined && affichage.presentation._id_google_slide != ''
            && affichage.presentation.presentation_duration != undefined && affichage.presentation.presentation_duration != ''
            && affichage.presentation.slider_autostart != undefined && affichage.presentation.slider_autostart != ''
            && affichage.presentation.slider_loop != undefined && affichage.presentation.slider_loop != ''
            && affichage.presentation.slide_duration != undefined && affichage.presentation.slide_duration != ''
        ) {
            var slider_autostart = 'true';
            var slider_loop = 'true';
            var delayms = 3000;
            if(!isNaN(affichage.presentation.slide_duration)) {
                delayms = affichage.presentation.slide_duration*1000;
            }
            (affichage.presentation.slider_autostart == true) ?  slider_autostart = 'true' :  slider_autostart = 'false';
            (affichage.presentation.slider_loop == true) ?  slider_loop = 'true' :  slider_loop = 'false';
            iframeHtmlCode = '<iframe src="https://docs.google.com/presentation/d/' + affichage.presentation._id_google_slide + '/embed?start=' + slider_autostart + '&loop=' + slider_loop + '&delayms=' + delayms.toString() + '" frameborder="0" width="' + windowWidth  + '" height="' + windowHeight + '" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>';
        } else {
        }
        //var iframeHtmlCode = '<iframe src="https://docs.google.com/presentation/d/1oOBuNHorJsZ1AAIWZ4TuqzmzHRWJ38Eh0lAmx5JzNkE/embed?start=true&loop=true&delayms=3000" frameborder="0" width="1280px" height="670px" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>';
        return iframeHtmlCode;

    }


    /*
     * Permet de mettre a jour l'affichage d'une serie de preserntations si une nouvelle est retourne par le backend
     * @param : la nouvelle serie retourne par le backend
     * */
    function displaySerie(serie)
    {
        var i = 0;
        if(serie.affichages != null) {
            playNextPresentation();
        }

        function playNextPresentation()
        {
            if (i < serie.affichages.length) {
                var presentation = serie.affichages[i].presentation;
                var intervalTimeOut = presentation.presentation_duration*1000 + 2000;
                var iframeHtmlCode = generateHtmlIframe(serie.affichages[i]);
                $('#iframeDiv').html(iframeHtmlCode);
                i++;
                if( i == serie.affichages.length) {
                    i = 0;
                }
                setTimeout(playNextPresentation, intervalTimeOut);
            }
        }

    }


});