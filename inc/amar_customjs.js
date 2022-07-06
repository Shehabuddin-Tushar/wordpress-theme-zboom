(function($){
	
	
	$(document).ready(function(){
		
		
		wp.customize('copyright',function(value){
			
			value.bind(function(to){
				
				$('p.copy').text(to);
				
				
				});
			
			});
		
		
		});
	
	
	
	
	
	
	
	})(jQuery)