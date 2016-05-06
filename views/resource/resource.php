<!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
    <title>信息论-讨论交流</title>
    <link href=<?=base_url().'views/resource/resource.css'?> rel="stylesheet" type="text/css">
    <script src=<?=base_url().'views/common/jquery-2.2.3.min.js'?>></script>
    <!--IE8只能支持jQuery1.9-->
    <!--[if lte IE 8]>
    <link href="__PUBLIC__/Common/Css/IE.css" rel="stylesheet" type="text/css">
    <script src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
    <![endif]-->
    <script src=<?=base_url().'views/common/common.js'?>></script>
</head>
<body id="body">
<!--添加登录条-->
<include file="./loginBar"/>
<!--添加导航栏-->
<include file="./nav"/>

<div class="tab-wrap">
    <ul>
        <li class="tab-video tab-choose" data-box="box-video">教学录像</li>
        <li class="tab-ppt" data-box="box-ppt">P P T</li>
        <li class="tab-paper" data-box="box-paper">往年试卷</li>
        <li class="tab-ebook" data-box="box-ebook">电子教材</li>
    </ul>
</div>
<div class="resource-wrap">
    <div class="box-video resource-box">
        <ul class="resource-list" >
            <li>
                <a href="#">
                    <img src=<?=base_url().'views/common/img/list-item1.jpg'?> alt="视频1">
                    <span>视频1</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src=<?=base_url().'views/common/img/list-item2.jpg'?> alt="视频2">
                    <span>视频2</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src=<?=base_url().'views/common/img/list-item3.jpg'?> alt="视频3">
                    <span>视频3</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="box-ppt resource-box" >
        <strong>当前类别暂无资源</strong>
    </div>
    <div class="box-paper resource-box" >
        <strong>当前类别暂无资源</strong>
    </div>
    <div class="box-ebook resource-box" >
        <strong>当前类别暂无资源</strong>
    </div>
</div>



<!--添加页尾-->
<include file="./footer"/>
<script src=<?=base_url().'views/index/index.js'?>></script>
<script src=<?=base_url().'views/resource/resource.js'?>></script>
<!--让IE8支持媒体查询-->
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
</body>
</html>