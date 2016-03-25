<div id="contenido">
	<div id="caja">
        <h1 id="titulo"><span class="icon-piechart"></span>Estadisticas de Eventos Anuales</h1>
        <form action="<?= base_url() ?>estadisticas/generar" id="estadistica_form" method="post">
            <table id="formulario">
                <tr>
                	<td><label>Estadistica:</label></td>
                	<td>
                		<input type="radio" name="est" id="gen" value="genero">
                		<label for="gen">Mortalidad por Genero</label>
                		<br>
                		<br>
                		<input type="radio" name="est" id="pro" value="procedencia">
                		<label for="pro">Mortalidad por Procedencia</label>
                        <br>
                        <br>
                        <input type="radio" name="est" id="enf" value="enfermedades">
                        <label for="enf">Enfermedades mas frecuentes</label>
                        <?= form_error('est') ?>
                	</td>
                </tr>
                <tr>
                    <td><label for="year"><span class="icon-calendar2"></span>Año:</label></td>
                    <td>
                        <input type="number" name="year" id="year" value="<?= date("Y"); ?>">
                        <?= form_error('year') ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="hidden" name="generar" value="generar"></td>
                    <td><button><span class="icon-bargraph"></span>Visualizar estadisticas</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>