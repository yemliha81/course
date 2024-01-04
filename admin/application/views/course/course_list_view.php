<?php include(APPPATH.'views/includes/header1.php');?>
<style>
    .menu-div{
        display: grid;
        grid-template-columns:auto 250px;
        align-items: center;
        /* margin-top: 10px; */
        /* margin-bottom: 10px; */
        border-bottom: 1px solid #ddd;
        padding-bottom: 20px;
    }
    .menu-div .m-left{
        display:grid;
        align-items:center;
        grid-template-columns: 50px 1fr 1fr 1fr;
        gap:20px;
    }
    .menu-div .m-left .ttl{
        font-size:18px;
        color:#CD2D45;
    }
    
    .m_img{
        border-radius: 50%;
    overflow: hidden;
    }
</style>
<div class="x-content">
    <?php include(APPPATH.'views/includes/left_nav1.php');?>

    <div class="page-content">
        
        <div class="main-content m-t-20">
            <div>
					<div class="rests">
					    <div class="top-ttl">
    							<div class="r_ttl" >
    								<div class="ttl">Kurs Kayıt Listesi</div>
    							</div>
    							
    						</div>
                            <div class="menu-div">
								<div class="m-left">
								    <div class="ttl">ID</div>
								    <div class="ttl">Ad - Soyad</div>
								    <div class="ttl">Kurs</div>
								    <div class="ttl">Tarih</div>
								</div>
								
								<div class="conf">
								</div>
							</div>
						<?php foreach($requests as $key => $request){ ?>
							<div class="menu-div">
								<div class="m-left">
								    <div><?php echo $request['request_id'];?></div>
								    <div><?php echo $request['full_name'];?></div>
								    <div><?php echo $request['product_name_en'];?></div>
								    <div><?php echo $request['date'];?></div>
								</div>
								
								<div class="conf">
								
								    <a class="configure" href="<?php echo COURSE_DETAIL.$request['request_id'];?>" class="btn btn-xs btn-info">
									<span class="lnr lnr-cog"></span> Detaylar
									</a>
									
								</div>
							</div>
						<?php } ?>
						<div class="m-b-20 form-bottom">
							
						</div>
					</div>
					<div style='padding:20px;text-align:center;'>
					    <?php for($i=1; $i<=$total; $i++){ ?>
					    
					        <a class='page <?php if($page == $i){ echo 'act'; }?>' href='<?php echo COURSE_LIST;?>?page=<?php echo $i;?>'><?php echo $i;?></a>
					    
					    <?php } ?>
					</div>
				</div>
        </div>
    </div>
</div>

<?php include(APPPATH.'views/includes/footer.php');?>
<script>
    $('.hide_page').click(function(){
        
            var id = $(this).attr('id');
            var hidden = $(this).attr('is_hidden');
            
        $.ajax({
            context : $(this),
            type : 'POST',
            url : '<?php echo HIDE_SOCIAL_MEDIA;?>',
            data : {'id' : id,'hidden' : hidden},
            success : function(response){
                
                if(hidden == '0'){
                    console.log('close')
                    $(this).addClass('bg_hidden');
                    $(this).attr('is_hidden', '1');
                }else{
                    console.log('open')
                    $(this).removeClass('bg_hidden');
                    $(this).attr('is_hidden', '0');
                }
                
            }
        })
        
        
    })
</script>
