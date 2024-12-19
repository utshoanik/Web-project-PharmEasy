<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PharmaEasy</title>
    <link rel="icon" href="https://assets.pharmeasy.in/apothecary/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

<link href="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    <div style="background-color: rgba(245, 255, 253, 0.897)">@yield('content')</div>
    {{View::make('footer')}}

</body>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important
    }
    .custom-product{
        height: 600px
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height: 100px;
    }
    .trening-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }


    /* code from previous one */
    .container{
    width: 100%;
    padding: 40px 5%;
    margin: auto;
    box-sizing: border-box;
    text-transform: capitalize;
}

    .footer{
    background-color: rgb(235,242, 255);
    padding-bottom: 60px;
}

.footer-top {
    display: flex;
    justify-content: space-between;
}

.footer-top >   div ul{
    list-style: none;
}

.footer h3{
    font-size: 18px;
    font-weight: 600;
    margin: 30px 0 10px;
}

.footer > div > li{
    font-size: 15px;
    margin: 13px 0;
    cursor: pointer;
}

.footer-top > div:last-child h3{
    margin-bottom: 20px;
}

.footer-top> div:last-child li{
    display: inline;
    margin-right: 12px;
}

.footer-top > div:last-child img{
    width: 30px;
}

.footer-bottom{
    margin-top: 50px;
}

.footer-bottom > div{
    display: flex;
    align-items: center;
    gap: 20px;
}

.footer-bottom > div >  div{
    margin-right: 10px;
    align-items: center;
    display: flex;
    gap: 20px;
}

.footer-bottom img{
    height: 20px;
}

.footer-bottom > div p{
    margin-left: auto;

}






/* .navbar-default .dropdown-menu.notify-drop {
  min-width: 330px;
  background-color: #fff;
  min-height: 360px;
  max-height: 360px;
}
.navbar-default .dropdown-menu.notify-drop .notify-drop-title {
  border-bottom: 1px solid #e2e2e2;
  padding: 5px 15px 10px 15px;
}
.navbar-default .dropdown-menu.notify-drop .drop-content {
  min-height: 300px;
  max-height: 300px;
  overflow-y: scroll;
}
.navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-track
{
  background-color: #F5F5F5;
}

.navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar
{
  width: 8px;
  background-color: #F5F5F5;
}

.navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-thumb
{
  background-color: #ccc;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li {
  border-bottom: 1px solid #e2e2e2;
  padding: 10px 0px 5px 0px;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li:nth-child(2n+0) {
  background-color: #fafafa;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li:after {
  content: "";
  clear: both;
  display: block;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li:hover {
  background-color: #fcfcfc;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li:last-child {
  border-bottom: none;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li .notify-img {
  float: left;
  display: inline-block;
  width: 45px;
  height: 50px;
  margin: 0px 0px 8px 0px;
}
.navbar-default .dropdown-menu.notify-drop .allRead {
  margin-right: 7px;
}
.navbar-default .dropdown-menu.notify-drop .rIcon {
  float: right;
  color: #999;
}
.navbar-default .dropdown-menu.notify-drop .rIcon:hover {
  color: #333;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li a {
  font-size: 12px;
  font-weight: normal;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li {
  font-weight: bold;
  font-size: 11px;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li hr {
  margin: 5px 0;
  width: 70%;
  border-color: #e2e2e2;
}
.navbar-default .dropdown-menu.notify-drop .drop-content .pd-l0 {
  padding-left: 0;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li p {
  font-size: 11px;
  color: #666;
  font-weight: normal;
  margin: 3px 0;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li p.time {
  font-size: 10px;
  font-weight: 600;
  top: -6px;
  margin: 8px 0px 0px 0px;
  padding: 0px 3px;
  border: 1px solid #e2e2e2;
  position: relative;
  background-image: linear-gradient(#fff,#f2f2f2);
  display: inline-block;
  border-radius: 2px;
  color: #B97745;
}
.navbar-default .dropdown-menu.notify-drop .drop-content > li p.time:hover {
  background-image: linear-gradient(#fff,#fff);
}
.navbar-default .dropdown-menu.notify-drop .notify-drop-footer {
  border-top: 1px solid #e2e2e2;
  bottom: 0;
  position: relative;
  padding: 8px 15px;
}
.navbar-default .dropdown-menu.notify-drop .notify-drop-footer a {
  color: #777;
  text-decoration: none;
}
.navbar-default .dropdown-menu.notify-drop .notify-drop-footer a:hover {
  color: #333;
} */

/* Your CSS styles */
.navbar-default .navbar-toggle {
    border-color: #fff;
}

.navbar-default .navbar-toggle .icon-bar {
    background-color: #fff;
}

.navbar-default .navbar-brand {
    padding: 15px 0;
}

.navbar-default .navbar-brand img {
    height: 30px;
    width: auto;
}

.navbar-default .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
}

.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
    background-color: transparent;
    color: #333;
}

.navbar-default .navbar-form .form-control {
    width: 200px;
    margin-right: 10px;
}

