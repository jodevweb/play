$(document).ready(function () {
    $("input").each(function (index) {
        $("#number_" + index).click(function () {
            event.preventDefault();
            var number = $("#number_" + index);
            var user = $("#user");
            var ai = $("#bot");

            if (user.html().length > 0) {
                var data = {
                    'numbers': user.html() + ' ' + number.val(),
                    'role': 'user'
                };

                $.ajax({
                    url: 'game',
                    type: 'POST',
                    dataType: 'HTML',
                    data: data,
                    success: function(response) {
                        var obj = jQuery.parseJSON(response);
                        if (obj.winner !== false) {
                            user.html('Winner User : ' + obj.winner + ' ! GG');
                            $("#numbers > *").remove();
                            ai.html('');

                            setTimeout(function() {
                                location.reload();
                            }, 5000);

                        } else {
                            user.html(user.html() + ' ' + number.val());
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
                                        ai.html('Winner AI : ' + obj.winner + ' ! GG');
                                        $("#numbers > *").remove();
                                        user.html('');

                                        setTimeout(function() {
                                            location.reload();
                                        }, 5000);
                                    } else {
                                        if (obj.extract !== false) {
                                            user.html('');
                                        }
                                        ai.html(ai.html() + ' ' + obj.numbers);
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
            } else {
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