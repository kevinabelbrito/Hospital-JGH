$(function(){
    //ENFERMEDADES CLASIFICADAS POR CATEGORIA
    $("#grupo").change(function(){
        if($("#grupo").val() == "")
        {
            $("#enfermedad").html("<option value=''>-</option>");
        }
        if($("#grupo").val() == "TRANSMISION HIDRICA Y ALIMENTOS")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='COLERA (A00.-)'>COLERA (A00.-)</option>");
            $("#enfermedad").append("<option value='AMIBIASIS (A06.-)'>AMIBIASIS (A06.-)</option>");
            $("#enfermedad").append("<option value='DIARREAS (A08-A09)'>DIARREAS (A08-A09)</option>");
            $("#enfermedad").append("<option value='GIARDIASIS (A07.1)'>GIARDIASIS (A07.1)</option>");
            $("#enfermedad").append("<option value='HELMINTIASIS (B65-B68,B70-B83)'>HELMINTIASIS (B65-B68,B70-B83)</option>");
            $("#enfermedad").append("<option value='FIEBRE TIFOIDEA (A01.0)'>FIEBRE TIFOIDEA (A01.0)</option>");
            $("#enfermedad").append("<option value='ETA (BROTE)'>ETA (BROTE)</option>");
            $("#enfermedad").append("<option value='ETA (CASO ASOCIADO A BROTE)'>ETA (CASO ASOCIADO A BROTE)</option>");
            $("#enfermedad").append("<option value='HEPATITIS AGUDA TIPO A (B15.-)'>HEPATITIS AGUDA TIPO A (B15.-)</option>");
        }
        if($("#grupo").val() == "TRANSMISION AEREA")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='TUBERCULOSIS (A15-A19)'>TUBERCULOSIS (A15-A19)</option>");
            $("#enfermedad").append("<option value='INFLUENZA (J10-J11)'>INFLUENZA (J10-J11)</option>");
        }
        if($("#grupo").val() == "TRANSMISION SEXUAL")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='INFECCION GONOCOCICA (A54.-)'>INFECCION GONOCOCICA (A54.-)</option>");
            $("#enfermedad").append("<option value='SIFILIS (A50-A53)'>SIFILIS (A50-A53)</option>");
            $("#enfermedad").append("<option value='SIFILIS CONGENITA (A50)'>SIFILIS CONGENITA (A50)</option>");
            $("#enfermedad").append("<option value='INFECCION ASINTOMATICA VIH (Z21)'>INFECCION ASINTOMATICA VIH (Z21)</option>");
            $("#enfermedad").append("<option value='ENFERMEDAD VIH/SIDA (B20-B24)'>ENFERMEDAD VIH/SIDA (B20-B24)</option>");
        }
        if($("#grupo").val() == "PREVENIBLES POR VACUNAS")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='PESTE (A20)'>PESTE (A20)</option>");
            $("#enfermedad").append("<option value='POLIOMIELITIS (A80.-)'>POLIOMIELITIS (A80.-)</option>");
            $("#enfermedad").append("<option value='TOSFERINA (A37.-)'>TOSFERINA (A37.-)</option>");
            $("#enfermedad").append("<option value='PAROTIDITIS (B26.-)'>PAROTIDITIS (B26.-)</option>");
            $("#enfermedad").append("<option value='TETANOS NEONATAL (A33)'>TETANOS NEONATAL (A33)</option>");
            $("#enfermedad").append("<option value='TETANOS OBSTETRICO (A34)'>TETANOS OBSTETRICO (A34)</option>");
            $("#enfermedad").append("<option value='OTROS TETANOS (A35)'>OTROS TETANOS (A35)</option>");
            $("#enfermedad").append("<option value='DIFTERIA (A36.-)'>DIFTERIA (A36.-)</option>");
            $("#enfermedad").append("<option value='SARAMPION (B05.-)'>SARAMPION (B05.-)</option>");
            $("#enfermedad").append("<option value='RUBEOLA (B06.-)'>RUBEOLA (B06.-)</option>");
            $("#enfermedad").append("<option value='SINDROME DE RUBEOLA CONGENITA (P35.9)'>SINDROME DE RUBEOLA CONGENITA (P35.9)</option>");
        }
        if($("#grupo").val() == "TRANSMITIDAS POR VECTORES")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='DENGUE SIN SIGNOS DE ALARMA (A90)'>DENGUE SIN SIGNOS DE ALARMA (A90)</option>");
            $("#enfermedad").append("<option value='FIEBRE DENGUE (A90)'>FIEBRE DENGUE (A90)</option>");
            $("#enfermedad").append("<option value='DENGUE HEMORRAGICO (A91)'>DENGUE HEMORRAGICO (A91)</option>");
            $("#enfermedad").append("<option value='ENCEFALITIS EQUINA VENEZOLANA (A92.2)'>ENCEFALITIS EQUINA VENEZOLANA (A92.2)</option>");
            $("#enfermedad").append("<option value='FIEBRE DEL OESTE DEL NILO (A92.3)'>FIEBRE DEL OESTE DEL NILO (A92.3)</option>");
            $("#enfermedad").append("<option value='FIEBRE AMARILLA (A95.-)'>FIEBRE AMARILLA (A95.-)</option>");
            $("#enfermedad").append("<option value='PALUDISMO A FALCIPARUM (B50)'>PALUDISMO A FALCIPARUM (B50)</option>");
            $("#enfermedad").append("<option value='PALUDISMO A VIVAX (B51)'>PALUDISMO A VIVAX (B51)</option>");
            $("#enfermedad").append("<option value='PALUDISMO A MALARIAE (B52)'>PALUDISMO A MALARIAE (B52)</option>");
            $("#enfermedad").append("<option value='PALUDISMO  MIXTA (B50, B51, B52)'>PALUDISMO  MIXTA (B50, B51, B52)</option>");
            $("#enfermedad").append("<option value='LEISHMANIASIS VICERAL (B55.0)'>LEISHMANIASIS VICERAL (B55.0)</option>");
            $("#enfermedad").append("<option value='LEISHMANIASIS CUTANEA (B55.1)'>LEISHMANIASIS CUTANEA (B55.1)</option>");
            $("#enfermedad").append("<option value='LEISHMANIASIS MUCOCUTANEA (B55.2)'>LEISHMANIASIS MUCOCUTANEA (B55.2)</option>");
            $("#enfermedad").append("<option value='LEISHMANIASIS NO ESPECIFICADA(B55.9)'>LEISHMANIASIS NO ESPECIFICADA(B55.9)</option>");
            $("#enfermedad").append("<option value='ENFERMEDAD DE CHAGAS AGUDA (B57.0-B57.1)'>ENFERMEDAD DE CHAGAS AGUDA (B57.0-B57.1)</option>");
            $("#enfermedad").append("<option value='ENFERMEDAD DE CHAGAS CRONICA (B57.2-B57.5)'>ENFERMEDAD DE CHAGAS CRONICA (B57.2-B57.5)</option>");
            $("#enfermedad").append("<option value='ONCOCERCOSIS (B73)'>ONCOCERCOSIS (B73)</option>");
            $("#enfermedad").append("<option value='SOSPECHOSAS DE CHICUNGUNYA'>SOSPECHOSAS DE CHICUNGUNYA</option>");
            $("#enfermedad").append("<option value='VIRUELA (B03)'>VIRUELA (B03)</option>");
        }
        if($("#grupo").val() == "ENFERMEDADES ZOONOTICAS")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='RABIA HUMANA (A82.-)'>RABIA HUMANA (A82.-)</option>");
            $("#enfermedad").append("<option value='FIEBRE HEMORRAGICA VENEZOLANA (A96.8)'>FIEBRE HEMORRAGICA VENEZOLANA (A96.8)</option>");
            $("#enfermedad").append("<option value='LEPTOSPIROSIS (A27.-)'>LEPTOSPIROSIS (A27.-)</option>");
            $("#enfermedad").append("<option value='BRUCELOSIS (A23.-)'>BRUCELOSIS (A23.-)</option>");
            $("#enfermedad").append("<option value='CISTICERCOSIS (B69.-)'>CISTICERCOSIS (B69.-)</option>");
            $("#enfermedad").append("<option value='RUMOR DE EPIZOOTIAS'>RUMOR DE EPIZOOTIAS</option>");
        }
        if($("#grupo").val() == "OTRAS ENF. TRANSMISIBLES")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='MENINGITIS VIRAL (A87)'>MENINGITIS VIRAL (A87)</option>");
            $("#enfermedad").append("<option value='MENINGITIS BACTERIANA (G00)'>MENINGITIS BACTERIANA (G00)</option>");
            $("#enfermedad").append("<option value='MENINGITIS MENINGOCOCICA (A39.0)'>MENINGITIS MENINGOCOCICA (A39.0)</option>");
            $("#enfermedad").append("<option value='ENFERMEDAD MENINGOCÓCICA (A39.9)'>ENFERMEDAD MENINGOCÓCICA (A39.9)</option>");
            $("#enfermedad").append("<option value='VARICELA (B01.-)'>VARICELA (B01.-)</option>");
            $("#enfermedad").append("<option value='HEPATITIS AGUDA TIPO B (B16.-)'>HEPATITIS AGUDA TIPO B (B16.-)</option>");
            $("#enfermedad").append("<option value='HEPATITIS AGUDA TIPO C (B17.1, B18.2)'>HEPATITIS AGUDA TIPO C (B17.1, B18.2)</option>");
            $("#enfermedad").append("<option value='HEPATITIS OTRAS AGUDAS (B17.-)'>HEPATITIS OTRAS AGUDA (B17.-)</option>");
            $("#enfermedad").append("<option value='HEPATITIS NO ESPECIF. (B19.-)'>HEPATITIS NO ESPECIF. (B19.-)</option>");
            $("#enfermedad").append("<option value='SINDROME VIRAL (B34.-)'>SINDROME VIRAL (B34.-)</option>");
            $("#enfermedad").append("<option value='ESCABIOSIS (B86)'>ESCABIOSIS (B86)</option>");
            $("#enfermedad").append("<option value='MICOSIS SUPERFICIAL (B35-B36)'>MICOSIS SUPERFICIAL (B35-B36)</option>");
            $("#enfermedad").append("<option value='LEPRA (A30)'>LEPRA (A30)</option>");
            $("#enfermedad").append("<option value='HANTAVIROSIS (SCPH)(B33.4)'>HANTAVIROSIS (SCPH)(B33.4)</option>");
        }
        if($("#grupo").val() == "NEOPLASIAS")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='NEOPLASIAS'>NEOPLASIAS</option>");
        }
        if($("#grupo").val() == "ENF.DE LA SANGRE Y ORG. HEMATOPOY")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='ANEMIAS (D50-D64)'>ANEMIAS (D50-D64)</option>");
        }
        if($("#grupo").val() == "ENF. ENDOCRINAS, NUTRIC. Y METABOLICAS")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='TRASTORNOS TIROIDEOS (E00-E07)'>TRASTORNOS TIROIDEOS (E00-E07)</option>");
            $("#enfermedad").append("<option value='DIABETES MELLITUS (E10-E14)'>DIABETES MELLITUS (E10-E14)</option>");
            $("#enfermedad").append("<option value='DESNUTRICION LEVE (E44.1)'>DESNUTRICION LEVE (E44.1)</option>");
            $("#enfermedad").append("<option value='DESNUTRICION MODERADA (E44.0)'>DESNUTRICION MODERADA (E44.0)</option>");
            $("#enfermedad").append("<option value='DESNUTRICION GRAVE (E40-E43)'>DESNUTRICION GRAVE (E40-E43)</option>");
            $("#enfermedad").append("<option value='OBESIDAD (E66.-)'>OBESIDAD (E66.-)</option>");
        }
        if($("#grupo").val() == "TRAST.MENTALES Y DEL COMPORTAMIENTO")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='TRAST.MENTALES Y DEL COMPORT. (F00-F99)'>TRAST.MENTALES Y DEL COMPORT. (F00-F99)</option>");
        }
        if($("#grupo").val() == "ENF. DEL SISTEMA NERVIOSO")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='PARALISIS FLACIDA (G82.0)'>PARALISIS FLACIDA (G82.0)</option>");
            $("#enfermedad").append("<option value='EPILEPSIA (G40-G41)'>EPILEPSIA (G40-G41)</option>");
            $("#enfermedad").append("<option value='MIGRAÑA (G43.-)'>MIGRAÑA (G43.-)</option>");
        }
        if($("#grupo").val() == "ENF.DEL OJO Y SUS ANEXOS")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='CONJUNTIVITIS (H10)'>CONJUNTIVITIS (H10)</option>");
            $("#enfermedad").append("<option value='OTRAS ENF. DEL OJO (H00-H09,H11-H59)'>OTRAS ENF. DEL OJO (H00-H09,H11-H59)</option>");
        }
        if($("#grupo").val() == "ENF. DEL OIDO Y APOFISIS MASTOIDES")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='OTITIS EXTERNA (H60.-)'>OTITIS EXTERNA (H60.-)</option>");
            $("#enfermedad").append("<option value='OTITIS MEDIA AGUDA (H65.0-H65.1,H66.-)'>OTITIS MEDIA AGUDA (H65.0-H65.1,H66.-)</option>");
            $("#enfermedad").append("<option value='OTITIS MEDIA CRONICA (H65.2-H65.9)'>OTITIS MEDIA CRONICA (H65.2-H65.9)</option>");
        }
        if($("#grupo").val() == "ENFERM. DEL SISTEMA CIRCULATORIO")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='FIEBRE REUMAT. Y ENF.CARD.REUM. CRON. (IOO-IO9)'>FIEBRE REUMAT. Y ENF.CARD.REUM. CRON. (IOO-IO9)</option>");
            $("#enfermedad").append("<option value='HIPERTENSION ARTERIAL (I10)'>HIPERTENSION ARTERIAL (I10)</option>");
            $("#enfermedad").append("<option value='ENF.ISQUEMICAS DEL CORAZON (I20,I22-I25)'>ENF.ISQUEMICAS DEL CORAZON (I20,I22-I25)</option>");
            $("#enfermedad").append("<option value='INFARTO AGUDO DEL MIOCARDIO (I21)'>INFARTO AGUDO DEL MIOCARDIO (I21)</option>");
            $("#enfermedad").append("<option value='ENF. CEREBROVASCULARES (I60-I69)'>ENF. CEREBROVASCULARES (I60-I69)</option>");
            $("#enfermedad").append("<option value='VARICES DE MIEMBROS INFERIORES (I83.-)'>VARICES DE MIEMBROS INFERIORES (I83.-)</option>");
        }
        if($("#grupo").val() == "ENFERM. DEL SISTEMA RESPIRATORIO")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='FARINGITIS AGUDA (J02.-)'>FARINGITIS AGUDA (J02.-)</option>");
            $("#enfermedad").append("<option value='AMIGDALITIS AGUDA (J03.-)'>AMIGDALITIS AGUDA (J03.-)</option>");
            $("#enfermedad").append("<option value='RINOFARINGITIS AGUDA (J00)'>RINOFARINGITIS AGUDA (J00)</option>");
            $("#enfermedad").append("<option value='SINUSITIS AGUDA (J01)'>SINUSITIS AGUDA (J01)</option>");
            $("#enfermedad").append("<option value='NEUMONIAS (J12-J18)'>NEUMONIAS (J12-J18)</option>");
            $("#enfermedad").append("<option value='BRONQUIOLITIS AGUDA (J21.-)'>BRONQUIOLITIS AGUDA (J21.-)</option>");
            $("#enfermedad").append("<option value='BRONQUITIS AGUDA (J20.-)'>BRONQUITIS AGUDA (J20.-)</option>");
            $("#enfermedad").append("<option value='BRONQUITIS CRONICA (J41,J42,J44.8)'>BRONQUITIS CRONICA (J41,J42,J44.8)</option>");
            $("#enfermedad").append("<option value='ASMA (J45)'>ASMA (J45)</option>");
            $("#enfermedad").append("<option value='RINITIS ALERGICA (J30.1-J30.4)'>RINITIS ALERGICA (J30.1-J30.4)</option>");
            $("#enfermedad").append("<option value='LARINGITIS Y TRAQUEITIS AGUDA (J04)'>LARINGITIS Y TRAQUEITIS AGUDA (J04)</option>");
            $("#enfermedad").append("<option value='LARINGITIS OBSTRUCTIVA Y EPIGLOTITIS (J05)'>LARINGITIS OBSTRUCTIVA Y EPIGLOTITIS (J05)</option>");
            $("#enfermedad").append("<option value='INFECCIONES AGUDAS VIAS RESP. (J06)'>INFECCIONES AGUDAS VIAS RESP. (J06)</option>");
            $("#enfermedad").append("<option value='INFECCIONES AGUDAS NO ESP.'>INFECCIONES AGUDAS NO ESP.</option>");
            $("#enfermedad").append("<option value='INFECCION RESPIRATORIA AGUDA GRAVE'>INFECCION RESPIRATORIA AGUDA GRAVE</option>");
            $("#enfermedad").append("<option value='SINDROME RESPIRATORIO AGUDO SEVERO'>SINDROME RESPIRATORIO AGUDO SEVERO</option>");
        }
        if($("#grupo").val() == "ENFERMEDADES DEL SISTEMA DIGESTIVO")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='CARIES DENTAL (K02.-)'>CARIES DENTAL (K02.-)</option>");
            $("#enfermedad").append("<option value='GINGIVITIS (K05.0-K05.1)'>GINGIVITIS (K05.0-K05.1)</option>");
            $("#enfermedad").append("<option value='ESTOMATITIS (K12.0-K12.1)'>ESTOMATITIS (K12.0-K12.1)</option>");
            $("#enfermedad").append("<option value='GASTRITIS (K29.-)'>GASTRITIS (K29.-)</option>");
            $("#enfermedad").append("<option value='APENDICITIS TODAS FORMAS (K35-K37)'>APENDICITIS TODAS FORMAS (K35-K37)</option>");
            $("#enfermedad").append("<option value='HERNIAS CAVIDAD ABDOMINAL (K40-K46)'>HERNIAS CAVIDAD ABDOMINAL (K40-K46)</option>");
            $("#enfermedad").append("<option value='COLELITIASIS (K80.-)'>COLELITIASIS (K80.-)</option>");
            $("#enfermedad").append("<option value='PANCREATITIS AGUDA (K85)'>PANCREATITIS AGUDA (K85)</option>");
            $("#enfermedad").append("<option value='OTRAS ENF. ESOF.,ESTOMAGO E INTESTINO'>OTRAS ENF. ESOF.,ESTOMAGO E INTESTINO</option>");
        }
        if($("#grupo").val() == "ENF.DE LA PIEL Y TEJ. SUBCUTANEO")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='ABSCESOS (L02.-)'>ABSCESOS (L02.-)</option>");
            $("#enfermedad").append("<option value='CELULITIS (L03.-)'>CELULITIS (L03.-)</option>");
            $("#enfermedad").append("<option value='DERMATITIS (L20-L30)'>DERMATITIS (L20-L30)</option>");
            $("#enfermedad").append("<option value='PIODERMITIS (L08.0)'>PIODERMITIS (L08.0)</option>");
            $("#enfermedad").append("<option value='URTICARIA (L50.-)'>URTICARIA (L50.-)</option>");
        }
        if($("#grupo").val() == "ENF.SIST.OSTEOMUSC. Y TEJ. CONJUNTIVO")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='ARTRITIS (M00-M14)'>ARTRITIS (M00-M14)</option>");
            $("#enfermedad").append("<option value='MIALGIAS (M79.1)'>MIALGIAS (M79.1)</option>");
            $("#enfermedad").append("<option value='NEURALGIAS (M79.2)'>NEURALGIAS (M79.2)</option>");
            $("#enfermedad").append("<option value='BURSITIS (M70,M71,M75-M77)'>BURSITIS (M70,M71,M75-M77)</option>");
        }
        if($("#grupo").val() == "ENF.DEL SISTEMA GENITO-URINARIO")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='INFECCION URINARIA (N39.0)'>INFECCION URINARIA (N39.0)</option>");
            $("#enfermedad").append("<option value='URETRITIS NO GONOCÓCCICA (N34.1)'>URETRITIS NO GONOCÓCCICA (N34.1)</option>");
            $("#enfermedad").append("<option value='LEUCORREA NO ESPECIFICADA (N89.8)'>LEUCORREA NO ESPECIFICADA (N89.8)</option>");
            $("#enfermedad").append("<option value='HEMORR. GENITAL NO ESPEC. (N93.9)'>HEMORR. GENITAL NO ESPEC. HEMBRAS (N93.9)</option>");
            $("#enfermedad").append("<option value='COLICO NEFRITICO (N23)'>COLICO NEFRITICO (N23)</option>");
            $("#enfermedad").append("<option value='DISMENORREA NO ESPECIFICADA (N94.6)'>DISMENORREA NO ESPECIFICADA (N94.6)</option>");
            $("#enfermedad").append("<option value='SALPINGITIS Y OOFORITIS (N70.-)'>SALPINGITIS Y OOFORITIS (N70.-)</option>");
            $("#enfermedad").append("<option value='ENFERM. INFLAMATORIAS DEL UTERO (N71.-,N72.-)'>ENFERM. INFLAMATORIAS DEL UTERO (N71.-,N72.-)</option>");
        }
        if($("#grupo").val() == "EMBARAZO, PARTO Y PUERPERIO")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='HEMORR.3er.TRIM.EMBARAZO (O20,O44-O46)'>HEMORR.3er.TRIM.EMBARAZO (O20,O44-O46)</option>");
            $("#enfermedad").append("<option value='PRE-ECLAMPSIA (O13.-,O14.-)'>PRE-ECLAMPSIA (O13.-,O14.-)</option>");
            $("#enfermedad").append("<option value='ECLAMPSIA (O15.-)'>ECLAMPSIA (O15.-)</option>");
            $("#enfermedad").append("<option value='INTENTO FALLIDO DE ABORTO (O07.-)'>INTENTO FALLIDO DE ABORTO (O07.-)</option>");
            $("#enfermedad").append("<option value='ABORTO (O00-O06,O08)'>ABORTO (O00-O06,O08)</option>");
            $("#enfermedad").append("<option value='TRASTORNOS MAMARIOS DEL PUERPERIO (O91-O92)'>TRASTORNOS MAMARIOS DEL PUERPERIO (O91-O92)</option>");
            $("#enfermedad").append("<option value='OTRAS COMPLIC.DEL EMB.PART. Y PUERPERIO'>OTRAS COMPLIC.DEL EMB.PART. Y PUERPERIO</option>");
        }
        if($("#grupo").val() == "SINT.SIG. Y HALLAZGOS  ANORMALES")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='CEFALEA (R51)'>CEFALEA (R51)</option>");
            $("#enfermedad").append("<option value='FIEBRE (R50.-)'>FIEBRE (R50.-)</option>");
            $("#enfermedad").append("<option value='CONVULSIONES (R56.-)'>CONVULSIONES (R56.-)</option>");
            $("#enfermedad").append("<option value='ABDOMEN AGUDO (R10.0)'>ABDOMEN AGUDO (R10.0)</option>");
            $("#enfermedad").append("<option value='DOLOR ABDOMINAL (R10.4)'>DOLOR ABDOMINAL (R10.4)</option>");
        }
        if($("#grupo").val() == "TRAUMATISMOS Y ENVENENAMIENTOS")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='QUEMADURAS (T20-T32)'>QUEMADURAS (T20-T32)</option>");
            $("#enfermedad").append("<option value='ENVENEN. POR DROG. Y OTRAS SUST. (T36-T50)'>ENVENEN. POR DROG. Y OTRAS SUST. (T36-T50)</option>");
            $("#enfermedad").append("<option value='HERIDAS'>HERIDAS</option>");
            $("#enfermedad").append("<option value='FRACTURAS'>FRACTURAS</option>");
            $("#enfermedad").append("<option value='LUXACIONES Y ESGUINCES'>LUXACIONES Y ESGUINCES</option>");
            $("#enfermedad").append("<option value='INTOXICACION POR PLAGUICIDAS (T60.-)'>INTOXICACION POR PLAGUICIDAS (T60.-)</option>");
            $("#enfermedad").append("<option value='CUERPO EXTRAÑO EN ORIFICIO NATURAL (T15-T19)'>CUERPO EXTRAÑO EN ORIFICIO NATURAL (T15-T19)</option>");
            $("#enfermedad").append("<option value='OTROS TRAUMATISMOS'>OTROS TRAUMATISMOS</option>");
        }
        if($("#grupo").val() == "CAUSAS EXTERNAS DE MORBILIDAD Y MORT.")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='ACCID. TRANSPORT. TERRESTRE (V01-V89)'>ACCID. TRANSPORT. TERRESTRE (V01-V89)</option>");
            $("#enfermedad").append("<option value='PICADURA DE INSEC. Y OTROS ANIM. (X21-X27,X29)'>PICADURA DE INSEC. Y OTROS ANIM. (X21-X27,X29)</option>");
            $("#enfermedad").append("<option value='EMPOZOÑAMIENTO OFIDICO (X20,W59.-)'>EMPOZOÑAMIENTO OFIDICO (X20,W59.-)</option>");
            $("#enfermedad").append("<option value='MORDEDURAS SOSPECHOSAS DE RABIA (A82)'>MORDEDURAS SOSPECHOSAS DE RABIA (A82)</option>");
            $("#enfermedad").append("<option value='OTROS ACCIDENTES'>OTROS ACCIDENTES</option>");
            $("#enfermedad").append("<option value='ACCIDENTES DEL HOGAR'>ACCIDENTES DEL HOGAR</option>");
            $("#enfermedad").append("<option value='ACCIDENTES LABORALES'>ACCIDENTES LABORALES</option>");
            $("#enfermedad").append("<option value='EFECTOS ADVERSOS DE MEDICAMENTOS (Y40-Y57)'>EFECTOS ADVERSOS DE MEDICAMENTOS (Y40-Y57)</option>");
            $("#enfermedad").append("<option value='EFECTOS ADVERSOS DE VACUNAS (Y58-Y59)'>EFECTOS ADVERSOS DE VACUNAS (Y58-Y59)</option>");
        }
        if($("#grupo").val() == "VIOLENCIA FAMILIAR")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='VIOLENCIA FISICA'>VIOLENCIA FISICA</option>");
            $("#enfermedad").append("<option value='VIOLENCIA PSICOLOGICA'>VIOLENCIA PSICOLOGICA</option>");
            $("#enfermedad").append("<option value='VIOLENCIA SEXUAL'>VIOLENCIA SEXUAL</option>");
        }
        if($("#grupo").val() == "OTRAS CAUSAS DE CONSULTA")
        {
            $("#enfermedad").html("<option value=''>-</option>");
            $("#enfermedad").append("<option value='OTRAS CAUSAS DE CONSULTA'>OTRAS CAUSAS DE CONSULTA</option>");
        }
    });
});