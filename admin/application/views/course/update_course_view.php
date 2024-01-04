<?php include(APPPATH.'views/includes/header1.php');?>
<style>
    .dropify-wrapper{
        height:222px;
        padding:0;
        border:1px solid #E3E3E3;
        border-radius:10px;
    }
    .lnr-upload{
        font-size: 50px;
    }
    .grid-2{
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap:20px;
    }
    .right-data{
        display: flex;
        flex-direction: column;
        gap: 20px;
        justify-content: space-between;
        border: 2px solid #888888;
        padding: 20px;
        box-sizing: border-box;
        border-radius: 15px;
        background: #f7f7f7;
        font-size:16px;
    }
    .menu-form{
        display: grid;
        grid-template-columns: 1fr 3fr;
        gap: 20px;
        border: 2px solid #888888;
        padding: 20px;
        box-sizing: border-box;
        border-radius: 15px;
        background: #f7f7f7;
        font-size:16px;
    }
    .menu-form .form-data{
        border-left: 1px dashed #888888;
        padding-left: 20px;
    }
    .menu-form-2{
        display: flex;
    flex-direction: column;
    /* gap: 20px; */
    justify-content: space-evenly;
    }
    .act{
        background:#FFF1F3;
    }
</style>
<div class="x-content">
    <?php include(APPPATH.'views/includes/left_nav1.php');?>

    <div class="page-content">
        
        <div class="main-content m-t-20">
            <div class="">
							
							<div class="top-ttl">
    							<div class="r_ttl">
    								<div class="ttl">Kayıt Detayları</div>
    							</div>
    							
    						</div>
							<form action="<?php echo UPDATE_COURSE_POST;?>" method="post" enctype="multipart/form-data">
								<div class="grid-2 m-b-20">
                                    <div class="menu-form">
                                        <div class="form-ttl">
                                            Ad - Soyad:
                                        </div>
                                        <div class="form-data">
                                            <?php echo $course['full_name'];?>
                                        </div>
                                        <div class="form-ttl">
                                            Telefon:
                                        </div>
                                        <div class="form-data">
                                            <?php echo $course['phone'];?>
                                        </div>
                                        <div class="form-ttl">
                                            E-mail:
                                        </div>
                                        <div class="form-data">
                                            <?php echo $course['email'];?>
                                        </div>
                                        <div class="form-ttl">
                                            Kurs Adı:
                                        </div>
                                        <div class="form-data">
                                            <?php echo $course['product_name_en'];?>
                                        </div>
                                        <div class="form-ttl">
                                            Tarih:
                                        </div>
                                        <div class="form-data">
                                            <?php echo $course['date'];?>
                                        </div>
                                        <div class="form-ttl">
                                            Arama Saati:
                                        </div>
                                        <div class="form-data">
                                            <?php echo $course['call_time'];?>
                                        </div>
                                    </div>
                                    <div class="right-data">  
                                        <div class="x-ttl">Görüşme Detayları</div>
                                        <textarea name="call_details" id="" style="width:100%; border-color:#dddddd;" rows="5"><?php echo $course['call_details'];?></textarea>
                                    </div>
                                </div>
                               
								
								<div class="m-b-20 form-bottom">
									<button type="submit" class="btn_custom"><span class="lnr lnr-upload"></span>Kaydet</button>
								</div>
								<input type="hidden" name="id" value="<?php echo $course['request_id'];?>"/>
							</form>
						</div>
        </div>
    </div>
</div>

<?php include(APPPATH.'views/includes/footer.php');?>

<script type="text/javascript">
	$(document).ready(function(){
		// Basic
		$('.dropify').dropify();
		$('.file-icon').addClass('lnr lnr-upload');
		$('.file-icon').removeClass('file-icon');
        $('.summernote').summernote({
            height: 400
        });
		
	});
</script>