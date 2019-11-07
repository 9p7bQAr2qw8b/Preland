<!DOCTYPE html>

<html lang="hu">
<head>
  <base>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Idealica</title>
  <link rel="preload" as="style">

<style>body{position:relative;min-width:320px;margin:0 auto;font-family:"Lato-Regular","Arial",sans-serif;font-size:18px;line-height:21px;font-weight:400;color:#000;background-color:#fff}body,html{overflow-x:hidden}img{max-width:100%;height:auto}input:invalid{-webkit-box-shadow:none;box-shadow:none}body>a{text-decoration:none;color:#000;position:absolute;left:50%;margin-left:-42px;bottom:10px}.visually-hidden:not(:focus):not(:active),input[type=checkbox].visually-hidden,input[type=radio].visually-hidden{position:absolute;width:1px;height:1px;margin:-1px;padding:0;white-space:nowrap;border:0;-webkit-clip-path:inset(100%);clip-path:inset(100%);clip:rect(0 0 0 0);overflow:hidden}.another-review__text a,.clinically__text a,.end__text a,.health__text a,.myresult__text a,.news__text a,.reason__image-container--text a,.reason__text a,.result__text a,.user-text a{color:#5e8acc}.another-review__text a:hover,.btn,.clinically__text a:hover,.end__text a:hover,.health__text a:hover,.myresult__text a:hover,.news__text a:hover,.reason__image-container--text a:hover,.reason__text a:hover,.result__text a:hover,.user-text a:hover{color:#2f5895;cursor:pointer;text-decoration:underline}.btn{font-family:"Roboto-Black",sans-serif;color:#fff;font-size:23px;line-height:26px;font-weight:700;text-align:center;text-decoration:none;text-transform:uppercase;padding:15px 0;background-color:#e19431;border:0;outline:0}.btn:hover{background-color:#c37a1c}.btn:active{background-color:#965e16}.flag-dropdown,.hide{display:none}.error-box{color:#fff;background-color:#de5042;border-radius:5px;text-align:center;width:100%;font-size:13px;line-height:20px;margin:0 auto 10px}@media (min-width:1230px){body{font-size:24px;line-height:29px}}@font-face{font-family:'Lato-Bold';font-style:normal;font-weight:700;font-display:swap;src:url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/Lato-Bold.eot") format('eot'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/Lato-Bold.ttf") format('ttf'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/Lato-Bold.woff") format('woff'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/Lato-Bold.woff2") format('woff2')}@font-face{font-family:'Lato-Regular';font-style:normal;font-weight:400;font-display:swap;src:url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/Lato-Regular.eot") format('eot'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/Lato-Regular.ttf") format('ttf'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/Lato-Regular.woff") format('woff'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/Lato-Regular.woff2") format('woff2')}@font-face{font-family:'Lato-Italic';font-style:italic;font-weight:400;font-display:swap;src:url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/") format('eot'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/") format('ttf'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/") format('woff'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/") format('woff2')}@font-face{font-family:'Lato-Black';font-style:normal;font-weight:900;font-display:swap;src:url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/") format('eot'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/") format('ttf'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/") format('woff'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/") format('woff2')}@font-face{font-family:'NokiaSansS60-Bold';font-style:normal;font-weight:700;font-display:swap;src:url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/NokiaSansS60-Bold.eot") format('eot'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/NokiaSansS60-Bold.ttf") format('ttf'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/NokiaSansS60-Bold.woff") format('woff'),url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/NokiaSansS60-Bold.woff2") format('woff2')}.page-header__wrapper{margin:0 auto;width:320px;padding:15px 0}@media (min-width:1230px){.page-header__wrapper{width:1170px;padding:20px 30px}}.page-header__logo{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.page-header__logo-icon{margin-right:15px;margin-left:15px;margin-bottom:12px}.page-header__title{font-family:"NokiaSansS60-Bold";font-size:28px;line-height:30px;color:#d05ca7;margin:0}.navigation__list{width:320px;list-style:none;margin:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-wrap:wrap;flex-wrap:wrap;background:#f2f2f2;border:1px solid #cbcbcb;-webkit-box-sizing:border-box;box-sizing:border-box;padding:5px 0}.navigation__item{font-size:15px;line-height:15px;text-align:center;padding:5px;border-right:1px solid #d9d9d9}.navigation__item:hover{background:#ccc}.navigation__item:hover a{color:#000}.navigation__item a{text-decoration:none;color:#3a6696}.navigation__item:nth-child(-n+3){margin-bottom:5px}.navigation__item:last-child{display:none}.navigation__item--fifth,.navigation__item--first,.navigation__item--fourth,.navigation__item--second{width:20%}.navigation__item--sixth,.navigation__item--third{width:45%;border:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1}@media (min-width:1230px){.page-header__logo-icon{margin-left:0;margin-bottom:15px}.page-header__title{font-family:"NokiaSansS60-Bold";font-size:32px;line-height:36px;color:#d05ca7;margin:0}.navigation__list{width:1170px;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;-ms-flex-wrap:nowrap;flex-wrap:nowrap;padding:0}.navigation__item{font-size:24px;line-height:24px;padding:15px;border-right:1px solid #d9d9d9;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1}.navigation__item:nth-child(-n+3){margin-bottom:0}.navigation__item:last-child{display:block}.navigation__item--fifth,.navigation__item--first,.navigation__item--fourth,.navigation__item--second{width:auto}.navigation__item--sixth,.navigation__item--third{width:auto;border-right:1px solid #d9d9d9;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0}}.exclusive__wrapper{width:290px;padding:10px 15px;margin:0 auto}@media (min-width:1230px){.exclusive__wrapper{width:1170px;padding:20px 30px}}.exclusive__title{font-family:"Lato-Bold",sans-serif;font-size:24px;line-height:29px;margin:0 0 25px}.exclusive__title span{text-transform:uppercase}.exclusive__text{font-style:italic;margin:0;border-bottom:3px solid #db0000;padding-bottom:10px}@media (min-width:1230px){.exclusive__title{font-size:31px;line-height:38px}}.health__wrapper{width:290px;padding:10px 15px;margin:0 auto}@media (min-width:1230px){.health__wrapper{width:1170px;padding:20px 30px}}.health__journalist{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;margin-bottom:15px}.journalist-image{margin-right:30px}.journalist-title{font-size:20px;line-height:24px;margin:0 0 8px}.journalist-stats{font-size:10px;line-height:10px;margin:0 0 5px}.journalist-text{font-size:13px;line-height:16px;font-style:italic;margin:0}.health__title{font-size:20px;line-height:20px;margin:0 0 15px}.health__text{margin:0 0 20px}.health__text:last-child{margin-bottom:0}.news{display:none}@media (min-width:1230px){.health-and-news-container{position:relative;width:1230px;margin:0 auto}.news{display:block;position:absolute;top:30px;right:30px;width:370px}#sidebar{position:relative}.container4{background:#ccc;padding:15px 10px;margin-bottom:12px}.news__title{font-size:30px;line-height:30px;margin:0 0 10px}.news__text{font-size:16px;line-height:19px;margin:0 0 15px}.news__text span{font-style:italic}.news__text--more{display:block;text-align:right;margin-bottom:0}.news__text--line{position:relative;padding-bottom:15px}.news__text--line::before{position:absolute;content:"";bottom:0;width:100%;height:1px;background:#fff}h3{margin:0 0 15px}.news-image{margin-bottom:15px}.news__try{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-shadow:0 0 3px 0 #8c8c8c;box-shadow:0 0 3px 0 #8c8c8c}.try-title{width:100%;font-size:30px;line-height:30px;text-align:center;color:#fff;background-color:#139775;margin:0 0 30px;padding:10px;-webkit-box-sizing:border-box;box-sizing:border-box}.try-contaier{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.try-image{margin-left:60px}.try-link a{display:block;text-align:center;background:#ffff8f;color:#000}.news__btn{width:94%;font-size:28px;line-height:28px;font-weight:700;margin-bottom:25px}.health__journalist{position:relative}.journalist-image{position:absolute;top:0;left:0;width:170px;height:234px}.journalist-container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:baseline;-ms-flex-align:baseline;align-items:baseline}.journalist-title{font-size:24px;line-height:24px;margin-left:200px;margin-right:25px}.journalist-stats{font-size:18px;line-height:18px}.journalist-text{width:170px;font-size:16px;line-height:16px;top:250px;left:0;position:absolute}.health__text,.health__title{width:770px}.health__text:first-of-type,.health__title:first-of-type{width:570px;margin-left:200px}}.reason__wrapper{width:290px;padding:10px 15px;margin:0 auto}@media (min-width:1230px){.reason__wrapper{width:1170px;padding:20px 30px}}.reason__image-container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.reason__image-container--text{width:100%;-webkit-box-sizing:border-box;box-sizing:border-box;font-size:16px;line-height:19px;font-weight:700;text-align:center;background:#ffff95;padding:5px;margin:-5px 0 20px}.reason__text{margin:0 0 20px}.clinically__item:last-child,.reason__text:last-child{margin-bottom:0}@media (min-width:1230px){.reason__image-container{width:770px;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch}.reason__image-container--text{font-size:20px;line-height:23px;padding:15px}.reason__text{width:770px;margin-bottom:30px}}.result__wrapper{width:290px;padding:10px 15px;margin:0 auto}@media (min-width:1230px){.result__wrapper{width:1170px;padding:20px 30px}}.result__image-container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.result__image-container--text{width:100%;font-size:16px;line-height:19px;font-weight:700;text-align:center;background:#ffff95;padding:5px;margin:-5px 0 20px;-webkit-box-sizing:border-box;box-sizing:border-box}.result__text{margin:0 0 20px}.result__text--last{margin-bottom:10px}.result__image2{display:none}@media (min-width:1230px){.result__image-container{width:770px;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch}.result__image2{width:770px;display:block}.result__image-container--text{font-size:24px;line-height:28px;padding:15px;-webkit-box-sizing:border-box;box-sizing:border-box}.result__text{width:770px}}.another-review__wrapper{width:290px;padding:10px 15px;margin:0 auto}@media (min-width:1230px){.another-review__wrapper{width:1170px;padding:20px 30px}}.another-review__title{font-size:18px;line-height:21px;margin:0 0 20px}.another-review__text{margin:0}@media (min-width:1230px){.another-review__title{width:770px;font-size:24px;line-height:29px}.another-review__text{width:770px}}.clinically__wrapper{width:290px;padding:10px 15px;margin:0 auto}@media (min-width:1230px){.clinically__wrapper{width:1170px;padding:20px 30px}}.clinically__title{font-size:17px;line-height:21px;margin:0 0 20px}.clinically__list{font-size:18px;font-weight:700;margin:0 0 15px;padding:0 0 0 15px}.clinically__item{margin-bottom:5px}.clinically__text{margin:0}@media (min-width:1230px){.clinically__title{font-size:24px;line-height:29px}.clinically__list{width:770px}.clinically__item{font-size:23px}.clinically__text{width:770px}}.myresult__wrapper{width:290px;margin:0 auto;padding:10px 7px;background:#ebebeb;border:8px solid #9f9f9f}@media (min-width:1230px){.myresult__wrapper{width:1170px;padding:20px 30px}}.myresult__image-container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-bottom:25px}.myresult__image-container--text{font-size:16px;line-height:19px;text-align:center;background:#ffff95;margin:0;padding:5px}.end__text span,.myresult__image-container--text span{font-weight:700}.myresult__title{font-weight:700;margin:0 0 15px}.myresult__title:last-child{margin:0}.myresult__title:nth-last-child(-n+3){text-align:center}.myresult__text{margin:0 0 15px}@media (min-width:1230px){.myresult__wrapper{width:1230px;padding:20px 0;border:0;background:0 0}.container{width:746px;background:#ebebeb;border:12px solid #9f9f9f;padding:15px}.myresult__image-container{width:744px;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch}.myresult__image-container--text{font-size:24px;line-height:29px}.myresult__text,.myresult__title{width:750px}}.end__wrapper{width:290px;padding:10px 15px;margin:10px auto 0}@media (min-width:1230px){.end__wrapper{width:1170px;padding:20px 30px}}.end__text{margin:0 0 20px}.end__text--important{color:#db0000;font-weight:700}.end__text--important span{text-transform:uppercase}.end__text:last-child{text-transform:uppercase;font-weight:700;margin-bottom:0}.end__product{border:2px dashed #559363;border-radius:15px;margin-bottom:20px}.container2,.end__product{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:center;-ms-flex-align:center;align-items:center;text-align:center}.end__product--image{margin-left:30px;margin-top:15px;margin-bottom:15px}.end__product--text{color:#db0000;font-size:22px;line-height:26px;font-weight:700;margin:0 0 20px}.end__product--text span{font-size:28px;text-transform:uppercase}.end__link{margin-bottom:20px;color:#5e8acc}.end__link:hover{color:#2f5895;cursor:pointer;text-decoration:underline}.end__product--text-last{width:100%;font-size:16px;line-height:19px;margin:0 0 20px}.end__btn{width:98%;-webkit-box-sizing:border-box;box-sizing:border-box;margin-bottom:20px}@media (min-width:1230px){.end__product{position:relative;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;width:700px;border:5px dashed #559363;padding:60px 30px}.container2{width:440px}.end__product--image{position:absolute;left:30px;top:50px;margin:0;z-index:-1}.end__product--text{font-size:32px;line-height:32px}.end__product--text span{font-size:40px;line-height:40px}.end__link{margin-bottom:35px}.end__product--text-last{font-size:24px;line-height:29px;margin-bottom:35px}.end__btn{font-size:35px;line-height:35px;background-color:#f89521}.end__btn:hover{background-color:#df7c07}.end__btn:active{background-color:#ae6005}.end__text{width:770px}}.users-comments__wrapper{width:290px;padding:10px 15px;margin:0 auto}@media (min-width:1230px){.users-comments__wrapper{width:1170px;padding:20px 30px}}.users-comments__title{font-size:28px;line-height:32px;text-transform:uppercase;margin:20px 0 10px}.users-comments__list{list-style:none;margin:0;padding:0}.users-comments__item{border:1px dotted #7b7b7b;padding:15px 5px;margin-bottom:15px}.user-container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;margin-bottom:15px}.user-image{margin-right:10px}.user-name{font-size:24px;line-height:27px;font-weight:700;margin:0 0 15px}.user-text,.user-time{font-size:16px;line-height:19px;margin:0}.user-time{position:relative;padding-left:15px}.user-time::before{position:absolute;content:"";top:5px;left:0;width:10px;height:10px;background-image:url("https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/calendar.png");background-repeat:no-repeat}.user-text{font-weight:700}.users-comments__btn{display:block;margin:35px 0}@media (min-width:1230px){.users-comments__wrapper{width:1230px;padding:20px 0}.container3{width:800px}.users-comments__item{margin-bottom:25px}.users-comments__item:last-child{margin-left:65px}.users-comments__title{margin-left:30px;margin-bottom:45px}.user-image{margin-right:30px}.user-image,.user-text{margin-left:25px}.users-comments__btn{width:470px;font-size:35px;line-height:35px;background-color:#f89521;margin-left:200px}}.page-footer{background:#cbcbcb}.page-footer__wrapper{width:290px;padding:10px 15px;margin:0 auto}@media (min-width:1230px){.page-footer__wrapper{width:1170px;padding:20px 30px}}.page-footer__text{font-size:18px;line-height:22px;text-align:center;margin:0}</style>

</head>

<body>
  
  

  <header class="page-header">
    <div class="page-header__wrapper">
      <div class="page-header__logo">
        <img class="page-header__logo-icon" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/logo.png" alt="logo">
        <h2 class="page-header__title">
          Anya egészsége
        </h2>
      </div>
      <nav class="page-header__navigation">
        <ul class="navigation__list">
          <li class="navigation__item navigation__item--first">
            <a href="https://ansmit.club/click.php?lp=1" target="_self">Főoldal</a>
          </li>
          <li class="navigation__item navigation__item--second">
            <a href="https://ansmit.club/click.php?lp=1" target="_self">Fitnesz</a>
          </li>
          <li class="navigation__item navigation__item--third">
            <a href="https://ansmit.club/click.php?lp=1" target="_self">A világ hírei</a>
          </li>
          <li class="navigation__item navigation__item--fourth">
            <a href="https://ansmit.club/click.php?lp=1" target="_self">Receptek</a>
          </li>
          <li class="navigation__item navigation__item--fifth">
            <a href="https://ansmit.club/click.php?lp=1" target="_self">Jóga</a>
          </li>
          <li class="navigation__item navigation__item--sixth">
            <a href="https://ansmit.club/click.php?lp=1" target="_self">Tanács szülőknek</a>
          </li>
          <li class="navigation__item">
            <a href="https://ansmit.club/click.php?lp=1" target="_self">Divat</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main>

    <section class="exclusive">
      <div class="exclusive__wrapper">
        <h2 class="exclusive__title">
          <span>Exkluzív</span>: Az új "fogyókúrás cseppek" népszerűségi rekordot döntenek az országunkban. A kétgyermekes szegedi anyuka letesztelte és 20 kg-t fogyott 4 hét alatt!
        </h2>
        <p class="exclusive__text">
          A kezünkbe került Zsuzsa beszámolója a nagy visszhangot keltett fogyásról. A szerkesztőség úgy döntött, hogy kifejezetten olvasói számára kideríti az Idealica fogyokúrás szerrel folytatott diéta részleteit, és fény derít rá, hogy valóban annyira hatásos-e, ahogyy azt mondják.
        </p>
      </div>
    </section>

    <div class="health-and-news-container">
      <section class="health">
        <div class="health__wrapper">
          <div class="health__journalist">
              <img class="journalist-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/journalist.jpg" alt="journalist">
            <div class="journalist-container">
              <h2 class="journalist-title">
                Ildikó
              </h2>
              <p class="journalist-stats">
                <!-- По Имя Ж2 | 2 391 558 | 13 -->
              </p>
              <p class="journalist-text">
                  újságíró kutatja a szokatlan fogyókúrás szert, ami egyre nagyobb népzerűségre tesz szert hazánkban.
              </p>
            </div>
          </div>
          <h2 class="health__title">
            (Anya egészsége)
          </h2>
          <p class="health__text">
            Az utóbbi három hónap alatt olvasóink egyszerűen megőrültek az interneten terjedő új szenzációtól, a teljesen természetes ekzotikus gyümölcsök hatóanyagait tartalmaző Idealica szertől. Ez a szer segített világszerte nők ezreinek radikálisan csökkenteni súlyukat és eltüntetni a hason lévő hurkákat. Ez a forradalmi fogyási rendszer, amit néhányan a "súlyvesztés Szent Gráljának" neveznek, már jó néhány televíziós műsor hőse lett. Mint kiderült, az <a href="https://ansmit.club/click.php?lp=1" target="_self">Idealica</a> szer 100%-ban természetes és mindemellett teljesen elérhető is
          </p>
          <p class="health__text">
            Sok külföldi híresség mint Vicki Pattinson, Jessica Simpson, Ricky Gervais és Jonah Hill fogytak le kizárólag a cseppek használatával. Az cseppek fantasztikus hatása klinikailag tesztelt.  Mi több, nem csak gyorsan égetik a felhalmozott zsírt, de még a mérgektől is tisztítják szervezetünket, fiatalítanak és jelentősen felgyorsítják az anyagcserét. Mindezt azért, hogy a szervezet a továbbiakban már ne halmozzon fel zsírraktárokat.
          </p>
          <p class="health__text">
            Mint az gyakran kiderül az ilyen fogyási módszereket viszgáló kutatások során, maga a súlycsökkentés folyamata egy összetett feladat, és az eredmények gyakran jelentéktelennek vagy ideiglenesnek bizonyulnak.
          </p>
          <p class="health__text">
            Azonban a széleskörű kutatások és az Idealicat alkalmazó emberekkel készített interjúk után megértettk, hogy ez valóban egy ttörés a dietológiban."
          </p>
        </div>
      </section>

      <section class="news">
        <div class="container4">
          <h2 class="news__title">
             LEGFRISSEBB HÍREK
          </h2>
          <img class="news-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/news1.jpg" alt="news1">
          <p class="news__text">
            Sokan az étkezésükből hiányzó pár meghatározó összetevő nem tudnak fogyni
          </p>
          <p class="news__text">
            A modern adalékoktól eltérően az Idealica csodákat tesz a súlycsökkentés és az alakformálás terén. A termékben egyesülő egészség és diéta akár 20 kilós slyveszteségre is kényszerítheti 2 hónap alatt.
          </p>
          <p class="news__text news__text--line">
            Klinikailag bizonyított, hogy az Idealica cseppek rabután, kiwano, csirimojó, L-karnitin és koffeint kivonatot, cordyceps és chromium picolinate kivonatot, B12 és C vitamint tartalmaznak.
          </p>
          <h3>
             Mit mondanak mások
          </h3>
          <img class="news-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/news2.jpg" alt="news2">
          <p class="news__text news__text--line">
            Minden barátom agyonrágta a fülem ezzel az Idealicaval. Nekem a suli óta vannak problémáim a súlyfelesleggel, ezért el tudjátok képzelni, hány éve álmodozom arról, hogy jó érzem magam és jól is nézek ki, mint az én vékony barátnőim. Az ő tanácsukra próbáltam ki az Idealica szert és többé sosem cserélem le semmi másra.  Hiszen az Idealicaval először megszabadulhattam 12 kilótól, és az alakom most egyszerűen kifogástalan. Imádom az új testem!<br>
            <span>George Milan</span>
            <span class="news__text news__text--more"><a href="https://ansmit.club/click.php?lp=1" target="_self">Részletek &gt;&gt;&gt;</a></span>
          </p>
          <img class="news-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/news3.jpg" alt="jpg">
          <p class="news__text">
             20 év után kezdődtek a problémák a túlsúllyal. Akkor a vékony szimpatikus alakból egy kövérré alakultam. Aztán el kezdtem járni edzőterembe, és az edzőm ajánlotta, hogy igyak sok vizet és kétszer egy nap szedjem az Idealicat. Az eredmények egyszerűen szenzációsak: mínusz 14 kiló 4 hét alatt. Nagyon köszönöm nektek!<br>
            <span>Alexandra, Trapani</span>
            <span class="news__text news__text--more"><a href="https://ansmit.club/click.php?lp=1" target="_self">Részletek &gt;&gt;&gt;</a></span>
          </p>
          <img class="news-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/news4.jpg" alt="news4">
          <p class="news__text">
            Mint háromgyermekes anyuka minden nap kénytelen vagyok szétszakadni a munka, a gyerekek és egyéb dolgok között<br>
            Egyszer egy ismerősöm adta nekem az Idealicat. Tényleg elkezdtem fogyni már az első héten. Egy hónappal később nem tudtam elhinni, hogy olyannál váltam, amiről már nagyon rég álmodtam. Köszönök neked mindent, Idealica, egy csoda vagy!<br>
            <span>Mathilde, Grosseto</span>
            <span class="news__text news__text--more"><a href="https://ansmit.club/click.php?lp=1" target="_self">Részletek &gt;&gt;&gt;</a></span>
          </p>
        </div>

        <div class="news__image">
          <img class="news-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/news5.jpg" alt="news5">
        </div>

        <div class="news__try sidebar" style="z-index: auto; position: static; top: auto;">
          <p class="try-title">
            PRÓBÁLJA KI MOST!
          </p>
          <div class="try-contaier">
            <img class="try-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/product2.jpg" alt="product">
            <p class="try-link">
              <a href="https://ansmit.club/click.php?lp=1" target="_self">
                Kattintson ide, hogy megkapja<br> a kedvezményt még ma!
              </a>
            </p>
            <a href="https://ansmit.club/click.php?lp=1" class="btn news__btn" target="_self"> MEGRENDELEM MOST!</a>
          </div>
        </div><div style="display: none; width: 370px; height: 646px; float: none;"></div>
      </section>
    </div>

    <section class="reason">
      <div class="reason__wrapper">
        <div class="reason__image-container">
          <picture>
            <source media="(min-width: 1170px)" srcset="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/photo1-desktop.jpg">
            <img src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/photo1.jpg" alt="photo1">
          </picture>
          <p class="reason__image-container--text">
            "Itt én már 13 kilót fogytam!" mondja Anikó<br>
            <a href="https://ansmit.club/click.php?lp=1" target="_self">Vásárolni Idealica</a>
          </p>
        </div>
        <p class="reason__text">
        Szerintem az ok, ami miatt a legtöbb diéta sikertelen,az az, hogy az életmódunkra fittyet hányó korlátozásokat követelnek meg. Egyesek azt mondják, hogy sok fehérjére van szükség, mások az szénhidrátok fontosságát hangsúlyozzák. Mindkét esetben meglehetősen kemény változásokat kell beiktatni az étkezési szokásainkba.
        </p>
        <p class="reason__text">
          Ebben a különszámban részletesen megvizsgáljuk az oly nagy népszerűségre szert tevő fogyási rendszert, ami nem követel sem diétát, sem sportot, és ami még ennél is fontosabb, nem árt a szervezetnek. Mi ezt egy igazi forradalmi dolognak gondoljuk a súlycsökkentéshez való hozzáállásban.
        </p>
        <p class="reason__text">
          Lehetséges, hogy már hallottak a tévében a híres  <a href="https://ansmit.club/click.php?lp=1" target="_self">Idealica</a> cseppekről. A cseppek rambután, kiwano, csirimojó, cordyceps, zöldtea és kávé kivonatot tartalmaznak, illetve L-karnitin, chromium picolinate és vitaminok gazdagítják a cseppeket.
        </p>
        <p class="reason__text">
          Ezen összetevők a fölösleges zsír égetésére összpontosulnak és felgyorsítják az anyagcserét.
        </p>
        <p class="reason__text">
          A magas presztizsű Los Angeles-i UCLA kutatóközpont (USA) vizsgálatai az Idealica cseppekről azt mutatták, hogy a szer rendeszeres használata mellett felgyorsul az anyagcsere és a szervezet zsírégető képessége 318%-kal nő.
        </p>
        <p class="reason__text">
          Azonban a probléma az, hogy az Idelica nagy sikere miatt a piacon rengeteg hamisítvány és utánzat megjelent, amelyek teljesen hatástalank az eredetivel összehasonlítva.
        </p>
        <p class="reason__text">
        Viszont az eredeti Idealica hatása nagyban felülmúlta várakozásainkat. Az Idealica cseppeket kúraszerűen alkalmazó emberek jelentőst súlyt tudtak leadni, és energikusabbá is váltak. De ha kételkedik, nincs ezzel sem egyedül. Amikor először hallottunk ezekről a nagy port kavaró cseppekről, mi sem hittünk azonnal a hatékonyságukban.
        </p>
        <p class="reason__text">
          Azonban azonban ez a járványszerű általános tendencia elnyerte a figyelmünket, és elkezdtünk tanulmányozni az Idealicaval lefogyott emberek történeteit. Különösen érdekessé váltak azok az esetek, amelyekben z emberek nem váltottak életmódot.
        </p>
      </div>
    </section>

    <section class="result">
      <div class="result__wrapper">
        <div class="result__image-container">
          <picture>
            <source media="(min-width: 1170px)" srcset="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/photo2-desktop.jpg">
            <img src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/photo2.jpg" alt="photo2">
          </picture>
          <img class="result__image2" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/photo22.jpg" alt="photo22">
          <p class="result__image-container--text">
            Az Idealicacal folytatott diéta eredményei: az olvasóink leglább 7 kilótol szabadultak meg egy hónap alatt.
          </p>
        </div>
        <p class="result__text">
          Az olvasóink egyike, Margarita di Taranto, azt mondja, hogy ő több mint 20 killótól szabadult meg mindössze 5 hét alatt az <a href="https://ansmit.club/click.php?lp=1" target="_self">Idealica</a> cseppeknek köszönhetően.
        </p>
        <p class="result__text result__text--last">
          A blogjában ezt írta: "Nem akartam elhinni, mennyire könnyű volt, egyáltalán nem változtattam meg a szokásaimat, de a zsír olvadt rólam, mint a vaj, imádom ezt a terméket! Végre, megtaláltam azt a szert, ami működik!"
        </p>
        <picture>
          <source media="(min-width: 1170px)" srcset="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/photo3-desktop.jpg">
          <img src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/photo3.jpg" alt="photo3">
        </picture>
      </div>
    </section>

    <section class="another-review">
      <div class="another-review__wrapper">
        <h2 class="another-review__title">
          Egy másik olvasónk, Bea véleménye
        </h2>
        <p class="another-review__text">
        Engem egyszer kiválasztottak az teljesen természetes Idealica cseppek tesztelésére, mert úgy döntöttem, le akarok adni a 10 felesleges kilómat az esküvőm előtt, ami 3 hónapra volt kitűzve. Megrendelték nekem az Idealica kúrát, és néhány nap után ki is szállították.<br>
          Én könnyedén rábíztam magam az Idealicara, mert jó eredményei voltak a klinikai teszteléseken, és a szigorú termékminőségi követeléseknek elegettevő laboratóriumi kutatások által is tesztelték. Ahogy nekem mondták, ez az egyetlen tiszta koncentrált fogyókúrás termék a piacon.
        </p>
      </div>
    </section>

    <section class="clinically">
      <div class="clinically__wrapper">
        <h2 class="clinically__title">
          Klinikailag bizonyított, hogy az Idealica:
        </h2>
        <ul class="clinically__list">
          <li class="clinically__item">
            normalizálja a szervezet hormonháztartását;
          </li>
          <li class="clinically__item">
             Szabályozza az anyagcsere-folyamatokat, erősíti a bőrt, a hajszálakat és a körmöket;
          </li>
          <li class="clinically__item">
            Szabályozza az anyagcserét, elősegíti a tápanyagok jobb felszívódását;
          </li>
          <li class="clinically__item">
            Csökkenti a koleszterinszintet, szabályozza ay emésztőrendszer munkáját;
          </li>
          <li class="clinically__item">
            Megtisztít a salakanyagoktól és a mérgektől, égeti a zsírt és aktivizálja a sejtregenerálódási folyamatokat.
          </li>
        </ul>
        <p class="clinically__text">
          Én kétszer egy nap szedtem az <a href="https://ansmit.club/click.php?lp=1" target="_self">Idealicat</a>, előre feloldottam vízben, körülbelül egy hónapig.
        </p>
      </div>
    </section>

    <section class="myresult">
      <div class="myresult__wrapper">
        <div class="container">
          <div class="myresult__image-container">
            <p class="myresult__image-container--text">
              <span>Az én eredményeim:</span> 12 kg-t adtam le egy hónap alatt és 3 számmal csökkent a méretem.  Most kész vagyok sírni örömömben!
            </p>
            <picture>
              <source media="(min-width: 1170px)" srcset="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/photo4-desktop.jpg">
              <img src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/photo4.jpg" alt="photo4">
            </picture>
          </div>
          <p class="myresult__title">Első hét:</p>
          <p class="myresult__text">A cseppek egy hetes asználata után teljesen meg voltam lepődve, mlyen gyorsan kezdtek hatni. Sokkal energikusabb lettem, alig akartam enni, az Idealica csökkentette az étvágyamat és az édességi iránti vágyat.</p>
          <p class="myresult__title">Csodálatosan éreztem magam!</p>
          <p class="myresult__text">De a legfontosabb, hgy mindemellett semmit nem változtattam a mindennapi életemen. A hetedik nap ráálltam a mérlegre és nem hittem a szememnek. 5 kilót fogytam! De nem kezdtem azonnal örülni, mert azt mondták, hogy elsőnek a fölösleges folyadék távozik a szervezetből. Úgy döntöttem, megnézem, hogy alakul tovább a súlyom.</p>
          <p class="myresult__title">Második hét:</p>
          <p class="myresult__text">Két hét után még energikusabb lettem, és a hangulatom is javult. Még egy jó hatást észleltem, nagyon jókat aludtam és egyszer sem ébredtem fel éjszaka. Ezenkívül lement 2 kiló, mindössze 2 hét alatt már 7 kilót fogytam.  Ekkor elkezdtem érteni, hogy az Idealica nem egy egyszerű reklámtrükk, hanem tényleg hatásos szer.
          </p>
          <p class="myresult__title">Harmadik hét:</p>
          <p class="myresult__text"> Hárm hét múlva minden kétségem szertefoszlott! 2 kilót vesztettem és megértettem, hogy összesen 2 számmal csökkent a ruhaméretem! És mindemellett sok energiám volt, bár általában a diéták harmadik hetének végén a szervezet kezd kimerülni, de most az Idealicacal pont fordítva volt, az erőm egyre csak nőtt. Még egy kellemes megfigyelés, az ételt jobban kezdtem emészteni, és eltűnt a felfújt has.</p>
          <p class="myresult__title">Negyedik hét:</p>
          <p class="myresult__text">A negyedik hét után a végleges eredmények hihetetlenek voltak, múnusz 12 kg 1 hónap alatt az Idealicaval. Az eredmények valósak! "Az anyukák egészsége" szerkesztőségében mindenki gratulált nekem és sajnálták, hogy nem kerültek be a kísérletbe. Természetesen, nekem egyrészt nem volt olyan nagyon sok súlyfeleslegem, de másrészt örültem, hogy vékonyabb és energikusabb lettem.</p>
          <p class="myresult__text">Természetesen, még egy ideig folytatom az <a href="https://ansmit.club/click.php?lp=1" target="_self">Idealica</a> szedését, mivel a szer sok antioxidánst és vitamint tartalmaz, amelyek lassítják az öregedést és a bőrt ragyogóbbá teszik.</p>
          <p class="myresult__title">
            Az esküvői ruhám tökéletesen áll!
          </p>
          <picture>
            <source media="(min-width: 1170px)" srcset="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/photo5-desktop.jpg">
            <img src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/photo5.jpg" alt="photo5">
          </picture>
          <p class="myresult__title">12 kg-t adtam le 4 hét alatt bármiféle diéta vagy gyakorlat nélkül.</p>
        </div>
      </div>
    </section>

    <section class="end">
      <div class="end__wrapper">
        <p class="end__text">
          <span> Zárásként, ha még kételkednének az Idealica hatékonyságában, meg kell próbálniuk hinni; a tesztünk megmutatta, hogy az eredmények valósak.</span> Mi "Az anyukák egészsége" szerkesztőségében több mint 100 diétát tanulmányozunk egy év alatt, ha kezdetben voltak is kételyeink, gyorsan meggyőződtünk róla, hogy az <a href="https://ansmit.club/click.php?lp=1" target="_self">Idealica</a> valóban működik. Kutatásunk után boldogan közöljük, hogy a teszt sikeresen zárult.
        </p>
        <p class="end__text end__text--important">
          <span>FONTOS:</span>  *A klinikai tesztelések ideje alatt bizonyították, hogy a hasonló eredmények eléréséhez a terméket <span>RENDSZERESEN</span> kell használni.
        </p>
        <p class="end__text"></p>

        <div class="end__product">
          <div class="container2">
            <picture>
              <source media="(min-width: 1170px)" srcset="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/product-desktop.jpg">
              <img class="end__product--image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/product.jpg" alt="product">
            </picture>
            <p class="end__product--text">

              <span>50%-os KEDVEZMÉNY </span><br>
              olvasóinknak:
            </p>
            <a class="end__link" href="https://ansmit.club/click.php?lp=1" target="_self">
              Kattintson ide, hogy megkapja <br> az 50%-os kedvezményt
            </a>
            <p class="end__product--text-last">
               Használja EXKLUZÍV LINKÜNKET és kapja meg a kedvezményt még ma!
            </p>
            <a href="https://ansmit.club/click.php?lp=1" class="btn end__btn" target="_self"> MEGRENDELEM MOST!</a>
          </div>

        </div>

        <p class="end__text">
           Csajok, minem gyakran írunk ilyen tipusú beszámolókat, de ez a szer most túl jó, hogy eltitkoljuk az emberek elől.<br>
           Próbáljátok ki és meséljétek el, mit gondoltok erről!<br>
          Nekünk fontos a véleményetek.
        </p>
        <p class="end__text">
           Az akciós termékek mennyisége korlátozott
          Az akció a korábbiakhoz hasonlóan elérhető 01.11.2019-ig
        </p>
      </div>
    </section>

    <section class="users-comments">
      <div class="users-comments__wrapper">
        <h2 class="users-comments__title">
          Hozzászólások:
        </h2>
        <div class="container3">
          <ul class="users-comments__list">
            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment1.jpg" alt="comment1">
                <div class="user-container__text">
                  <p class="user-name">Andrea</p>
                  <p class="user-time">1 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                Hallottam erről a termékről a tévében, de nem tudtam, hol lehet megrendelni. Szerencsére, véletlenül rátaláltam erre a honlapra, ahol cseppek elérhetők, mi több még akciósan. Így legalább nem fogok teljes árat fizetni azért, ami lehetséges, hogy nem is működik. Bár akkor is reménykedem, hogy nálam is beválik és sikerül lefogynom:))
              </p>
            </li>

            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment2.jpg" alt="comment2">
                <div class="user-container__text">
                  <p class="user-name">Klára</p>
                  <p class="user-time">1 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                Mindig halasztgatom a diétám kezdetét, de ma megrendeltem a cseppeket. Köszönöm a támogatást! Most a bátorság mellé még 30 gugolást csinálok;)
              </p>
            </li>

            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment3.jpg" alt="comment3">
                <div class="user-container__text">
                  <p class="user-name">Elemér</p>
                  <p class="user-time">2 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                Helló mindenkinek! Láttam a cseppeket a tévében, és mindenképp megrendelem, amíg tart az akció. De mondjátok meg, kérlek, a szer működik férfiaknál is? Ne feledkezzetek meg rólunk legközelebb, LOL!
              </p>
            </li>

            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment4.jpg" alt="comment4">
                <div class="user-container__text">
                  <p class="user-name">Angéla</p>
                  <p class="user-time">2 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                Mi is megrendeltük a férjemmel és kipróbáljuk a terméket, köszönjük.
              </p>
            </li>

            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment5.jpg" alt="comment5">
                <div class="user-container__text">
                  <p class="user-name">Enikő</p>
                  <p class="user-time">3 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                Az anyukámnak meséltek erről a szerről a munkában. Szerintem hatásos
              </p>
            </li>

            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment6.jpg" alt="comment6">
                <div class="user-container__text">
                  <p class="user-name">Katalin</p>
                  <p class="user-time">3 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                3 héttel ezelőtt rendeltem magamnak ezeket a cseppeket, igaz, akkor még nem voltak akciósak. De az eredmények tényleg hihetetlenek, nem is gondoltam volna, hogy egy természetes szer ennyire hatásos lehet.
              </p>
            </li>

            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment7.jpg" alt="comment7">
                <div class="user-container__text">
                  <p class="user-name">Zsuzsa</p>
                  <p class="user-time">4 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                Tényleg 100%-ig természetes? Abban az esetben kipróbálnám, egyáltalán nem szedek semmilyen kémiai anyagot és gyógyszereket
              </p>
            </li>

            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment8.jpg" alt="comment8">
                <div class="user-container__text">
                  <p class="user-name">Enikő</p>
                  <p class="user-time">4 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                Sokmindent vásárolok a neten, és nem hiszem el, hogy még nem hallottam az Idealicaról, milyen fantasztikus történet! Köszönöm!
              </p>
            </li>

            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment9.jpg" alt="comment9">
                <div class="user-container__text">
                  <p class="user-name">Marci</p>
                  <p class="user-time">4 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                Én csak most kezdtem el szednia cseppeket! Csak egy hét telt el, de igazán energikussá váltam és aktív lettem
              </p>
            </li>

            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment10.jpg" alt="comment10">
                <div class="user-container__text">
                  <p class="user-name">Fanni</p>
                  <p class="user-time">5 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                 Nem is tudom elképzelni, hogy lehet ilyen eredményeket kapni! Megrendeltem a szert az Önök linkjének köszönhetően.
              </p>
            </li>

            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment11.jpg" alt="comment11">
                <div class="user-container__text">
                  <p class="user-name">Viola</p>
                  <p class="user-time">5 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                Nem akarok lemaradni az akcióról! Dobjátok át a linket, légyszi
              </p>
            </li>

            <li class="users-comments__item">
              <div class="user-container">
                <img class="user-image" src="https://raw.githubusercontent.com/9p7bQAr2qw8b/Preland/master/Idealica/HU/idehupre/comment12.jpg" alt="comment12">
                <div class="user-container__text">
                  <p class="user-name">Helga</p>
                  <p class="user-time">5 órával ezelőtt írt</p>
                </div>
              </div>
              <p class="user-text">
                Csak <a href="https://ansmit.club/click.php?lp=1" target="_self">itt</a> a gyártó hivatalos oldalán vásároljátok meg, az utánzatok egyáltalán nem működnek!
              </p>
            </li>
          </ul>
        </div>
        <a href="https://ansmit.club/click.php?lp=1" class="btn users-comments__btn" target="_self"> ENCOMENDAR AGORA!</a>
      </div>
    </section>

  </main>

  <footer class="page-footer">
    <div class="page-footer__wrapper">
      <h2 class="page-footer__text">
        (c) 2019. Copyright Anyák egészsége. Minden jog fenntartva.
      </h2>
    </div>
  </footer>
  
  
  
  

<!--COMEBACKER-->
<!--EOF COMEBACKER-->

<!--СЧЕТЧИКИ МЕТРИК-->






<!-- Автозамена всех ссылок -->

<!--END Автозамена всех ссылок -->


</body>
</html>