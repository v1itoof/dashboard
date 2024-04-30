$(document).ready(function() {

    $("form[name='Form-Login']").submit(function(e) {
        e.preventDefault();

        var form = $(this);
        var actionUrl = form.attr('action');

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            success: function(response) {
                console.log(response);
                if(response.success){
                    toastr.success(response.message, 'Sucesso');
                    setTimeout(function() {
                        window.location.href = "/dashboard";
                      }, 1000);
                }

                if(!response.success){
                    if(response.message){
                        toastr.warning(response.message, 'Oops!');
                    }
                    if(response.errors){
                        var errors = response.errors;

                        // Exibe cada mensagem de erro individualmente
                        errors.forEach(function(error) {
                            toastr.error(error);
                        });
                    }
                }
            },
            error: function(xhr, status, error) {
                var response = JSON.parse(xhr.responseText);
                var errors = response.errors;

                toastr.error(response.message); // Exibe a mensagem geral de erro

                // Exibe cada mensagem de erro individualmente
                errors.forEach(function(error) {
                    toastr.error(error);
                });
            }
        });
    });
});
