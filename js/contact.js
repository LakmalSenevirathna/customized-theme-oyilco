$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value);
    }, "type the correct answer -_-");
		
		$('#success,#error').hide();

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                phone: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: false,
                    minlength: 10
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: "Please Enter Your Name",
                    minlength: "your name must consist of at least 2 characters"
                },
                phone: {
                    required: "Please Enter Your Phone Number",
                    minlength: "your phone number must consist of at least 10 characters"
                },
                email: {
                    required: "Please Enter Your email"
                },
                subject: {
                    required: "please indicate a subject"
                },
                message: {
                    required: "you have to write something to send this form.",
                    minlength: "your message must consist of at least 10 characters"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"contactProcess.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 0.90, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn();
                        });
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 0.15, function() {
                            $('#error').fadeIn();
                        });
                    }
                })
            }
        })
    })
        
 })(jQuery)
})