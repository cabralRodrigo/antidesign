document.addEventListener("DOMContentLoaded", function (event) {
    
	menuReserva.init();
	excluirtodas.init();
	cancelar_uma.init();
	voucher.init();
	invoice.init();
	docDigital.init();
	log.init();

	flatpickr("#reserva-data", {
		locale: 'pt',
		dateFormat: 'd/m/Y',
	});


});

var menuReserva = {
    init: function(){
  
      $('.JS__open-editar-reserva').each(function() {
        $(this).on('click', function(){
            document.querySelector('.JS__reserva-menu').classList.toggle('open');
        });
      });
      
    }
},
log = {
	init: function(){
  
	  $('.JS__log-toggle').each(function() {
		$(this).on('click', function(){
			document.querySelector('.JS__log').classList.toggle('open');
		});
	  });
  
	}
  },
excluirtodas = {
	init: function(){
  
	  $('.JS__excluir_todas-toggle').each(function() {
		$(this).on('click', function(){
			document.querySelector('.JS__excluir_todas').classList.toggle('open');
		});
	  });
  
	}
  },
  cancelar_uma = {
	init: function(){
  
	  $('.JS__cancelar_uma-toggle').each(function() {
		$(this).on('click', function(){
			document.querySelector('.JS__cancelar_uma').classList.toggle('open');
		});
	  });
  
	}
  },
voucher = {
  init: function(){

    $('.JS__voucher-toggle').each(function() {
      $(this).on('click', function(){
          document.querySelector('.JS__voucher').classList.toggle('open');
      });
    });

  }
},
invoice = {
  init: function(){

    $('.JS__invoice-toggle').each(function() {
      $(this).on('click', function(){
          document.querySelector('.JS__invoice').classList.toggle('open');
      });
    });

  }
},
docDigital = {
  init: function(){

    $('.JS__doc-toggle').each(function() {
      $(this).on('click', function(){
          document.querySelector('.JS__doc').classList.toggle('open');
      });
    });

  }
}


document.addEventListener("DOMContentLoaded", function (event) {
//DOM
const $ = document.querySelector.bind(document);

//APP
let App = {};
App.init = (function() {
	//Init
	function handleFileSelect(evt) {
		const files = evt.target.files; // FileList object

		//files template
		let template = `${Object.keys(files)
			.map(file => `<div class="file file--${file}">
     <div class="name"><span>${files[file].name}</span></div>
     <div class="progress active"></div>
     <div class="done">
	<a href="" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1000 1000">
		<g><path id="path" d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,967.7C241.7,967.7,32.3,758.3,32.3,500C32.3,241.7,241.7,32.3,500,32.3c258.3,0,467.7,209.4,467.7,467.7C967.7,758.3,758.3,967.7,500,967.7z M748.4,325L448,623.1L301.6,477.9c-4.4-4.3-11.4-4.3-15.8,0c-4.4,4.3-4.4,11.3,0,15.6l151.2,150c0.5,1.3,1.4,2.6,2.5,3.7c4.4,4.3,11.4,4.3,15.8,0l308.9-306.5c4.4-4.3,4.4-11.3,0-15.6C759.8,320.7,752.7,320.7,748.4,325z"</g>
		</svg>
						</a>
     </div>
    </div>`)
			.join("")}`;

		$("#drop").classList.add("hidden");
		$("footer").classList.add("hasFiles");
		$(".importar").classList.add("active");
		setTimeout(() => {
			$(".list-files").innerHTML = template;
		}, 1000);

		Object.keys(files).forEach(file => {
			let load = 2000 + (file * 2000); // fake load
			setTimeout(() => {
				$(`.file--${file}`).querySelector(".progress").classList.remove("active");
				$(`.file--${file}`).querySelector(".done").classList.add("anim");
			}, load);
		});
	}

	// trigger input
	/*
	$("#triggerFile").addEventListener("click", evt => {
		evt.preventDefault();
		$("input[type=file]").click();
	});

	// drop events
	$("#drop").ondragleave = evt => {
		$("#drop").classList.remove("active");
		evt.preventDefault();
	};
	$("#drop").ondragover = $("#drop").ondragenter = evt => {
		$("#drop").classList.add("active");
		evt.preventDefault();
	};
	$("#drop").ondrop = evt => {
		$("input[type=file]").files = evt.dataTransfer.files;
		$("footer").classList.add("hasFiles");
		$("#drop").classList.remove("active");
		evt.preventDefault();
	};

	//upload more
	$(".importar").addEventListener("click", () => {
		$(".list-files").innerHTML = "";
		$("footer").classList.remove("hasFiles");
		$(".importar").classList.remove("active");
		setTimeout(() => {
			$("#drop").classList.remove("hidden");
		}, 500);
	});

	// input change
	$("input[type=file]").addEventListener("change", handleFileSelect);
	*/
})();

});


