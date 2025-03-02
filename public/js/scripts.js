$(function() {
    $("#guardarModal").hide();
    $(".btn-guardar").on("click", function() {
        $("#guardarModal").fadeIn();
    });

    $("#cerrarModal").on("click", function() {
        $("#guardarModal").fadeOut();
    });

    $(".btn-guardar").on("click", function(event) {
        event.preventDefault();
        console.log("Guardar")
        let action = $(this).data("action");
        switch (action) {
            case "guardar":
                alert("Guardando...");
                $("#guardarModal").fadeOut();
                break;
            case "guardarSalir":
                alert("Guardando y saliendo...");
                $("#guardarModal").fadeOut();
                break;
            case "guardarMaster":
                alert("Guardando y nueva partida de máster...");
                $("#guardarModal").fadeOut();
                break;
            case "guardarHouse":
                alert("Guardando y nuevo house...");
                $("#guardarModal").fadeOut();
                break;
            case "guardarMC":
                alert("Guardando y nuevo MC...");
                $("#guardarModal").fadeOut();
                break;
        }

    });
});
