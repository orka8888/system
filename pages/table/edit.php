<!DOCTYPE html>
<html lang="th">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="../../assets/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="../../assets/vendors/animate.css/animate.min.css">
        <link rel="stylesheet" href="../../assets/vendors/jquery-scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="../../assets/vendors/select2/css/select2.min.css">
        <link rel="stylesheet" href="../../assets/vendors/dropzone/dropzone.css">
        <link rel="stylesheet" href="../../assets/vendors/nouislider/nouislider.min.css">
        <link rel="stylesheet" href="../../assets/vendors/trumbowyg/ui/trumbowyg.min.css">
        <link rel="stylesheet" href="../../assets/vendors/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" href="../../assets/vendors/rateyo/jquery.rateyo.min.css">
        <link rel="stylesheet" href="../../assets/vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="../../assets/css/app.min.css">

        <!-- Demo only -->
        <link rel="stylesheet" href="../../assets/demo/css/demo.css">

        <title>แก้ไข - โต๊ะ </title>
    </head>

    <body data-ma-theme="red" style="background: #ff6b6805;">
        <main class="main">
           <?php require_once('../includes/menu.php'); ?>

            <section class="content">
                <div class="card">
                    <form method="post" action="sql/update.php" class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="float-right mt-10">
                                <h6 class="card-subtitle"><a href="index.php">โต๊ะ </a> <i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i> แก้ไข - โต๊ะ </h6>
                            </div>

                            <h4 class="card-title">แก้ไข - โต๊ะ </h4>

                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-lg-4 text-center">
                                    <div class="form-group">
                                        <input type="hidden" name="image" value="<?php echo $row_table['image']; ?>">
                                        <img id="imgUpload" style="width: 200px;" src="../../assets/img/table/<?php echo  $row_table['image']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group" style="margin-top: 60px;">
                                        <input type="file" class="custom-file-input" name="file" id="customFile">
                                        <label class="custom-file-label" for="customFile"> เลือก</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control" name="table" maxlength="50" value="<?php echo $row_table['table']; ?>" required>
                                        <label>โต๊ะ </label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div> 
                            
                            <input type="hidden" name="table_id" value="<?php echo $_GET['table_id']; ?>">

                            <div class="col-lg-12 text-center">
                                <button type="submit" name="submit" class="btn btn-success btn-icon"><i class="fas fa-save"></i>  บันทึก</button>
                                <a href="index.php" class="btn btn-danger btn-icon"><i class="fa fa-times"></i> ยกเลิก</a>	
                            </div>	
                        </div>
                    </form>
                </div>
                <?php require_once('../includes/footer.php'); ?>
            </section>
        </main>

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="../../assets/vendors/jquery/jquery.min.js"></script>
        <script src="../../assets/vendors/popper.js/popper.min.js"></script>
        <script src="../../assets/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/vendors/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <script src="../../assets/vendors/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <script src="../../assets/vendors/jquery-mask-plugin/jquery.mask.min.js"></script>
        <script src="../../assets/vendors/select2/js/select2.full.min.js"></script>
        <script src="../../assets/vendors/dropzone/dropzone.min.js"></script>
        <script src="../../assets/vendors/moment/moment.min.js"></script>
        <script src="../../assets/vendors/nouislider/nouislider.min.js"></script>
        <script src="../../assets/vendors/trumbowyg/trumbowyg.min.js"></script>
        <script src="../../assets/vendors/flatpickr/flatpickr.min.js"></script>
        <script src="../../assets/vendors/rateyo/jquery.rateyo.min.js"></script>
        <script src="../../assets/vendors/jquery-text-counter/textcounter.min.js"></script>
        <script src="../../assets/vendors/autosize/autosize.min.js"></script>
        <script src="../../assets/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

        <!-- App functions and actions -->
        <script src="../../assets/js/app.min.js"></script>

        <script>
			$('.custom-file-input').on('change', function(){
			var size = this.files[0].size / 1024 / 1024
			if(size.toFixed(2) > 2){
				alert('ขนาดไฟล์ต้องไม่เกิน 2MB')
			} else {
				var fileName = $(this).val().split('\\').pop()
				$(this).siblings('.custom-file-label').html(fileName)
				if (this.files[0]) {
					var reader = new FileReader()
					$('.figure').addClass('d-block')
					reader.onload = function (e) {
						$('#imgUpload').attr('src', e.target.result);
					}
					reader.readAsDataURL(this.files[0])
				}
			}
			})
		</script>
        
    </body>

</html>