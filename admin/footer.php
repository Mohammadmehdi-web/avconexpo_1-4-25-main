<!--**********************************
    Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://auctech.in/" target="_blank">Auctech MarCom</a> 2024</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->

</div>
<!--**********************************
Main wrapper end
***********************************-->

<!--**********************************
Scripts
***********************************-->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	

<script>
function carouselReview(){
    jQuery('.testimonial-one').owlCarousel({
        loop:true,
        autoplay:true,
        margin:20,
        nav:false,
        rtl:true,
        dots: false,
        navText: ['', ''],
        responsive:{
            0:{
                items:3
            },
            450:{
                items:4
            },
            600:{
                items:5
            },	
            991:{
                items:5
            },			
            
            1200:{
                items:7
            },
            1601:{
                items:5
            }
        }
    })
}
jQuery(window).on('load',function(){
    setTimeout(function(){
        carouselReview();
    }, 1000); 
});			
</script>

<script>
     $(function() {
            $('#status').bootstrapToggle({
                  on: 'Active',
                  off: 'Inactive',
                });
                    });
   
 </script>
 
</body>

</html>