var flatpickr1MonthInstance = null;
$('#edit-reserva' ).on( "draw.dt", function(){
	var flatpickrContainer = jQuery( "#searchbox-datepicker-1month" ).parent().parent().parent().find( ".searchbox-datepicker-1month__container" );
	var optionsFlatpickr = {
		showMonths: 1,
        locale: 'pt',
        dateFormat: 'd/m/Y',
        conjunction: " - ",
        inline: true,
        minDate: "today",
        monthSelectorType: 'static'
	};
	if( flatpickrContainer.length > 0 ){
		optionsFlatpickr.appendTo = flatpickrContainer.get(0);
	}
	flatpickr1MonthInstance = flatpickr( "#searchbox-datepicker-1month", optionsFlatpickr );
} );

$('#edit-reserva').DataTable(
	{
		"paging": false,
		"ordering": false,
		"info": false
	}
);

$(".edit-button").on("click", function($input){
    $thisDiv = $(this).closest( "td" );
    $thisInput =$thisDiv.find("input");
    $thisSpan = $thisDiv.find(".data");
	$multipleInputs = $thisDiv.is( ".reserva-item-multiple" );
    $thisButtonGroup = $thisDiv.find(".form-group");
	priceStr = "R$";
	if( $multipleInputs ){
		if( $thisInput.length > 0 ){
			$thisSpan.text($thisInput.val()).removeClass("hide").addClass("show-flex");
		} else {
			if( $thisDiv.find("select option:selected" ).length > 0 ){
				$thisSpan.text( $thisDiv.find("select option:selected" ).text() ).removeClass("hide").addClass("show-flex");
			}
		}
		var inputArr = [];
		$thisDiv.find( ".reserva-item-input" ).each( function(){
			$itemInputIndex = jQuery( this ).attr( "data-input-index" );
			if( typeof $itemInputIndex !== "undefined" && ! isNaN( parseFloat( $itemInputIndex ) ) && parseFloat( $itemInputIndex ) >= 0 ){
				$itemInputValue = null;
				if( jQuery( this ).is( "input" ) ){
					$itemInputValue = jQuery( this ).val();
					if( jQuery( this ).is( ".reserva-item-input--price" ) ){
						if( typeof $itemInputValue !== "undefined" && $itemInputValue !== null && typeof $itemInputValue.length !== "undefined" && ! isNaN( parseFloat( $itemInputValue.length ) ) && parseFloat( $itemInputValue.length ) > 0 ){
							$itemInputValue = priceStr + $itemInputValue;	
						}
					}
				} else if( jQuery( this ).is( "select" ) ){
					$itemInputValue = $thisDiv.find("select option:selected" ).text();
				}
				if( $itemInputValue !== null ){
					inputArr.push( {
						index: parseFloat( $itemInputIndex ),
						content: $itemInputValue
					} );
				}
			}
		} );
		if( inputArr.length > 0 ){
			if( inputArr.length > 1 ){
				inputArr.sort( function( a, b ){
					return a.index === b.index ? 0 : ( a.index > b.index ? 1 : -1 );
				} );
			}
			inputArr = inputArr.map( function( inputCfg ){
				return inputCfg.content;
			} );
		}
		$thisSpan.html( inputArr.join( "<br>" ) ).removeClass("hide").addClass("show-flex");
	} else {
		if( $thisInput.length > 0 ){
			$thisSpan.text($thisInput.val()).removeClass("hide").addClass("show-flex");
		} else {
			if( $thisDiv.find("select option:selected" ).length > 0 ){
				$thisSpan.text( $thisDiv.find("select option:selected" ).text() ).removeClass("hide").addClass("show-flex");
			}
		}
	}
    $thisButtonGroup.removeClass("show-flex").addClass("hide");
})

