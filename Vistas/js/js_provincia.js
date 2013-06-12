//comenzar javascript
var Servicios="../servicios/";
$(document).ready(function(e) {
	
	/// llamamos la funcion para llenar el combo pais 
	ListarPais();	
	// llena el combo provinciaa
	$("#pais").change( function(e){
		var id=$("#pais").val();
		ListarDepartamento(id);
		});
		
	$("#departamento").change( function(e){
	var iddep=$("#departamento").val();
	listarProvincia(iddep);
	});
	
	$("#provincia").change( function(e){
	var ID=$("#provincia").val();
	//alert("Distritos")
	ListaDistrito(ID);
	});
		
});
	// lista Paises 	
function ListarPais(){
		$.post(Servicios+"s_provincia.php",
	{"metodo":"ListarPais"},function(datodev){
		
		datodev = $.parseJSON(datodev);// dadtodev llega como estructura html y lo pasamos a javscrit
		var data =datodev.items;
		
		$.each(data,function(index, obj_dep){
			//alert(obj_dep.PaisId);
		//$("#pais").append('<option value="'+obj_dep.PaisId+'">'+obj_dep.PaisNombre+'</option>');
			//$("#pais").append('<option value="'+obj_dep[0]+'">'+obj_dep[1]+'</option>');
			if(obj_dep.PaisId==27){
				$("#pais").append('<option selected="selected" value="'+obj_dep.PaisId+'">'+obj_dep.PaisNombre+'</option>');
				ListarDepartamento(obj_dep.PaisId)
				}else{
					$("#pais").append('<option value="'+obj_dep.PaisId+'">'+obj_dep.PaisNombre+'</option>');
					}
			});		
		});		
}
	// lista departamento 	
function ListarDepartamento(idpais){
	// limpiar combos
	$("#departamento option").remove();
	$("#provincia option").remove();
		
		$.post(Servicios+"s_provincia.php",
	{"metodo":"ListarDepartamento","pais":idpais},function(datodev){		
		datodev = $.parseJSON(datodev);// dadtodev llega como estructura html y lo pasamos a javscrit
		var DEP =datodev.items;
		$("#departamento").append('<option value="0"> *** Seleccione *** </option>');
		$.each(DEP,function(index, obj_dep){
			//alert(obj_dep.nombredep);
			//$("#departamento").append('<option value="'+obj_dep.DepartamentoId+'">'+obj_dep.DepartamentoNombre+'</option>');
			if(obj_dep.DepartamentoId==6){
				$("#departamento").append('<option selected="selected" value="'+obj_dep.DepartamentoId+'">'+obj_dep.DepartamentoNombre+'</option>');
				listarProvincia(obj_dep.DepartamentoId)
				}else{
					$("#departamento").append('<option value="'+obj_dep.DepartamentoId+'">'+obj_dep.DepartamentoNombre+'</option>');
					}
			});		
		});		 
}
// listar Provincias
function listarProvincia(iddep){
		//var iddep=$("#departamento").val();
		$("#provincia option").remove();
		$.post(Servicios+"s_provincia.php",
	{"metodo":"ListarProvincia","departamento":iddep},function(datodev){		
		datodev = $.parseJSON(datodev);// dadtodev llega como estructura html y lo pasamos a javscrit
		var PRO =datodev.items;
		$("#provincia").append('<option value="0"> *** Seleccione *** </option>');
		$.each(PRO,function(index, obj_pro){
			//alert(obj_dep.nombredep);
			//$("#provincia").append('<option value="'+obj_pro.ProvinciaId+'">'+obj_pro.ProvinciaNombre+'</option>');
			if(obj_pro.ProvinciaId==63){
				$("#provincia").append('<option selected="selected" value="'+obj_pro.ProvinciaId+'">'+obj_pro.ProvinciaNombre+'</option>');
				ListaDistrito(obj_pro.ProvinciaId);				
				}else{
					$("#provincia").append('<option value="'+obj_pro.ProvinciaId+'">'+obj_pro.ProvinciaNombre+'</option>');
					}
			});		
		});	
}

// listar Distritos
function ListaDistrito(idprovincia){
		//var iddep=$("#departamento").val();
		$("#distrito option").remove();
		$.post(Servicios+"s_provincia.php",
	{"metodo":"ListarDistritos","provincia":idprovincia},function(datodev){		
		datodev = $.parseJSON(datodev);// dadtodev llega como estructura html y lo pasamos a javscrit
		var DIST =datodev.items;
		$("#distrito").append('<option value="0"> *** Seleccione *** </option>');
		
		$.each(DIST,function(index, obj){
			$("#distrito").append('<option value="'+obj[0]+'">'+obj[1]+'</option>');
		
			});		
		});	
}

