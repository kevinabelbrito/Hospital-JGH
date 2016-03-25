$(function(){
    $("#municipio").change(function(){
        if($(this).val() == "")
        {
            $("#parroquia").html("<option value=''>-</option>");
        }
        if($(this).val() == "Alto Orinoco")
        {
            $("#parroquia").html("<option value=''>-</option>");
            $("#parroquia").append("<option value='Huachamacare'>Huachamacare</option>");
            $("#parroquia").append("<option value='La Esmeralda'>La Esmeralda</option>");
            $("#parroquia").append("<option value='Marawaka'>Marawaka</option>");
            $("#parroquia").append("<option value='Mavaca'>Mavaca</option>");
            $("#parroquia").append("<option value='Sierra Parima'>Sierra Parima</option>");
        }
        if($(this).val() == "Atabapo")
        {
            $("#parroquia").html("<option value=''>-</option>");
            $("#parroquia").append("<option value='Atabapo'>Atabapo</option>");
            $("#parroquia").append("<option value='Caname'>Caname</option>");
            $("#parroquia").append("<option value='Ucata'>Ucata</option>");
            $("#parroquia").append("<option value='Yapacana'>Yapacana</option>");
        }
        if($(this).val() == "Atures")
        {
            $("#parroquia").html("<option value=''>-</option>");
            $("#parroquia").append("<option value='Fernando Girón Tovar'>Fernando Girón Tovar</option>");
            $("#parroquia").append("<option value='Luis Alberto Gómez'>Luis Alberto Gómez</option>");
            $("#parroquia").append("<option value='Parhueña'>Parhueña</option>");
            $("#parroquia").append("<option value='Platanillal'>Platanillal</option>");
        }
        if($(this).val() == "Autana")
        {
            $("#parroquia").html("<option value=''>-</option>");
            $("#parroquia").append("<option value='Guayapo'>Guayapo</option>");
            $("#parroquia").append("<option value='Isla de Ratón'>Isla de Ratón</option>");
            $("#parroquia").append("<option value='Mundiapo'>Mundiapo</option>");
            $("#parroquia").append("<option value='Samaripo'>Samaripo</option>");
            $("#parroquia").append("<option value='Sipapo'>Sipapo</option>");
        }
        if($(this).val() == "Manapiare")
        {
            $("#parroquia").html("<option value=''>-</option>");
            $("#parroquia").append("<option value='Alto Ventuari'>Alto Ventuari</option>");
            $("#parroquia").append("<option value='Bajo Ventuari'>Bajo Ventuari</option>");
            $("#parroquia").append("<option value='Medio Ventuari'>Medio Ventuari</option>");
            $("#parroquia").append("<option value='Manapiare'>Manapiare</option>");
        }
        if($(this).val() == "Maroa")
        {
            $("#parroquia").html("<option value=''>-</option>");
            $("#parroquia").append("<option value='Comunidad'>Comunidad</option>");
            $("#parroquia").append("<option value='Maroa'>Maroa</option>");
            $("#parroquia").append("<option value='Victorino'>Victorino</option>");
        }
        if($(this).val() == "Rio Negro")
        {
            $("#parroquia").html("<option value=''>-</option>");
            $("#parroquia").append("<option value='Casiquiare'>Casiquiare</option>");
            $("#parroquia").append("<option value='Cocuy'>Cocuy</option>");
            $("#parroquia").append("<option value='San Carlos'>San Carlos</option>");
            $("#parroquia").append("<option value='Solano'>Solano</option>");
        }
    });
});