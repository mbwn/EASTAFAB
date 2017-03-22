	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Biennale Gallery</h2>
				</div>
			</div>	
		</div>
		<div class="container-fluid">
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">         
						<li class="one-third animate-box" data-animate-effect="fadeIn">
						
						<img class="myImg" src="<?php echo base_url();?>images/gallery_kwaduo.jpg" alt="Kwaduo, Painting" style="width:318px; height: 400px;">
									<span>Painting</span>
									<h2>Kwaduo</h2>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn">
						<img class="myImg" src="<?php echo base_url();?>images/gallery_lmwambo.jpg" alt="L. Mwambo, Painting" style="width:318px; height: 400px;">
							
									<span>Painting</span>
									<h2>L. Mwambo</h2>
								
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn">
						<img class="myImg" src="<?php echo base_url();?>images/YusuphKatanov.jpg" alt="Yusuph Kutanov, Painting" style="width:318px; height: 400px;">	
								
									<span>Painting</span>
									<h2>Yusuph Kutanov</h2>
							
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn">
							<img class="myImg" src="<?php echo base_url();?>images/gallery_brainstorming.jpg" alt="Vivien, Brainstorming" style="width:318px; height: 400px;">
						
									<span>Brainstorming</span>
									<h2>Vivien</h2>
							
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn"> 
						<img class="myImg" src="<?php echo base_url();?>images/gallery_people_of_burundi.jpg" alt="Vivien, Brainstorming" style="width:318px; height: 400px;">
							
									<span>Batwa People of Burundi</span>
									<h2>Benson Ntamagendero</h2>
							
						</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn">
							<img class="myImg" src="<?php echo base_url();?>images/gallery_rail_dream.jpg" alt="Titus Pelembe, Rail Dreams" style="width:318px; height: 400px;">
							
									<span>Rail Dreams</span>
									<h2>Titus Pelembe</h2>
							
						</li>
						
						<li class="one-third animate-box" data-animate-effect="fadeIn">
						<img class="myImg" src="<?php echo base_url();?>images/gallery_uswahilini.jpg" alt="Atsu Numadzi, Uswahilini" style="width:318px; height: 400px;">
						
									<span>Uswahilini</span>
									<h2>Atsu Numadzi</h2>
							
						</li>
						
						<li class="one-third animate-box" data-animate-effect="fadeIn">
						<img class="myImg" src="<?php echo base_url();?>images/gallery_parents_care.jpg" alt="Ayoub Makotha, Parents Care" style="width:318px; height: 400px;">
							
									<span>Parents Care</span>
									<h2>Ayoub Makotha</h2>
								
						</li>
						
						<li class="one-third animate-box" data-animate-effect="fadeIn">
						<img class="myImg" src="<?php echo base_url();?>images/gallery_duo_musician.jpg" alt="Boniface Mwirue, Duo Musician" style="width:318px; height: 400px;">
							
									<span>Duo Musician</span>
									<h2>Boniface Mwirue</h2>
							
						</li>
						
						<li class="one-third animate-box" data-animate-effect="fadeIn">
						<img class="myImg" src="<?php echo base_url();?>images/gallery_duma.jpg" alt="Mac Sawaya, Duma" style="width:318px; height: 400px;">
							
									<span>Duma</span>
									<h2>Mac Sawaya</h2>
							
						</li>
					
					</ul>		
				</div>
			</div>
		</div>
		
<!--		Model-->

        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img id="img01" class="modal-content">
            <div id="caption"></div> 
        </div>
        
       
	</div>
	
<script>
    var modal = document.getElementById('myModal');
    
    var img = document.getElementsByClassName('myImg');
    
    var modalImg = document.getElementById("img01");
    
    var captionText = document.getElementById("caption");
    
//    img.onclick = function(){
//        modal.style.display = "block";
//        modalImg.src = this.src;
//        captionText.innerHTML = this.alt;
//    }
    
    
        
    $('.myImg').on('click', function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
  
  });
    
    var span = document.getElementsByClassName("close")[0];
    
    span.onclick = function(){
        modal.style.display = "none";
    }







</script>

















