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

        <title>เพิ่ม - ผู้ใช้งาน </title>
    </head>

    <body data-ma-theme="red" style="background: #ff6b6805;">
        <main class="main">
           <?php require_once('../includes/menu.php'); ?>

            <section class="content">
                <div class="card">
                    <form method="post" action="sql/insert.php" class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="float-right mt-10">
                                <h6 class="card-subtitle"><a href="index.php">ผู้ใช้งาน </a> <i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i> เพิ่ม - ผู้ใช้งาน </h6>
                            </div>

                            <h4 class="card-title">เพิ่ม - ผู้ใช้งาน </h4>

                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-lg-4 text-center">
                                    <div class="form-group">
                                        <input type="hidden" name="image">
                                        <img id="imgUpload" style="width: 200px;">
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
                                <div class="col-lg-8">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control" name="user_full_name" maxlength="255" required>
                                        <label>ชื่อ - นามสกุล </label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group form-group--float">
                                        <input type="email" class="form-control" name="email" maxlength="100" required>
                                        <label>อีเมล </label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div> 
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control" name="tel" maxlength="30" required>
                                        <label>เบอร์โทรศัพท์ </label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group" style="top: 17px;">
                                        <label>บทบาท</label>
                                        <select class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="role">
                                            <option value="ผู้ใช้งาน">ผู้ใช้งาน</option>
                                            <option value="ผู้ดูแล">ผู้ดูแล</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group" style="top: 17px;">
                                        <label>สถานะ</label>
                                        <select class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="status">
                                            <option value="ใช้งาน">ใช้งาน</option>
                                            <option value="ไม่ใช้งาน">ไม่ใช้งาน</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 
                        
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control" name="username" maxlength="30">
                                        <label>ชื่อในการเข้าสู่ระบบ </label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div> 
                                <div class="col-lg-4">
                                    <div class="form-group form-group--float">
                                        <input type="password" class="form-control" name="password" maxlength="30">
                                        <label>รหัสผ่าน </label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group form-group--float">
                                        <input type="password" class="form-control" name="confirm_password" maxlength="30" required>
                                        <label>ยืนยันรหัสผ่าน </label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div> 
                        
                            <div class="col-lg-12 text-center">
                                <button type="submit" name="submit" class="btn btn-success btn-icon"><i class="fas fa-save"></i> บันทึก</button>
                                <a href="index.php" class="btn btn-danger btn-icon"><i class="fas fa-times"></i> ยกเลิก</a>	
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