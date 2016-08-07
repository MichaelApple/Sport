// Image preview
// window.addEventListener("resize", myFunction);

// function myFunction() {
//     var x = document.getElementsByClassName("mid").innerHeight();
//     document.getElementsByClassName("mid1").css('height', x + 'px');
// }

jQuery(document).ready(function($) {


$( window ).resize(function() {
  	var w = $(".mid").height();
	$(".mid1").css('height', w + 'px');
});

	var w = $(".mid").height();
	$(".mid1").css('height', w + 'px');

    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });


function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

$('input[name=or_other#1]').keyup(function() {
	$('input[name=check8]').prop('disabled', false);
});
$('input[name=or_other#2]').keyup(function() {
	$('input[name=check9]').prop('disabled', false);
});
$('input[name=or_other#3]').keyup(function() {
	$('input[name=check10]').prop('disabled', false);
});
$('input[name=or_other#4]').keyup(function() {
	$('input[name=check16]').prop('disabled', false);
});
$('input[name=or_other#5]').keyup(function() {
	$('input[name=check17]').prop('disabled', false);
});
$('input[name=or_other#6]').keyup(function() {
	$('input[name=check18]').prop('disabled', false);
});
$('input[name=or_other#7]').keyup(function() {
	$('input[name=check21]').prop('disabled', false);
});
$('input[name=or_other#8]').keyup(function() {
	$('input[name=check22]').prop('disabled', false);
});
$('input[name=or_other#9]').keyup(function() {
	$('input[name=check23]').prop('disabled', false);
});
$('input[name=or_other#10]').keyup(function() {
	$('input[name=check31]').prop('disabled', false);
});
$('input[name=or_other#11]').keyup(function() {
	$('input[name=check32]').prop('disabled', false);
});
$('input[name=or_other#12]').keyup(function() {
	$('input[name=check33]').prop('disabled', false);
});

$('#title').keyup(function(){
	$('#title2').attr('value', $('#title').val());
});


// Gender value
$('#progr').keyup(function(){
	if($('#progr').val() == ''){
		$('#progress_male').attr('value', '0');
	}
	else if($('#progr').val() >= 0){
		$('#progress_male').attr('value', $('#progr').val());
		var a = 100 - $('#progr').val();
		$('#progress_female').attr('value', a);
		$('#progr2').attr('value', a);
	}
	
});

$('#progr2').keyup(function(){
	if($('#progr2').val() == ''){
		$('#progress_female').attr('value', '0');
	}
	else if($('#progr2').val() >= 0){
		$('#progress_female').attr('value', $('#progr2').val());
		var a = 100 - $('#progr2').val();
		$('#progress_male').attr('value', a);
		$('#progr').attr('value', a);
	}

});

$('#gender-div>p>input').keyup(function(){
	var gender = Number($('#progr').val()) + Number($('#progr2').val());
		if (gender > 100) {
			$('#gender-div>p>input').attr('value', '0');
			$('#gender-div>p>progress').attr('value', '0');
			alert("Summ is more than 100. Please try again.)");	
		}
		else if (gender == 100) {

			var gend = [Number($('#progr').val()), Number($('#progr2').val())];
			Array.prototype.max = function() {
			return Math.max.apply(null, this);
		}
		$('#maxGender').attr('value', gend.max());
		};
});


