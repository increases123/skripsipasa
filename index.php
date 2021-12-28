<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Survey Kepuasan Pelanggan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog-post.css" rel="stylesheet">


</head>

<body background="">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">E-SURVEY</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#login" data-toggle="modal"><button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-log-in"></span> Login</button></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#survey" data-toggle="tab">Survey</a></li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <div class="container">
       
        <div class="panel panel-default" >
          <div class="panel-body" style="background-color:#e6e6e6;">
            <div class="col-lg-12">
                <img class="img-responsive" src="./images/banner_pendopo.jpg" alt="" style="height:300px;width:1290px">
                <hr>
            </div>
              <div class="col-lg-12">
                  <p align="center" style="background-color:black; color:white;" > <font size="5">SURVEY KEPUASAN KLIEN</font></p>
              </div>
              <div class="row">
                  <div class="panel-body">
                      <form method='POST' action='aksi_kuosioner.php' onSubmit=\"return validasisurvey(this)\" >
                          <script language="javascript">
                              function validasisurvey(form){
                                  if (form.companyName.value == ""){
                                      alert("Anda belum mengisikan nama Anda.");
                                      form.companyName.focus();
                                      return (false);
                                  }
                                  if (form.companyAddress1.value == ""){
                                      alert("Anda belum mengisikan alamat Anda.");
                                      form.companyAddress1.focus();
                                      return (false);
                                  }
                              }
                          </script>
                          <table class="table" > 
                              <tr >
                                  <td>
                                      <div class="form-horizontal"  style="margin-top:20px;background-color:#fff;padding-top:20px;padding-bottom:20px;">
                                            
                                          
                                          <div class="form-group">
                                             <label for="tgl" class="control-label col-sm-2">Tanggal</label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-calender"></span>
                                                     </div>
                                                     <?php
                                                          include "fungsi/fungsi_indotgl.php";
                                                          $tanggal = date('Y-m-d');
                                                          $tglFinal = tgl_indo($tanggal);
                                                          ?>
                                                     <input type="text" id="tgl" class="form-control" disabled="" name="companyName" value="<?php echo $tglFinal; ?>">
                                                 </div>
                                             </div>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td width="97%" valign="top" align="center" colspan="5" style="border-style: none; border-width: medium">
                                  <font face="Arial" size="1"><b>Mohon kesediaan Anda untuk memberikan 
                                  penilaian dan masukan kepada Pendopo Umi Faridah, dimana hal ini sangat bermanfaat 
                                  untuk meningkatkan kualitas layanan kami.<br>
                                  </b><i>Silahkan diisi dengan mengklik option radio 
                                   serta keterangan sesuai dengan penilaian Anda 
                                  pada kolom yang telah disediakan</i></font>
                                  </td>
                              </tr>
                              <tr>
                                  <td colspan="9">
                                      <table class="table table-striped table-bordered">
                                          <thead>
                                              <th width='3%' ><b><font face='Tahoma' size='2'>No</font></b></th>
                                              <th colspan='2'><p align='center'><b><font face='Tahoma' size='2'>Dimensi Pertanyaan</font></b></th>
                                              <th colspan="5" bgcolor='#FFFF00'><p align='center'><font face='Tahoma' size='2'>Kualitas</font></th>
                                          </thead>
                                          <tbody>
                                              <?php
                                              include "koneksi.php";
                                              error_reporting(0);
                                              $no = 1;
                                              $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tgroup");
                                              while($data = mysqli_fetch_array($sql)){
                                                  $id = $data[groupId];
                                                  echo "<tr valign='top'>
                                                          <td><font face='Tahoma' size='2' colspan='1'><b> $no</b></font></td>
                                                          <td colspan='2'><font face='Tahoma' size='2'><b>$data[groupName]</b></font></td>
                                                          
                                                          <td height='25' width='8%' bgcolor='#000000'><p align='center'><font face='Tahoma' size='1' color='white'>5<br>(Sangat Puas)</font></td>
                                                          <td height='25' width='8%' bgcolor='#000000'><p align='center'><font face='Tahoma' size='1' color='white'>4<br>(Puas)</font></td>
                                                          <td height='25' width='8%' bgcolor='#000000'><p align='center'><font face='Tahoma' size='1' color='white'>3<br>(Kurang Puas)</font></td>
                                                          <td height='25' width='8%' bgcolor='#000000'><p align='center'><font face='Tahoma' size='1' color='white'>2<br>(Tidak Puas)</font></td>
                                                          <td height='25' width='8%' bgcolor='#000000'><p align='center'><font face='Tahoma' size='1' color='white'>1<br>(Sangat Tidak Puas)</font></td>
                                                      </tr>";
                                                      
                                                  $hasil = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tdescription, tgroup WHERE tdescription.groupId = '$id' AND tdescription.groupId = tgroup.groupId ORDER BY tgroup.groupId");
                                                  $i = 1;
                                                  while ($r = mysqli_fetch_array($hasil)){
                                                  
                                                      echo "<tr>
                                                              <td colspan='1'></td>
                                                             
                                                              <td colspan='2'><font face='Tahoma' size='2'> $r[description]</font></td>
                                                              <td align='center'> <input type='radio' name='asfa$i$data[groupId]' value='A'> </td>
                                                              <td align='center'> <input type='radio' name='asfa$i$data[groupId]' value='B'> </td>
                                                              <td align='center'> <input type='radio' name='asfa$i$data[groupId]' value='C'> </td>
                                                              <td align='center'> <input type='radio' name='asfa$i$data[groupId]' value='D'> </td>
                                                              <td align='center'> <input type='radio' name='asfa$i$data[groupId]' value='E'> </td>
                                                              </tr>";
                                                      $i++;
                                                  }
                                                  echo "<br>";
                                                  $no++;
                                              }
                                              ?>
                                          </tbody>
                                      </table>
                                  </td>
                              </tr>
                              <tr>
                                  <td colspan="8">    
                                          <div class="well">
                                              <h4>Komentar / Saran...</h4>
                                            
                                                  <div class="form-group">
                                                      <textarea name='suggestion' class="form-control" rows="3" placeholder="Tulis Komentar dan Saran..."></textarea>
                                                  </div>
                                                 
                                          </div>
                                      <hr>
                                  </td>
                              </tr>
                              <tr>
                                  <td colspan="8"> <center><button type="submit" class="btn btn-primary btn-lg">Submit</button></center> </td>
                              </tr>
                              <tr>
                                  <td width="97%" valign="top" align="center" colspan="5" style="border-style: none; border-width: medium">
                                  <center class="well">
                                  <font face="Arial" size="1"><b>Terima Kasih Atas Waktu dan Masukan yang anda berikan,Semua masukan yang anda berikan </b> </i></font>
                                  <font face="Arial" size="1"><b>akan kami terima sebagai sarana bagi kami untuk meningkatkan kulaitas pelanan kami</b>  </i></font>
                                  </center>
                                  </td>
                              </tr>
                          </table>
                      </form>
                  </div>    
              </div>
           </div>
        </div>
        
    </div>
    <nav class="navbar navbar-inverse navbar-absolut-bottom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="modal fade" id="login">
        <form name="login" action="./adminweb/cek_login.php" method="POST" onSubmit="return validasi(this)" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" bgcolor="black">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <div class="modal-title" >
                           <center><h4>Login Admin</h4></center>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </div>
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                            
                                        </div>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class=" control-label col-sm-3"></label>
                                <div class="col-sm-1">
                                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      
                    </div>
                </div>
            </div>
        </form>
    </div>

  
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
