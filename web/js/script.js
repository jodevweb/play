$(document).ready(function () {
    $("input").each(function (index) {
        $("#number_" + index).click(function () {
            event.preventDefault();
            var number = $("#number_" + index);
            var user = $("#user");
<<<<<<< HEAD
            var ai = $("#bot");
=======
>>>>>>> 4d70fb631836e09249a3a8fc711ebf46df946409
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
<<<<<<< HEAD
                    'numbers': user.html() + ' ' + number.val(),
                    'role': 'user'
=======
                    'numbers': $("#user").html() + ' ' + number.val()
>>>>>>> 4d70fb631836e09249a3a8fc711ebf46df946409
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
<<<<<<< HEAD

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
                                    ai.html(obj.numbers);
                                },
                                error: function() {
                                    ai.html("Désolé, aucun résultat trouvé.");
                                }
                            });

=======
>>>>>>> 4d70fb631836e09249a3a8fc711ebf46df946409
                        }
                    },
                    error: function() {
                        user.html("Désolé, aucun résultat trouvé.");
                    }
                });
            } else {
                var data = {
<<<<<<< HEAD
                    'numbers': number.val(),
                    'role': 'user'
=======
                    'numbers': number.val()
>>>>>>> 4d70fb631836e09249a3a8fc711ebf46df946409
                };

                $.ajax({
                    url: 'game',
                    type: 'POST',
                    dataType: 'HTML',
                    data: data,
                    success: function(response) {
                        user.html(number.val());
<<<<<<< HEAD

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
=======
                    },
                    error: function() {
                        user.html("Désolé, aucun résultat trouvé.");
>>>>>>> 4d70fb631836e09249a3a8fc711ebf46df946409
                    }
                });
            }
        });
    });
});