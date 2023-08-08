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
    {{-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> --}}
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet"> --}}
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
        <form action="{{ route('addInfoSchool') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-3">
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" id="student_name" name="student_name" value="{{ old('student_name') }}"  placeholder="اسم التلميذ الرباعي">
                    @error('student_name')
                    <div class="text-danger">
                       {{ $message }}
                    </div>
                    @enderror

                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="file" name="student_image" id="formFile" value="{{ old('student_image') }}" class="form-control" placeholder="صورة التلميذ">
                  </div>
                  <div class="mb-3 col-md-6">
                    <div class="form-outline datepicker">
                        <input type="text" name="student_birthday" id="datepicker" onfocus="(this.type='date')" onblur="(this.type='text')" value="{{ old('student_birthday') }}" placeholder="مواليد التلميذ" class="form-control" width="276" />
                        @error('student_birthday')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                      </div>
                  </div>

                  <div class="mb-3 col-md-6 d-flex">
                    <span style="margin-left: 20px;font-weight: bold">المرحلة الدراسية حالياً: </span>
                    <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" type="radio" name="student_class" value="الاول" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          الاول
                        </label>
                      </div>
                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="الثاني" type="radio" name="student_class" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          الثاني
                        </label>
                      </div>

                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="الثالث" type="radio" name="student_class" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                          الثالث
                        </label>
                      </div>

                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="الرابع" type="radio" name="student_class" id="flexRadioDefault4">
                        <label class="form-check-label" for="flexRadioDefault4">
                          الرابع
                        </label>
                      </div>

                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="الخامس" type="radio" name="student_class" id="flexRadioDefault5">
                        <label class="form-check-label" for="flexRadioDefault5">
                          الخامس
                        </label>
                      </div>

                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="السادس" type="radio" name="student_class" id="flexRadioDefault6">
                        <label class="form-check-label" for="flexRadioDefault6">
                          السادس
                        </label>
                      </div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="number" name="student_brother_number" value="{{ old('student_brother_number') }}" class="form-control" placeholder="عدد الاخوة">
                    @error('student_brother_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="mb-3 col-md-6 d-flex">
                    <span style="margin-left: 20px;font-weight: bold">تسلسل التلميذ بين اخوته: </span>
                    <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="الوحيد" checked type="radio" name="student_brother_rank" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          الوحيد
                        </label>
                      </div>
                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="الاول" type="radio" name="student_brother_rank" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          الاول
                        </label>
                      </div>

                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="الوسط" type="radio" name="student_brother_rank" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                          الوسط
                        </label>
                      </div>

                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="الاخير" type="radio" name="student_brother_rank" id="flexRadioDefault4">
                        <label class="form-check-label" for="flexRadioDefault4">
                          الاخير
                        </label>
                      </div>
                  </div>

                  <div class="mb-3 col-md-6 d-flex">
                    <span style="margin-left: 20px;font-weight: bold">يقيم التلميذ مع الأبوين</span>
                    <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="نعم" type="radio" checked name="is_staying_with_his_fathers" id="iqama1">
                        <label class="form-check-label" for="iqama1">
                          نعم
                        </label>
                      </div>
                      <div class="form-check" style="margin-left: 15px">
                        <input class="form-check-input" value="كلا" type="radio" name="is_staying_with_his_fathers" id="iqama2">
                        <label class="form-check-label" for="iqama2">
                          كلا
                        </label>
                      </div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" style="display: none" id="student_staying_with" name="student_staying_with" value="{{ old('student_staying_with') }}" placeholder="اذكر مع من يقيم التلميذ">
                    @error('student_staying_with')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="father_degree" value="{{ old('father_degree') }}" placeholder="التحصيل الدراسي للأب">
                    @error('father_degree')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="father_jop" value="{{ old('father_jop') }}"  placeholder="مهنة الأب ومكان عمله">
                    @error('father_jop')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="mother_degree" value="{{ old('mother_degree') }}"  placeholder="التحصيل الدراسي للأم">
                    @error('mother_degree')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="mother_jop" value="{{ old('mother_jop') }}"  placeholder="مهنة الأم ومكان عملها">
                    @error('mother_jop')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="past_Kindergarten" value="{{ old('past_Kindergarten') }}"  placeholder="اسم الروضة سابقأ">
                    @error('past_Kindergarten')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="school_name" value="{{ old('school_name') }}" placeholder="اسم المدرسة في الوقت الحالي">
                    @error('school_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="past_school_reason" value="{{ old('past_school_reason') }}"  placeholder="سبب النقل من المدرسة الحالية">
                    @error('past_school_reason')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                  <label for="">نرتأي لمصلحة التلميذ بقائه في المدرسة الحالية اذا لم يكن هناك سبب مقنع للنقل</label>

                  <div class="mb-3 col-md-3">
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}"  placeholder="العنوان">
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-3">
                    <input type="text" class="form-control" name="address_m" value="{{ old('address_m') }}" placeholder="محلة">
                    @error('address_m')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-3">
                    <input type="text" class="form-control" name="address_z" value="{{ old('address_z') }}"  placeholder="زقاق">
                    @error('address_z')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-3">
                    <input type="text" class="form-control" name="address_d" value="{{ old('address_d') }}" placeholder="دار">
                    @error('address_d')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>

                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="nearest_landmark" value="{{ old('nearest_landmark') }}"  placeholder="اقرب نقطة دالة">
                    @error('nearest_landmark')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="father_phone" value="{{ old('father_phone') }}"  placeholder="رقم هاتف الأب">
                    @error('father_phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="mother_phone" value="{{ old('mother_phone') }}"  placeholder="رقم هاتف الأم">
                    @error('mother_phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
            </div>


            <button type="submit" class="btn btn-primary">التسجيل في الاستمارة</button>
          </form>
    </div>


      <!-- Vendor JS Files -->
  {{-- <script src="assets/vendor/aos/aos.js"></script> --}}
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="assets/vendor/glightbox/js/glightbox.min.js"></script> --}}
  {{-- <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> --}}
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  {{-- <script src="assets/vendor/waypoints/noframework.waypoints.js"></script> --}}
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
        $(function(){
        $('#code').keyup(function(){
            this.value = this.value.toUpperCase();
        });

        $("#iqama2").click(function () {
            $("#student_staying_with").css("display", "block");
         });

        $("#iqama1").click(function () {
            $("#student_staying_with").css("display", "none");
         });
        // $('#datepicker').pickadate({
        //     format:'yyyy-mm-dd',
        //     selectMonths:true,
        //     selectYears:true,
        //     clear:'clear',
        //     close:'OK',
        //     closeOnSelect:true
        // });
        // var startdate = $('#start_date').pickadate('picker');
        // var enddate = $('#expire_date').pickadate('picker');

        // $('#datepicker').change(function(){
        //     select_ci_date = "";
        //     select_ci_date = $('#datepicker').val();
        //     if(select_ci_date != null){
        //         var cidate = new Date(select_ci_date);
        //         min_codate = "";
        //         min_codate = new Date();
        //         min_codate.setDate(cidate.getDate()+1);
        //         enddate.set('min', min_codate);
        //     }
        // });


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
