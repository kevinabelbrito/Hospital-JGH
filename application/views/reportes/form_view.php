<script>
    $(function(){
        function very_form()
        {
            if($("#rep").val() == "epi" || $("#rep").val() == "mor")
            {
                $("#mes").removeAttr('name').hide();
                $("#semana").attr('name', 'semana').show();
            }
            else if($("#rep").val() == "con")
            {
                $("#semana").removeAttr('name').hide();
                $("#mes").attr('name', 'mes').show();
            }
            else
            {
                $("#semana").removeAttr('name').hide();
                $("#mes").removeAttr('name').hide();
            }
        }
        very_form();
        $("#rep").change(function(){
            very_form();
        });
    });
</script>
<div id="contenido">
	<div id="caja">
       <h1 id="titulo"><span class="icon-book-open"></span>Reportes del sistema</h1>
        <form action="<?= base_url() ?>reportes/generar_reporte" id="reportes_form" method="post">
            <table id="formulario">
                <tr>
                    <td><label for="rep"><span class="icon-document"></span>Reporte:</label></td>
                    <td>
                        <select name="rep" id="rep">
                            <option value="">-</option>
                            <option value="epi" <?= set_select('rep', 'epi') ?>>EPI - 12 (Reporte Semanal)</option>
                            <option value="con" <?= set_select('rep', 'con') ?>>EPI - 15 (Consolidado)</option>
                            <option value="mor" <?= set_select('rep', 'mor') ?>>Mortalidad Materna e Infantil (Reporte Semanal)</option>
                        </select>
                        <?= form_error('rep') ?>
                    </td>
                </tr>
                <tr>
                    <td><label><span class="icon-calendar2"></span>Periodo:</label></td>
                    <td>
                        <label for="semana">Semana</label>
                        <input type="number" id="semana" value="<?= date("W") ?>">
                        <?= form_error('semana') ?>
                        <br>
                        <br>
                        <label for="mes">Mes</label>
                        <select id="mes">
                            <option value="">-</option>
                            <option value="1">Enero</option>
                            <option value="2">Febrero</option>
                            <option value="3">Marzo</option>
                            <option value="4">Abril</option>
                            <option value="5">Mayo</option>
                            <option value="6">Junio</option>
                            <option value="7">Julio</option>
                            <option value="8">Agosto</option>
                            <option value="9">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>
                        <?= form_error('mes') ?>
                        <br>
                        <br>
                        <label for="year">Año</label>
                        <input type="number" name="year" id="year" value="<?= date("Y"); ?>">
                        <?= form_error('year') ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="hidden" name="generar" value="generar"></td>
                    <td><button><span class="icon-check-alt"></span>Generar Reporte</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>