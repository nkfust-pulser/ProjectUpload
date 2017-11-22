<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//d3js.org/d3.v4.min.js"></script>

  <title>History 4.0</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="css/plugins/morris.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/admin.css">
        
      </head>

      <body onload="additems()">

        <div>

          <!-- Sidebar -->
          <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
              <li class="sidebar-brand"><p style="text-align: center;">PULSER 2.0</p></li>
              <li><a href="dash4.php"><span class="glyphicon glyphicon-equalizer"  style="padding-right:4px;"></span>儀表板</a></li>
              <li><a href="history.php"><span class="glyphicon glyphicon-th-list"  style="padding-right:4px;"></span>紀錄</a></li>
              <li><a href="search.php"><span class="glyphicon glyphicon-search" style="padding-right:4px;"></span>查詢</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-user" style="padding-right:4px;"></span>社群</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-book" style="padding-right:4px;"></span>說明</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-info-sign" style="padding-right:4px;"></span>關於我們</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-earphone" style="padding-right:4px;"></span>聯絡我們</a></li>
            </ul>
          </div>
          <!-- /#sidebar-wrapper -->

          <!-- Page Content -->
          <div id="page-content-wrapper">
            <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;background-color: #272728;margin-bottom: 0px;">

              <ul class="nav navbar-nav navbar-right" style="margin-right: 0px; ">
                <li><a href="" style="font-size:18px;color:#adadba;"><span class="glyphicon glyphicon-bell"></span>   提醒</a></li>
                <li><a href="" style="font-size:18px;color:#adadba;"><span class="glyphicon glyphicon-user"></span>   使用者</a></li>
                <li><a href="profile.php" style="font-size:18px;color:#adadba;"><span class="glyphicon glyphicon-log-in" ></span>   登出</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size:20px;color:#adadba;"><span class="glyphicon glyphicon-cog"></span></a>
                  <ul class="dropdown-menu" style="text-align: center;font-size:15px;">
                    <li><a href="#">個人化設定</a></li>
                    <li><a href="#">帳號管理</a></li>
                    <li><a href="#">通知設定</a></li>
                    <li><a href="#">裝置設定</a></li>
                    <li class="divider"></li>
                    <li><a href="#">關於我們</a></li></ul>
                  </li>
                </ul>
              </div>
            </div>

          </div>
          <!-- /#page-content-wrapper -->


          <div id="page-wrapper" style="padding:0px;">



            <div class="container-fluid" style="padding-left:270px;height: 750px;">

              <!-- Page Heading -->

              <div class="row">
                <div class="col-lg-12 text-center">
                  <h1 class="page-header ">
                    查詢   <small>look for?</small>
                  </h1>
                  <ol>

                    <li>
                     <label for ="select"></label>
                     <select name="thedaterange" id="daterange">
                      <option value="0">請選擇日期</option>
                    </select>
                  </li>
                  <li><span class="btn btn-default btn-sm"><a  style="font-size:18px;color:#000;"> 近期搜尋紀錄</a></span></li>
                </ol>
              </div>

              <div style="width:80%; padding-left: 270px;">
                <table class="table">
                  <tbody>
                    <form method="post" name="form1" style="margin-bottom:0px" action="adminProc.php?action=add">
                      <tr>
                        <td style="vertical-align:middle; font-weight:bold;" class="col-xs-3 text-center">裝置</td>
                        <td></td>
                      </tr>
                    </form>
                    <form method="post" name="form1" style="margin-bottom:0px" action="adminProc.php?action=add">
                      <tr>
                        <td style="vertical-align:middle; font-weight:bold;" class="col-xs-3 text-center">輸入日期</td>
                        <td>
                        <div>
                        <select class="form-control" id="date-year">
                          <option value="none-day" selected>請選擇年分</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                        </select>
                        </div>

                      </td>
                    </tr>
                  </form>
                  <form method="post" name="form1" style="margin-bottom:0px" action="adminProc.php?action=add">
                    <tr>
                      <td colspan="2" style="vertical-align:middle; font-weight:bold;" class="col-xs-3 text-center"><span class="btn btn-primary btn-sm"><a  style="font-size:15px;color:#000;"> 確定</a></span></td>
                    </tr>
                  </form>
                  <form>
                    <tr>
                      <td></td>
                    </tr>
                  </form>
                </tbody>
              </table>
            </div>
            <!-- /.container-fluid -->

          </div>

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->

        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
          function additems(){
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1;

            var n;
            var text;
            var value;
            for(n=0;n<7;n++)
            {
              if(mm==1 || mm==3 || mm==5 || mm==7 || mm==8 || mm==10 || mm==12)
              {
                var select = document.getElementById("daterange");
                if(dd+n<=31){
                  today = mm+'/'+(dd+n);
                  text = dd+n;
                  value = mm+"-"+text;
                  select.options[select.options.length] = new Option(today, value);
                }
                else{
                  today = (mm+1)+ '/' +(n-(31-dd));
                  text = (n-(31-dd));
                  value = (mm+1) +"-"+text;
                  select.options[select.options.length] = new Option(today, value);
                }
              }

              else if(mm==2)
              {
                var select = document.getElementById("daterange");
                if(dd+n<=28){
                  today = mm+'/'+(dd+n);
                  text = dd+n;
                  value = mm+"-"+text;
                  select.options[select.options.length] = new Option(today, value);
                }
                else{
                  today = (mm+1)+ '/' +(n-(28-dd));
                  text = (n-(28-dd));
                  value = (mm+1) +"-"+text;
                  select.options[select.options.length] = new Option(today, value);
                }
              }

              else{
                var select = document.getElementById("daterange");
                if(dd+n<=30){
                  today = mm+'/'+(dd+n);
                  text = dd+n;
                  value = mm+"-"+text;
                  select.options[select.options.length] = new Option(today, value);
                }
                else{
                  today = (mm+1)+ '/' +(n-(30-dd));
                  text = (n-(30-dd));
                  value = (mm+1) +"-"+text;
                  select.options[select.options.length] = new Option(today, value);
                }
              }

            }


          }
        </script>


      </body>

      </html>
