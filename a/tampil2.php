<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
<div class="row">
			<?php
			$id = $_GET['id']; 
			$fo=mysqli_query($db,"SELECT file_nama from surat_masuk where kd_masuk='$id'");
			while($f=mysqli_fetch_array($fo)){
				?>				

				<div class="col-md-12">
					<a class="thumbnail">
						<img class="img-responsive" src="a/file/<?php echo $f['file_nama']; ?>">
					</a>
				</div>
				<?php 
			}
			?>		
		</div>
		</div>