<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>مدارس الياسمن الأهلية</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

    <div class="text-center" style="width: 100%;height: 250px;background-color: #929695;align-items: center">
            <img src="{{ asset('assets/img/logo2.png') }}" width="120" alt="" srcset="" style="margin: auto">
            <div style="color: #efdc57; font-size: 18px;font-weight: bold">مدارس الياسمن الاهلية</div>
    </div>
    <div class="container">
        <form action="{{ route('addInfoKindergarten') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"  placeholder="اسم الطفل الرباعي">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="file" name="image" class="form-control" value="{{ old('image') }}" id="imgKinder" placeholder="صورة الطفل">
                  </div>
                  <div class="mb-3 col-md-6">
                    <div class="form-outline datepicker">
                        <input type="text" name="birthday" value="{{ old('birthday') }}" id="datepicker" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="مواليد الطفل" class="form-control" width="276" />
                        @error('birthday')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                      </div>
                  </div>

                  <div class="mb-3 col-md-6 d-flex">
                    <span style="margin-left: 20px;font-weight: bold">المرحلة الدراسية حالياً: </span>
                    <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="NG" type="radio" name="currentStage" id="currentStage1">
                        <label class="form-check-label" for="currentStage1">
                          NG
                        </label>
                      </div>
                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio" value="PG" name="currentStage" id="currentStage2" checked>
                        <label class="form-check-label" for="currentStage2">
                          PG
                        </label>
                      </div>

                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio" value="KG1" name="currentStage" id="currentStage3" checked>
                        <label class="form-check-label" for="currentStage3">
                          KG1
                        </label>
                      </div>

                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio" value="KG2" name="currentStage" id="currentStage4" checked>
                        <label class="form-check-label" for="currentStage4">
                          KG2
                        </label>
                      </div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="number" name="brotherNumbers" value="{{ old('brotherNumbers') }}" class="form-control" placeholder="عدد الاخوة">
                    @error('brotherNumbers')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="mb-3 col-md-6 d-flex">
                    <span style="margin-left: 20px;font-weight: bold">تسلسل الطفل بين اخوته: </span>
                    <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio" value="الوحيد" name="sequence" id="sequence1">
                        <label class="form-check-label" for="sequence1">
                          الوحيد
                        </label>
                      </div>
                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio" value="الاول" name="sequence" id="sequence2" checked>
                        <label class="form-check-label" for="sequence2">
                          الاول
                        </label>
                      </div>

                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio" value="الوسط" name="sequence" id="sequence3" checked>
                        <label class="form-check-label" for="sequence3">
                          الوسط
                        </label>
                      </div>

                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio" value="الاخير" name="sequence" id="sequence4" checked>
                        <label class="form-check-label" for="sequence4">
                          الاخير
                        </label>
                      </div>
                  </div>

                  <div class="mb-3 col-md-6 d-flex">
                    <span style="margin-left: 20px;font-weight: bold">يقيم الطفل مع الأبوين</span>
                    <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio" value="نعم" name="liveWithParents" id="liveWithParents1">
                        <label class="form-check-label" for="liveWithParents1">
                          نعم
                        </label>
                      </div>
                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio" value="كلا" name="liveWithParents" id="liveWithParents2" checked>
                        <label class="form-check-label" for="liveWithParents2">
                          كلا
                        </label>
                      </div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="reason" value="{{ old('reason') }}" placeholder="اذكر مع من يقيم الطفل">
                    @error('reason')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="fathersStudy" value="{{ old('fathersStudy') }}"  placeholder="التحصيل الدراسي للأب">
                    @error('fathersStudy')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="fathersJob" value="{{ old('fathersJob') }}"  placeholder="مهنة الأب ومكان عمله">
                    @error('fathersJob')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="mothersStudy" value="{{ old('mothersStudy') }}"  placeholder="التحصيل الدراسي للأم">
                    @error('mothersStudy')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="mothersJob" value="{{ old('mothersJob') }}"  placeholder="مهنة الأم ومكان عملها">
                    @error('mothersJob')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="previouslyKindergartenName" value="{{ old('previouslyKindergartenName') }}"  placeholder="اسم الروضة سابقأ">
                    @error('previouslyKindergartenName')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>



                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="reasonSchoolName" value="{{ old('reasonSchoolName') }}"  placeholder="سبب النقل من المدرسة الحالية">
                    @error('reasonSchoolName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                  <label for="">نرتأي لمصلحة الطفل بقائه في المدرسة الحالية اذا لم يكن هناك سبب مقنع للنقل</label>

                  <div class="mb-3 col-md-3">
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}"  placeholder="العنوان">
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-3">
                    <input type="text" class="form-control" name="locality" value="{{ old('locality') }}"  placeholder="محلة">
                    @error('locality')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-3">
                    <input type="text" class="form-control" name="alley" value="{{ old('alley') }}"  placeholder="زقاق">
                    @error('alley')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-3">
                    <input type="text" class="form-control" name="house" value="{{ old('house') }}"  placeholder="دار">
                    @error('house')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="nearestPoint" value="{{ old('nearestPoint') }}"  placeholder="اقرب نقطة دالة">
                    @error('nearestPoint')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="fatherPhone" value="{{ old('fatherPhone') }}"  placeholder="رقم هاتف الأب">
                    @error('fatherPhone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="motherPhone" value="{{ old('motherPhone') }}"  placeholder="رقم هاتف الأم">
                        @error('motherPhone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>

                  <div class="mb-3 col-md-6 d-flex">
                    <span style="margin-left: 20px;font-weight: bold">هل لدى الطقل اي نوع من الحساسية</span>
                    <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio"  name="is_allergic" value="نعم" id="is_allergic1">
                        <label class="form-check-label" for="is_allergic1">
                          نعم
                        </label>
                      </div>
                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio" name="is_allergic" value="كلا" id="is_allergic2" checked>
                        <label class="form-check-label" for="is_allergic2">
                          كلا
                        </label>
                      </div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="allergic" id="allergic" style="display: none" value="{{ old('allergic') }}"  placeholder="اذكر نوع الحساسية">
                        @error('allergic')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="diseases"  value="{{ old('diseases') }}" placeholder="هل لدى الطفل اي من الامراض المزمنة">
                        @error('diseases')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
            </div>


            <button type="submit" class="btn btn-primary">التسجيل في الاستمارة</button>
          </form>
    </div>


      <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
        $(function(){
        $('#code').keyup(function(){
            this.value = this.value.toUpperCase();
        });
        $("#is_allergic1").click(function () {
            $("#allergic").css("display", "block");
            $("#allergic").css("display", "block");
         });

        $("#is_allergic2").click(function () {
            $("#allergic").css("display", "none");
         });
        $('#datepicker').pickadate({
            format:'yyyy-mm-dd',
            selectMonths:true,
            selectYears:true,
            clear:'clear',
            close:'OK',
            closeOnSelect:true
        });
        var startdate = $('#start_date').pickadate('picker');
        var enddate = $('#expire_date').pickadate('picker');

        $('#datepicker').change(function(){
            select_ci_date = "";
            select_ci_date = $('#datepicker').val();
            if(select_ci_date != null){
                var cidate = new Date(select_ci_date);
                min_codate = "";
                min_codate = new Date();
                min_codate.setDate(cidate.getDate()+1);
                enddate.set('min', min_codate);
            }
        });

        $('#expire_date').pickadate({
            format:'yyyy-mm-dd',
            min: new Date(),
            selectMonths:true,
            selectYears:true,
            clear:'clear',
            close:'OK',
            closeOnSelect:true
        });
    });
    </script>
  <script src="">
    var datepickerTranslated = document.querySelector('.datepicker-translated');
new mdb.Datepicker(datepickerTranslated, {
title: 'Datum auswählen',
monthsFull: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September',
'Oktober', 'November', 'Dezember'],
monthsShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov','Dez'],
weekdaysFull: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
weekdaysShort: ['Son', 'Mon', 'Die', 'Mit', 'Don', 'Fre', 'Sam'],
weekdaysNarrow: ['S', 'M', 'D', 'M', 'D', 'F', 'S'],
okBtnText: 'Ok',
clearBtnText: 'Klar',
cancelBtnText: 'Schließen',
});
  </script>
</body>
</html>
