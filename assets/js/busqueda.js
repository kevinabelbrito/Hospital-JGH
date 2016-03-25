$(function(){
    function verificar_elementos()
    {
        if($("#campo").val() == "cedula")
        {
            $("#nac").show();
            $("#cedula").show();
            $("#nombre").removeAttr('name').hide();
            $("#indigena").removeAttr('name').hide();
            $("#municipio").removeAttr('name').hide();
            $("#sexo").removeAttr('name').hide();
        }
        else if ($("#campo").val() == "nombre")
        {
            $("#nac").hide();
            $("#cedula").hide();
            $("#nombre").attr('name', 'search').show();
            $("#indigena").removeAttr('name').hide();
            $("#municipio").removeAttr('name').hide();
            $("#sexo").removeAttr('name').hide();
        }
        else if($("#campo").val() == "indigena")
        {
            $("#nac").hide();
            $("#cedula").hide();
            $("#nombre").removeAttr('name').hide();
            $("#indigena").attr('name', 'search').show();
            $("#municipio").removeAttr('name').hide();
            $("#sexo").removeAttr('name').hide();
        }
        else if ($("#campo").val() == "municipio")
        {
            $("#nac").hide();
            $("#cedula").hide();
            $("#nombre").removeAttr('name').hide();
            $("#indigena").removeAttr('name').hide();
            $("#municipio").attr('name', 'search').show();
            $("#sexo").removeAttr('name').hide();
        }
        else if ($("#campo").val() == "sexo")
        {
            $("#nac").hide();
            $("#cedula").hide();
            $("#nombre").removeAttr('name').hide();
            $("#indigena").removeAttr('name').hide();
            $("#municipio").removeAttr('name').hide();
            $("#sexo").attr('name', 'search').show();
        }
        else
        {
            $("#nac").hide();
            $("#cedula").hide();
            $("#nombre").hide();
            $("#indigena").hide();
            $("#municipio").hide();
            $("#sexo").hide();
        }
    }
    verificar_elementos();
    $("#campo").change(function()
    {
        verificar_elementos();
    });
});