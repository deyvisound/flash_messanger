
<div class="flash-messages">

	@if (session('f_sucess_msg'))
	    <div class="card-panel green lighten-1">
	    	{{ session('f_sucess_msg') }}
	    </div>        
	@endif

	@if (session('f_warning_msg'))
	    <div class="card-panel orange lighten-1">
	    	{{ session('f_warning_msg') }}
	    </div>        
	@endif

	@if (session('f_error_msg'))
	    <div class="card-panel red lighten-1">
	    	{{ session('f_error_msg') }}
	    </div>        
	@endif

</div>