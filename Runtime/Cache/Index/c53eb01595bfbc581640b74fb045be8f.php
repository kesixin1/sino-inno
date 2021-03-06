<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>中创产业研究院</title>
    <link rel="shortcut icon" href="<?php echo (INDEX_IMAGES_URL); ?>favicon.ico">
    <meta name="description" content="中创产业研究院于2014年正式成立，由国内外著名高校支持，中大创新谷、中大创投和各知名产业集团联合筹措成立的新型科研组织。中创产业研究院以“研究产业，服务产业，发展产业”为理念，以构建新兴产业发展研究基地和智库为基本方向，为国家产业发展提供智库支持，促进产业投融资活动的高效开展。中创产业研究院自成立以来，已联合政府部门、高校院所、社会机构等举办多场产业论坛，并发表多篇行业研究报告。同时，还与各行业专业平台联合出版发行了《众筹之路》和《六众之路》等书籍。" />
    <meta name="keywords" content="中创产业研究院、研究产业、服务产业、发展产业"/>
    <link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>common.css">
    <link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>swiper.css">
    <link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>industry.css">
    <link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>page.css">
</head>
<body>
<!--  search,nav begin-->
<div class="in_head_wrap">
    <div class="in_search clear">
        <div class="in_search_left fl clear">
            <div class="in_search_logo fl">
                <img src="<?php echo (INDEX_IMAGES_URL); ?>sy-logo.png" alt="">
            </div>
            <p class="in_search_left_word fl">聚合创新，合作共赢</p>
        </div>
        <div class="in_search_right fr">
            <div class="clear in_inputDiv">
                <input class="fl in_input" type="text" placeholder="找分析，搜热门......">
                <div class="in_search_icon fr">
                    <img class="in_WX" src="<?php echo (INDEX_IMAGES_URL); ?>sy-sousuo-wdj.png" alt="">
                </div>
            </div>

            <div class="in_codeDiv">
                <img class="in_QRcode" src="<?php echo (INDEX_IMAGES_URL); ?>sy-erweima.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="nav_wrap">
    <div class="nav clear">
        <a href="/index.php/Index/Index/index" class="fl">首页</a>
        <a href="/index.php/Index/Article/article?acid=1" class="fl">产业方向</a>
        <a href="trade.html" class="fl">行业资讯</a>
        <a href="aboutUsIntroduce.html" class="fl">关于我们</a>
    </div>
</div>
<!--  search,nav end>-->