$('#age-div>p>input, #edu-div>p>input, #mar-div>p>input, #inc-div>p>input').keyup(function(){
	if($(this).val() == ''){
		$(this).find('+progress').attr('value', '0');
	}
	
	else if(100 >= $(this).val() >= 0){	//start of else if

		$(this).find('+progress').attr('value', $(this).val());
		$('#age_percent').attr('value', 100-$('#age1').val()-$('#age2').val()-$('#age3').val()-$('#age4').val()-$('#age5').val()-$('#age6').val()-$('#age7').val() + '%');
		$('#edu_percent').attr('value', 100-$('#edu1').val()-$('#edu2').val()-$('#edu3').val()-$('#edu4').val()-$('#edu5').val() + '%');
		$('#mar_percent').attr('value', 100-$('#marital1').val()-$('#marital2').val()-$('#marital3').val() + '%');
		$('#income_percent').attr('value', 100-$('#income1').val()-$('#income2').val()-$('#income3').val()-$('#income4').val()-$('#income5').val()-$('#income6').val() + '%');

		var c = Number($('#age1').val()) + Number($('#age2').val()) + Number($('#age3').val()) + Number($('#age4').val())+ Number($('#age5').val()) + Number($('#age6').val()) + Number($('#age7').val());
		if (c > 100) {
			// $('#age-div>p>input').attr('value', '0');
			// $('#age-div>p>progress').attr('value', '0');
			$('#age_percent').addClass('numbers_error');
			alert("Summ is more than 100. Please try again.)");
			
		}

		
		else if (c == 100) {
			var age_values = [Number($('#age1').val()), Number($('#age2').val()), Number($('#age3').val()), Number($('#age4').val()), Number($('#age5').val()), Number($('#age6').val()), Number($('#age7').val())];
			var age = {'0-17' : Number($('#age1').val()), '18-24':Number($('#age2').val()), '25-34':Number($('#age3').val()), '35-44':Number($('#age4').val()), '45-54':Number($('#age5').val()), '55-64':Number($('#age6').val()), '65+':Number($('#age7').val())};
			Array.prototype.max = function() {
			return Math.max.apply(null, this);
		}
		var max_age = Object.keys(age).filter(function(key){
			return age[key] == age_values.max();
		});
		$('#maxAge').attr('value', max_age.toString());
		}
		else {
			$('#age_percent').removeClass('numbers_error');
			$('#numbers_check').prop('disabled', false);
		}
		var education = Number($('#edu1').val()) + Number($('#edu2').val()) + Number($('#edu3').val()) + Number($('#edu4').val())+ Number($('#edu5').val());
		if (education > 100){
			// $('#edu-div>p>input').attr('value', '0');
			// $('#edu-div>p>progress').attr('value', '0');
			$('#edu_percent').addClass('numbers_error');
			alert("Summ is more than 100. Please try again.");
			
		}
		else if(education == 100){
			var edu_values = [Number($('#edu1').val()), Number($('#edu2').val()), Number($('#edu3').val()), Number($('#edu4').val()), Number($('#edu5').val())];
			var edu ={'Less than HS diploma':Number($('#edu1').val()), 'High school':Number($('#edu2').val()), 'Some college':Number($('#edu3').val()), 'Bachelor\'s degree':Number($('#edu4').val()), 'Graduate degree':Number($('#edu5').val())};
			Array.prototype.max = function() {
			return Math.max.apply(null, this);
		}
		var max_edu = Object.keys(edu).filter(function(key){
			return edu[key] == edu_values.max();
		});
		$('#maxEdu').attr('value', max_edu.toString());
		}
		else {
			$('#edu_percent').removeClass('numbers_error');
			$('#numbers_check').prop('disabled', false);
		}
		var marital = Number($('#marital1').val()) + Number($('#marital2').val()) + Number($('#marital3').val());
		if (marital > 100){
			// $('#mar-div>p>input').attr('value', '0');
			// $('#mar-div>p>progress').attr('value', '0');
			$('#mar_percent').addClass('numbers_error');
			alert("Summ is more than 100. Please try again.");
			
		}

		else if (marital == 100) {
			var mar_values = [Number($('#marital1').val()), Number($('#marital2').val()), Number($('#marital3').val())];
			var mar = {'Single':Number($('#marital1').val()), 'Married/couple':Number($('#marital2').val()), 'Couple with children':Number($('#marital3').val())};
			Array.prototype.max = function(){
			return Math.max.apply(null, this);
		}
		var max_mar = Object.keys(mar).filter(function(key){
			return mar[key] == mar_values.max();
		});
		$('#maxMar').attr('value', max_mar.toString());
		}
		else {
			$('#mar_percent').removeClass('numbers_error');
			$('#numbers_check').prop('disabled', false);
		}
		var income = Number($('#income1').val()) + Number($('#income2').val()) + Number($('#income3').val()) + Number($('#income4').val())+ Number($('#income5').val())+ Number($('#income6').val());
		if (income > 100) {
			// $('#inc-div>p>input').attr('value', '0');
			// $('#inc-div>p>progress').attr('value', '0');
			$('#income_percent').addClass('numbers_error');
			alert("Summ is more than 100. Please try again.");
		}
		
		else if(income == 100){
			var inc_values = [Number($('#income1').val()), Number($('#income2').val()), Number($('#income3').val()), Number($('#income4').val()), Number($('#income5').val()),  Number($('#income6').val())];
			var inc = {'$0-$24,999':Number($('#income1').val()), '$25,000-$49,999':Number($('#income2').val()), '$50,000-$74,999':Number($('#income3').val()), '$75,000-$99,999':Number($('#income4').val()), '$100,000-$149,000':Number($('#income5').val()), '$150,000 or more':Number($('#income6').val())};
			Array.prototype.max = function(){
			return Math.max.apply(null, this);
		}
		var max_inc = Object.keys(inc).filter(function(key){
			return inc[key] == inc_values.max();
		});
		$('#maxInc').attr('value', max_inc.toString());
		}
		else {
			
			$('#income_percent').removeClass('numbers_error');
			
		}
		if (income > 100 || marital > 100 || education > 100 || c > 100){
			$('#numbers_check').prop('disabled', true);
		}
		else {
			$('#numbers_check').prop('disabled', false);
		}
}	// end of else if
});
$("#period6").click(function () {

	$("#period12").prop('checked',false);
	$("#total2").attr('value', "US$20.00");
	$("#amount").attr('value', "20.00");
});
$("#period12").click(function () {

	$("#period6").prop('checked',false);
	$("#total2").attr('value', "US$35.00");
	$("#amount").attr('value', "35.00");
});


