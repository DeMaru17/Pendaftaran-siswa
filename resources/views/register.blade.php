<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Form Pendaftaran Peserta Pelatihan</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="icon" type="image/png/ico" href="{{asset('img/favicon.ico')}}" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<!-- CSS Files -->
	<link href="{{asset('form-wizard/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('form-wizard/assets/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

    <style>
        .file-input {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
        }

        .file-input input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
        }

        .file-input:hover {
        background-color: #3e8e41;
        }
       

    </style>

</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('{{ asset('img/bgimg.jpg') }}')">

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="blue" id="wizard">
			                <form action="{{route('pendaftaran.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
			                <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Form Pendaftaran Pelatihan PPKD Jakarta Pusat
		                        	</h3>
									<h5>Mohon isi data dengan lengkap dan benar</h5>

		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#pelatihan" data-toggle="tab">Pelatihan</a></li>
			                            <li><a href="#data-diri" data-toggle="tab">Data Diri</a></li>
			                            <li><a href="#pendidikan" data-toggle="tab">Pendidikan</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
                                    <div class="tab-pane" id="pelatihan">
		                                <h4 class="info-text">Pilih Jurusan dan gelombang pelatihan</h4>
		                                <div class="row">
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                      <div class="form-group label-floating">
		                                        	<label class="control-label">Gelombang</label>
		                                        	<select name="id_gelombang" class="form-control" required>
		                                            	<option disabled="" selected=""></option>
                                                        @foreach ($gelombang as $g)
		                                            	<option value="{{$g->id}}">{{$g->nama_gelombang}}</option>
                                                        @endforeach
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Jurusan Pelatihan</label>
		                                        	<select name="id_jurusan" class="form-control" required>
		                                            	<option disabled="" selected=""></option>
                                                        @foreach ($jurusan as $j)
                                                        <option value="{{$j->id}}">{{$j->nama_jurusan}}</option>
                                                        @endforeach
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="data-diri">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h4 class="info-text"> Isi Informasi Data Diri Anda</h4>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Nama Lengkap</label>
		                                        	<input name="nama_lengkap" type="text" class="form-control" id="" required>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Email</label>
	                                            	<input name="email" type="email" class="form-control" id="" required>
	                                        	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Nomor HP</label>
		                                        	<input name="nomor_hp" type="number" class="form-control" id="" required>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">NIK</label>
                                                    <input name="nik" type="number" class="form-control" id="" required>
		                                    	</div>
		                                	</div>
                                            <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Jenis Kelamin</label>
                                                    <select class="form-control" name="jenis_kelamin" id="" required>
                                                        <option value=""></option>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
		                                    	</div>
		                                	</div>
                                            <div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Tempat Lahir</label>
                                                    <input name="tempat_lahir" type="text" class="form-control" id="" required>
		                                    	</div>
		                                	</div>
                                            <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label class="control-label">Tanggal Lahir</label>
		                                        	<input name="tanggal_lahir" type="date" class="form-control" id="" required>
		                                    	</div>
		                                	</div>
                                            <div style="margin-top: 25px" class="col-sm-5">
                                                <div class="form-group">
                                                  <div class="file-input">
                                                    <input type="file" name="kartu_keluarga" class="form-control" id="kartu_keluarga" required>
                                                    <span>Upload Kartu Keluarga</span>
                                                    <p id="file-upload-notification" style="color: rgb(0, 2, 109); display: none;">File Berhasil Diupload!</p>
                                                  </div>
                                                </div>
                                              </div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="pendidikan">
		                                <h4 class="info-text">Isi Informasi Pendidikan Anda </h4>
		                                <div class="row">
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Pendidikan Terakhir</label>
		                                        	<input name="pendidikan_terakhir" type="text" class="form-control" id="" required>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Nama Sekolah</label>
	                                            	<input name="nama_sekolah" type="text" class="form-control" id="" required>
	                                        	</div>
		                                	</div>
                                            <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Kejuruan</label>
		                                        	<input name="kejuruan" type="text" class="form-control" id="" required>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Aktivitas Saat Ini</label>
	                                            	<input name="aktivitas_saat_ini" type="text" class="form-control" id="" required>
	                                        	</div>
		                                	</div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-info btn-wd' name='next' value='Berikutnya' />
	                                    {{-- <input type='button' class='btn btn-finish btn-fill btn-info btn-wd' name='finish' value='Finish' /> --}}
                                        <button type="submit" class='btn btn-finish btn-fill btn-info btn-wd' name='finish' value='Finish' >Simpan</button>
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Sebelumnya' />
	                                </div>
		                            <div class="clearfix"></div>
		                        </div>
			                </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="{{asset('form-wizard/assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('form-wizard/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('form-wizard/assets/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{asset('form-wizard/assets/js/material-bootstrap-wizard.js')}}"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{asset('form-wizard/assets/js/jquery.validate.min.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('#kartu_keluarga').on('change', function() {
                if (this.files.length > 0) {
                    $('#file-upload-notification').show();
                }
            });
        });
    </script>

</html>