$(".data").on("click", function(){
	$span = $(this);
	$thisDiv = $(this).closest( "td" );
	$tdContainer = $span.parent();
	$inputGroup =  $tdContainer.find(".form-group");
	$input = $inputGroup.find("input:not( .flatpickr-calendar input )");
	$editButton = $inputGroup.find(".btn");
	$spanText = $span.text();
	$span.removeClass('show-flex').addClass("hide");
	$inputGroup.removeClass('hide').addClass("show-flex");
	$multipleInputs = $thisDiv.is( ".reserva-item-multiple" );
	priceStr = "\\R\\$";
	if( $multipleInputs ){
		$spanText = $span.html();
		$spanTextExpl = $spanText.split( "<br>" );
		$currentInput = null;
		for( var indText in $spanTextExpl ){
			$currentInput = $thisDiv.find( ".reserva-item-input[data-input-index=" + indText + "]" );
			$currentText = $spanTextExpl[indText];
			if( $currentInput.is( "#searchbox-datepicker-1month" ) ){
				if( flatpickr1MonthInstance !== null ){
					flatpickr1MonthInstance.setDate( $currentText, true, "d/m/Y" );
				}
			} else {
				if( $currentInput.is( ".reserva-item-input--price" ) ){
					$currentInput.val($currentText.replace( new RegExp( `\\b${priceStr}\\b`, 'gi' ), "" ) );
				} else {
					$currentInput.val( $currentText );
				}
			}
		}
	} else {
		if( $input.length > 0 ){
			$input.val($spanText);	
			if( $input.is( "#searchbox-datepicker-1month" ) && flatpickr1MonthInstance !== null ){
				flatpickr1MonthInstance.setDate( $spanText, true, "d/m/Y" );
			}
		} else {
			$input = $inputGroup.find("select" );
			if( $input.length > 0 ){
				$input.find( "option" ).each( function( index ){
					if( jQuery( this ).text() === $spanText ){
						$input[0].selectedIndex = index;
					}
				} );
				$input.select2('open');
				$input = $input.next( ".select2" ).find( ".select2-selection" );
			}
		}
	}
	if( $input.length > 0 ){
		$input.focus();
	}
});
$(document).on( "keyup", function(e) { 
	key = e.which || e.keyCode || 0;
	code = e.code || "";
	if( key === 27 || code === "Escape" ){
		$focusedTd = $(':focus').closest( "#edit-reserva tbody td" );
		if( $focusedTd.length > 0 ){
			$focusedGroup = $focusedTd.find( ".form-group" );
			$span = $focusedTd.find( ".data" );
			if( $focusedGroup.length > 0 ){
				$focusedGroup.removeClass( "show-flex" ).addClass( "hide" );
				$span.removeClass('hide').addClass("show-flex");
			}
		}
	}
} );

// Forma 3
var checkTodos = $("#checkall");
checkTodos.on("click", function(){
  if ( $(this).is(':checked') ){
    $('.checkall input:checkbox').prop("checked", true);
  }else{
    $('.checkall input:checkbox').prop("checked", false);
  }
});