<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Simple Laravel Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Marco Rivadeneyra">

    <!-- Le styles -->
    {{ Asset::container('bootstrapper')->styles() }}
  </head>

  <body>

    <!-- nav-bar -->
	<? echo Navbar::create('Simple Blog', '', 
		array(
			array(
				'attribute' => array(),
				'items' => array(
					array('label' => 'Home', 'url' => '/'),
					array('label' => 'New blog', 'url' => '/create')
				)
			)
		),
		Navbar::FIX_TOP,
		true
		);
	?>
	<!-- /nav-bar -->
	
	<!-- container -->
    <div class="container">
		@yield('main-content')
    </div> 
	<!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	{{ Asset::container('bootstrapper')->scripts() }}
  </body>
</html>
