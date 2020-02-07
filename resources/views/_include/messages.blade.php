

<div class="flash-messages">

	@if (session('flash_message') && session('flash_message')->mode == App\Enums\ModeMessage::FIXE)
		@switch(session('flash_message')->type)
		    @case(App\Enums\TypeMessenger::SUCCESS)
		        <div class="card-panel green lighten-1">
			    	{{ session('flash_message')->msg }}
			    </div>  
		        @break

		    @case(App\Enums\TypeMessenger::WARNING)
		        <div class="card-panel orange lighten-1">
			    	{{ session('flash_message')->msg }}
			    </div>  
		        @break

		    @default
		        <div class="card-panel red lighten-1">
			    	{{ session('flash_message')->msg }}
			    </div>  
		@endswitch
	@endif	

</div>