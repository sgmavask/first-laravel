	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		@include('layout.head')
	</head>
		<body>	
		  <header id="header">
		    @include('layout.navbar')
		  </header><!-- #header -->

			
    

			

      @yield('content')


                <!-- start footer Area -->
       <footer class="footer-area section-gap">
           @include('layout.footer')
       </footer>
       <!-- End footer Area -->		

			 <!-- script Section start -->
			 		@include('layout.script')
			 <!-- script Section start -->

		</body>
	</html>