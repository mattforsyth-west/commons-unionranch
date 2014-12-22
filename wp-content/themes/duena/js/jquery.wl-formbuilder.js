/*
 *  Project: WESTliving Form Builder
 *  Organization: West Development, Inc.
 *  Author: Matt Forsyth
 *  Version: 1.0
 */

// the semi-colon before function invocation is a safety net against concatenated
// scripts and/or other plugins which may not be closed properly.
;(function ( $, window, document, undefined ) {

    // undefined is used here as the undefined global variable in ECMAScript 3 is
    // mutable (ie. it can be changed by someone else). undefined isn't really being
    // passed in so we can ensure the value of it is truly undefined. In ES5, undefined
    // can no longer be modified.

    // window and document are passed through as local variable rather than global
    // as this (slightly) quickens the resolution process and can be more efficiently
    // minified (especially when both are regularly referenced in your plugin).

    // Create the defaults once
    var pluginName = "wl_formBuilder",
        defaults = {
		formTitle: 'Contact Us',
            fields: {
				1:'name',
				2:'email'
			},
		submitText: 'Submit',
		formLocation: 'Main'
        };

    // The actual plugin constructor
    function Plugin( element, options ) {
        this.element = element;

        // jQuery has an extend method which merges the contents of two or
        // more objects, storing the result in the first object. The first object
        // is generally empty as we don't want to alter the default options for
        // future instances of the plugin
        this.options = $.extend( {}, defaults, options );

        this._defaults = defaults;
        this._name = pluginName;

        this.init();
    }

    Plugin.prototype = {

        init: function() {
            // Place initialization logic here
            // You already have access to the DOM element and
            // the options via the instance, e.g. this.element
            // and this.options
            // you can add more functions like the one below and
            // call them like so: this.yourOtherFunction(this.element, this.options).
			
			var addLabelOverClass = "", submitButtonMargin = "";

			//Form location on page
			var formLocation = this.options.formLocation;
			if(formLocation == "Main") {
				addLabelOverClass = "";
				submitButtonMargin = "150px";
			} else {
				addLabelOverClass = "class='over label-over'";
				submitButtonMargin = "0px";
			} 
			
			//Form title
			var formTitle = this.options.formTitle;
			
			//Form URL
			var formURL;
			//formURL = document.location.pathname;
			formURL = document.location.href;
			
			//Form fields
			var fields = this.options.fields;
			
			//Thank You Page
			var thankyouPage = this.options.thankyouPage;
			//Submit button text
			var submitText = this.options.submitText;
			
			var formContent = "";
			
			formContent += '<form novalidate="novalidate" name="formbuilder-form" id="formbuilder-form">';
			
			if (formURL) {
				formContent += '<input type="hidden" value="'+formURL+'" name="formURL" id="formURL" />';
			}
			
			// Form Fields
			if(fields) {
				$.each(this.options.fields,function(index){
					if(fields >= index) {
						/* Name Field -----------*/
						if(fields[index] == "name") {
							formContent += "<div class='input-row'><label for='name' "+addLabelOverClass+">Name<span class='required-label'>*</span></label><input type='text' name='name' id='name' class='input-text required' /><input type='text' name='last-name' id='last-name' class='input-text hidden' /></div>";
						}
						/* Email Field -----------*/
						if(fields[index] == "email") {
							formContent += "<div class='input-row'><label for='email' "+addLabelOverClass+">Email<span class='required-label'>*</span></label><input type='text' name='email' id='email' class='input-text required' /></div>";
						}
						/* Phone Field -----------*/
						if(fields[index] == "phone") {
							formContent += "<div class='input-row'><label for='phone' "+addLabelOverClass+">Phone</label><input type='text' name='phone' id='phone' class='input-text' /></div>";
						}
						/* Addres Field -----------*/
						if(fields[index] == "address") {
							formContent += "<div class='input-row'><label for='address' "+addLabelOverClass+">Address</label><input type='text' name='address' id='address' class='input-text' /></div>";
						}
						/* City Field -----------*/
						if(fields[index] == "city") {
							formContent += "<div class='input-row'><label for='city' "+addLabelOverClass+">City</label><input type='text' name='city' id='city' class='input-text' /></div>";
						}
						/* State Field -----------*/
						if(fields[index] == "state") {
							
							var stateFormField = "";
							stateFormField += '<select name="state" id="state">';
							stateFormField += '	<option value="">- State -</option>';
							stateFormField += '		<option value="AL">Alabama</option>'; 
							stateFormField += '		<option value="AK">Alaska</option>';
							stateFormField += '		<option value="AZ">Arizona</option>'; 
							stateFormField += '		<option value="AR">Arkansas</option>'; 
							stateFormField += '		<option value="CA">California</option>'; 
							stateFormField += '		<option value="CO">Colorado</option>'; 
							stateFormField += '		<option value="CT">Connecticut</option>'; 
							stateFormField += '		<option value="DC">D.C.</option>'; 
							stateFormField += '		<option value="DE">Delaware</option>'; 
							stateFormField += '		<option value="FL">Florida</option>'; 
							stateFormField += '		<option value="GA">Georgia</option>'; 
							stateFormField += '		<option value="HI">Hawaii</option>'; 
							stateFormField += '		<option value="ID">Idaho</option>'; 
							stateFormField += '		<option value="IL">Illinois</option>'; 
							stateFormField += '		<option value="IN">Indiana</option>'; 
							stateFormField += '		<option value="IA">Iowa</option>'; 
							stateFormField += '		<option value="KS">Kansas</option>'; 
							stateFormField += '		<option value="KY">Kentucky</option>'; 
							stateFormField += '		<option value="LA">Louisiana</option>'; 
							stateFormField += '		<option value="ME">Maine</option>'; 
							stateFormField += '		<option value="MD">Maryland</option>'; 
							stateFormField += '		<option value="MA">Massachusetts</option>'; 
							stateFormField += '		<option value="MI">Michigan</option>'; 
							stateFormField += '		<option value="MN">Minnesota</option>'; 
							stateFormField += '		<option value="MS">Mississippi</option>'; 
							stateFormField += '		<option value="MO">Missouri</option>'; 
							stateFormField += '		<option value="MT">Montana</option>'; 
							stateFormField += '		<option value="NE">Nebraska</option>'; 
							stateFormField += '		<option value="NV">Nevada</option>'; 
							stateFormField += '		<option value="NH">New Hampshire</option>'; 
							stateFormField += '		<option value="NJ">New Jersey</option>'; 
							stateFormField += '		<option value="NM">New Mexico</option>'; 
							stateFormField += '		<option value="NY">New York</option>'; 
							stateFormField += '		<option value="NC">North Carolina</option>'; 
							stateFormField += '		<option value="ND">North Dakota</option>'; 
							stateFormField += '		<option value="OH">Ohio</option>'; 
							stateFormField += '		<option value="OK">Oklahoma</option>'; 
							stateFormField += '		<option value="OR">Oregon</option>'; 
							stateFormField += '		<option value="PA">Pennsylvania</option>'; 
							stateFormField += '		<option value="RI">Rhode Island</option>'; 
							stateFormField += '		<option value="SC">South Carolina</option>'; 
							stateFormField += '		<option value="SD">South Dakota</option>'; 
							stateFormField += '		<option value="TN">Tennessee</option>'; 
							stateFormField += '		<option value="TX">Texas</option>'; 
							stateFormField += '		<option value="UT">Utah</option>'; 
							stateFormField += '		<option value="VT">Vermont</option>'; 
							stateFormField += '		<option value="VA">Virginia</option>'; 
							stateFormField += '		<option value="WA">Washington</option>'; 
							stateFormField += '		<option value="WV">West Virginia</option>'; 
							stateFormField += '		<option value="WI">Wisconsin</option>'; 
							stateFormField += '		<option value="WY">Wyoming</option>';
							stateFormField += '</select>';
							stateFormField += '<input type="hidden" value="" name="loc-state" id="loc-state">';
							formContent += "<div class='input-row'><label for='state' id='fb-state-label' "+addLabelOverClass+">State</label>"+stateFormField+"</div>";
							
						}
						
						/* Zipcode Field -----------*/
						if(fields[index] == "zip") {
							formContent += "<div class='input-row'><label for='zip' "+addLabelOverClass+">Zipcode</label><input type='text' name='zip' id='zip' class='input-text' /></div>";
						}
						/* Message Field -----------*/
						if(fields[index] == "message") {
							formContent += "<div class='input-row'><label for='message' style='margin-top:5px;' "+addLabelOverClass+">Message</label><textarea id='message' name='message'></textarea></div>";
						}
					}
				});
			}
			
			//Submit Button
			if (submitText) {
				formContent += '<div class="input-row"><div class="submit-row"><button class="submit btn btn-large" type="submit" style="margin-left: '+submitButtonMargin+';margin-top:10px;">'+submitText+'</button></div></div>';
				
			}
			formContent += '</form>';
			embedForm(formTitle, formContent, thankyouPage);
			
        },

        yourOtherFunction: function(el, options) {
            // some logic
        }
    };
	
	//-------------------------------------
	//Add Form to Page
	//-------------------------------------
	function embedForm(pluginFormTitle, pluginFormContent, thankyouPage) {
		
		var formTitle =	pluginFormTitle;
		var formContent = pluginFormContent;
		
		var inlineItems = '<div class="inline-form-wrapper">';
		inlineItems += '<div id="step-1-form">'+ formContent +'</div>';
		inlineItems += '</div>';
		
		$(".formbuilder-container").append(inlineItems);
		//$("#last-name").hide();
		
		/* ------------------------------------------ ---------------------- */
		/* Load Validation Scripts ---------------------- */
		/* ------------------------------------------ ---------------------- */
		$.when(
			$.getScript( "/wp-content/themes/duena/js/jquery.validate.min.js" ),
			$.getScript( "/wp-content/themes/duena/js/additional-methods.min.js" ),
			$.Deferred(function( deferred ){
				$( deferred.resolve );
			})
		).done(function(){
			
			//Labels Over Fields
			jQuery.fn.labelOver = function(overClass) {
				return this.each(function(){
					var label = jQuery(this);
					var f = label.attr('for');
					if (f) {
						var input = jQuery('#' + f);
						
						this.hide = function() {
						  label.css({ textIndent: -10000 })
						}
						
						this.show = function() {
						  if (input.val() == '') label.css({ textIndent: 0 })
						}
			
						// handlers
						input.focus(this.hide);
						input.blur(this.show);
					    label.addClass(overClass).click(function(){ input.focus() });
						
						if (input.val() != '') this.hide(); 
					}
				})
			}
			$('label.over').labelOver('label-over');
			
			processForm(thankyouPage);
		
		});
		
		$(window).load(function(){
			
			
			
		});
		
		$(document).ready(function(){
			
			
			
		});
		
	}
	
	//-------------------------------------
	//Get Query String
	//-------------------------------------
	function getQueryString(parameter) {
		var match = RegExp('[?&]'+parameter+'=([^&]*)').exec(window.location.search);
		return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
	}
	
	//-------------------------------------
	//Write Gated Cookie
	//-------------------------------------
	/*function writeGatedCookie(expire) {
		var cookieName = 'gated=yes';
		var expTime = new Date();
		expTime.setDate(expTime.getDate()+expire);
		var cookieExpires = '; expires='+expTime.toGMTString();
		document.cookie = cookieName+cookieExpires+"; path=/";
	}*/
	
	//-------------------------------------
	//Read Gated Cookie
	//-------------------------------------
	/*function readGatedCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	}*/
	
	//-------------------------------------
	//Read GA UTM Cookie
	//-------------------------------------
	/*function readUTMCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	}*/
	
	//-------------------------------------
	//Parse GA UTM Cookie
	//-------------------------------------
	/*function parseUTMCookie(cookieIndex) {
	
		var utmCookie = readUTMCookie("__utmz");
		
		if(utmCookie) {
			
			var queryArray = utmCookie.split("|");
			var queryArrayIndex;
			var arraySubString = new Array();
			var utmValues = new Array();
			
			$.each(queryArray,function(index){
				queryArrayIndex = index;
				arraySubString = queryArray[index].split("=");
				
				$.each(arraySubString, function(index){
					
					if(index == 1) {
						
						var stripOutNumbers = arraySubString[0].replace(/[0-9]/g, '');
						var stripOutPeriods = stripOutNumbers.replace(/\./g, '');
						
						if (stripOutPeriods == "utmcsr") {
							utmValues[0] = arraySubString[1];
						} else if (stripOutPeriods == "utmccn") {
							utmValues[1] = arraySubString[1];
						} else if (stripOutPeriods == "utmcmd") {
							utmValues[2] = arraySubString[1];
						} else if (stripOutPeriods == "utmctr") {
							utmValues[3] = arraySubString[1];
						}
						
					}
					
				});
				
			});
			return utmValues[cookieIndex];
			
		}
	}*/
	
	//-------------------------------------
	// Return UTM Values From Query String or Cookie
	//-------------------------------------
	/*function returnUTMValues() {
		
		var UTM_Source_QS = "",
			UTM_Campaign_QS = "",
			UTM_Medium_QS = "",
			UTM_Keyword_QS = "";
		var utm_values_array = new Array();
		
		if (getQueryString("utm_source") != null) {
			UTM_Source_QS = getQueryString("utm_source");
		} else if (getQueryString("UTM_Source") != null) {
			UTM_Source_QS = getQueryString("UTM_Source");
		} else {
			UTM_Source_QS = parseUTMCookie(0);
		}
		if (getQueryString("utm_campaign") != null) {
			UTM_Campaign_QS = getQueryString("utm_campaign");
		} else if (getQueryString("UTM_Campaign") != null) {
			UTM_Campaign_QS = getQueryString("UTM_Campaign");
		} else {
			UTM_Campaign_QS = parseUTMCookie(1);
		}
		if (getQueryString("utm_medium") != null) {
			UTM_Medium_QS = getQueryString("utm_medium");
		} else if (getQueryString("UTM_Medium") != null) {
			UTM_Medium_QS = getQueryString("UTM_Medium");
		} else {
			UTM_Medium_QS = parseUTMCookie(2);
		}
		if (getQueryString("utm_keyword") != null) {
			UTM_Keyword_QS = getQueryString("utm_keyword");
		} else if (getQueryString("UTM_Keyword") != null) {
			UTM_Keyword_QS = getQueryString("UTM_Keyword");
		} else {
			UTM_Keyword_QS = parseUTMCookie(3);
		}
		if (UTM_Keyword_QS == undefined) {
			UTM_Keyword_QS = "";
		}
		utm_values_array = [UTM_Source_QS, UTM_Campaign_QS, UTM_Medium_QS, UTM_Keyword_QS];
		return utm_values_array;
		
	}*/

	
	//-------------------------------------
	//Process Form
	//-------------------------------------
	function processForm(thankyouPage) {
		
		var urlParams = "";
		var currentPageURL = document.location.href;
		urlParams = "?landingURL="+currentPageURL;
		
		$('form#formbuilder-form').validate({
			rules: {
				email: {email:true}
			}
		});
		$('.submit').on('click',function(){
	
			var thisform = $(this).closest('form');
			
			if($("#last-name").val() == "") {
				if(thisform.valid()){
					
					$("button.submit").append('<i class="fa fa-spin fa-refresh"></i>');
					
					var d = thisform.serialize();
					var fullQueryString = "";
					if(urlParams != "") {
						fullQueryString = urlParams + "&" + d;
					}
					
					$.ajax({
						url: "/wp-content/themes/duena/libs/form-email-phpmailer.php",
						type: "POST",
						data: d,
						success: function(data) {
							window.location.href = thankyouPage;
						},
						error: function(jqXHR, textStatus, errorThrown) {
							
						}
					});
		
				}
			}
			return false;
		});
	}
	

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Plugin( this, options ));
            }
        });
    };

})( jQuery, window, document );