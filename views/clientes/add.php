 <div id="content-header">
  </div>

 <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Agregar Cliente</h5>
          </div>
          <div class="widget-content nopadding">
          	    <form class="form-horizontal" method="post" action="agregar_cliente" name="add_cliente" id="add_cliente" novalidate="novalidate">
                 	<div class="control-group">
		                <label class="control-label">Descripcion</label>
		                <div class="controls">
		                  <input type="text" name="descripcion" id="descripcion">
		                </div>
	               </div>

	              <div class="form-actions">
		              	<?php 
	                     		$add = new ClientesController();
	                     		$add->add();
	                    ?>
		                <input type="submit" name="agregar_cliente" value="Guardar" class="btn btn-success">
	              </div>
	            </form>

          </div>
        </div>
      </div>
    </div>
</div>


<script>
	
jQuery(document).ready(function($) {

	
	// Form Validation
    $("#add_cliente").validate({
		rules:{
			descripcion:{
				required:true
			}

		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});


     $( "#sidebar ul li.clientes" ).addClass( "active" );

	


});

</script>
