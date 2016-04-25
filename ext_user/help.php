<?php
require_once '../lib/config.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="gbk">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site_name;  ?></title>
    <!-- Bootstrap core CSS -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/css/flat-ui.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../asset/css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $site_name;  ?></a>
        </div>

    </div>
</nav>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h2>��ʹ�ý̳� </h2>



    </div>
    <h5>��������һ���ͻ���</h5>

    <ul>
        <li>˫����ѹ����shadowsocks.exe ��ͼ������ɫֽ�ɻ���Ȼ����ӷ�������Ϣ</li>
    </ul>

    <h5>��ά�뷽ʽ���Ƽ���</h5>
    <ul>
        <li>���鲻Ҫ����360�ȳ��������ֹȫ��������</li>
        <li>�Ҽ��������½�ֽ�ɻ�ͼ�꣬ѡ�������-��ɨ���ά��</li>
    </ul>

    <img src="../help/1.png" />
    <br /><br /><br /><br />
    <img src="../help/2.png" />
    <br /><br />
    <p>���ȷ��</p>

    <ul>
        <li>Ȼ���Ҽ������� �������ϵͳ�����Ϳ����Ͼ�����վ��</li>
        <li>����ľ�����վָ���Ǳ�GFW���ŵ���վ����youtube��google�ȣ�</li>
        <li>������������������й�����վ�ܿ��������ڷ�������ѡ��ȫ��ģʽ</li>
    </ul>
    <br />
    <img src="../help/3.png" />
    <br /><br />
    <ul>
        <li>�ڱ༭��������Ҳ����ѡ���ֶ������Ϣ��</li>
    </ul>

    <img src="../help/4.png" />


    <h6>��ѡ������ϵͳ����Ļ�ÿ�ο���������shadowsocks������ܳ����ϲ����������</h6>




</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted"><strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#"><?php echo $site_name;  ?></a>.</strong> All rights reserved. Powered by  <b>ss-panel</b> <?php echo $version; ?> </p>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../asset/js/jQuery.min.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>

</body>
</html>