$(function () {

	
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>    ');
            }
        }
        init();
    });
});





$(function () {
             $('#datetimepicker1').datetimepicker({
                format: 'DD-MM-YYYY'
             });

        $('#datetimepicker2').datetimepicker({
        	format: 'DD-MM-YYYY'
            
        });

        $('#datetimepicker3').datetimepicker({
        	format: 'DD-MM-YYYY'
        });

          $('#datetimepicker4').datetimepicker({
            format: 'DD-MM-YYYY'
        });

        $('#datetimepicker5').datetimepicker({
            format: 'DD-MM-YYYY'
        });

        $("#datetimepicker1").on("dp.change", function (e) {
            
            $('#datetimepicker3').data("DateTimePicker").maxDate(e.date);
            
            $('#datetimeinput3').attr('value', $('#datetimeinput1').val());
        });
        $("#datetimepicker2").on("dp.change", function (e) {
            $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);

        });

        $("#datetimepicker4").on("dp.change", function (e) {
            $('#datetimepicker5').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker5").on("dp.change", function (e) {
            $('#datetimepicker4').data("DateTimePicker").maxDate(e.date);
        });

});

$("#datetimeinput1").keyup(function() {
	$("#datetimeinput3").attr('value', $("#datetimeinput1").val());
});

$("#add_location1").click(function () {
	$(this).hide();
  });
$("#remove_location1").click(function () {
	$("#add_location1").show();
});

$("#add_location2").click(function () {
	$(this).hide();
	$("#remove_location1").hide();
  });
$("#remove_location2").click(function () {
	$("#add_location2").show();
	$("#remove_location1").show();
});
$("#add_location3").click(function () {
	$(this).hide();
	$("#remove_location2").hide();
  });
$("#remove_location3").click(function () {
	$("#add_location3").show();
	$("#remove_location2").show();
});
$("#add_location4").click(function () {
	$(this).hide();
	$("#remove_location3").hide();
  });
$("#remove_location4").click(function () {
	$("#add_location4").show();
	$("#remove_location3").show();
});
$("#add_location5").click(function () {
	$(this).hide();
	$("#remove_location4").hide();
  });
