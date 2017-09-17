$(document).ready(function () {
    $("input").each(function (index) {
        $("#number_" + index).click(function () {
            event.preventDefault();
            var number = $("#number_" + index); // On récupère les nombres
            var user = $("#user"); // On récupère la div User
            var ai = $("#bot"); // On récupère la div Bot

            if (user.html().length > 0) { // Si la div user n'est pas vide
                // On déclare data qui renvoie les nombres de l'user et le rôle user
                var data = {
                    'numbers': user.html() + ' ' + number.val(),
                    'role': 'user'
                };

                // On effectue une requête Ajax pour savoir si le joueur win ainsi que récupérer la réponse du bot
                $.ajax({
                    url: 'game',
                    type: 'POST',
                    dataType: 'HTML',
                    data: data,
                    success: function(response) {
                        var obj = jQuery.parseJSON(response);
                        if (obj.winner !== false) { // Si l'user gagne
                            user.html('Winner with ' + obj.winner + ' ! GG');
                            $("#numbers > *").remove();
                            ai.html('Loose');

                            setTimeout(function() {
                                location.reload();
                            }, 5000);

                        } else { // Si l'user n'a pas gagné on continue la partie
                            user.html(user.html() + ' ' + number.val());
                            $("#numbers").addClass('disabled');
                            var data = {
                                'numbers': user.html() + ' ' + number.val(),
                                'numbers_ai': ai.html(),
                                'role': 'ai'
                            };

                            $.ajax({
                                url: 'game',
                                type: 'POST',
                                dataType: 'HTML',
                                data: data,
                                success: function(responseAI) {
                                    var obj = jQuery.parseJSON(responseAI);

                                    if (obj.winner !== false) {
                                        ai.html('Winner with ' + obj.winner + ' ! GG');
                                        $("#numbers > *").remove();
                                        user.html('Loose');

                                        setTimeout(function() {
                                            location.reload();
                                        }, 5000);
                                    } else {
                                        if (obj.extract !== false) { // on récupère le numéro du bot si il a trouvé le même que l'user on annule la partie
                                            user.html('');
                                        }
                                        ai.html(ai.html() + ' ' + obj.numbers);
                                        $("#numbers").removeClass('disabled');
                                    }
                                },
                                error: function() {
                                    ai.html("Désolé, aucun résultat trouvé.");
                                }
                            });
                        }
                    },
                    error: function() {
                        user.html("Désolé, aucun résultat trouvé.");
                    }
                });
            } else { // Si c'est le premier numéro de l'user...
                var data = {
                    'numbers': number.val(),
                    'role': 'user'
                };

                $.ajax({
                    url: 'game',
                    type: 'POST',
                    dataType: 'HTML',
                    data: data,
                    success: function(response) {
                        user.html(number.val());

                        var data = {
                            'numbers': number.val(),
                            'role': 'ai'
                        };

                        $.ajax({
                            url: 'game',
                            type: 'POST',
                            dataType: 'HTML',
                            data: data,
                            success: function(responseAI) {
                                var obj = jQuery.parseJSON(responseAI);
                                if (obj.extract !== false) {
                                    user.html('');
                                }
                                ai.html(obj.numbers);
                            },
                            error: function() {
                                ai.html("Désolé, aucun résultat trouvé.");
                            }
                        });

                    },
                    error: function() {
                        bot.html("Désolé, aucun résultat trouvé.");
                    }
                });
            }
        });
    });
});