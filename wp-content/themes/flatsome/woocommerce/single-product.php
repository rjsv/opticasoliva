<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' );

do_action( 'flatsome_before_product_page' );

?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
			if ( flatsome_product_block( get_the_ID() ) ) {
				wc_get_template_part( 'content', 'single-product-custom' );
			} else {
				wc_get_template_part( 'content', 'single-product' );
			}
			?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php

do_action( 'flatsome_after_product_page' );

get_footer( 'shop' );

?>
<script type="text/javascript">
	
//titulo, precio, nav sobre el titulo
	var navPro=document.querySelector(".woocommerce-breadcrumb");
	var pTitle=document.querySelector(".product-title");
	var pPrice=document.querySelector(".woocommerce-Price-amount");
	var pDescri=document.querySelector(".product-short-description");
//
	var Receta= document.querySelector('.Receta');
	//mensaje final,
	// indicador del paso en el que se esta
	var finalMessage=document.querySelector("#field_2_47");
	// indicador del paso en el que se esta
	var steps=document.querySelector(".steps");
	//primera pantalla, los botones
	var opcionUno = document.querySelector(".gchoice_2_3_0");
	var opcionDos = document.querySelector(".gchoice_2_3_1");
	//el segundo paso: los selectores de las ofertas
	var generalOfertsUno=document.querySelector(".gchoice_2_7_0");
	var generalOfertsDos=document.querySelector(".gchoice_2_7_1");
	var generalOfertsTres=document.querySelector(".gchoice_2_7_2");
	var generalOfertsCuatro=document.querySelector(".gchoice_2_7_3");
	
	document.querySelector(".gchoice_2_7_0 small").innerHTML='-Lentes FOTOCROMATICOS<br>-Filtro BLUE PROTECT<br>-Lentes que se oscurecen con la luz<br>-solar<br>-Protección UV400.<br>-Antirrayas.<br>-Antirreflejo.<br>';
	document.querySelector(".gchoice_2_7_1 small").innerHTML='-Filtro BLUE PROTECT<br>-Protección contra la LUZ AZUL<br>-Lentes de Policarbonato<br>-Más delgados y livianos que la<br>-resina<br>-Protección UV400<br>-Antirrayas<br>-Antirreflejo<br>-Ideal para medidas mayores a 3.00';
	document.querySelector(".gchoice_2_7_2 small").innerHTML='-Filtro BLUE PROTECT<br>-Protección contra la LUZ AZUL<br>-Lentes de Resina<br>-Protección UV400<br>-Atirrayas<br>-Antirreflejo';
	document.querySelector(".gchoice_2_7_3 small").innerHTML='-Lentes de Resina-Protección UV-Antirreflejo-Atirrayas';
	document.querySelector(".navSteps").outerHTML='<div class="navSteps"> <li id="stepUno" class="active">Paso 1</li> <li id="stepDos" class="">Paso 2</li><li id="stepTres" class="">Paso 3</li></div>';
	
	var generalOfertsRadioCheckUno=document.querySelector("#choice_2_7_0");
	var generalOfertsRadioCheckDos=document.querySelector("#choice_2_7_1");
	var generalOfertsRadioCheckTres=document.querySelector("#choice_2_7_2");
	var generalOfertsRadioCheckCuatro=document.querySelector("#choice_2_7_3");
	var gorNull=document.querySelector("#choice_2_7_4");
	
	//los textos que aparecen arriba y abajo del segundo paso
	var generalOfertsDesc=document.querySelector("#gfield_description_2_7");
	var generalOfertsAdv=document.querySelector(".advice");
	//los contenedores de las opciones del tercer paso
	var stepTresUno = document.querySelector(".gchoice_2_13_0");
	var stepTresDos = document.querySelector(".gchoice_2_13_1");
	var stepTresTres = document.querySelector(".gchoice_2_13_2");
	//el mensaje de agregar al carrito
	var finalMessage=document.querySelector("#field_2_45");
	//los inputs que aparecen para agregar receta en orden titulo:el titulo elementos: uno dos tres, de arriba a abajo
	var  labelFormTresUno=document.querySelector("#field_2_22");
			var  chooseFormTresUnoUno=document.querySelector("#field_2_18");
			var  chooseFormTresUnoDos=document.querySelector("#field_2_19");
			var  chooseFormTresUnoTres=document.querySelector("#field_2_20");

	var labelFormTresDos=document.querySelector("#field_2_23");
			var chooseFormTresDosUno=document.querySelector("#field_2_24");
			var chooseFormTresDosDos=document.querySelector("#field_2_25");
			var chooseFormTresDosTres=document.querySelector("#field_2_26");
	