$("#remove_location5").click(function () {
	$("#add_location5").show();
	$("#remove_location4").show();
});
$("#add_location6").click(function () {
	$(this).hide();
	$("#remove_location5").hide();
  });
$("#remove_location6").click(function () {
	$("#add_location6").show();
	$("#remove_location5").show();
});
$("#add_location7").click(function () {
	$(this).hide();
	$("#remove_location6").hide();
  });
$("#remove_location7").click(function () {
	$("#add_location7").show();
	$("#remove_location6").show();
});
$("#add_location8").click(function () {
	$(this).hide();
	$("#remove_location7").hide();
  });
$("#remove_location8").click(function () {
	$("#add_location8").show();
	$("#remove_location7").show();
});
$("#add_location9").click(function () {
	$(this).hide();
	$("#remove_location8").hide();
  });
$("#remove_location9").click(function () {
	$("#add_location9").show();
	$("#remove_location8").show();

});
// ДОДАВАННЯ OR OTHER
$('#add_other1').click(function() {
	$(this).hide();
});
$('#remove_other1').click(function () {
	$('#add_other1').show();
});
$('#add_other2').click(function () {
	$(this).hide();
	$('#remove_other1').hide();
});
$('#remove_other2').click(function () {
	$('#add_other2').show();
	$('#remove_other1').show();
});
$('#add_other3').click(function () {
	$(this).hide();
});
$('#remove_other3').click(function () {
	$('#add_other3').show();
});
$('#add_other4').click(function () {
	$(this).hide();
	$('#remove_other3').hide();
});
$('#remove_other4').click(function () {
	$('#add_other4').show();
	$('#remove_other3').show();
});
$('#add_other5').click(function () {
	$(this).hide();
});
$('#add_other6').click(function () {
	$(this).hide();
	$('#remove_other5').hide();
});
$('#remove_other5').click(function () {
	$('#add_other5').show();
});
$('#remove_other6').click(function () {
	$('#add_other6').show();
	$('#remove_other5').show();
});
$('#add_other7').click(function () {
	$(this).hide();
});
$('#remove_other7').click(function () {
	$(this).hide();
	$('#add_other7').show();
});
$('#add_other8').click(function () {
	$(this).hide();
	$('#remove_other7').hide();
})
$('#remove_other8').click(function () {
	$('#add_other8').show();
	$('#remove_other7').show();
});
$("#view_level1").click(function () {
	$(this).hide();
});

// ДОДАВАННЯ ЛЕВЕЛІВ
$("#level1").click(function () {
	$(this).hide();
	$("#plat_level").hide();
	$("#remove_level1").hide();
	$("#remove_level2").hide();
	$("#first_level").append("<p class='additional ' style='text-align: center;'>Platinum</p>")
	
});
$("#remove_level1").click(function () {
	$(".additional").remove();
	$("#level1").show();
	$("#plat_level").show();

})

$("#remove_level2").click(function () {
	
	$("#remove_level1").show();
});

$("#remove_level3").click(function () {
	
	$("#remove_level2").show();
});

// ВИБИРАННЯ ЛЕВЕЛІВ
// if($("#select1").value == "Platinum") {
// 	$("#select3")
// }

// $("#select1").change(function() {
// 	if ($("#select1").val() == "Platinum") {
// 		$(".platinum").hide();
// 		$(".gold").hide();
// 		$("#gold2").attr("selected", "selected");
// 		$("#silver3").attr("selected", "selected");
// 		$("#bronze4").attr("selected", "selected");
// 		$(".silver").hide();
// 		$(".bronze").hide();
// 	}
// 	else if ($("#select1").val() == "Gold"){
// 		$(".gold").hide();
// 		$(".platinum").hide();
// 		$("#platinum2").attr("selected", "selected");
// 		$("#silver3").attr("selected", "selected");
// 		$("#bronze4").attr("selected", "selected");
// 		$(".silver").hide();
// 		$(".bronze").hide();
// 	}
// 	else if ($("#select1").val() == "Silver"){
// 		$(".silver").hide();
// 		$(".gold").hide();
// 		$(".platinum").hide();
// 		$("#platinum2").attr("selected", "selected");
// 		$("#gold3").attr("selected", "selected");
// 		$("#bronze4").attr("selected", "selected");
// 		$(".bronze").hide();
// 	}
// 	else if ($("#select1").val() == "Bronze"){
// 		$(".bronze").hide();
// 		$(".gold").hide();
// 		$(".silver").hide();
// 		$(".platinum").hide();
// 		$("#platinum2").attr("selected", "selected");
// 		$("#gold3").attr("selected", "selected");
// 		$("#silver4").attr("selected", "selected");
// 	}
		
