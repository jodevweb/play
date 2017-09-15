$(document).ready(function () {
    $("input").each(function (index) {
        $("#number_" + index).click(function () {
            event.preventDefault();
            var number = $("#number_" + index);
            var user = $("#user");

            if (user.html().length > 0) {
                var data = {
                    'numbers': $("#user").html() + ' ' + number.val()
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
                        } else {
                            user.html(user.html() + ' ' + number.val());
                        }
                    },
                    error: function() {
                        user.html("Désolé, aucun résultat trouvé.");
                    }
                });
            } else {
                var data = {
                    'numbers': number.val()
                };

                $.ajax({
                    url: 'game',
                    type: 'POST',
                    dataType: 'HTML',
                    data: data,
                    success: function(response) {
                        user.html(number.val());
                    },
                    error: function() {
                        user.html("Désolé, aucun résultat trouvé.");
                    }
                });
            }
        });
    });
});