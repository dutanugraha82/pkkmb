<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <style type="text/css">
	
</style> -->
<style type="text/css">
  @page {
  size: A4 landscape;
  margin: 0;
}
@media print {
  html, body {
    width: 210mm;
    height: 297mm;
  }
}
body {
    background-image: {{ asset('assets/pkkmb_'.$data->tahun.'.png') }}
    background-size:   cover;                      /* <------ */
    background-repeat: no-repeat;
    background-position: center center;            /* optionally, center the image */
}
</style>
</head>
<body>

	<div class="l_content"">
		<div class="content">
            <!-- <div style="float: left;">Nama : Yazied DA</div> -->
            <div id="logo" style="margin-left: 550px; margin-top: 140px; width: 720px; text-align: center;">
              <div style="color: black; font-size: 24; font-family: 'Arial Black', 'Arial Bold', Gadget, sans-serif;'; text-transform: uppercase;">
                {{-- <img src="http://pkkmb.ubpkarawang.ac.id/public/api/qr-image-cert/{{$model->nomor}}" width="80"> --}}
                <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/220px-QR_code_for_mobile_English_Wikipedia.svg.png" width="80"> -->
              </div>
               
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <div id="logo" style="margin-left: 200px; width: 720px; text-align: center;">
              <div style="color: black; font-size: 24; font-family: 'Arial Black', 'Arial Bold', Gadget, sans-serif;'; text-transform: uppercase;">
                {{$data->nama_lengkap}}
              </div>
               
            </div>


        </div>
    </div>
</body>
</html>