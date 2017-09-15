$(document).ready(function () {
    $("input").each(function (index) {
        $("#number_" + index).click(function () {
            event.preventDefault();
            var number = $("#number_" + index);
            var user = $("#user");
            var ai = $("#bot");
            var getNumbers = '<div id="numbers">\n' +
                '        <input type="submit" id="number_0" value="1">\n' +
                '        <input type="submit" id="number_1" value="2">\n' +
                '        <input type="submit" id="number_2" value="3">\n' +
                '        <input type="submit" id="number_3" value="4">\n' +
                '        <input type="submit" id="number_4" value="5">\n' +
                '        <input type="submit" id="number_5" value="6">\n' +
                '        <input type="submit" id="number_6" value="7">\n' +
                '        <input type="submit" id="number_7" value="8">\n' +
                '        <input type="submit" id="number_8" value="9">\n' +
                '        <input type="submit" id="number_9" value="10">\n' +
                '</div>';

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
                            user.html('Winner : ' + obj.winner + ' ! GG');
                            $("#numbers > *").remove();

                            setTimeout(function() {
                                user.html('');
                                $("#numbers").html(getNumbers);
                            }, 5000);

                        } else {
                            user.html(user.html() + ' ' + number.val());
                            var data = {
                                'numbers': user.html() + ' ' + number.val(),
                                'role': 'ai'
                            };

                            $.ajax({
                                url: 'game',
                                type: 'POST',
                                dataType: 'HTML',
                                data: data,
                                success: function(responseAI) {
                                    var obj = jQuery.parseJSON(responseAI);
                                    ai.html(ai.html() + ' ' + obj.numbers);
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