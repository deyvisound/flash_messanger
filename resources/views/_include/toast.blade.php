
<div class="flash-messages">

	@if (session('t_f_sucess_msg'))
		<script>
		  	var toastHTML = "<div class='card-panel green lighten-1'>{{ session('t_f_sucess_msg') }}</div>";
			M.toast({html: toastHTML});		        
		</script>
	@endif

	@if (session('t_f_warning_msg'))
		<script>
		  	var toastHTML = "<div class='card-panel orange lighten-1'>{{ session('t_f_warning_msg') }}</div>";
			M.toast({html: toastHTML});		        
		</script>
	@endif

	@if (session('t_f_error_msg'))
		<script>
		  	var toastHTML = "<div class='card-panel red lighten-1'>{{ session('t_f_error_msg') }}</div>";
			M.toast({html: toastHTML});		        
		</script>
	@endif

</div>