
@if (session('flash_message') && session('flash_message')->mode == App\Enums\ModeMessage::TOAST)
	@switch(session('flash_message')->type)
	    @case(App\Enums\TypeMessenger::SUCCESS)
	    	<script>
		       	var htmlToast = "<div class='card-panel green lighten-1'>{{ session('flash_message')->msg }}</div>";					
				M.toast({html: htmlToast, inDuration: 1000});	
			</script>
	        @break

	    @case(App\Enums\TypeMessenger::WARNING)
	        <script>
		       	var htmlToast = "<div class='card-panel orange lighten-1'>{{ session('flash_message')->msg }}</div>";					
				M.toast({html: htmlToast, inDuration: 1000});	
			</script>
	        @break

	    @default
	        <script>
		       	var htmlToast = "<div class='card-panel red lighten-1'>{{ session('flash_message')->msg }}</div>";					
				M.toast({html: htmlToast, inDuration: 1000});	
			</script>
	@endswitch
@endif	
