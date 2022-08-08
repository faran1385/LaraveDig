<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <link href="https://v1.fontapi.ir/css/Yekan" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <link href="https://cdnout.com/vazir-font/Farsi-Digits/font-face-FD.css" />
        <link rel="stylesheet" type="text/css" href="public/Glider.js-master/glider.css">
        <title>Laravel</title>
        <style>
            @font-face {
                font-family: vazir;
                src: url(./font/fonts/webfonts/Vazirmatn-Bold.woff2);
            }
            *{
                margin: 0;
                padding: 0;
                user-select: none;
                font-family:vazir;
            }
            ::-webkit-scrollbar {
                width: 10px;
            }

            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            ::-webkit-scrollbar-thumb {
                background: #bbb9b9;
                border-radius: 9px;
            }
            .conection-Digikala-Con input::placeholder{
                font-size: 1.1rem;
                color: #c0bfbf;
            }
        </style>
    </head>
    <body class="overflow-x-hidden">
    <div class="header w-full h-40">
        <div class="search-Bar w-full h-20 flex">
            <img src="icons/shop.png" class="shop-Icon w-8 absolute top-6 left-8"  style="transform: rotateY(180deg);"/>
            <div class="shop-Icon-Con w-20 h-8 absolute top-6" style="border-right: 1px solid #ded7d7;"></div>
            <button class="register bg-white w-40 h-12 rounded-md flex justify-center items-center cursor-pointer absolute top-4 left-28" style="border: 1px solid #eeeeee">
                ورود | ثبت نام<img src="icons/logout.png" class="logOut w-6 relative left-4 "  style="transform: rotateY(180deg);"/>
            </button>
            <div class="search h-12 absolute top-7 right-52 rounded-b-md text-center rounded-md" style="width: 30rem;background-color: #eeeeee"><span class="search-Word relative left-1/3 opacity-30 top-3">جستجو</span></div>
            <img
                src="	https://www.digikala.com/statics/img/svg/logo.svg"
                class="dig-Icon w-32 h-32 absolute"
                style="   top: -1%; right: 2%;"
            />
        </div>
        <div class="navBar-Con">
            <ul class="navBar w-full flex mt-4 items-baseline" style="flex-shrink: 2">
                <li class="pt-4 ml-4 mr-4 list-none cursor-pointer opacity-70 absolute h-2" style="border-left: 1px solid #ccc;top: 12.7%;left: 54.3%"></li>
                <li class="pt-4 ml-4 mr-4 list-none cursor-pointer opacity-70 relative" style="left: 1%;">
                    لطفا شهر خود را انتخاب کنید<img
                        src="icons/location.png"
                        class="navBar-Icons relative opacity-70"
                        style="width: 1.3rem;left: 105%;bottom:1.5rem;"
                    />
                </li>
                <li class="pt-4 ml-4 mr-6 list-none cursor-pointer opacity-70 relative" style="left: 27%">! فروشنده شوید</li>
                <li class="pt-4 ml-4 mr-6 list-none cursor-pointer opacity-70 relative" style="left: 27%">سوالی دارید؟</li>
                <li class="pt-4 ml-4 mr-6 list-none cursor-pointer opacity-70 relative" style="left: 27%">
                    شگفت انگیزها<img src="icons/discount.png" class="navBar-Icons relative opacity-70" style="width: 1.3rem;left: 105%;bottom:1.5rem;" />
                </li>
                <li class="pt-4 ml-4 mr-6 list-none cursor-pointer opacity-70 relative" style="left: 27%">
                    تخفیف ها و پیشنهادها<img src="icons/off.png" class="navBar-Icons relative opacity-70" style="width: 1.3rem;left: 105%;bottom:1.5rem;" />
                </li>
                <li class="pt-4 ml-4 mr-6 list-none cursor-pointer opacity-70 relative" style="left: 27%">پرفروش ترین<img src="icons/fire.png" class="navBar-Icons relative opacity-70" style="width: 1.3rem;left: 105%;bottom:1.5rem;" /></li>
                <li class="pt-4 ml-4 mr-6 list-none cursor-pointer opacity-70 relative" style="left: 27%">
                    سوپر مارکت<img src="icons/supermarket.png" class="navBar-Icons relative opacity-70" style="width: 1.3rem;left: 105%;bottom:1.5rem;" />
                </li>
                <li class="pt-4 ml-6 mr-6 list-none cursor-pointer opacity-70 relative" style="left: 27%">
                    دسته بندی کالاها<img src="icons/more.png" class="navBar-Icons relative opacity-70" style="width: 1.3rem;left: 105%;bottom:1.5rem;" />
                </li>
                <li class="pt-4 ml-4 mr-4 list-none cursor-pointer opacity-70 absolute h-2" style="border-left: 1px solid #ccc;top: 12.7%;right: 9.3%;"></li>
            </ul>
        </div>
    </div>
    <hr style="border-top:1px solid #777676" />
    <div class="bradcroumpt-Con w-full flex h-8">
        <div class=" flex h-8">
            <div class="sale-DG mt-4 ml-8 cursor-pointer">
                <img src="icons/market.png" class="sale-Icon h-8 w-12 opacity-70 pr-3 relative bottom-2 right-2" />
                <p class="relative bottom-7 left-8">فروش در دیجی کالا</p>
            </div>
        </div>
        <div class="bradcroumt absolute flex h-8 cursor-pointer" style="top: 20%;right: 1%;">
            دیجی‌کالا / کالای دیجیتال / لپ تاپ / لپ تاپ و الترابوک
        </div>
    </div>
    <div class="offer-Con flex w-full mt-16 h-8">
        <div class="product-Brad h-8 flex justify-end cursor-pointer" style="width: 65.5%;color: #05bbbb" >
            ایسوس
            <span style="color: #ccc; padding-right: 0.5rem; padding-left: 0.5rem"
            >/</span
            >

            لپ تاپ و الترابوک ایسوس
        </div>
        <div class="offer flex justify-end pr-4" style="width: 34.5%;color: red">
            <span style="padding-right: 1rem"> ۱ : ۰۹ : ۰۷ : ۵۸</span>پیشنهاد شگفت
            انگیز
        </div>
    </div>
    <div class="product-Name mt-8" style="font-size: 1.3rem;margin-left: 40rem">
        <span style="padding-right: 0.5rem">X543MA-DM1098</span>لپ تاپ 15.6 اینچی
        ایسوس مدل
    </div>
    <div class="product-Engilsh-Name w-full mt-4 flex opacity-70">
        <div style="width: 30rem; border-top:1px solid #cccccc" class="mt-1.5 ml-96"></div>
        <div class="text-xs">ASUS X543MA-DM1098 15.6 inch Laptop</div>
    </div>
    <div class="product-Information w-full flex" style="height: 30rem">
        <div class="buy-Section absolute rounded-lg" style="width: 20%;left: 2%;top: 38%;height: 35rem;border: 1px solid rgba(0, 0, 0, .2);background-color: #f8f8f8;">
            <div class="saler relative cursor-default w-6/12" style="top: 5%;left: 78%">فروشنده</div>
            <div class="another-Saler relative w-6/12 opacity-70 flex cursor-pointer text-sm" style="left: 5%;color: #05bbbb">
                <p>فروشنده دیگر</p>
                <p>&nbsp;۱</p>
            </div>
            <div class="saler-Details flex flex-col">
                <div class="saler-Name-Con">
                    <div class="saler-Name absolute" style="left: 60%;top: 15%">
                        دیجی کالا <img src="icons/dig.png" class="saler-Logo w-6 h-6 relative bottom-6"  style="left: 120%;border-top-right-radius: 0.4rem;border-bottom-right-radius: 0.4rem;"/>
                    </div>
                    <div class="Satisfaction w-10 absolute text-xs" style="width: 80%;top: 23%;left: 10%;border-bottom: 1px solid #cccccc;">
                        <div class="function flex pl-16 pt-2.5 cursor-pointer relative bottom-4">
                            <p style="color: green">عالی&nbsp;</p>
                            <p>عملکرد</p>
                            <p style="color: darkkhaki">&nbsp; | ۷۲.۸٪ &nbsp;</p>
                            <p>رضایت از کالا &nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="backUp h-12 absolute top-1/3 flex" style="width: 80%;left: 10%;border-bottom: 1px solid #cccccc;font-size: .7rem;direction: rtl">
          <span class="backup-Text pr-9"
          >گارانتی ۲۴ ماهه یکپارچه (سازگار، حامی(ویستا) و آواژنگ)</span
          >
                <img src="icons/shild.png" class="backup-Icon w-8 h-8 absolute"style="left: 89%" />
            </div>
            <div class="store absolute h-20 cursor-pointer" style="width: 80%;top: 43%;left: 10%;border-bottom: 1px solid #cccccc;">
                <div class="instore absolute opacity-90" style="top: 10%;left: 30%">موجود در انبار دیجی کالا</div>
                <div class="send absolute opacity-90 text-sm" style="top: 60%;left: 40%">ارسال دیجیکالا</div>
                <div class="blue-Circle absolute w-2 h-2" style="top: 72%;left: 93%;background-color: aqua;border-radius: 90%"></div>
                <div class="left-Arrow text-2xl opacity-50"><</div>
                <img src="./icons/pack.png" class="store-Pack-Icon w-8 h-8 absolute" style="top: 8%;left: 89%" />
                <img src="./icons/truck.png" class="stre-Truck-Icon w-4 h-4 absolute"  style="transform: rotateY(180deg);left: 75%;top: 65%"/>
            </div>
            <div class="dig-Club flex h-8 absolute" style="width: 80%;top: 60%;left: 10%;border-bottom: 1px solid #cccccc;">
                <img src="icons/info.png" class="dig-Club-Info-Icon relative w-6 h-6 opacity-60" style="top: -8%;left: 25%"/>
                <p class="relative opacity-50 text-sm" style="top: 5%;left: 30%;">امتیاز دیجی‌کلاب</p>
                <p class="relative opacity-50 text-sm" style="top: 5%;left: 30%;">&nbsp;۱۵۰</p>
                <img
                    src="https://www.digikala.com/statics/img/svg/club-point.svg"
                    class="dig-Club-Coin-Icon w-6 h-6 relative cursor-pointer opacity-60"
                    style="left: 37%;"
                />
            </div>
            <div>
                <div class="prv-Price opacity-70 absolute left-1/4" style="top: 70%;text-decoration: rgba(0,0,0,.6)">۷,۰۰۰,۰۰۰</div>
                <div class="product-Discount w-10 h-5 rounded-2xl absolute flex justify-center items-start text-white" style="border-bottom: 1px solid #cccccc;top: 70%;left: 8%;background-color: #ef4056;">۹٪</div>
                <div class="product-Price absolute flex text-xl" style="top: 75%;left: 8%">
                    <p class="toman-Icon text-xs opacity-70 pr-2 pl-2">تومان</p>
                    <p>۶,۳۹۹,۰۰۰</p>
                </div>
                <div class="product-Wahtcher flex text-xs opacity-60 absolute" style="top: 82%;left: 30%">
                    <p>نفر در حال مشاهده این کالا هستند</p>
                    <p>&nbsp;۱۰+</p>
                </div>
                <img src="icons/eye.png" class="watchers-ICon w-4 h-4 absolute opacity-60 " style="top: 82%;left: 87.2%"/>
                <button class="buy-Btn h-10 border-none rounded-md text-white cursor-pointer absolute" style="background-color: #ef4056;;width: 80%;left: 10%;top: 90%">افزودن به سبد خرید</button>
            </div>
        </div>
        <div class="product-Mini-Details absolute" style="border-bottom: 1px solid #cccccc;width: 43%;height: 32rem;top: 42%;left: 23%">
            <div class="rate w-full h-8 flex pt-8">
                <p style="padding-left: 28.5rem;color: #05bbbb" class="rate-Font text-xs relative top-1 cursor-pointer">پرسش</p>
                <p class="rate-Font text-xs relative top-1 cursor-pointer" style="color: #05bbbb">۱۳۵</p>
                <p class="dot-Rate text-4xl opacity-50 relative bottom-4 pr-2 pl-2">.</p>
                <p class="rate-Font text-xs relative top-1 cursor-pointer" style="color: #05bbbb">دیدگاه</p>
                <p class="rate-Font text-xs relative top-1 cursor-pointer" style="color: #05bbbb">۱۰۵</p>
                <p class="dot-Rate text-4xl opacity-50 relative bottom-4 pr-2 pl-2">.</p>
                <p class="opacity-50">(۱۴۰)</p>
                <p class="text-xs pt-1">&nbsp۳.۸&nbsp</p>
                <img
                    src="https://www.digikala.com/statics/img/png/star-yellow.png"
                    class="product-Rate-Icon relative bottom-0.5 w-6 h-6"
                    style="left:2%;"
                />
            </div>
            <div class="suggestion flex opacity-60 text-xs mt-8 relative left-2">
                <img src="icons/info.png" class="suggestion-Info w-6 h-6 opacity-30 relative bottom-1 cursor-pointer" style="margin-left: 24rem;right: 1%"/>
                <p>نفر از خریداران، این کالا را پیشنهاد کرده اند</p>
                <p>&nbsp;(60)</p>
                <p>&nbsp;74%&nbsp;</p>
                <img src="icons/like.png" class="suggestion-Like w-6 h-6 relative left-2.5"  style="bottom: .3rem"/>
            </div>
            <div class="product-Color flex relative justify-end" style="top: 6%">
                <p>خاکستری&nbsp;</p>
                <p class="mr-3">: رنگ</p>
            </div>
            <div class="product-Color-Btns-Con h-8 flex justify-end relative" style="width: 99%;top: 10%">
                <div class="product-Color-Btn w-8 h-8 ml-4 cursor-pointer rounded-full" style="background-color: gray;border: 5px solid whitesmoke;"></div>
                <div class="product-Color-Btn w-8 h-8 ml-4 cursor-pointer rounded-full" style="background-color: darkblue;border: 5px solid whitesmoke;"></div>
            </div>
            <p class="property-Title absolute top-1/2 text-xl" style="left: 88%;">ویژگی ها</p>
            <ul class="property relative flex items-end flex-col top-1/4 " style="width: 80%;left: 17%">
                <li style="list-style: none" class="text-xs  h-6 flex mt-4 justify-end items-center">Celeron : سری پردازند<span class="property-Dot text-4xl relative opacity-20 pl-2 bottom-1">.</span></li>
                <li  style="list-style: none" class="text-xs flex h-6 flex mt-4 justify-end items-center">
                    <p>گیگابایت</p>
                    <p>&nbsp;۴&nbsp;</p>
                    <p>: RAM حافظه پردازنده</p>
                    <span class="property-Dot text-4xl relative opacity-20 pl-2 bottom-1">.</span>
                </li>
                <li style="list-style: none" class="text-xs flex h-6 flex mt-4 justify-end items-center">
                    <p>&nbsp;DDR4&nbsp;</p>
                    <p>: RAM نوع حافظه</p>
                    <span class="property-Dot text-4xl relative opacity-20 pl-2 bottom-1">.</span>
                </li>
                <li style="list-style: none" class="text-xs h-6 flex mt-4 justify-end items-center">
                    intel :&nbsp;سازنده پردازنده گرافیکی
                    <span class="property-Dot text-4xl relative opacity-20 pl-2 bottom-1">.</span>
                </li>
                <li style="list-style: none" class="text-xs h-6 flex mt-4 justify-end items-center">
                    اندازه صفحه نمایش : ۱۵.۶ اینج<span class="property-Dot text-4xl relative opacity-20 pl-2 bottom-1">.</span>
                </li>
                <li style="list-style: none;right:1.3rem;color: #05bbbb" class="seeMore-Mini-Details text-xs relative cursor-pointer mt-2 right-20">< مشاهده بیشتر</li>
            </ul>
        </div>
        <div class="product-Image bg-no-repeat bg-cover absolute" style="right: 2%;top: 40%;width: 30%;height: 30rem;background-image: url(https://dkstatics-public.digikala.com/digikala-products/e214a4901228545031d8548c935f8c9e7187fca3_1654687515.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90)"></div>
        <div class="side-Icons-Con flex flex-col absolute" style="right: 1%;top: 35%">
            <img src="icons/heart.png" class="side-Icons w-6 h-10 cursor-pointer pb-5" />
            <img src="icons/share.png" class="side-Icons w-6 h-10 cursor-pointer pb-5" />
            <img src="icons/bell.png" class="side-Icons w-6 h-10 cursor-pointer pb-5" />
            <img src="icons/chart.png" class="side-Icons w-6 h-10 cursor-pointer pb-5" />
            <img src="icons/compare.png" class="side-Icons w-6 h-10 cursor-pointer pb-5" />
            <img bottom-1
                src="icons/list.png"
                style="transform: rotateY(180deg)"
                class="side-Icons side-Icons w-6 h-10 cursor-pointer pb-5"
            />
        </div>
    </div>
    <div class="take-Back-Con top-full absolute flex" style="width: 45%;left: 27.5%">
        <p class="take-Back opacity-60 text-xs">
            امکان برگشت کالا در گروه لپ تاپ و الترابوک با دلیل "انصراف از خرید" تنها
            در صورتی مورد قبول است که پلمب کالا باز نشده باشد
        </p>
        <img src="icons/info.png" class="take-Back-Info w-7 h-6 opacity-60 pl-2 relative bottom-1" />
    </div>
    <div class="product-Image-Tems absolute top-full flex flex-wrap" style="right: 1%;">
        <div class="more-Images text-4xl relative z-20 cursor-pointer top-1.5" style="left: 8.1%;">...</div>
        <x-productimage imageSrc="https://dkstatics-public.digikala.com/digikala-products/94c14d2c2d843e14b96b6a80621fcb723c5658f1_1654687544.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90" style="filter: blur(5px)"/>
        <productimage imageSrc="https://dkstatics-public.digikala.com/digikala-products/94c14d2c2d843e14b96b6a80621fcb723c5658f1_1654687544.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90"/>
        <x-productimage imageSrc="https://dkstatics-public.digikala.com/digikala-products/8bbf8de57cb7227b09bb2fb6f3424d30095a719e_1654687538.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90"/>
        <x-productimage imageSrc="https://dkstatics-public.digikala.com/digikala-products/310d3b38522c869487ace73a81982b73679e0a83_1654687534.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90"/>
        <x-productimage imageSrc="https://dkstatics-public.digikala.com/digikala-products/37465bb9defe518688e54bb060dc248ef14906f6_1655622966.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90"/>
        <x-productimage imageSrc="https://dkstatics-public.digikala.com/digikala-products/37465bb9defe518688e54bb060dc248ef14906f6_1655622966.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90" style="filter: blur(5px)"/>
        <img src="icons/play.png" alt="" class="product-Image-play-ICon w-8 h-8 relative z-10 top-4 cursor-pointer"  style="right: 11.5%" />
    </div>
    <p class="wrong-Info text-xs opacity-60 absolute cursor-pointer flex" style="right: 2%;top: 110%">
        گزارش نادرستی مشخصات<img src="icons/info.png" class="info relative opacity-80 h-6 w-6 left-2 bottom-1.5" />
    </p>
    <p class="better-Price text-xs opacity-60 absolute cursor-pointer" style="left: 3%;top: 99%">
        <img src="icons/offer.png" class="relative opacity-80 cursor-pointer top-3 w-6 h-6 right-7" style="top:1.5rem"/>قیمت بهتری سراغ دارید ؟
    </p>
    <div class="send-Infos h-80 flex flex-col absolute left-1/4" style="width: 40rem;top: 105%">
        <div class="send-Price-Con h-24 rounded-md mb-4" style="width: 42rem;border: 1px solid #cccccc;">
            <h1 class="text-base relative" style="left: 85%;top: 15%">ارسال رایگان</h1>
            <p class="text-xs opacity-60 relative top-1/4" style="left: 68%">برای سفارش های بالای ۵۰۰هزار تومان</p>
            <img
                src="https://www.digikala.com/_next/static/media/normalFreeShippingTouchPointImage.d4416515.svg"
                class="relative"
                style="left: 0%;bottom: 40%"
            />
        </div>
        <div class="insurance-Con h-28 cursor-pointer rounded-md mb-4" style="width: 42rem;border: 1px solid #cccccc;">
            <p class="text-xs relative" style="top: 15%;left: 65%">بیمه تجهیزات دیجیتال - بیمه پارسیان</p>
            <p class="text-xs relative opacity-60" style="top: 15%;left: 54.7%">
                با قابلیت جبران هزینه های تعمیر و تعویض یکساله
                <span class="info-Dot text-4xl pl-6" style="color: darkblue;">.</span>
            </p>
            <img src="icons/shild.png" class="shild w-6 h-6  relative bottom-11" style="left: 93.7%;" />
            <img src="icons/leftArrow.png" class="send-Left-Arrow w-5 h-5 text-xs relative bottom-16 left-4"/>
        </div>
        <div class="send-Force h-28 cursor-pointer rounded-md mb-4" style="width: 42rem;border: 1px solid #cccccc;">
            <p class="text-xs relative top-4" style="left: 75.5%">ویژه اعضای دیجی‌پلاس</p>
            <p class="text-xs relative opacity-60 top-2 " style="left: 82.8%">ارسال رایگان<span class="info-Dot text-4xl" style="padding-left: 1.2rem;color: gold">.</span></p>
            <p class="text-xs relative opacity-60 top-px bottom-8" style="left: 69.8%">
                امکان ارسال فوری (شهر تهران)<span class="info-Dot text-4xl pl-5" style="color: gold"
                >.</span
                >
            </p>
            <img src="icons/star.png" class="relative w-5 h-5" style="left: 93.7%;bottom: 5.2rem"/>
            <img src="icons/leftArrow.png" class="send-ForceArrow w-5 h-5 relative left-4" style="bottom: 6.3rem"/>
        </div>
    </div>
    <div class="cheaper w-80 h-20 relative cursor-pointer rounded-lg left-9" style="border: 1px solid #eeeeee;top: 5.5rem">
        <p style="font-size: .8rem;left: 45%" class="relative top-4">این کالا را ارزان‌تر بخرید</p>
        <p style="font-size: .8rem;left: 18%" class="relative opacity-60 top-8"> <span>۶,۹۸۰,۰۰۰</span> تومان توسط دیگر فروشندگان</p>
        <img src="icons/yellowInfo.png"  class="w-6 h-6 relative" style="left: 85%;bottom: 1.6rem"/>
    </div>
    <div class="pricing-Process w-80 h-12 rounded-md relative top-24 cursor-pointer left-9" style="border: 1px solid #eeeeee;">
        <img src="icons/info.png" class="info w-6 h-6 opacity-60 relative left-2" style="top: .7rem;left: 16.9rem"/>
        <p class="relative opacity-80 text-xs bottom-2" style="left: 27%">فرآیند قیمت‌گذاری و نظارت بر قیمت</p>
        <img src="icons/leftArrow.png" class="pricingArrow w-4 h-4 relative left-4 bottom-6" />
    </div>
    <div class="backUp-Section flex text-xs h-24 opacity-60 m-auto absolute left-10 justify-around" style="border-bottom:4px solid #cccccc;border-top: 1px solid #ccc;width: 95%;top: 90rem;">
        <div class="pt-6 cursor-pointer">
            ضمانت اصل بودن کالا<img
                src="https://www.digikala.com/statics/img/svg/infosection/original-products.svg"
                class="left-2 inline" style="top: .6rem"
            />
        </div>
        <div class="pt-6 cursor-pointer">
            هفت روز ضمانت بازگشت کالا<img
                src="https://www.digikala.com/statics/img/svg/infosection/days-return.svg"
                class="left-2 inline" style="top: .6rem"
            />
        </div>
        <div class="pt-6 cursor-pointer">
            امکان پرداخت در محل<img
                src="https://www.digikala.com/statics/img/svg/infosection/cash-on-delivery.svg"
                class="left-2 inline" style="top: .6rem"
            />
        </div>
        <div class="cursor-pointer pt-3">
            <div class="pt-6" style="display: flex;">
                <p>روز هفته</p>
                <p>&nbsp;۷</p>
                <p>،ساعته</p>
                <p>&nbsp;۲۴</p>
            </div>
            <img
                src="https://www.digikala.com/statics/img/svg/infosection/support.svg"
                class="relative left-28 inline" style="top: -1.7rem;left: 6.5rem"
            />
        </div>
        <div class="pt-6 cursor-pointer">
            امکان تحویل اکسپرس<img
                src="https://www.digikala.com/statics/img/svg/infosection/express-delivery.svg"
                class="left-2 inline" style="top: .6rem"
            />
        </div>
    </div>
    <div class="same-Product-Section h-fit rounded-md absolute" style="left: 2.5%;top: 175%;width: 94.7%;border: 1px solid #ccc;border-bottom: 4px solid #cccccc;">
        <div class="same-Product-Title w-full h-8 absolute top-6 cursor-default" style="left: 92.3%">کالاهای مشابه</div>
        <div class="same-Product-Title-UnderLine w-16 absolute top-16 cursor-default" style="border-bottom: 2px solid #ef4056;right: 2%"></div>
        <div class="productsCon w-full h-fit flex flex-row overflow-y-hidden glider" style="-webkit-overflow-scrolling: touch;-ms-overflow-style: none;transform: translateZ(0);">
            <same-product href="" lownumber="" discounttime="" discount="" price="۵,۷۵۰,۰۰۰" hasdiscount="none" discountperc="" hasicon="" instoreicon="" instore="" titlename="" imagesrc="https://dkstatics-public.digikala.com/digikala-products/09b638ef54a2cbbe01a45230f1eb2aaca16c1f4a_1624103426.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 14 اینچی ایسوس مدل R465FA-EB028" class="glider-slide left-3" data-gslide="0" style=" width: 287.455px;"></same-product>
            <same-product href="" lownumber="" discounttime="" discount="" price="۲۶,۷۵۰,۰۰۰" hasdiscount="none" discountperc="" hasicon="true" instoreicon="./icons/postman.png" instore="ارسال فروشنده" titlename="" imagesrc="https://dkstatics-public.digikala.com/digikala-products/11529181d63d40636ed7d68023437284e68c6bd6_1637751975.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 15.6 اینچی لنوو مدل IdeaPad 3 15IGL05 - Z" class="glider-slide active left-2 visible" data-gslide="1" style=" width: 287.455px;"></same-product>
            <same-product href="" lownumber="" discounttime="" discount="" price="۱۰۷,۰۰۰,۰۰۰" hasdiscount="none" discountperc="" hasicon="true" instoreicon="./icons/postman.png" instore="ارسال فروشنده" titlename="" imagesrc="https://dkstatics-public.digikala.com/digikala-products/189e852a9a78cb041e1e96bfd92ebb9acba055e9_1652706467.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 15.6 اینچی ایسوس مدل ROG Strix G513IE-HN060" class="glider-slide visible left-1" data-gslide="2" style=" width: 287.455px;"></same-product>
            <same-product href="" lownumber="lessTen" discounttime="" discount="" price="۳۴,۷۹۰,۰۰۰" hasdiscount="none" discountperc="" hasicon="" instoreicon="" instore="تنها ۳ عدد در انبار باقی مانده" titlename="" imagesrc="https://dkstatics-public.digikala.com/digikala-products/79f4b1e3c31fb22fa193ea1393e2cb8e8a5863cc_1605085571.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 13 اینچی اپل مدل MacBook Air MGN63 2020" class="glider-slide visible center" data-gslide="3" style=" width: 287.455px;"></same-product>
            <same-product href="" lownumber="" discounttime="" discount="" price="۳۶,۵۰۰,۰۰۰" hasdiscount="none" discountperc="" hasicon="true" instoreicon="./icons/postman.png" instore="ارسال فروشنده" titlename="" imagesrc="https://dkstatics-public.digikala.com/digikala-products/aa71b72711dc3ba9939525abe3e8905be1ebb6cc_1645858425.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 16 اینچ لنوو مدل  Legion 7 16ITHg6" class="glider-slide visible right-1" data-gslide="4" style=" width: 287.455px;"></same-product>
            <same-product href="" lownumber="" discounttime="" discount="" price="۶,۰۰۰,۰۰۰" hasdiscount="none" discountperc="" hasicon="" instoreicon="" instore="" titlename="" imagesrc="https://dkstatics-public.digikala.com/digikala-products/cf7840133c7b2d42979c3129a96008e5b166ac0d_1630351304.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 15.6 اینچی ایسوس مدل TUF Gaming F15 FX506LH-US53" class="glider-slide visible right-2" data-gslide="5" style="width: 287.455px;"></same-product>
            <same-product href="" lownumber="" discounttime="" discount="" price="۱۰,۲۰۰,۰۰۰" hasdiscount="none" discountperc="" hasicon="true" instoreicon="./icons/postman.png" instore="ارسال فروشنده" titlename="" imagesrc="https://dkstatics-public.digikala.com/digikala-products/f309b1eebc65eec758854fc894ee689de6271a5c_1647437754.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 15.6 اینچی ایسوس مدل TUF Gaming F15 FX506LH-US53" class="glider-slide right-3" data-gslide="6" style=" width: 287.455px;"></same-product>
            <same-product href="" lownumber="" discounttime="" discount="۲۰,۱۰۰,۰۰۰" price="۱۸,۴۹۹,۰۰۰" hasdiscount="flex" discountperc="۸٪" hasicon="true" instoreicon="./icons/blueMarket.png" instore="موجود در انبار دیجی کالا" titlename="فروش ویژه" imagesrc="https://dkstatics-public.digikala.com/digikala-products/7c89ff28cfff4ae352a80b98860fa6fbb358d269_1614513251.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 15 اینچی لنوو مدل IdeaPad 3 - 15IML05" class="glider-slide right-3" data-gslide="6" style=" width: 287.455px;"></same-product>
            <same-product href="" lownumber="lessTen" discounttime="" discount="" price="۱۴,۹۸۰,۰۰۰" hasdiscount="none" discountperc="" hasicon="false" instoreicon="" instore="تنها ۳ عدد در انبار باقی مانده" titlename="" imagesrc="https://dkstatics-public.digikala.com/digikala-products/7fb830bace59a3dea52799820b49e6aa89c9d4dc_1620800468.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 15.6 اینچی لنوو مدل ThinkBook 15-FB" class="glider-slide right-3" data-gslide="6" style="width: 287.455px;"></same-product>
            <same-product href="" lownumber="lessTen" discounttime="" discount="" price="۸۵,۵۰۰,۰۰۰" hasdiscount="none" discountperc="" hasicon="false" instoreicon="" instore="تنها ۱ عدد در انبار باقی مانده" titlename="" imagesrc="https://dkstatics-public.digikala.com/digikala-products/b7e7f5c40eb33dcefe01cf78a4c02ce21e8cdf34_1651074845.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 15.6 اینچی ایسوس مدل TUF Gaming F15 FX506LH-US53" class="glider-slide right-3" data-gslide="6" style=" width: 287.455px;"></same-product>
            <same-product href="" lownumber="" discounttime="" discount="" price="۹,۸۹۰,۰۰۰" hasdiscount="flex" discountperc="۱۸٪" hasicon="true" instoreicon="./icons/blueMarket.png" instore="موجود در انبار دیجی کالا" titlename="فروش ویژه" imagesrc="https://dkstatics-public.digikala.com/digikala-products/3639a25fe0726daf59478fda23e096863adad10b_1641895308.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 15.6 اینچی ایسوس مدل TUF Gaming F15 FX506LH-US53" class="glider-slide right-3" data-gslide="6" style=" width: 287.455px;"></same-product>
            <same-product href="" lownumber="lessTen" discounttime="" discount="" price="۲۴,۸۶۰,۰۰۰" hasdiscount="none" discountperc="" hasicon="false" instoreicon="" instore="تنها ۲ عدد در انبار باقی مانده" titlename="" imagesrc="https://dkstatics-public.digikala.com/digikala-products/99fff58e2393fee11af1635106176ebc34790419_1638710729.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 15.6 اینچی لنوو مدل IdeaPad Gaming 3-15LHU6" class="glider-slide right-3" data-gslide="6" style=" width: 287.455px;"></same-product>
            <same-product href="" lownumber="" discounttime="" discount="" price="۳۴,۲۰۰,۰۰۰" hasdiscount="none" discountperc="" hasicon="true" instoreicon="./icons/postman.png" instore="ارسال فروشنده" titlename="" imagesrc="https://dkstatics-public.digikala.com/digikala-products/04683ef5a6e40d300ed1a586a10a72c03fa60ee1_1645448957.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 15.6 اینچی لنوو مدل IdeaPad Gaming 3 15IHU6-FA" class="glider-slide right-3" data-gslide="6" style="width: 287.455px;"></same-product>
            <same-product href="" lownumber="lessTen" discounttime="" discount="۹۵,۰۰۰,۰۰۰" price="۸۷,۹۰۰,۰۰۰" hasdiscount="flex" discountperc="۷٪" hasicon="false" instoreicon="" instore="تنها ۱ عدد در انبار باقی مانده" titlename="فروش ویژه" imagesrc="https://dkstatics-public.digikala.com/digikala-products/80dc0f1c5078c2621d57f9e38722d09cbcde0ba5_1600244060.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname=" لپ تاپ 15 اینچی مایکروسافت مدل Surface Book 3- F " class="glider-slide right-3" data-gslide="6" style=" width: 287.455px;"></same-product>
            <same-product href="" lownumber="" discounttime="" discount="۲۶,۹۰۰,۰۰۰" price="۲۶,۱۹۰,۰۰۰" hasdiscount="flex" discountperc="۳٪" hasicon="true" instoreicon="./icons/blueMarket.png" instore="موجود در انبار دیجی کالا" titlename="فروش ویژه" imagesrc="https://dkstatics-public.digikala.com/digikala-products/c2b125d40d514f2471395fc1a564a94135725c71_1646467219.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80" productname="لپ تاپ 15.6 اینچی لنوو مدل  ‎IdeaPad L340-15IRH Gaming" class="glider-slide right-3" data-gslide="6" style=" width: 287.455px;"></same-product>
        </div>
        <button aria-label="Previous" class="glider-prev"><</button>
        <button aria-label="Next" class="glider-next">></button>
    </div>
    <ul class="about-Product flex justify-end absolute opacity-60 list-none" style="width: 97%;top: 230% ">
        <li class="cursor-pointer pl-6">پرسش ها</li>
        <li class="cursor-pointer pl-6">دیدگاه ها</li>
        <li class="cursor-pointer pl-6">مشخصات</li>
        <li class="cursor-pointer pl-6">بررسی تخصصی</li>
        <li class="cursor-pointer pl-6">معرفی</li>
    </ul>
    <hr style="color: #eeeeee;width: 94.5%;position: absolute;top: 235%;left: 2.5%">
    <div class="product-mini-Con w-80 rounded-md absolute" style="left: 2.2%;top: 237%;height: 32rem;border: 1px solid #cccccc;background: linear-gradient(0deg,hsla(240,3%,94%,.5),hsla(240,3%,94%,.5)),#fff;">
        <p class="mini-Product-Title mt-8 flex justify-end" style="width: 95%;color: #ef4056;font-size: 1.2rem;">فروش ویژه</p>
        <div class="flex mt-8">
            <p class="mini-Product-Name w-6/12 opacity-60 leading-8" style="direction: rtl;font-size: .8rem">لپ تاپ 15.6 اینچی ایسوس مدل X543MA-GQ1012</p>
            <img class="mini-Product-Image w-32 bottom-2 h-24 pl-12 relative" src="icons/product.png">
        </div>
        <p class="mini-Product-Color-Name opacity-80 flex justify-end text-xs relative bottom-6" style="width: 40%">خاکستری</p>
        <div class="mini-Product-Color w-4 h-4 bg-gray-500 rounded-full relative" style="bottom: 2.6rem;left: 45%"></div>
        <div class="mini-Product-About m-auto relative" style="border-top: 1px solid #cccccc;border-bottom: 1px solid #cccccc;height: 9.5rem;bottom: 5%;width: 91%;">
            <div class="flex mt-4 justify-end" style="width: 95%">
                <p class="opacity-90 pr-4 " style="font-size: .8rem;direction: rtl">دیجی کالا</p>
                <img src="icons/dig.png" class="w-6 h-6">
            </div>
            <div class="flex mt-4 justify-end" style="width: 95%">
                <p class="opacity-90 pr-4" style="font-size: .8rem;direction: rtl">گارانتی ۲۴ ماهه یکپارچه (سازگار، حامی(ویستا) و آواژنگ)</p>
                <img src="icons/shild.png" class="w-6 h-6">
            </div>
            <div class="flex mt-4 justify-end" style="width: 95%">
                <p class="opacity-90 pr-4 relative top-1" style="font-size: .8rem;direction: rtl">موجود در انبار دیجی‌کالا</p>
                <img src="icons/blueMarket.png" class="w-6 h-6">
            </div>
        </div>
        <div class="mini-Product-Buy-Section">
            <div>
                <div class="mb-2.5 ml-4 w-10 h-5 flex justify-center text-white rounded-xl pb-1 relative bottom-4" style="background-color: #ef4056;">۶٪</div>
                <p class="relative opacity-40 bottom-11" style="font-size:.8rem;left: 21%;text-decoration: line-through #4b4b4b;">۶,۲۸۰,۰۰۰</p>
            </div>
            <p class="mini-Product-Price relative bottom-6 left-14" style="font-size: 1.3rem">۵,۹۰۰,۰۰۰</p>
            <p class="mini-Product-Toman-Icon opacity-60 text-xs relative bottom-12 left-4">تومان</p>
        </div>
        <button class="mini-Product-Buy-Btn h-10 rounded-md text-white border-none relative z-30 cursor-pointer bottom-4 left-6" style="background-color: #ef4056;width: 17rem;">افزودن به سبد خرید</button>
    </div>
    <div class="introduction-Con absolute" style="left: 24%;width: 73%;border-bottom: 4px solid #f0f0f1;direction: rtl;top: 237%">
        <div class="introduction-Title w-20 h-12 flex justify-start items-center text-lg" style="border-bottom: 2px solid #ef4056">معرفی</div>
        <div class="introduction-Text text-xs opacity-80 mt-4 text-justify leading-9">
            لپ‌تاپ‌های سری X‌ «ایسوس» به‌نسبت کارایی و کیفیت، قیمت مناسبی دارند و جزو پرطرفدارترین محصولات این شرکت هستند. این محصولات معمولاً با مشخصات سخت‌افزاری مختلف و در طرح‌ها و رنگبندی‌های متنوعی عرضه می‌شوند تا پاسخ‌گوی نیاز کاربران مختلف باشند. یکی از این محصولات X543MA-GQ1012 است که مثل مدل‌های قبلی تماما از پلاستیک ساخته شده است؛ اما کیفیت و استحکام آن حس بدنه‌ی آلومینیومی را القا می‌کند. این لپ‌تاپ با وجود ضخامت بدنه‌ی تقریبا زیاد 27میلی‌متری، فقط حدود 2 کیلوگرم وزن دارد و به ...
        </div>
        <p class="introduction-See-More mt-2 mb-16 cursor-pointer" style="color: #05bbbb">بیشتر ></p>
    </div>
    <div class="specifications-Con absolute" style="left: 24%;width: 73%;border-bottom: 4px solid #f0f0f1;top: 287%;height: 17rem">
        <div class="specifications-Title w-20 h-12 flex justify-start items-center text-lg relative bottom-40" style="border-bottom: 2px solid #ef4056;left: 93.5%">مشخصات</div>
        <ul class="specifications w-full relative" style="bottom: 40%;right: 15%">
            <div class="h-14"><li class="flex h-14 items-center justify-end relative opacity-90" style="left: 15%;width: 60%;"><p>کیلوگرم</p><p>&nbsp;۱.۹</p><li class="w-24 text-end opacity-60 relative bottom-10 list-none" style="left: 80%">وزن</li></li></div>
            <div class="h-14"><li class="flex h-14 items-center justify-end relative opacity-90" style="border-top: 1px solid #e5e5e5;left: 15%;width: 60%;"><p>میلی‌متر</p><p>&nbsp;۳۸۱x۲۵۱x۲۷</p><li class="w-24 text-end opacity-60 relative bottom-10 list-none" style="left: 80%">ابعاد</li></li></div>
            <div class="h-14"><li class="flex h-14 items-center justify-end relative opacity-90" style="border-top: 1px solid #e5e5e5;left: 15%;width: 60%;">Intel</li><li class="w-24 text-end opacity-60 relative bottom-10 list-none" style="left: 80%">سازنده پردازنده</li></div>
            <div class="h-14"><li class="flex h-14 items-center justify-end relative opacity-90" style="border-top: 1px solid #e5e5e5;left: 15%;width: 60%;">Celeron</li><li class="w-24 text-end opacity-60 relative bottom-10 list-none" style="left: 80%">سری پردازنده</li></div>
            <div class="h-14"><li class="flex h-14 items-center justify-end relative opacity-90" style="border-top: 1px solid #e5e5e5;left: 15%;width: 60%;">N۴۰۲۰</li><li class="w-24 text-end opacity-60 relative bottom-10 list-none" style="left: 80%">مدل پردازنده</li></div>
        </ul>
        <p class="specifications-See-More w-full flex justify-end relative bottom-24 cursor-pointer" style="color:#05bbbb;">< مشاهده بیشتر</p>
    </div>
    <div class="comments absolute" style="width: 73%;top: 321%;left: 24%">
        <div class="comments-Title w-full flex justify-end">امتیاز و دیدگاه کاربران</div>
        <div class="comments-Title-UnderLine w-16 relative top-4" style="left: 94.8%;border-bottom: 2px solid #ef4056;"></div>
        <div class="user-Product-Pictures h-40 relative top-4 flex" style="border-bottom:1px solid #cccccc;width: 75%;">
            <product-image class="pl-4 pr-4 relative" style="top: 20%;left: 52%" imageSrc="https://dkstatics-public.digikala.com/digikala-comment-files/28ad0e3138e7f52bedb0c041e975954e5552044b_1642882186.jpg?x-oss-process=image/resize,m_lfit,h_1024,w_1024/quality,q_80"></product-image>
            <product-image class="pl-4 pr-4 relative" style="top: 20%;left: 52%" imageSrc="https://dkstatics-public.digikala.com/digikala-comment-files/bc46b97cd3f2c80435848b13e21baac3666be01f_1642882212.jpg?x-oss-process=image/resize,m_lfit,h_1024,w_1024/quality,q_80"></product-image>
            <product-image class="pl-4 pr-4 relative" style="top: 20%;left: 52%" imageSrc="https://dkstatics-public.digikala.com/digikala-comment-files/9b3a8f81ae8964a523951e8468bf9ea223ad3615_1644835033.jpg?x-oss-process=image/resize,m_lfit,h_1024,w_1024/quality,q_80"></product-image>
            <product-image class="pl-4 pr-4 relative" style="top: 20%;left: 52%" imageSrc="https://dkstatics-public.digikala.com/digikala-comment-files/27ebd05591ea7e1b82e2f147e63eb524b44e1aa8_1655999044.jpeg?x-oss-process=image/resize,m_lfit,h_1024,w_1024/quality,q_80"></product-image>
        </div>
        <p class="user-Pictures-See-More text-xs relative bottom-6 cursor-pointer" style="color:#05bbbb;left: 67%;">< مشاهده همه</p>
        <ul class="comments-Arrengment flex justify-end" style="width: 72%;">
            <li class="cursor-pointer opacity-60 list-none p-4 text-sm">دیدگاه خریداران</li>
            <li class="cursor-pointer opacity-60 list-none p-4 text-sm">مفیدترین</li>
            <li class="cursor-pointer opacity-60 list-none p-4 text-sm">جدیدترین</li>
            <li class="opacity-60 list-none p-4 text-sm">مرتب‌سازی براساس</li>
            <img class="list-none w-6 h-6 relative top-4" style="transform: rotateY(180deg)" src="icons/arrangment.png">
        </ul>
        <div class="product-Score relative bottom-36 flex justify-end" style="width: 23%;height: 30rem;left: 76%">
            <div class="product-Score-Number-Con relative flex opacity-80 text-xs" style="left: 45%">از ۵&nbsp;<p class="product-Score-Number relative text-3xl bottom-3">۴</p></div>
            <div class="product-Score-Stars relative top-4">
                <p class="opacity-60 text-xs relative" style="right: 75%;top: 4.5%">از مجموع <span>۱۰۲</span> امتیاز</p>
                <div class="flex relative left-4 top-px">
                    <img  class="relative" style="left: 10%" src="https://www.digikala.com/statics/img/png/star.png">
                    <img  class="relative" style="left: 10%" src="https://www.digikala.com/statics/img/png/star-yellow.png">
                    <img  class="relative" style="left: 10%" src="https://www.digikala.com/statics/img/png/star-yellow.png">
                    <img  class="relative" style="left: 10%" src="https://www.digikala.com/statics/img/png/star-yellow.png">
                    <img  class="relative" style="left: 10%" src="https://www.digikala.com/statics/img/png/star-yellow.png">
                </div>
            </div>
        </div>
        <div class="product-Score-Con flex flex-col relative" style="width: 23%;bottom:35rem;left: 78.5%">
            <product-score lineWidth="80%" propertyNumberScore="۴.۰" property="ارزش خرید در برابر قیمت"></product-score>
            <product-score lineWidth="80%" propertyNumberScore="۴.۰" property="عملکرد سخت افزار داخلی و باتری"></product-score>
            <product-score lineWidth="80%" propertyNumberScore="۴.۰" property="کیبورد و تاچ پد"></product-score>
            <product-score lineWidth="80%" propertyNumberScore="۴.۰" property="کیفیت صفحه نمایش و بلندگوها"></product-score>
            <product-score lineWidth="80%" propertyNumberScore="۴.۰" property="امکانات و قابلیت ها"></product-score>
            <product-score lineWidth="80%" propertyNumberScore="۴.۰" property="طراحی و کیفیت ساخت"></product-score>
            <p class="register-Comment flex justify-end text-xs opacity-50" style="width: 96%">شما هم درباره این کالا دیدگاه ثبت کنید</p>
            <button class="register-Btn h-10 rounded-md bg-white relative top-4 cursor-pointer left-5" style="font-size: .8rem;width: 90%;border:1px solid #ef4056;color: #ef4056">ثبت دیدگاه</button>
            <p class="register-Comment-Dig-Club relative leading-8 top-8 opacity-50 text-xs relative left-3" style="width: 85%;direction: rtl;">۵ امتیاز دیجی‌کلاب<br>پس از تایید نظر، با مراجعه به صفحه‌ی ماموریت‌های کلابی امتیاز خود را دریافت کنید.</p>
            <img src="icons/info.png" class="register-Comment-info-Icon opacity-50 relative bottom-6 w-4 h-4" style="left: 91%;">
        </div>
        <div class="comments-Con h-80 relative" style="bottom: 68rem;width: 75%;">
            <user-comment  hasProposal="flase" Bpoint="" Gpoint="عالی|" year="۱۴۰۱" month="مرداد" day="۶" text="هعی چی بگم خوبه دیگ" proposal="پیشنهاد می کنم" username="کاربر دیجیکالا" buyer="false" titleName="بد نبود" score="۳.۰"></user-comment>
            <user-comment  hasProposal="flase" Bpoint="" Gpoint="نازک|قیمت مناسب|" year="۱۴۰۱" month="مرداد" day="۵" text="مقرون و به صرفه برای کارهای ابتدایی" proposal="پیشنهاد می کنم" username="کاربر دیجیکالا" buyer="" titleName="خوب" score="۴.۰"></user-comment>
            <user-comment  hasProposal="flase" Bpoint="" Gpoint="کیبورد نرم|صفحه نمایش مات|هارد یک ترا|" year="۱۴۰۱" month="مرداد" day="۵" text="نسبت به قیمتش کار راه اندازه" proposal="پیشنهاد می کنم" username="کاربر دیجیکالا" buyer="false" titleName="به صرفه" score="۳.۰"></user-comment>
            <user-comment  hasProposal="true" Bpoint="" Gpoint="کیبورد نرم|صفحه نمایش مات|هارد یک ترا|" year="۱۴۰۱" month="تیر" day="۳۱" text="به نظر من برای کارهای سبک و روزمره مثل فیلم دیدن و کلاس های انلاین و وب گردی کاملا مناسب هست و من تونستم راحت ویندوز نصب کنم و الان نزدیک سه هفتس دارمش و تا اینجا که کند نبوده و سریع ویندوز بالا میاد هر دفعه که روشن میکنم، وایفا به خوبی انتن میده از اتاق، شاید تنها نقطه ضعفش تا الان کیفیت صفحه نمایش باشه که برای من مشکل به حساب نیومد چون همچین توقعیو داشتم وقتی خریدم" proposal="پیشنهاد می کنم" username="غزاله حیدری" buyer="false" titleName="کاربردی و مناسب" score="۵.۰"></user-comment>
        </div>
        <div class="more-Comment flex text-xs top-40 cursor-pointer relative" style="color:#05bbbb;left: 50rem">
            <img src="icons/blueArrow.png" class="w-4 h-4 relative right-2 top-1" style="transform: rotate(270deg)">
            <p>دیدگاه دیگر</p>&nbsp;
            <p>۸۴</p>
        </div>
    </div>
    <div class="question-Section-Con absolute" style="width: 73%;top: 530%;left: 24%;border-bottom: 4px solid #eeeeee;border-top: 4px solid #eeeeee;">
        <div class="question-Title w-16 top-8 h-12 items-center flex relative justify-end" style="left: 94.5%;border-bottom: 2px solid #ef4056;">پرسش‌ها</div>
        <div class="send-question flex justify-end relative flex-col w-1/4 top-20"style="left: 75.5%;">
            <p class="opacity-60 text-xs mb-2" style="direction: rtl;">شما هم درباره این کالا پرسش ثبت کنید</p>
            <button class="bg-white h-8 rounded-md mt-2 ml-16" style="border:1px solid #ef4056;color: #ef4056;width: 80%;">ثبت پرسش</button>
        </div>
        <ul class="questions-Arrengment flex justify-end" style="width: 72%;">
            <li class="opacity-60 cursor-pointer list-none p-4 text-sm">مفیدترین</li>
            <li class="opacity-60 cursor-pointer list-none p-4 text-sm">جدیدترین</li>
            <li class="list-none p-4 text-sm"">مرتب‌سازی براساس</li>
            <img src="icons/arrangment.png" class="w-6 h-6 relative top-4" style="transform: rotateY(180deg)">
        </ul>
        <div class="questions-Con" style="width: 73%">
            <user-question question="سلام.ببخشید امکانش هست ویندوز 7 روی این لپ تاب نصب کرد؟"></user-question>
            <user-question question="سلام ببخشید من الان روی این لب تاپ چه جوری ویندوز نصب کنم برنامه بوت هم نداره"></user-question>
            <user-question question="ببخشید من یه بازی انلاین به نام روبلاکس بازی میکنم میشه با این هم بازی کرد"></user-question>
            <user-question question="واسه کارمناسبه؟"></user-question>
            <user-question question="سلام ببخشید اقلامی همراه خودش دارد؟"></user-question>
        </div>
        <div class="more-Question h-12 flex items-center justify-end text-xs" style="color: #05bbbb;width: 73%">
            <p> < </p>&nbsp;&nbsp;
            <p>پرسش دیگر</p>&nbsp;
            <p>۲۸۹</p>
        </div>
    </div>
    <div class="about-Digikala-Con w-full absolute" style="border-top: 1px solid #cccccc;;top: 635%">
        <div class="about-Digikala-Header flex justify-between mt-12" style="width: 98%">
            <button class="w-40 h-10 rounded-md bg-white ml-8 cursor-pointer text-sm flex items-center justify-center" style="color: #818181;border: 1px solid #cccccc;"><img src="./icons/leftArrow.png" class="relative left-1 w-3 h-3" style="transform: rotate(90deg);"><p class="ml-6 mt-px">برگشت به بالا</p></button>
            <img src="https://www.digikala.com/statics/img/svg/digi.svg">
        </div>
        <div class="about-Digikala-Back-up flex justify-end text-sm opacity-80 mt-8" style="width: 98%;">
            <p>تلفن پشتیبانی ۶۱۹۳۰۰۰۰ - ۰۲۱</p>&nbsp;
            <p class="pl-4 pr-4" style="color: #a1a3a8;">|</p>&nbsp;
            <p>روز هفته، ۲۴ ساعته پاسخگوی شما هستیم</p>&nbsp;
            <p>۷</p>
        </div>
        <div class="about-Digikala-Icons-Con w-full flex justify-around text-xs opacity-90 mt-12">
            <div class="about-Digikala-Icons">
                <img src="https://www.digikala.com/statics/img/svg/footer/original-products.svg" class="m-auto flex justify-center">
                <p>ﺿﻤﺎﻧﺖ اﺻﻞ ﺑﻮدن ﮐﺎﻟﺎ</p>
            </div>
            <div class="about-Digikala-Icons">
                <img src="https://www.digikala.com/statics/img/svg/footer/days-return.svg" class="m-auto flex justify-center">
                <p>هفت روز ضمانت بازگشت کالا</p>
            </div>
            <div class="about-Digikala-Icons fix">
                <img src="https://www.digikala.com/statics/img/svg/footer/support.svg" class="m-auto flex justify-center">
                <p> روز ﻫﻔﺘﻪ، ۲۴ ﺳﺎﻋﺘﻪ&nbsp; <p style="left: 6.1rem" class="relative bottom-4">۷</p></p>
            </div>
            <div class="about-Digikala-Icons">
                <img src="https://www.digikala.com/statics/img/svg/footer/cash-on-delivery.svg" class="m-auto flex justify-center">
                <p>امکان پرداخت در محل</p>
            </div>
            <div class="about-Digikala-Icons">
                <img src="https://www.digikala.com/statics/img/svg/footer/express-delivery.svg" class="m-auto flex justify-center">
                <p>اﻣﮑﺎن ﺗﺤﻮﯾﻞ اﮐﺴﭙﺮس</p>
            </div>
        </div>
        <div class="about-Digikala w-full mt-12 flex">
            <div class="conection-Digikala-Con w-1/4 right-5" style="direction: rtl">
                <p class="conection-Digikala-Title opacity-60">همراه ما باشید!</p>
                <div class="conection-Digikala-Icons-Con flex justify-between mt-6" style="width: 80%">
                    <img src="icons/twiiter.png" class="w-10 h-10" />
                    <img src="icons/aparat.png" class="w-10 h-10" />
                    <img src="icons/in.png" class="w-10 h-10" />
                    <img src="icons/instgram.png" class="w-10 h-10" />
                </div>
                <p class="get-News opacity-60 mt-10">با ثبت ایمیل، از جدید‌ترین تخفیف‌ها با‌خبر شوید</p>
                <input class="conection-Digikala-Search-Box h-10 outline-0 border-none rounded-md mt-8 pr-5" placeholder="ایمیل شما" style="width: 70%;direction: rtl;color: #424750;background-color: #f0f0f1">
                <button class="border-none text-white rounded-md w-12 h-10 mr-4 cursor-pointer" style="background-color: #e0e0e2;">ثبت</button>
            </div>
            <div class="digikala-Services-Con flex" style="width: 75%">
                <ul class="w-1/3 list-none" style="direction: rtl">
                    <li>راهنمای خرید از دیجی‌کالا</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">نحوه ثبت سفارش</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">رویه ارسال سفارش</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">شیوه‌های پرداخت</li>
                </ul>
                <ul class="w-1/3 list-none" style="direction: rtl">
                    <li>خدمات مشتریان</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">پاسخ به پرسش‌های متداول</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">رویه‌های بازگرداندن کالا</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">شرایط استفاده</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">حریم خصوصی</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">گزارش باگ</li>
                </ul>
                <ul class="list-none" style="direction: rtl;width: 30%">
                    <li>با دیجی‌کالا</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">اتاق خبر دیجی‌کالا</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">فروش در دیجی‌کالا</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">فرصت‌های شغلی</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">تماس با دیجی‌کالا</li>
                    <li class="text-xs opacity-60 mt-4 cursor-pointer">درباره دیجی‌کالا</li>
                </ul>
            </div>
        </div>
        <div class="download-App-Con rounded-md mt-16 h-20 flex ml-11" style="width: 95%;background-color: #3c4b6d;">
            <div class="apps-Icon-Con w-1/2 flex justify-between">
                <div class="see-More-Download-section bg-white w-11 h-11 rounded-md ml-12 mt-4"><img class="w-11 h-11" src="https://www.digikala.com/statics/img/svg/More.svg"></div>
                <div class="mt-4 h-11 w-36 " style="background: url(https://www.digikala.com/statics/img/svg/appStores/sib-app.svg);background-size: 144px 44px;"></div>
                <div class="mt-4 h-11 w-36 " style="background: url(https://www.digikala.com/statics/img/svg/appStores/myket.svg);background-size: 144px 44px;"></div>
                <div class="mt-4 h-11 w-36 " style="background: url(https://www.digikala.com/statics/img/svg/appStores/coffe-bazzar.svg);background-size: 144px 44px;"></div>
                <div class="mt-4 h-11 w-36 " style="background: url(https://www.digikala.com/statics/img/svg/appStores/google-play.svg);background-size: 144px 44px;"></div>
            </div>
            <div class="digikala-Download-Icon-Con" style="width: 48%">
                <img src="https://www.digikala.com/statics/img/png/footerlogo2.png" class="App-Download-Section-Icon w-12 relative top-4" style="left: 95%">
                <p class="App-Download-Section-Title relative bottom-6 text-white text-2xl"style="left: 60%"> دانلود اپلیکیشن دیجی‌کالا</p>
            </div>
        </div>
        <hr class="app-Hr ml-10 mt-10" style="border-top: 1px solid #eeeeee;width: 95%;">
        <div class="digikala-Documents-Con h-32 mt-12 w-full flex">
            <div class="digikala-Documents-Images w-1/2 flex justify-start">
                <div class="w-28 h-28 rounded-md ml-3 mr-3 bg-no-repeat cursor-pointer" style="background-position: 1.5rem 1.5rem;background-size: 4rem 4rem;border: 1px solid #cccccc;background-image: url(https://www.digikala.com/statics/img/png/enamad.png)"></div>
                <div class="w-28 h-28 rounded-md ml-3 mr-3 bg-no-repeat cursor-pointer" style="background-position: 1.5rem 1.5rem;background-size: 4rem 4rem;border: 1px solid #cccccc;background-image: url(https://www.digikala.com/statics/img/png/kasbokar.png)"></div>
                <div class="w-28 h-28 rounded-md ml-3 mr-3 bg-no-repeat cursor-pointer" style="background-position: 1.5rem 1.5rem;background-size: 4rem 4rem;border: 1px solid #cccccc;background-image: url(https://www.digikala.com/statics/img/png/rezi.png)"></div>
            </div>
            <div class="digikala-Documents-Text" style="width: 49%;direction: rtl;">
                <p class="mb-4">فروشگاه اینترنتی دیجی‌کالا، بررسی، انتخاب و خرید آنلاین</p>
                <p class="text-xs opacity-60 text-justify leading-6">یک خرید اینترنتی مطمئن، نیازمند فروشگاهی است که بتواند کالاهایی متنوع، باکیفیت و دارای قیمت مناسب را در مدت زمانی کوتاه به دست مشتریان خود برساند و ضمانت بازگشت کالا هم داشته باشد؛ ویژگی‌هایی که فروشگاه اینترنتی دیجی‌کالا سال‌هاست بر روی آن‌ها کار کرده و توانسته از این طریق مشتریان ثابت خود را داشته باشد.</p>
                <p class="text-xs mt-4 cursor-pointer w-28 h-28 rounded-md ml-3 mr-3 bg-no-repeat cursor-pointer" style="color:#05bbbbbackground-position: 1.5rem 1.5rem;">مشاهده بیشتر</p>
            </div>
        </div>
        <hr class="final-Hr mt-10 ml-5" style="width: 97.5%;border: 1px solid #eeeeee;">
        <div class="digikala-Law-Con w-full h-24 text-xs opacity-60 flex justify-center items-center">
            برای استفاده از مطالب دیجی‌کالا، داشتن «هدف غیرتجاری» و ذکر «منبع» کافیست. تمام حقوق اين وب‌سايت نیز برای شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) است.
        </div>
    </div>
    <div class="footer w-full h-40 absolute" style="background-color: #f0f0f1;top: 752%;">
        <div class="first-images-Section w-full h-20 flex" style="border-bottom: 1px solid #cccccc;">
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/fidibo.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/digikala-business.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/digimag.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/digipay.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/digistyle.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/jet.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/digiMehr.svg"></sponsor-image>
        </div>
        <div class="second-images-Section w-full h-20 flex" >
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/digiaffiliate.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/digiexpress.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/diginext.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/pindo.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/komoda.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/digiplus.svg"></sponsor-image>
            <sponsor-image Src="https://www.digikala.com/statics/img/svg/footer/digiclub.svg"></sponsor-image>
        </div>
    </div>
    <div class="fixed-Backup w-12 h-12 rounded-full fixed left-2 cursor-pointer flex justify-center items-center" style="top: 93%;background-color: #ef4056;">
        <img src="icons/headset.png" class="w-8 h-8">
    </div>
    <script src="public/Glider.js-master/glider.js"></script>
    <script type="module" src="mainScript.js" defer></script>
    </body>
</html>