var labelFormTresTres=document.querySelector("#field_2_27");
			var chooseFormTresTresUno=document.querySelector("#field_2_28");
			var chooseFormTresTresDos=document.querySelector("#field_2_29");
	
    var finalState= document.querySelector("#form_totals_2");
	var finalInput=document.querySelector("gform_submit_button_2");
	//controladores de accion del tercer paso

			steps.innerHTML="¿Como desea sus lunas?";
    document.querySelector("#field_2_49 span").style.display="none";
//selectores del indice
    var pUnoMN= document.querySelector('#stepUno');
    var pDosMN= document.querySelector('#stepDos');
    var pTresMN= document.querySelector('#stepTres');

    //listeners del indice
    pUnoMN.addEventListener('click',pasoUnoMasterLink);
    pDosMN.addEventListener('click',pasoDosMasterLink);
    pTresMN.addEventListener('click',pasoTresMasterLink);

    //listener del primer paso
    opcionUno.addEventListener("click",OpcionUno);
	opcionDos.addEventListener("click",OpcionDos);

	//listeners del segundo paso

    generalOfertsUno.addEventListener("click",OfertsUno);
	generalOfertsDos.addEventListener("click",OfertsDos);
	generalOfertsTres.addEventListener("click",OfertsTres);
	generalOfertsCuatro.addEventListener("click",OfertsCuatro);

    //listeners del tercer paso
    stepTresUno.addEventListener("click", formTresUno);
	stepTresDos.addEventListener("click", formTresDos);
	stepTresTres.addEventListener("click", formTresTres);

    function OpcionUno(){       
            opcionUno.className+=" fadeIn";
            opcionDos.className+=" fadeOut";
		  	pUnoMN.className="";
            pDosMN.className="";
            pTresMN.className="";
            opcionUno.addEventListener('animationend',  pasoUnoSubMasterLink)

        }
            function OpcionDos(){
            opcionUno.className+=" fadeOut";
            opcionDos.className+=" fadeIn";
			pUnoMN.className="";
            pDosMN.className="active";
            pTresMN.className="";
            opcionDos.addEventListener('animationend',pasoDosMasterLink);
        }
    //funciones del paso 2
	//ocultar paso 2 despues de seleccionar opcion
function noShowOffer(){
	if(generalOfertsUno.classList[1]=="fadeIn"){
		generalOfertsUno.classList.remove("fadeIn");
		generalOfertsDos.classList.remove("fadeOut");
		generalOfertsTres.classList.remove("fadeOut");
		generalOfertsCuatro.classList.remove("fadeOut");
	}
	if(generalOfertsDos.classList[1]=="fadeIn"){
		generalOfertsUno.classList.remove("fadeOut");
		generalOfertsDos.classList.remove("fadeIn");
		generalOfertsTres.classList.remove("fadeOut");
		generalOfertsCuatro.classList.remove("fadeOut");
	}
	if(generalOfertsTres.classList[1]=="fadeIn"){
		generalOfertsUno.classList.remove("fadeOut");
		generalOfertsDos.classList.remove("fadeOut");
		generalOfertsTres.classList.remove("fadeIn");
		generalOfertsCuatro.classList.remove("fadeOut");
	}
	if(generalOfertsCuatro.classList[1]=="fadeIn"){
		generalOfertsUno.classList.remove("fadeOut");
		generalOfertsDos.classList.remove("fadeOut");
		generalOfertsTres.classList.remove("fadeOut");
		generalOfertsCuatro.classList.remove("fadeIn");
	}
		desaparecerTodasLasOpciones(3);
	
	
	}
    //mostrar tercer paso
	function tStep(){
		pUnoMN.className="";
            pDosMN.className="";
            pTresMN.className="active";
		steps.style.display="initial";
		steps.innerHTML="¿Cual es su medida?";
		stepTresUno.style.display="initial";
		stepTresDos.style.display="initial";
		stepTresTres.style.display="none";
		steps.style.display="initial";
		steps.innerHTML="¿Cual es su medida?";
		document.querySelector("#gform_fields_2").scrollIntoView();
		Receta.style.display="initial";
	}
	
	
	
	//paso dos elegir
function OfertsUno(){
	generalOfertsUno.className+=" fadeIn";
	generalOfertsDos.className+=" fadeOut";
	generalOfertsTres.className+=" fadeOut";
	generalOfertsCuatro.className+=" fadeOut";
	
	 pUnoMN.className="";
     pDosMN.className="";
     pTresMN.className="active";
	
	generalOfertsRadioCheckUno.checked="true";
	generalOfertsRadioCheckDos.checked="false";
	generalOfertsRadioCheckTres.checked="false";
	generalOfertsRadioCheckCuatro.checked="false";
	gorNull.checked="false";
	
	update_dynamic_price_ajax(360, "gform_totals_2");
	generalOfertsUno.addEventListener("animationend", noShowOffer);
	
}
function OfertsDos(){
	
		generalOfertsUno.className+=" fadeOut";
		generalOfertsDos.className+=" fadeIn";
		generalOfertsTres.className+=" fadeOut";
		generalOfertsCuatro.className+=" fadeOut";
	
	generalOfertsRadioCheckUno.checked="false";
	generalOfertsRadioCheckDos.checked="true";
	generalOfertsRadioCheckTres.checked="false";
	generalOfertsRadioCheckCuatro.checked="false";
	gorNull.checked="false";
	
	update_dynamic_price_ajax(290, "gform_totals_2");
	
		 pUnoMN.className="";
         pDosMN.className="";
         pTresMN.className="active";
		generalOfertsDos.addEventListener("animationend", noShowOffer);
	}
