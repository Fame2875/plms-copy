		
	
	<div class="row" style="padding:0px;margin:0px">
		<div class="container-fluid">
			<!-- footer start -->
			<footer class="container-fluid" style="background-color:LightSteelBlue;border:2px blue;  margin-right:2px;margin-left:300px; ">
				<div style="display:inline";>
				
				<p style="text-align:center;">
					<marquee behavior=alternate direction=left scrollAmount=3 width="4%"> <font face=Webdings> 4</font> </marquee> <marquee scrollAmount=1 direction=left width="2%"> | | |</marquee>Department of Computer Engineering, KMITL 2017<marquee scrollAmount=1 direction=right width="2%"> | | |</marquee><marquee behavior=alternate direction=right scrollAmount=3 width="4%"> <font face=Webdings> 4</font> </marquee>
				</p>
				<p style="color:darkblue;">
					Page rendered in <strong>{elapsed_time}</strong> seconds. 
					<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
				</p>
				
				</div>
			  <!-- <pre>
				<?php echo print_r($_SESSION); ?>
			  </pre> -->
			</footer>
			<!-- footer end -->
		</div>
	</div>
	
</body>
	<!-- <article style="margin-left:350px;text-align:left;">
		<?php echo "<h3>". __METHOD__ ." : _SESSSION :</h3><pre>"; print_r($_SESSION); echo "</pre>"; ?>
	</article> -->
</html>