<!--  main begin-->
<div class="main clear">
    <div class="fl">
        <div class="tab">
            <div class="title">
                <a href="/index.php/Index/Article/article1"><li style="color:#ce1d19">风险投资<div class="sideDiv" style="display:block;"></div></li></a>
                <a href="/index.php/Index/Article/article2"><li>金融产业<div class="sideDiv"></div></li></a>
                <a href="/index.php/Index/Article/article3"><li>医疗产业<div class="sideDiv"></div></li></a>
                <a href="/index.php/Index/Article/article4"><li>新材料产业<div class="sideDiv"></div></li></a>
                <a href="/index.php/Index/Article/article5"><li style="margin:0;">先进制造产业<div class="sideDiv"></div></li></a>
            </div>
        </div>
        <div class="tabContent" style="display:block;">
            <?php if(is_array($arrData)): foreach($arrData as $key=>$vo): ?><a href="industryDetail.html">
                    <div class="ind_art_wrap">
                        <div class="ind_art_option clear" >
                            <div class="ind_ct_pho fl">
                                <img src="<?php echo (UPLOAD_URL); echo ($vo["thumbimg"]); ?>" alt="">
                            </div>
                            <div class="ind_ct_main fl">
                                <p class="ind_main_tit"><?php echo ($vo["title"]); ?></p>
                                <p class="ind_main_ct"><?php echo ($vo["summary"]); ?>......</p>
                                <p class="ind_main_time"><?php echo ($vo["time"]); ?> <span class="in_main_read">阅读(<?php echo ($vo["read_times"]); ?>)</span></p>
                            </div>
                        </div>
                    </div>
                </a><?php endforeach; endif; ?>
            <div class="pages" style="text-align: center;">
                <?php echo ($arrShow); ?>
            </div>
        </div>

    </div>

    <div class="fr">
        <div class="in_art_option_r" >
            <p class="option_r_tt">小研推荐</p>
            <?php $__FOR_START_14416__=0;$__FOR_END_14416__=2;for($i=$__FOR_START_14416__;$i < $__FOR_END_14416__;$i+=1){ ?><div class="option_r_ct clear">
                    <div class="ind_ct_pho_r fl">
                        <img src="<?php echo (UPLOAD_URL); echo ($arrGroom[$i]["thumbimg"]); ?>" alt="">
                    </div>
                    <div class="ind_ct_main_r fr">
                        <p class="ind_main_tit_r"><?php echo ($arrGroom[$i]["title"]); ?></p>
                        <p class="ind_main_time_r"><?php echo ($arrGroom[$i]["time"]); ?> </p>
                        <p class="ind_main_read_r">阅读(<?php echo ($arrGroom[$i]["read_times"]); ?>)</p>
                    </div>
                </div><?php } ?>
        </div>

        <div class="in_art_option_r" >
            <p class="option_r_tt">本类热门</p>
            <?php $__FOR_START_2633__=2;$__FOR_END_2633__=6;for($i=$__FOR_START_2633__;$i < $__FOR_END_2633__;$i+=1){ ?><div class="option_r_ct clear">
                    <div class="ind_ct_pho_r fl">
                        <img src="<?php echo (UPLOAD_URL); echo ($arrGroom[$i]["thumbimg"]); ?>" alt="">
                    </div>
                    <div class="ind_ct_main_r fr">
                        <p class="ind_main_tit_r"><?php echo ($arrGroom[$i]["title"]); ?></p>
                        <p class="ind_main_time_r"><?php echo ($arrGroom[$i]["time"]); ?> </p>
                        <p class="ind_main_read_r">阅读(<?php echo ($arrGroom[$i]["read_times"]); ?>)</p>
                    </div>
                </div><?php } ?>

            <div class="option_r_ct clear">

                <div class="swiper-container" id="swiper-container4">
                    <p class="option_r_tt">中创研究院出品</p>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="option_r_ct_pho">
                                <img src="<?php echo (INDEX_IMAGES_URL); ?>cyfx-lzzl.png" alt="">
                                <p class="option_r_ct_intro">
                                    <span class="option_r_bsn">企业家</span>
                                    <span>政策制定者以及广大创新创业人士案头应备之书</span>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="option_r_ct_pho">
                                <img src="<?php echo (INDEX_IMAGES_URL); ?>cyfx-zczl.jpg" alt="">
                                <p class="option_r_ct_intro">
                                    <span class="option_r_bsn">众筹平台运营者</span>
                                    <span>项目方及投资者必读手册，实现众多普通人的创业及投资梦想</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--  main end-->

<!-- footer begin -->
<div class="in_footer">
    <p class="in_footer_link">
        <a href="">关于我们</a>
        <a href="">联系我们</a>
        <a href="">合作伙伴</a>
        <a href="">法律声明</a>
        <a href="">新浪微博</a>
    </p>
    <p class="in_friendly_link">
        友情链接：
        <a href="">中大创投</a>
        <a href="">中大创新谷</a>
        <a href="">广东医谷</a>
        <a href="">庖丁技术</a>
        <a href="">云珠沙龙</a>
        <a href="">海鳖众筹</a>
        <a href="">中创学院</a>
        <a href="">SME</a>
        <a href="">校园直通车</a>
        <a href="">INNO-Talk</a>
    </p>
</div>
<div class="in_ICP">
    粤ICP备14039480号 Copyright © 2014-2017  中创研究院 版权所有       技术支持：广东庖丁技术开发股份有限公司
</div>
<!-- footer end -->
</body>
<script src="<?php echo (INDEX_JS_URL); ?>jquery-3.0.0.min.js"></script>
<script src="<?php echo (INDEX_JS_URL); ?>common.js"></script>
<script src="<?php echo (INDEX_JS_URL); ?>swiper.js"></script>
<script>
    window.onload = function(){
        var mySwiper4 = new Swiper('#swiper-container4', {
            pagination : '.swiper-pagination',
        });

    }
</script>
</html>