function OfertsTres(){
	generalOfertsUno.className+=" fadeOut";
	generalOfertsDos.className+=" fadeOut";
	generalOfertsTres.className+=" fadeIn";
	generalOfertsCuatro.className+=" fadeOut";
	
	generalOfertsRadioCheckUno.checked="false";
	generalOfertsRadioCheckDos.checked="false";
	generalOfertsRadioCheckTres.checked="true";
	generalOfertsRadioCheckCuatro.checked="false";
	gorNull.checked="false";
	
	 pUnoMN.className="";
     pDosMN.className="";
     pTresMN.className="active";
	
	update_dynamic_price_ajax(120, "gform_totals_2");
	
	generalOfertsTres.addEventListener("animationend", noShowOffer);
}
function OfertsCuatro(){
	generalOfertsUno.className+=" fadeOut";
	generalOfertsDos.className+=" fadeOut";
	generalOfertsTres.className+=" fadeOut";
	generalOfertsCuatro.className+=" fadeIn";
	
	generalOfertsRadioCheckUno.checked="false";
	generalOfertsRadioCheckDos.checked="false";
	generalOfertsRadioCheckTres.checked="false";
	generalOfertsRadioCheckCuatro.checked="true";
	gorNull.checked="false";
	 pUnoMN.className="";
     pDosMN.className="";
     pTresMN.className="active";
	generalOfertsCuatro.addEventListener("animationend", noShowOffer);
	
	update_dynamic_price_ajax(80, "gform_totals_2");
}
	function formTresUno(){
		stepTresUno.className+=(" fadeIn");
		stepTresDos.className+=(" fadeOut");
		stepTresTres.className+=(" fadeOut");
		
		document.querySelector("#input_2_14").style.display="initial";
		
		stepTresDos.addEventListener("animationend",formTresDis);
	}
	function formTresDos(){
		stepTresUno.className+=(" fadeOut");
		stepTresDos.className+=(" fadeIn");
		stepTresTres.className+=(" fadeOut");
		
		stepTresDos.addEventListener("animationend",formTresDis);
	}
	function formTresTres(){
		stepTresUno.className+=(" fadeOut");
		stepTresDos.className+=(" fadeIn");
		stepTresTres.className+=(" fadeOut");
		
		stepTresTres.addEventListener("animationend",formTresDisTres);
		
	}
	function formTresDis(){
		stepTresUno.style.display="none";
		stepTresDos.style.display="none";
		stepTresTres.style.display="none";
		document.querySelector("#input_2_14").addEventListener("change", function(){document.querySelector("#input_2_14").style.display="none";finalMessage.style.display="initial";});
		document.querySelector("#gform_fields_2").scrollIntoView();
	}

