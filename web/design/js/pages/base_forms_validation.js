/*
 *  Document   : base_forms_validation.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Form Validation Page
 */

var BaseFormValidation = function() {
    // Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationBootstrap = function(){
        jQuery('.js-validation-bootstrap').validate({
            errorClass: 'help-block animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
            rules: {

                'val-fullname': {
                    required: true,
                    minlength: 5
                },
                'val-username': {
                    required: true,
                    minlength: 3
                },
                'val-email': {
                    required: true,
                    email: true
                },
                'val-password': {
                    required: true,
                    minlength: 5
                },
                'val-confirm-password': {
                    required: true,
                    equalTo: '#val-password'
                },
                'val-suggestions': {
                    required: true,
                    minlength: 5
                },
                'val-skill': {
                    required: true
                },
                'val-website': {
                    required: true,
                    url: true
                },
                'val-digits': {
                    required: true,
                    digits: true
                },
                'val-number': {
                    required: true,
                    number: true
                },
                'val-range': {
                    required: true,
                    range: [1, 5]
                },
                'val-terms': {
                    required: true
                }
            },
            messages: {
                'val-fullname': {
                    required: 'Please enter a fullname',
                    minlength: 'Fullname must consist of at least 3 characters'
                },

                'val-username': {
                    required: 'Please enter a username',
                    minlength: 'Your username must consist of at least 3 characters'
                },
                'val-email': 'Please enter a valid email address',
                'val-password': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                },
                'val-confirm-password': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long',
                    equalTo: 'Please enter the same password as above'
                },
                'val-suggestions': 'What can we do to become better?',
                'val-skill': 'Please select a skill!',
                'val-website': 'Please enter your website!',
                'val-digits': 'Please enter only digits!',
                'val-number': 'Please enter a number!',
                'val-range': 'Please enter a number between 1 and 5!',
                'val-terms': 'You must agree to the service terms!'
            }
        });
    };

    // Init Material Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationMaterial = function(){
        jQuery('.js-validation-material').validate({
            errorClass: 'help-block text-right animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group .form-material').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
            rules: {
                'val-fullname': {
                    required: true,
                    minlength: 5
                },
                'val-birthdate': {
                    required: true,
                    minlength: 10
                },
                'val-pserial': {
                    required: true,
                    minlength: 10
                },
                'val-specialty': {
                    required: true,
                },
                'val-phone': {
                    required: true,
                    minlength: 5
                },
                'val-email': {
                    required: true,
                    minlength: 2
                },
                'val-region': {
                    required: true,
                },
                'val-district': {
                    required: true,
                },
                'val-address': {
                    required: true,
                    minlength: 5
                },
                'val-height': {
                    required: true,
                    minlength: 2
                },
                'val-weight': {
                    required: true,
                    minlength: 2
                },
                'val-point': {
                    required: true,
                     minlength: 2
                },
                'val-school': {
                    required: true,
                     minlength: 1
                },
                'val-issue': {
                    required: true,
                     minlength: 1
                },
                'val-guarantor': {
                    required: true,
                     minlength: 5
                },
                'val-relationship': {
                    required: true,
                     minlength: 3
                },
                'val-gphone': {
                    required: true,
                    minlength: 5
                },
                'val-korea': {
                    required: true,
                },
                'val-account': {
                    required: true,
                    minlength: 5
                },
                'val-namebank': {
                    required: true,
                    minlength: 5
                },
                'val-examdate': {
                    required: true,
                    minlength: 1
                },
                'val-passfile': {
                    required: true,
                },


                'val-username2': {
                    required: true,
                    minlength: 3
                },
                'val-email2': {
                    required: true,
                    email: true
                },
                'val-password2': {
                    required: true,
                    minlength: 5
                },
                'val-confirm-password2': {
                    required: true,
                    equalTo: '#val-password2'
                },
                'val-suggestions2': {
                    required: true,
                    minlength: 5
                },
                'val-skill2': {
                    required: true
                },
                'val-website2': {
                    required: true,
                    url: true
                },
                'val-digits2': {
                    required: true,
                    digits: true
                },
                'val-number2': {
                    required: true,
                    number: true
                },
                'val-range2': {
                    required: true,
                    range: [1, 5]
                },
                'val-terms2': {
                    required: true
                }
            },
            messages: {
                'val-fullname': {
                    required: 'Please enter a fullname',
                    minlength: 'Fullname must consist of at least 3 characters'
                },
                'val-birthdate': {
                    required: 'Please enter a Date of birth',
                    minlength: 'Date of birth must consist of at least 10 characters'
                },
                'val-pserial': {
                    required: 'Please enter a Serial number',
                    minlength: 'Serial number must consist of at least 10 characters'
                },
                'val-specialty': 'Please select a Specialty!',
                'val-phone': {
                    required: 'Please enter a Phone',
                    minlength: 'Phone number must consist of at least 3 characters'
                },
                'val-email': {
                    required: 'Please enter a E-mail',
                    minlength: 'E-mail must consist of at least 2 characters'
                },
                'val-region': 'Please select a Region!',
                'val-district': 'Please select a District!',
                'val-address': {
                    required: 'Please enter a Address',
                    minlength: 'Address must consist of at least 5 characters'
                },
                'val-height': {
                    required: ' ',
                    minlength: ' '
                },
                'val-weight': {
                    required: ' ',
                    minlength: ' '
                },
                'val-point': {
                    required: ' ',
                    minlength: ' '
                },
                'val-school': {
                    required: 'Please enter a School number',
                    minlength: 'School number must consist of at least 5 characters'
                },
                'val-issue': {
                    required: 'Please enter a Date of issue',
                    minlength: 'Date of issue must consist of at least 5 characters'
                },
                'val-guarantor': {
                    required: 'Please enter a Guarantor',
                    minlength: 'Guarantor must consist of at least 5 characters'
                },
                'val-relationship': {
                    required: 'Please enter a Relationship',
                    minlength: 'relationship must consist of at least 3 characters'
                },
                'val-gphone': {
                    required: 'Please enter a Phone',
                    minlength: 'Phone number must consist of at least 3 characters'
                },
                'val-korea': 'Please select',
                'val-account': {
                    required: 'Please enter a Deposit account number',
                    minlength: 'Deposit account number must consist of at least 5 characters'
                },
                'val-namebank': {
                    required: 'Please enter a Name of bank',
                    minlength: 'Name of bank must consist of at least 5 characters'
                },
                'val-examdate': {
                    required: 'Please enter a Exam date',
                    minlength: 'Exam date must consist of at least 5 characters'
                },
                'val-passfile': 'Please select',


                'val-username2': {
                    required: 'Please enter a username',
                    minlength: 'Your username must consist of at least 3 characters'
                },
                'val-email2': 'Please enter a valid email address',
                'val-password2': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                },
                'val-confirm-password2': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long',
                    equalTo: 'Please enter the same password as above'
                },
                'val-suggestions2': 'What can we do to become better?',
                'val-skill2': 'Please select a skill!',
                'val-website2': 'Please enter your website!',
                'val-digits2': 'Please enter only digits!',
                'val-number2': 'Please enter a number!',
                'val-range2': 'Please enter a number between 1 and 5!',
                'val-terms2': 'You must agree to the service terms!'
            }
        });
    };

    return {
        init: function () {
            // Init Bootstrap Forms Validation
            initValidationBootstrap();

            // Init Meterial Forms Validation
            initValidationMaterial();
        }
    };
}();

// Initialize when page loads
jQuery(function(){ BaseFormValidation.init(); });