.navbar-default .navbar-right > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
}

.navbar-default .dropdown-menu {
    min-width: 200px;
    margin-top: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.navbar-default .dropdown-menu .notify-drop-title {
    background-color: #f5f5f5;
    padding: 10px;
    font-weight: bold;
    font-size: 14px;
    border-bottom: 1px solid #e3e3e3;
}

.navbar-default .dropdown-menu .drop-content {
    max-height: 200px;
    overflow-y: auto;
    padding: 10px;
}

.navbar-default .dropdown-menu .drop-content li {
    padding: 10px 0;
    border-bottom: 1px solid #e3e3e3;
}

.navbar-default .dropdown-menu .drop-content li:last-child {
    border-bottom: none;
}

.navbar-default .dropdown-menu .drop-content .logofit {
    height: 40px;
    width: 40px;
    margin-right: 10px;
}

.navbar-default .dropdown-menu .drop-content a {
    color: #333;
}

.navbar-default .dropdown-menu .notify-drop-footer {
    padding: 10px;
    text-align: center;
    background-color: #f5f5f5;
    border-top: 1px solid #e3e3e3;
    font-size: 14px;
    font-weight: bold;
}



.logofit {
    display: inline-block;
    vertical-align:top;
    width: 60px;
    height: 60px;
    margin-right: 5px;
    margin-top: 5px;    
}



/* login css */

.shop-categories >.title{
    margin-bottom: 40px;
}
.shop-categories >div{
    display: flex;
    text-align: center;
    gap: 25px;
}

.shop-categories > div > div {
    cursor: pointer;
}


.shop-categories img{
    width: 100%;
    border-radius: 10px 0;
    box-shadow: var(--shadow-border);
}

.shop-categories img:hover{
    box-shadow: var(--shadow);
}
.shop-item:hover{
    box-shadow: var(--shadow);
}

.shop-categories h4{
    font-weight: 500;
    font-size: 16px;
    margin: 10px 0;
}

.cards-layout{
    display: flex;
    cursor: pointer;
}

.cards-layout>div{
    width: 330px;
    display: flex;
    padding: 10px;
    margin-right: 30px;
    border-radius: 7px;
    text-align: center;
    box-sizing: border-box;
    box-shadow: rgba(0,0,0,0.02) 0px 1px 2px 0px,
    rgba(27,31,35,0.15) 0px 0px 0px 1px;
}

.cards-layout>div>img{
    width: 50px;
    height: 50px;
    border-radius: 5px;
}

.cards-layout >div >p{
    margin: 0 10px;
    font-size: 14px;
    line-height: 25px;
}

.cards-layout > div :last-child{
    background: linear-gradient(to right,rgb(235,250,250) rgb(176,255,255)
    rgb(176,255,255));
    display: block;
    text-align: center;
}
.cards-layout>div:last-child i,
.cards-layout>div:last-child p{

    color: var(--main-color);
    font-size: 15px;
}
.cards-layout>div:hover{
    box-shadow: var(--shadow);
}


.container{
    width: 100%;
    padding: 40px 5%;
    margin: auto;
    box-sizing: border-box;
    text-transform: capitalize;
}

.container > .title{
    font-weight: 600;
    font-size: 26px;
    align-items: center;
    display: flex;
}

.container> .subtitle{
    font-size: 16px;
    font-weight: 400;
    margin: 8px 0 24px;
    align-items: center;
}

.container> .subtitle > img{
    height: 18px;
}


/*-----order with prescription----*/
.order_with-prescription{
    display: flex;
    width: 90%;
    margin: 0 auto;
    border-radius: 5px;
    box-shadow: var(--shadow-border);
}

.order_with-prescription p{
    font-size: 15px;
}

.order_with-prescription > div{
    padding: 20px;
    width: 50%;
    box-sizing: border-box;
}

.order_with-prescription > div:first-child{
    display: flex;
    align-items: center;
    line-height: 30px;
    background-color: rgb(221, 241, 255);
}

.order_with-prescription > div:first-child img{
    margin: 0 30px 0 20px;
    width: 90px;
    
}

.order_with-prescription > div:first-child button{
    padding: 10px 15px;
    margin-top: 10px;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-size: 15px;
    font-weight: 500;
    background-color: var(--main-color);
}

.order_with-prescription > div:first-child button i{
    margin-right: 5px;
    color: white;
    font-size: 16px;
}
.order_with-prescription > div:last-child{
    padding: 30px 20px 30px 40px;
}

.order_with-prescription > div:last-child > h4{
    font-weight: 500;
    margin-bottom: 10px;
}

.order_with-prescription > div:last-child > div{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 10px;
}
.order_with-prescription > div:last-child >div > div{
    display: flex;
    align-items: flex-start;
}

.order_with-prescription > div:last-child > div > div > h3{
    padding: 5px;
    background-color: rgb(235,242, 255);
    border-radius: 5px;
    color: blue;
    margin-right: 10px;
}

</style>
</html>