//funcion para la tercera opcion
		function formTresDisTres(){
		stepTresUno.style.display="none";
		stepTresDos.style.display="none";
		stepTresTres.style.display="none";
		desaparecerTodasLasOpciones(10);
		medidasForm();
		finalMessage.style.display="initial";
		document.querySelector("#gform_fields_2").scrollIntoView()
	}
	
	// formulario de las medidas "mostrar"
	function medidasForm(){
	labelFormTresUno.style.display="initial";
		chooseFormTresUnoUno.style.display="initial";
		chooseFormTresUnoDos.style.display="initial";
		chooseFormTresUnoTres.style.display="initial";
		
	labelFormTresDos.style.display="initial";
		chooseFormTresDosUno.style.display="initial";
		chooseFormTresDosDos.style.display="initial";
		chooseFormTresDosTres.style.display="initial";
		
	labelFormTresTres.style.display="initial";
		chooseFormTresTresUno.style.display="initial";
		chooseFormTresTresDos.style.display="initial";
	}
    //esta funcion desaparece todo (incluido lo que hay en pantalla)

    function desaparecerTodasLasOpciones(pasoActual){
var generalOfertsDesc=document.querySelector("#gfield_description_2_7");
		var generalOfertsAdv=document.querySelector(".advice");
		var finalMessage=document.querySelector("#field_2_47");
	     
	     Receta.style.display="none";
        finalMessage.style.display="none";
        steps.style.display="none";
        opcionUno.style.display="none";
        opcionDos.style.display="none";
       	document.querySelector("#field_2_51").style.display="none";
		document.querySelector("#input_2_7").style.display="none";
        generalOfertsUno.style.display="none";
        generalOfertsDos.style.display="none";
        generalOfertsTres.style.display="none";
        generalOfertsCuatro.style.display="none";
		document.querySelector("#field_2_7").style.display="none";
        stepTresUno.style.display="none";
        stepTresDos.style.display="none";
        stepTresTres.style.display="none";
        finalMessage.style.display="none";
        labelFormTresUno.style.display="none";
        chooseFormTresUnoUno.style.display="none";
        chooseFormTresUnoDos.style.display="none";
        chooseFormTresUnoTres.style.display="none";
        labelFormTresDos.style.display="none";
        chooseFormTresDosUno.style.display="none";
        chooseFormTresDosDos.style.display="none";
        chooseFormTresDosTres.style.display="none";
        labelFormTresTres.style.display="none";
        chooseFormTresTresUno.style.display="none";
        chooseFormTresTresDos.style.display="none";
		document.querySelector("#input_2_14").style.display="none";
		generalOfertsDesc.style.display="none";
		generalOfertsAdv.style.display="none";

        if(pasoActual===1){
            pUnoMN.className="active";
            pDosMN.className="";
            pTresMN.className="";

			if(opcionUno.classList[1]=="fadeIn"){
				opcionUno.classList.remove("fadeIn");
				opcionDos.classList.remove("fadeOut");
			}
			if(opcionDos.classList[1]=="fadeIn"){
				opcionUno.classList.remove("fadeOut");
				opcionDos.classList.remove("fadeIn");
			}
            opcionUno.style.display="initial";
            opcionDos.style.display="initial";
            steps.style.display="initial";
            steps.innerHTML="¿Que tipo de lunas desea?";
			document.querySelector("#gform_fields_2").scrollIntoView();

        }
        if(pasoActual===2){
			var generalOfertsDesc=document.querySelector("#gfield_description_2_7");
			var generalOfertsAdv=document.querySelector(".advice");
            pUnoMN.className="";
            pDosMN.className="active";
            pTresMN.className="";
			
			document.querySelector("#field_2_51").style.display="block";
			document.querySelector("#input_2_7").style.display="flex";
            generalOfertsUno.style.display="initial";
            generalOfertsDos.style.display="initial";
            generalOfertsTres.style.display="initial";
            generalOfertsCuatro.style.display="initial";
			document.querySelector("#field_2_7").style.display="initial";
			
		
			
            generalOfertsDesc.style.display="initial";
            generalOfertsAdv.style.display="initial";
			
			 
			steps.style.display="initial";
            steps.innerHTML="¿Que tipo de lunas desea?";
			document.querySelector("#gform_fields_2").scrollIntoView();
        }
        if(pasoActual===3){
            pUnoMN.className="";
            pDosMN.className="";
            pTresMN.className="active";

            tStep();
			
			stepTresUno.className="gchoice_2_13_0";
			stepTresDos.className="gchoice_2_13_1";
			stepTresTres.className="gchoice_2_13_2";
        }
		   if(pasoActual==6){
			    console.log("nothing");
        }
		    }

//estas funciones invocan a la anterior para obtener el resultado deseado ( el paso elegido)
        function pasoUnoMasterLink(){
        	update_dynamic_price_ajax(0, "gform_totals_2");
        	generalOfertsUno.style.display="none";
		generalOfertsDos.style.display="none";
		generalOfertsTres.style.display="none";
		generalOfertsCuatro.style.display="none";
        	desaparecerTodasLasOpciones(1);
			finalMessage.style.display="none";

        }
		function pasoUnoSubMasterLink(){
			document.querySelector("#field_2_51").style.display="none";
			document.querySelector("#input_2_7").style.display="none";
            generalOfertsUno.style.display="none";
            generalOfertsDos.style.display="none";
            generalOfertsTres.style.display="none";
            generalOfertsCuatro.style.display="none";
			if(opcionUno.classList[1]=="fadeIn"){
				opcionUno.classList.remove("fadeIn");
				opcionDos.classList.remove("fadeOut");
			}
			if(opcionDos.classList[1]=="fadeIn"){
				opcionUno.classList.remove("fadeOut");
				opcionDos.classList.remove("fadeIn");
			
		}
			opcionUno.style.display="none";
			opcionDos.style.display="none";
			finalMessage.style.display="initial";
	}
        function pasoDosMasterLink(){
			 finalMessage.style.display="none";
			
			
            desaparecerTodasLasOpciones(2);
        }
        function pasoTresMasterLink(){
			 finalMessage.style.display="none";
			
            desaparecerTodasLasOpciones(3);
		}
              

</script>