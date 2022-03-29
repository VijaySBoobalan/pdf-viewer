(function($){
   $.fn.extend({ 
      num2words: function(options) {
		
			var defaults = {
			   units: [ "", "One", "Two", "Three", "Four", "Five", "Six","Seven", "Eight", "Nine", "Ten" ],
			   teens: [ "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen","Sixteen", "Seventeen", "Eighteen", "Nineteen", "Twenty" ],
			   tens: [ "", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty","Seventy", "Eighty", "Ninety" ],
			   othersIntl: [ "Thousand", "Million", "Billion", "Trillion" ]
			};
				
			var options = $.extend(defaults, options);

			function NumberToWordsPurity() {
				var o = options;
				
				var units = o.units;
				var teens = o.teens;
				var tens = o.tens;
				var othersIntl = o.othersIntl;
		  
				var getBelowHundred = function(n) {
					if (n >= 100) {
						return "greater than or equal to 100";
					};
					if (n <= 10) {
						return units[n];
					};
					if (n <= 20) {
						return teens[n - 10 - 1];
					};
					var unit = Math.floor(n % 10);
					n /= 10;
					var ten = Math.floor(n % 10);
					var tenWord = (ten > 0 ? (tens[ten] + " ") : '');
					var unitWord = (unit > 0 ? units[unit] : '');
					return tenWord + unitWord;
				};
		  
				var getBelowThousand = function(n) {
					if (n >= 1000) {
						return "greater than or equal to 1000";
					};
					var word = getBelowHundred(Math.floor(n % 100));
					
					n = Math.floor(n / 100);
					var hun = Math.floor(n % 10);
					word = (hun > 0 ? (units[hun] + " Hundred ") : '') + word;
					
					return word;
				};
		  
				return {
					numberToWords : function(n) {
						if (isNaN(n)) {
							return "Not a number";
						};
						
						var word = '';
						var val;
						var word2 = '';
						var val2;
						var b = n.split(".");
						n = b[0];
						d = b[1];
						d = String (d);
						d = d.substr(0,2);
						
						val = Math.floor(n % 1000);
						n = Math.floor(n / 1000);
						
						val2 = Math.floor(d % 1000);
						d = Math.floor(d / 1000);
						
						word = getBelowThousand(val);
						word2 = getBelowThousand(val2);
						
						othersArr = othersIntl;
						divisor = 1000;
						func = getBelowThousand;
			
						var i = 0;
						while (n > 0) {
							if (i == othersArr.length - 1) {
								word = this.numberToWords(n) + " " + othersArr[i] + " " + word;
								break;
							};
							val = Math.floor(n % divisor);
							n = Math.floor(n / divisor);
							if (val != 0) {
								word = func(val) + " " + othersArr[i] + " " + word;
							};
							i++;
						};
						
						var i = 0;
						while (d > 0) {
							if (i == othersArr.length - 1) {
								word2 = this.numberToWords(d) + " " + othersArr[i] + " " + word2;
								break;
							};
							val2 = Math.floor(d % divisor);
							d = Math.floor(d / divisor);
							if (val2 != 0) {
								word2 = func(val2) + " " + othersArr[i] + " " + word2;
							};
							i++;
						};
						if(word == ""){
							word = "0";
						}
						if (word!='') word = word.toUpperCase();
						if (word2=='') {
							word2 = word2.toUpperCase() + ' Grms';
						}else if (word2!='') {
							word2 = ' POINT ' + word2.toUpperCase() + ' Grms';
						}
						return word+word2;

					}
				}
			}
			
			function NumberToWordsParty() {
				var o = options;
				
				var units = o.units;
				var teens = o.teens;
				var tens = o.tens;
				var othersIntl = o.othersIntl;
		  
				var getBelowHundred = function(n) {
					if (n >= 100) {
						return "greater than or equal to 100";
					};
					if (n <= 10) {
						return units[n];
					};
					if (n <= 20) {
						return teens[n - 10 - 1];
					};
					var unit = Math.floor(n % 10);
					n /= 10;
					var ten = Math.floor(n % 10);
					var tenWord = (ten > 0 ? (tens[ten] + " ") : '');
					var unitWord = (unit > 0 ? units[unit] : '');
					return tenWord + unitWord;
				};
		  
				var getBelowThousand = function(n) {
					if (n >= 1000) {
						return "greater than or equal to 1000";
					};
					var word = getBelowHundred(Math.floor(n % 100));
					
					n = Math.floor(n / 100);
					var hun = Math.floor(n % 10);
					word = (hun > 0 ? (units[hun] + " Hundred ") : '') + word;
					
					return word;
				};
		  
				return {
					numberToWords : function(n) {
						if (isNaN(n)) {
							return "Not a number";
						};
						
						var word = '';
						var val;
						var word2 = '';
						var val2;
						var b = n.split(".");
						n = b[0];
						d = b[1];
						d = String (d);
						d = d.substr(0,2);
						
						val = Math.floor(n % 1000);
						n = Math.floor(n / 1000);
						
						val2 = Math.floor(d % 1000);
						d = Math.floor(d / 1000);
						
						word = getBelowThousand(val);
						word2 = getBelowThousand(val2);
						
						othersArr = othersIntl;
						divisor = 1000;
						func = getBelowThousand;
			
						var i = 0;
						while (n > 0) {
							if (i == othersArr.length - 1) {
								word = this.numberToWords(n) + " " + othersArr[i] + " " + word;
								break;
							};
							val = Math.floor(n % divisor);
							n = Math.floor(n / divisor);
							if (val != 0) {
								word = func(val) + " " + othersArr[i] + " " + word;
							};
							i++;
						};
						
						var i = 0;
						while (d > 0) {
							if (i == othersArr.length - 1) {
								word2 = this.numberToWords(d) + " " + othersArr[i] + " " + word2;
								break;
							};
							val2 = Math.floor(d % divisor);
							d = Math.floor(d / divisor);
							if (val2 != 0) {
								word2 = func(val2) + " " + othersArr[i] + " " + word2;
							};
							i++;
						};
						if(word == ""){
							word = "0";
						}
						if (word!='') word = word.toUpperCase();
						if (word2=='') {
							word2 = word2.toUpperCase();
						}else if (word2!='') {
							word2 = ' POINT ' + word2.toUpperCase();
						}
						return word+word2;

					}
				}
			}

			return this.each(function(){
				var totalpurityweight = $("input[name=totalpurityweight]");
				var totalpartyamount = $("input[name=totalpartyamount]");
				var totalpureweightwords = $('.totalpureweightwords');
				var totalpartyamountwords = $('.totalpartyamountwords');
				$("body").on('click keyup keypress change',function(){
					var totalpurityweightvalue = totalpurityweight.val();
					var totalpartyamountvalue = totalpartyamount.val();
					if(totalpurityweightvalue<0){
						var totalpurityweightval = (totalpurityweightvalue*(-1)).toString();
					}else{
						var totalpurityweightval = (totalpurityweightvalue).toString();
					}
					if(totalpartyamountvalue<0){
						var totalpartyamountval = (totalpartyamountvalue*(-1)).toString();
					}else{
						var totalpartyamountval = (totalpartyamountvalue).toString();
					}
					if (isNaN(totalpurityweightval)){
						totalpureweightwords.html("This is not a number - " + totalpurityweightval);
						totalpureweightwords.show("slow");
					};
					if (isNaN(totalpartyamountval)){
						totalpartyamountwords.html("This is not a number - " + totalpartyamountval);
						totalpartyamountwords.show("slow");
					};
					var num2wordsPurity = new NumberToWordsPurity();
					var num2wordsParty = new NumberToWordsParty();
					var totalpurityweights = num2wordsPurity.numberToWords(totalpurityweightval);
					var totalpartyamounts = num2wordsParty.numberToWords(totalpartyamountval);
					
					totalpureweightwords.html(totalpurityweights);
					totalpartyamountwords.html(totalpartyamounts);
				});
			});
      }
   });
})(jQuery);