<?php
include("user-profile-information.php");
?>
<!DOCTYPE html>
<html lang="en">

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

  <title>History</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/history-simple-sidebar.css" rel="stylesheet">
  <link href="css/history.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body onload="additems()">



  <!-- Sidebar & titlebar -->
  <div>

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">

        <li class="sidebar-brand">PULSER 2.0</li>
        <li class="nav-space-1"></li>
        <li><p>Functions</p><span class="fa fa-caret-down text-span"></span></li>
        <li class="sidebar-top"><a href="dash4.php"><span class="fa fa-bar-chart"></span>儀表板</a></li>
        <li class="sidebar-bottom"><a href="history.php"><span class="fa fa-history"></span>紀錄</a></li>

        <li class="nav-space-2"></li>

        <li><p>About</p><span class="fa fa-caret-down text-span"></span></li>
        <li class="sidebar-top"><a href="#"><span class="fa fa-at"></span>說明</a></li>
        <li><a href="#"><span class="fa fa-at"></span>關於我們</a></li>
        <li class="sidebar-bottom"><a href="#"><span class="fa fa-at"></span>聯絡</a></li>

      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <div id="title-bar"></div>

    <!-- begining of title-bar -->
    <div class="container-fluid">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="profile.php" ><span class="glyphicon glyphicon-user"><label style="font-family:verdana;padding-left:4px;"><?php echo $row["user_email"]?></label></span></a></li>
        <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">個人化設定</a></li>
            <li><a href="#">裝置設定</a></li>
          </ul>
        </li>

      </ul>
    </div>
    <!-- end of title-bar-->



  </div>
  <!-- Sidebar & titlebar -->


  <!-- begin of page content-->
  <div id="page-content">
    <!-- begin of page container-->
    <div class="container-fluid">

      <div class="row"><div id="page-space-1"></div></div>


      <!-- begin of page row-->
      <div class="row">
        <div class="col-md-12">
          <h1 class="page-header">心跳紀錄查詢   <small>Personal Statue</small></h1>     
        </div>

        <!-- begin of datepicker-->

        <div class="col-sm-2">
          <select name="thedaterange" class="form-control" id="date-year">
          <option value="0">請選擇年分</option>
          </select>
        </div>

        <div class="col-sm-2">
          <select name="thedaterange" class="form-control" id="date-month">
            <option value="0">請選擇月份</option>
          </select>
        </div>

        <div class="col-sm-2">
          <select name="thedaterange" class="form-control" id="date-day">
            <option value="0">請選擇日</option>
          </select>
        </div>


        <div class="col-sm-2">

        </div>



        <!-- end of datepicker-->

        <div class="col-sm-4">
          <button type="button" class="btn btn-danger"><label style="color: #000;">搜尋</label></button>
          <button type="button" class="btn btn-primary"><label style="color: #000;">FFT</label></button>
          <button type="button" class="btn btn-info"><label style="color: #000;">原始</label></button>
          <button type="button" class="btn btn-success"><label style="color: #000;">週期</label></button>
        </div>



        <!-- begin of page time range chooser-->

        <!-- end of page time range chooser-->
      </div>
      <!-- end of page row-->

      <div style="height:10px;">
      </div>

      <!-- begin of page row2-->
      <div class="row">
        <div class="col-lg-11">
          <div class="panel panel-default">
            <div class="panel-heading" style="border:1px solid black;border-bottom:none;">
              <h2 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> 紀錄</h2>
            </div>
            <div class="panel-body" style="border:1px solid black;">
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list table-hover">
                  <thead>
                    <tr>
                      <th class="text-center col-xs-1">姓名</th>
                      <th class="text-center col-xs-2">編號</th>
                      <th class="text-center col-xs-2">日期</th>
                      <th class="text-center col-xs-2">時間</th>
                      <th class="text-center col-xs-2">測量結果</th>
                    </tr>
                  </thead>
                  <tbody>
                   <tr>
                    <td class="text-center" style="vertical-align:middle;">唐川普
                    </td>
                    <td class="text-center" style="vertical-align:middle;">u04087</td>
                    <td class="text-center" style="vertical-align:middle;">2017-05-12</td>
                    <td class="text-center" style="vertical-align:middle;">09:00-10:00</td>
                    <td class="text-center" style="vertical-align:middle;"></td>
                    <td class="text-center">
                      <a class="btn btn-danger btn-sm" onClick="askDelete(2)"></span><span class="hidden-xs"> 刪除</span>
                      </a></td>
                    </tr>
                    <tr>
                      <td class="text-center" style="vertical-align:middle;">
                      </td>
                      <td class="text-center" style="vertical-align:middle;">u04087</td>
                      <td class="text-center" style="vertical-align:middle;">2017-05-12</td>
                      <td class="text-center" style="vertical-align:middle;">09:00-10:00</td>
                      <td class="text-center" style="vertical-align:middle;"></td>
                      <td class="text-center">
                        <a class="btn btn-danger btn-sm" onClick="askDelete(2)"></span><span class="hidden-xs"> 刪除</span>
                        </a></td>
                      </tr>
                      <tr>
                        <td class="text-center" style="vertical-align:middle;">
                        </td>
                        <td class="text-center" style="vertical-align:middle;">u04087</td>
                        <td class="text-center" style="vertical-align:middle;">2017-05-12</td>
                        <td class="text-center" style="vertical-align:middle;">09:00-10:00</td>
                        <td class="text-center" style="vertical-align:middle;"></td>
                        <td class="text-center">
                          <a class="btn btn-danger btn-sm" onClick="askDelete(2)"></span><span class="hidden-xs"> 刪除</span>
                          </a></td>
                        </tr>
                        <tr>
                          <td class="text-center" style="vertical-align:middle;">
                          </td>
                          <td class="text-center" style="vertical-align:middle;">u04087</td>
                          <td class="text-center" style="vertical-align:middle;">2017-05-12</td>
                          <td class="text-center" style="vertical-align:middle;">09:00-10:00</td>
                          <td class="text-center" style="vertical-align:middle;"></td>
                          <td class="text-center">
                            <a class="btn btn-danger btn-sm" onClick="askDelete(2)"></span><span class="hidden-xs"> 刪除</span>
                            </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of page row2-->
            <!-- begin of page row3-->
            <div class="row">
              <div class="col-lg-5"></div>

              <div class="col-lg-5"></div>
            </div>
            <!-- end of page row3-->
          </div>
          <!-- end of page container-->
        </div>
        <!-- end of page content-->





        <!-- /#wrapper -->

        <!-- jQuery -->

        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script>
          function additems(){
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1;
            var yy = today.getFullYear();

            var n;

            for(n=0;n<10;n++)
            {
              var select = document.getElementById("date-year");
              var y = (yy-n)+ "年";
              select.options[select.options.length] = new Option(y, (yy-n));
            }
            for(n=1;n<=12;n++)
            {
              var select = document.getElementById("date-month");
              var m = n + "月";
              select.options[select.options.length] = new Option(m, n);
            }
            for(n=1;n<=31;n++)
            {
              var select = document.getElementById("date-day");
              var d = n + "日";
              select.options[select.options.length] = new Option(d, n);
            }

          }
        </script>






      </body>

      </html>
