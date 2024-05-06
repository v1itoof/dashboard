$(document).ready(function() {

    new DataTable('#table-home', {
        language: {
            "emptyTable":     "Nenhum resultado disponível...",
            "info":           "_START_ - _END_ de _TOTAL_",
            "infoEmpty":      "",
            "lengthMenu":     "_MENU_",
            "loadingRecords": "Carregando...",
            "processing":     "",
            "search":         "Buscar:",
            "zeroRecords":    "Nenhum resultado disponível...",
            "paginate": {
                "next":       "Próximo",
                "previous":   "Anterior"
            },
        }
    });

    $('body').on('click', '#toggle-btn', function(e) {
        e.preventDefault();

        $('#sidebar').toggleClass("expand");

        if($( "#sidebar").hasClass( "expand" )){
            $(this).find('i').removeClass('lni-menu').addClass('lni-close');
        }
        if(!$( "#sidebar").hasClass( "expand" )){
            $(this).find('i').removeClass('lni-close').addClass('lni-menu');
        }
    });
});
