<footer>
	<br>
	<br>
	<p class="text-center">
		&reg; Todos los drechos reservados por mi. <?=date('Y')?>  &copy;
	</p>
</footer>
<script src="<?=$assets_js?>jquery-3.1.1.js"></script>	
<script src="<?=$assets_js?>bootstrap.min.js"></script>	
<script src="<?=$assets_js?>jquery.form-validator.min.js"></script>	
<script src="<?=$assets_js?>jquery.form_validator.es.js"></script>
<script>

	$(document).ready(function() {
        /* - - - - - - - - - - - - - - - - - */
        $('#upload').hide();
        $('.btn-upload').click(function() {
            $('#upload').click();
        });
        /* - - - - - - - - - - - - - - - - - */
        $.validate({ 
            form: '#frm', 
            language: es 
        });


        $('.btn-delete').click(function(event) {
            if (confirm('¿Realmente desea eliminar este registro?')) {
                $id = $(this).attr('data-delete');
                window.location.replace('delete.php?id='+$id);
            }
        });
	});


</script>	
</body>
</html>