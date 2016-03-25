$(function(){
    //Funciones
    function regular(){
        $("#sexo_paciente").show();
        $("#periodo_maternal").hide();
        $("#condicion_nutri").hide();
        $("#edadgest_mateneo").hide();
        $("#peso_neonatal").hide();
        $("#estancia_inf").hide();
        $("#consultas_mateneo").hide();
        $("#ocupacion_maternal").hide();
    }
    function materna(){
        $("#periodo_maternal").show();
        $("#edadgest_mateneo").show();
        $("#consultas_mateneo").show();
        $("#sexo_paciente").hide();
        $("#condicion_nutri").hide();
        $("#peso_neonatal").hide();
        $("#estancia_inf").hide();
        $("#ocupacion_maternal").show();
    }
    function neonatal(){
        $("#edadgest_mateneo").show();
        $("#peso_neonatal").show();
        $("#consultas_mateneo").show();
        $("#sexo_paciente").show();
        $("#periodo_maternal").hide();
        $("#condicion_nutri").hide();
        $("#estancia_inf").hide();
        $("#ocupacion_maternal").hide();
    }
    function postneonatal(){
        $("#sexo_paciente").show();
        $("#periodo_maternal").hide();
        $("#condicion_nutri").show();
        $("#edadgest_mateneo").hide();
        $("#peso_neonatal").hide();
        $("#estancia_inf").show();
        $("#consultas_mateneo").hide();
        $("#ocupacion_maternal").hide();
    }
    function infantil(){
        $("#sexo_paciente").show();
        $("#periodo_maternal").hide();
        $("#condicion_nutri").show();
        $("#edadgest_mateneo").hide();
        $("#peso_neonatal").hide();
        $("#estancia_inf").show();
        $("#consultas_mateneo").hide();
        $("#ocupacion_maternal").hide();
    }
    //Datos que varian segun la mortalidad
    if ($("#materna").attr('checked'))
    {
        materna();
    }
    else if ($("#neonatal").attr('checked'))
    {
        neonatal();
    }
    else if ($("#postneonatal").attr('checked'))
    {
        postneonatal();
    }
    else if ($("#infantil").attr('checked'))
    {
        infantil();
    }
    else
    {
        regular();
    }
    //MORTALIDAD MATERNA
    $("#materna").click(function(){
        materna();
    });
    //MORTALIDAD NEONATAL
    $("#neonatal").click(function(){
        neonatal();
    });
    //MORTALIDAD POSTNEONATAL
    $("#postneonatal").click(function(){
        postneonatal();
    });
    $("#infantil").click(function(){
        infantil();
    });
    $("#regular").click(function(){
        regular();
    });
});