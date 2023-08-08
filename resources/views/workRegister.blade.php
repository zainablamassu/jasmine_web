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
        <form action="{{ route('addInfoWork') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row my-4">
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="الاسم الثلاثي">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <input type="file" name="image" id="image" class="form-control" placeholder="الصورة">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @if (old('image'))
                        <p>Current file: {{ old('image') }}</p>
                    @endif
                  </div>
                  <div class="mb-3 col-md-4">
                    <div class="form-outline datepicker">
                        <input type="text" name="birthday" value="{{ old('birthday') }}" id="datepicker" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="المواليد" class="form-control" width="276" />
                        @error('birthday')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                  </div>


                  <div class="mb-3 col-md-4">
                    <input type="text" class="form-control" name="degree" value="{{ old('degree') }}"  placeholder="التحصيل الدراسي">
                    @error('degree')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-4">
                    <input type="text" class="form-control" name="college" value="{{ old('college') }}" placeholder="الجامعة">
                    @error('college')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  @php
                      $graduationYears = array("2023", "2022", "2021","2020","2019","2018","2017","2016","2015","2014","2013","2012","2011","2010","2009","2008","2007","2006","2005","2004","2003","2002","2001","2000","1999","1998","1997","1996","1995","1994","1993","1992","1991","1990","1989","1988","1987","1986","1985","1984","1983","1982","1981","1980","1979","1978","1977","1976","1975","1974","1973","1972","1971","1970");
                  @endphp
                  <div class="mb-3 col-md-4">
                    <select class="form-select" name="year_graduate"  id="year_graduate">
                        <option value="" selected disabled>سنة التخرج</option>
                        @foreach ($graduationYears as $key=> $year)
                        <option id="{{ $key }}" value="{{ $year }}" {{ old('year_graduate') == $year ? 'selected' : '' }}>{{ $year }}</option>
                        @endforeach
                      </select>
                  </div>


                  <div class="mb-3 col-md-4">
                    <input type="text" class="form-control" value="{{ old('phone1') }}" name="phone1"  placeholder="رقم الهاتف1">
                    @error('phone1')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                  <div class="mb-3 col-md-4">
                    <input type="text" class="form-control" name="phone2" value="{{ old('phone2') }}"  placeholder="رقم الهاتف2">
                    @error('phone2')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="mb-3 col-md-3">
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}"  placeholder="العنوان">
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-3">
                    <input type="text" class="form-control" name="address_m" value="{{ old('address_m') }}"  placeholder="محلة">
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
                    <input type="text" class="form-control" name="address_d" value="{{ old('address_d') }}"  placeholder="دار">
                    @error('address_d')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="mb-3 col-md-4">
                    <input type="text" class="form-control" name="nearest_landmark" value="{{ old('nearest_landmark') }}" placeholder="اقرب نقطة دالة">
                    @error('nearest_landmark')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                 @php
                      $social_status = array("اعزب", "متزوج", "مطلق","ارمل");
                  @endphp
                  <div class="mb-3 col-md-4">
                    <select class="form-select" name="social_status" id="social_status">
                        @foreach ($social_status as $status)
                        <option id="{{ $key }}" value="{{ $status }}" {{ old('social_status') == $status ? 'selected' : '' }}>{{ $status }}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="mb-3 col-md-4">
                    <input type="text" class="form-control" name="last_work" value="{{ old('last_work') }}" placeholder="العمل سابقا">
                    @error('last_work')
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
    <script>
        $(function(){
        $('#code').keyup(function(){
            this.value = this.value.toUpperCase();
        });
        $("#iqama2").click(function () {
          console.log("iqamaaaaaaaaaaaaaaaa")
         });
         $("#iqama").click(function () {
          console.log("iqam111111111111 ")
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
