$(function() {
	'use strict'
	$('#wizard1').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>'
	});
	$('#wizard2').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
		onStepChanging: function(event, currentIndex, newIndex) {
			if (currentIndex < newIndex) {
				// Step 1 form validation
				if (currentIndex === 0) {
					var doctor_name = $('#doctor_name').parsley();
					var doctor_email = $('#doctor_email').parsley();
					var doctor_subject = $('#doctor_subject').parsley();
					if (doctor_subject.isValid() && doctor_name.isValid() && doctor_email.isValid() ) {
						return true;
					} else {
						doctor_name.validate();
						doctor_email.validate();
						doctor_subject.validate();
					}
				}
				// Step 2 form validation
				if (currentIndex === 1) {
					var Inst_Name1 = $('#Inst_Name1').parsley();
					var Inst_Name2 = $('#Inst_Name2').parsley();
					var Inst_Name3 = $('#Inst_Name3').parsley();
					if (Inst_Name1.isValid() && Inst_Name2.isValid() && Inst_Name3.isValid()) {
						return true;
					} else {
						Inst_Name1.validate();
						Inst_Name2.validate();
						Inst_Name3.validate();
					}
				}
				// Always allow step back to the previous step even if the current step is not valid.
			} else {
				return true;
			}
		}
	});
	$('#wizard3').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
		stepsOrientation: 1
	});
});