// });

// THE LAST STEP


$("#month3").click(function () {
	
	$("#month6").prop('checked',false);
	$("#month12").prop('checked',false);

	$("#total").attr('value', "US$25.00" );
	$("#amount").attr('value', "25.00" );

	if ($("#prem").is(':checked') && $("#month3").is(':checked')) {
		$("#total").attr('value', "US$75.00" );
		$("#amount").attr('value', "75.00" );
	}
	else if (!$("#month3").is(':checked') && $("#prem").is(':checked')){
		$("#total").attr('value', "US$50.00" );
		$("#amount").attr('value', "50.00" );
	}
});


$("#month6").click(function () {
	
	$("#month3").prop('checked',false);
	$("#month12").prop('checked',false);

	$("#total").attr('value', "US$45.00" );
	$("#amount").attr('value', "45.00" );

	if ($("#prem").is(':checked') && $("#month6").is(':checked')) {
		$("#total").attr('value', "US$95.00" );
		$("#amount").attr('value', "95.00" );
	}
	else if (!$("#month6").is(':checked') && $("#prem").is(':checked')) {
			$("#total").attr('value', "US$50.00" );
			$("#amount").attr('value', "50.00" );
		}
});

$("#month12").click(function () {
	

	$("#month3").prop('checked',false);
	$("#month6").prop('checked',false);
	
	$("#total").attr('value', "US$85.00" );
	$("#amount").attr('value', "85.00" );

	if ($("#prem").is(':checked') && $("#month12").is(':checked')) {
		$("#total").attr('value', "US$135.00" );
		$("#amount").attr('value', "135.00" );
	}
		else if (!$("#month12").is(':checked') && $("#prem").is(':checked')) {
			$("#total").attr('value', "US$50.00" );
			$("#amount").attr('value', "50.00" );
		}
		
	
});


$("#prem").click(function () {
	// $("#prem").is(':checked');
	// $('#total').attr('value', Number($('#total').val()) + 50);
	// switch() {
	// 	case $("#month3").is(':checked') : $("#total").attr('value', 75 );
	// 	break;
	// 	case $("#month6").is(':checked') : $("#total").attr('value', 95 );
	// 	break;
	// 	case $("#month12").is(':checked') : $("#total").attr('value', 135 );
	// 	break;
	// }
	if ($("#month3").is(':checked') && $("#prem").is(':checked')) {
		$("#total").attr('value', "US$75.00" );
		$("#amount").attr('value', "75.00" );
	}
		else if ($("#month6").is(':checked') && $("#prem").is(':checked')) {
			$("#total").attr('value', "US$95.00" );
			$("#amount").attr('value', "95.00" );
		}
			else if ($("#month12").is(':checked') && $("#prem").is(':checked')) {
				$("#total").attr('value', "US$135.00" );
				$("#amount").attr('value', "135.00" );
			}
				else if ($("#month3").is(':checked') && !$("#prem").is(':checked')) {
					$("#total").attr('value', "US$25.00" );
					$("#amount").attr('value', "25.00" );
				}
					else if ($("#month6").is(':checked') && !$("#prem").is(':checked')) {
						$("#total").attr('value', "US$45.00" );
						$("#amount").attr('value', "45.00" );
					}
						else if ($("#month12").is(':checked') && !$("#prem").is(':checked')) {
							$("#total").attr('value', "US$85.00" );
							$("#amount").attr('value', "85.00" );
						}
});





});
