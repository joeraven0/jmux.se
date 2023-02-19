	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<title>Webbhotell och domäner - EgenSajt Hosting AB</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<!-- Css -->
			<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900" rel="stylesheet" type="text/css">
			<style>
				html, body
				{
					margin: 0;
					padding: 0;

					font-family: "Source Sans Pro", sans-serif;
				}
				.headerBackground
				{
					height: 60px;
					width: 100%;

					padding: 0;
					margin: 0;

					background-color: white;
				}
				.bannerBackground
				{
					height: 350px;
					width: 100%;

					padding: 0;
					margin: 0;

					background-image: url("https://cluster.egensajt.se/images/slide_servers.jpg");
					background-repeat: no-repeat;
					background-size: cover;
				}

				@media all and (min-width: 1281px)
				{
					.header
					{
						position: relative;
						height: 60px;
						width: 1265px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;
						padding: 0;
					}
					.banner
					{
						position: relative;
						height: 350px;
						width: 1265px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;

						padding: 0;
					}
					.footer
					{
						height: 91px;
						width: 1265px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;

						padding: 0;
					}
					.presentationH1
					{
						text-align: center;
						color: white;

						font-size: 60px;
						font-weight: 300;

						margin: 0;
					}
					.presentationH2
					{
						position: relative;
						text-align: center;
						color: white;
						font-size: 26px;
						font-weight: 300;

						margin: 0;
					}
					.transparentSearchWrapper
					{
						position: absolute;
						left: 0;
						right: 0;

						bottom: 30px;

						width: 800px;
						height: 50px;

						border: 2px solid #DDDDDD;
						border-radius: 5px;
						background-color: rgba(221, 221, 221, 0.4);

						padding: 0;
						margin: 0;
						margin-left: auto;
						margin-right: auto;

						z-index: 3;
					}
					.transparentSearchInput
					{
						float: left;

						height: 50px;
						width: calc(80% - 22px);

						margin: 0;
						padding: 0;

						padding-left: 10px;
						padding-right: 10px;

						outline: 0;
						font-size: 28px;
						color: white;

						background-color: transparent;
						border: none;
						border-right: 2px solid #DDDDDD;

						overflow: visible;
					}
					.transparentSearchButton
					{
						float: right;
						height: 50px;
						width: 20%;

						margin: 0;
						padding: 0;
						padding-top: 1px;

						color: white;
						font-size: 28px;

						outline: 0;
						background-color: transparent;
						border: none;
					}
					.transparentSearchButton:hover
					{
						background-color: rgba(255, 255, 255, 0.2);
						cursor: pointer;
					}
					.transparentSearchInput::-moz-placeholder
					{
						font-size: 28px;
						color: #F9F9F9;
					}
					.transparentSearchInput::-webkit-input-placeholder
					{
						font-size: 28px;
						color: #F9F9F9;
					}
				}
				@media all and (max-width: 1279px) and (min-width: 1025px)
				{
					.header
					{
						position: relative;
						height: 60px;
						width: 1009px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;
						padding: 0;
					}
					.banner
					{
						position: relative;
						height: 350px;
						width: 1009px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;

						padding: 0;
					}
					.footer
					{
						height: 91px;
						width: 1009px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;

						padding: 0;
					}
					.presentationH1
					{
						text-align: center;
						color: white;

						font-size: 60px;
						font-weight: 300;

						margin: 0;
					}
					.presentationH2
					{
						position: relative;
						text-align: center;
						color: white;
						font-size: 26px;
						font-weight: 300;

						margin: 0;
					}
					.transparentSearchWrapper
					{
						position: absolute;
						left: 0;
						right: 0;

						bottom: 30px;

						width: 800px;
						height: 50px;

						border: 2px solid #DDDDDD;
						border-radius: 5px;
						background-color: rgba(221, 221, 221, 0.4);

						padding: 0;
						margin: 0;
						margin-left: auto;
						margin-right: auto;

						z-index: 3;
					}
					.transparentSearchInput
					{
						float: left;

						height: 50px;
						width: calc(80% - 22px);

						margin: 0;
						padding: 0;

						padding-left: 10px;
						padding-right: 10px;

						outline: 0;
						font-size: 28px;
						color: white;

						background-color: transparent;
						border: none;
						border-right: 2px solid #DDDDDD;

						overflow: visible;
					}
					.transparentSearchButton
					{
						float: right;
						height: 50px;
						width: 20%;

						margin: 0;
						padding: 0;
						padding-top: 1px;

						color: white;
						font-size: 28px;

						outline: 0;
						background-color: transparent;
						border: none;
					}
					.transparentSearchButton:hover
					{
						background-color: rgba(255, 255, 255, 0.2);
						cursor: pointer;
					}
					.transparentSearchInput::-moz-placeholder
					{
						font-size: 28px;
						color: #F9F9F9;
					}
					.transparentSearchInput::-webkit-input-placeholder
					{
						font-size: 28px;
						color: #F9F9F9;
					}
				}
				@media all and (max-width: 1024px) and (min-width: 685px)
				{
					.header
					{
						position: relative;
						height: 60px;
						width: 670px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;
						padding: 0;
					}
					.banner
					{
						position: relative;
						height: 350px;
						width: 670px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;

						padding: 0;
					}
					.footer
					{
						height: 91px;
						width: 670px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;

						padding: 0;
					}
					.presentationH1
					{
						text-align: center;
						color: white;

						font-size: 32px;
						font-weight: 400;

						margin: 0;
					}
					.presentationH2
					{
						position: relative;
						text-align: center;
						color: white;
						font-size: 20px;
						font-weight: 400;

						margin: 0;
					}
					.transparentSearchWrapper
					{
						position: absolute;
						left: 0;
						right: 0;

						bottom: 30px;

						width: 600px;
						height: 50px;

						border: 2px solid #DDDDDD;
						border-radius: 5px;
						background-color: rgba(221, 221, 221, 0.4);

						padding: 0;
						margin: 0;
						margin-left: auto;
						margin-right: auto;

						z-index: 3;
					}
					.transparentSearchInput
					{
						float: left;

						height: 50px;
						width: calc(80% - 22px);

						margin: 0;
						padding: 0;

						padding-left: 10px;
						padding-right: 10px;

						outline: 0;
						font-size: 28px;
						color: white;

						background-color: transparent;
						border: none;
						border-right: 2px solid #DDDDDD;

						overflow: visible;
					}
					.transparentSearchButton
					{
						float: right;
						height: 50px;
						width: 20%;

						margin: 0;
						padding: 0;
						padding-top: 1px;

						color: white;
						font-size: 28px;

						outline: 0;
						background-color: transparent;
						border: none;
					}
					.transparentSearchButton:hover
					{
						background-color: rgba(255, 255, 255, 0.2);
						cursor: pointer;
					}
					.transparentSearchInput::-moz-placeholder
					{
						font-size: 28px;
						color: #F9F9F9;
					}
					.transparentSearchInput::-webkit-input-placeholder
					{
						font-size: 28px;
						color: #F9F9F9;
					}
				}
				@media all and (max-width: 684px)
				{
					.header
					{
						position: relative;
						height: 60px;
						width: 90%;

						margin: 0;
						margin-left: auto;
						margin-right: auto;
						padding: 0;
					}
					.banner
					{
						position: relative;
						height: 350px;
						width: 90%;

						margin: 0;
						margin-left: auto;
						margin-right: auto;

						padding: 0;
					}
					.footer
					{
						height: 91px;
						width: 90%;

						margin: 0;
						margin-left: auto;
						margin-right: auto;

						padding: 0;
					}
					.presentationH1
					{
						text-align: center;
						color: white;

						font-size: 28px;
						font-weight: 400;

						margin: 0;
					}
					.presentationH2
					{
						position: relative;
						text-align: center;
						color: white;
						font-size: 18px;
						font-weight: 400;

						margin: 0;
					}
					.transparentSearchWrapper
					{
						position: absolute;
						left: 0;
						right: 0;

						bottom: 30px;

						width: 90%;
						height: 40px;

						border: 2px solid #DDDDDD;
						border-radius: 5px;
						background-color: rgba(221, 221, 221, 0.4);

						padding: 0;
						margin: 0;
						margin-left: auto;
						margin-right: auto;

						z-index: 3;
					}
					.transparentSearchInput
					{
						float: left;

						height: 40px;
						width: calc(80% - 22px);

						margin: 0;
						padding: 0;

						padding-left: 10px;
						padding-right: 10px;

						outline: 0;
						font-size: 18px;
						color: white;

						background-color: transparent;
						border: none;
						border-right: 2px solid #DDDDDD;

						overflow: visible;
					}
					.transparentSearchButton
					{
						float: right;
						height: 40px;
						width: 20%;

						margin: 0;
						padding: 0;
						padding-top: 1px;

						color: white;
						font-size: 18px;

						outline: 0;
						background-color: transparent;
						border: none;
					}
					.transparentSearchButton:hover
					{
						background-color: rgba(255, 255, 255, 0.2);
						cursor: pointer;
					}
					.transparentSearchInput::-moz-placeholder
					{
						font-size: 18px;
						color: #F9F9F9;
					}
					.transparentSearchInput::-webkit-input-placeholder
					{
						font-size: 18px;
						color: #F9F9F9;
					}
				}
				.domainPricesBackground
				{
					height: 42px;
					width: 100%;

					padding: 0;
					margin: 0;

					background-color: white;
				}
				.domainPrices
				{
					height: 42px;
					width: 90%;

					padding: 0;
					margin: 0;
					margin-left: auto;
					margin-right: auto;
				}
				.footerBackground
				{
					height: 91px;
					width: 100%;

					margin: 0;
					padding: 0;

					background-color: #3B3B3B;
				}
				.footer
				{
					height: 91px;
					width: 80%;

					margin: 0;
					margin-left: auto;
					margin-right: auto;

					padding: 0;
				}
				.presentationH1
				{
					text-align: center;
					color: white;

					font-size: 60px;
					font-weight: 300;

					margin: 0;
				}
				.presentationH2
				{
					position: relative;
					text-align: center;
					color: white;
					font-size: 26px;
					font-weight: 300;

					margin: 0;
				}
				.homePageMargin
				{
					height: 50px;
					width: 100%;

					margin: 0;
					padding: 0;

					visibility: hidden;
				}
				.mainPageHeadline
				{
					width: 100%;
					text-align: center;
					padding: 0;
					padding-top: 15px;
					padding-bottom: 15px;

					margin: 0;

					font-size: 34px;
					font-weight: 300;
				}
				.columnSmallThree
				{
					float: left;
					margin: 20px;
					margin-left: 50px;
					margin-right: 50px;
					padding: 0;
					height: 220px;
					width: 318px;
					cursor: pointer;
				}
				@media all and (min-width: 1280px)
				{
					.presentationBackground
					{
						height: 340px;
						width: 100%;

						padding: 0;
						margin: 0;

						background-color: #F9F9F9;
					}
					.presentation
					{
						height: 340px;
						width: 1154px;

						padding: 0;
						margin: 0;
						margin-left: auto;
						margin-right: auto;
					}
					.columnSmallThree:nth-of-type(1)
					{
						margin-left: 0;
					}
					.columnSmallThree:nth-of-type(3)
					{
						margin-right: 0;
					}
				}
				@media all and (max-width: 1279px) and (min-width: 767px)
				{
					.columnSmallThree:nth-of-type(3)
					{
						clear: left;
						margin-left: auto;
						margin-right: auto;
						float: none;
					}
					.presentationBackground
					{
						height: 560px;
						width: 100%;

						padding: 0;
						margin: 0;

						background-color: #F9F9F9;
					}
					.presentation
					{
						height: 560px;
						width: 752px;

						padding: 0;
						margin: 0;
						margin-left: auto;
						margin-right: auto;
					}
					.columnSmallThree:nth-of-type(1)
					{
						margin-left: 0;
					}
					.columnSmallThree:nth-of-type(2)
					{
						margin-right: 0;
					}
					.columnSmallThree:nth-of-type(3)
					{
						margin-bottom: 0;
					}
				}
				@media all and (max-width: 766px)
				{
					.columnSmallThree
					{
						float: none;
						margin-left: auto;
						margin-right: auto;
					}
					.presentationBackground
					{
						height: 840px;
						width: 100%;

						padding: 0;
						margin: 0;

						background-color: #F9F9F9;
					}
					.presentation
					{
						height: 840px;
						width: 305px;

						padding: 0;
						margin: 0;
						margin-left: auto;
						margin-right: auto;
					}
					.mainPageHeadline
					{
						font-size: 30px;
					}
					.columnSmallThree:nth-of-type(3)
					{
						margin-bottom: 0;
					}
				}
				.boxImage
				{
					display: block;
					height: 60px;
					width: 60px;

					margin-top: 12px;
					margin-left: auto;
					margin-right: auto;
					margin-bottom: 0px;

					background-repeat: no-repeat;
					background-position: 0 0;
					background-color: transparent;
				}
				.boxHeadline
				{
					text-align: center;
					color: #3B3B3B;
					margin-top: 18px;
					margin-bottom: -12px;

					font-size: 24px;
					font-weight: 300;
				}
				.columnSmallThree:hover .boxHeadline
				{
					color: #84AEDD;
				}
				.boxTextBody
				{
					text-align: center;
					color: #3B3B3B;
					margin-bottom: 0;
					min-height: 44px;

					font-size: 18px;
					line-height: 22px;
					font-weight: 300;
				}
				.columnSmallThree:hover .boxTextBody
				{
					color: #84AEDD;
				}
				.imageResellerBig
				{
					background-image: url("https://cluster.egensajt.se/images/icon_60x60_reseller.png");
				}
				.columnSmallThree:hover .imageResellerBig
				{
					background-image: url("https://cluster.egensajt.se/images/icon_60x60_reseller_h.png");
				}
				.imageCmsBig
				{
					background-image: url("https://cluster.egensajt.se/images/icon_60x60_cms.png");
				}
				.columnSmallThree:hover .imageCmsBig
				{
					background-image: url("https://cluster.egensajt.se/images/icon_60x60_cms_h.png");
				}
				.imageSupportBig
				{
					background-image: url("https://cluster.egensajt.se/images/icon_60x60_support.png");
				}
				.columnSmallThree:hover .imageSupportBig
				{
					background-image: url("https://cluster.egensajt.se/images/icon_60x60_support_h.png");
				}
				.imageWebsiteManagementBig
				{
					background-image: url("https://cluster.egensajt.se/images/icon_60x60_website-management.png");
				}
				.footerText
				{
					color: white;
					text-align: center;

					margin: 0;
					padding: 0;
					padding-top: 40px;
					padding-bottom: 20px;
					font-size: 16px;
					font-weight: 300;
				}
				.logo
				{
					float: left;
					position: relative;
					display: inline-block;

					margin: 0;
					margin-top: 5px;
					margin-left: 5px;
					padding: 0;
				}
				.loginBox
				{
					float: right;
					padding: 0;
					margin: 0;
					margin-right: 21px;
					margin-top: 6px;
					cursor: pointer;
				}
				.loginBoxImage
				{
					height: 25px;
					width: 25px;

					padding: 0;
					margin: 0;

					margin-left: auto;
					margin-right: auto;

					background-repeat: no-repeat;
					background-position: 0 0;
				}
				.loginImage
				{
					background-image: url("https://cluster.egensajt.se/images/account_g_25x25.png");
				}
				.loginBoxText
				{
					display: block;
					height: auto;
					width: auto;

					padding: 0;
					padding-left: 15px;
					padding-right: 15px;

					margin: 0;
					margin-top: 5px;
					margin-left: auto;
					margin-right: auto;
					text-align: center;

					font-size: 16px;
					font-weight: 500;
					letter-spacing: 0.3px;
					line-height: 19px;
					color: #999;
				}
				.loginBox:hover .loginImage
				{
					background-image: url("https://cluster.egensajt.se/images/account_lb_25x25.png");
				}
				.loginBox:hover .loginBoxText
				{
					color: #84AEDD;
				}
				@media all and (min-width: 1280px)
				{
					.homepageInfoBackground
					{
						height: 400px;
						width: 100%;

						margin: 0;
						padding: 0;
						padding-top: 30px;
					}
					.homepageInfoSection
					{
						height: 330px;
						width: 1265px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;
						padding: 0;
					}
					.homepageInfoSectionNoReadmore
					{
						height: 400px;
					}
					.homepageInfoSubSection
					{
						float: left;
						position: relative;
						width: 318px;
						height: 220px;
						margin: 0;

						padding-top: 20px;
						padding-right: 50px;
						padding-left: 50px;
						padding-bottom: 20px;
					}
					.homepageInfoSubSectionNoReadmore
					{
						height: 284px;
					}
					h2.homepageInfoHeadline
					{
						margin-top: 0;
					}
					.homepageInfoClearElement
					{
						display: none;
					}
				}

				@media all and (max-width: 1279px) and (min-width: 852px)
				{
					.homepageInfoBackground
					{
						height: 670px;
						width: 100%;

						margin: 0;
						padding: 0;
						padding-top: 30px;
					}
					.homepageInfoSection
					{
						height: 600px;
						width: 822px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;
						padding: 0;
					}
					.homepageInfoSectionNoReadmore
					{
						height: 670px;
					}
					.homepageInfoSubSection
					{
						float: left;
						position: relative;
						width: 318px;
						height: 220px;
						margin: 0;

						padding-top: 20px;
						padding-right: 40px;
						padding-left: 40px;
						padding-bottom: 20px;
					}
					.homepageInfoSubSectionNoReadmore
					{
						height: 255px;
					}
					h2.homepageInfoHeadline
					{
						margin-top: 0;
					}
					.homepageInfoClearElement
					{
						clear: both;
					}
					.homepageInfoSubSectionFirst
					{
						float: left;
					}
					.homepageInfoSubSectionSecond
					{
						float: right;
					}
					.homepageInfoSubSectionThird
					{
						float: none;
						margin-left: auto;
						margin-right: auto;
					}
				}

				@media all and (max-width: 851px) and (min-width: 433px)
				{
					.homepageInfoBackground
					{
						height: 940px;
						width: 100%;

						margin: 0;
						padding: 0;
						padding-top: 30px;
					}
					.homepageInfoSection
					{
						height: 870px;
						width: 418px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;
						padding: 0;
					}
					.homepageInfoSectionNoReadmore
					{
						height: 940px;
					}
					.homepageInfoSubSection
					{
						float: left;
						position: relative;
						width: 318px;
						height: 220px;
						margin: 0;

						padding-top: 20px;
						padding-right: 50px;
						padding-left: 50px;
						padding-bottom: 20px;
					}
					.homepageInfoSubSectionNoReadmore
					{
						height: 255px;
					}
					h2.homepageInfoHeadline
					{
						margin-top: 0;
					}
					.homepageInfoClearElement
					{
						display: none;
					}
				}

				@media all and (max-width: 432px)
				{
					.homepageInfoBackground
					{
						height: 940px;
						width: 100%;

						margin: 0;
						padding: 0;
						padding-top: 30px;
					}
					.homepageInfoSection
					{
						height: 870px;
						width: 305px;

						margin: 0;
						margin-left: auto;
						margin-right: auto;
						padding: 0;
					}
					.homepageInfoSectionNoReadmore
					{
						height: 940px;
					}
					.homepageInfoSubSection
					{
						position: relative;
						width: 305px;
						height: 220px;
						margin: 0;

						padding-top: 20px;
						padding-right: 0px;
						padding-left: 0px;
						padding-bottom: 20px;
					}
					.homepageInfoSubSectionNoReadmore
					{
						height: 255px;
					}
					h2.homepageInfoHeadline
					{
						margin-top: 0;
					}
					.homepageInfoClearElement
					{
						display: none;
					}
				}
				.webHostingImage1_1
				{
					background-image: url("https://cluster.egensajt.se/images/icon_60x60_sitepro.png");
				}

				.webHostingImage2_1
				{
					background-image: url("https://cluster.egensajt.se/images/icon_60x60_wordpress_s.png");
				}

				.webHostingImage3_1
				{
					background-image: url("https://cluster.egensajt.se/images/icon_60x60_woocommerce.png");
				}
				.readmoreHolder
				{
					position: relative;
					height: 70px;
					width: 305px;

					margin: 0;
					margin-left: auto;
					margin-right: auto;
					padding: 0;
				}
				.rightarrow {
					display:inline-block;
					width: 9px;
					height:9px;
					-ms-transform: rotate(45deg); /* IE 9 */
					-webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
					transform: rotate(45deg); /* Firefox */
				}

				.rightarrow_stem {
					position: absolute;
					width:3px;
					height:9px;
					background-color:#3D6796;
					left: 7px;
					top: 0px;
				}

				.rightarrow_kick
				{
					position: absolute;
					width:8px;
					height:3px;
					background-color:#3D6796;
					left: 0px;
					top: 0px;
				}
				.readmore
				{
					position: absolute;
					height: auto;
					width: 95px;
					left: calc(50% - 38px);
					top: 23px;
					margin: 0;
					padding: 0;

					font-size: 18px;
					font-weight: 400;
					text-align: center;
				}
				.link
				{
					color: #3D6796;
					text-decoration: underline;
				}
			</style>
		</head>
		<body>
			<div class="headerBackground" >
				<div class="header" >
					<a href="https://www.egensajt.se" >
						<img class="logo" src="https://cluster.egensajt.se/images/egensajt_logo_199x50.png" width="199px" height="50px" alt="egensajt logo" />
					</a>
					<div onclick="window.open('https://www.egensajt.se/clientarea/','_self')" class="loginBox">
						<div class="loginBoxImage loginImage" ></div>
						<p class="loginBoxText">Logga in</p>
					</div>
				</div>
			</div>
			<div class="bannerBackground" >
				<div class="banner" >
					<div class="homePageMargin" ></div>
					<h1 class="presentationH1" >EgenSajt Webbhotell</h1>
					<h2 class="presentationH2" >Grattis din nya hemsida fungerar!</h2>
					<form method="post" action="https://www.egensajt.se/registrera-doman/" >
						<div class="transparentSearchWrapper" >
							<input class="transparentSearchInput" placeholder="Sök domännamn" type="text" autocomplete="off" name="domains" />
							<button class="transparentSearchButton" type="submit" >Sök</button>
						</div>
					</form>
				</div>
			</div>
			<div class="domainPricesBackground" >
				<div class="domainPrices">

				</div>
			</div>
			<div class="presentationBackground" >
				<div class="presentation">
					<h1 class="mainPageHeadline" >Användbara kunskapsbanksartiklar</h1>
					<div class="columnSmallThree" onclick="window.open('https://www.egensajt.se/kunskapsbank/4/Webbsidehantering','_self')" >
						<div class="boxImage imageWebsiteManagementBig" ></div>
						<h2 class="boxHeadline">Webbsidehantering</h2>
						<p class="boxTextBody" >Det kan vara mycket att tänk på vad gäller hemsidor och hur det fungerar så ta en titt i vår kunskapsbank!</p>
					</div>
					<!--
					<div class="columnSmallThree" onclick="window.open('https://www.egensajt.se/kunskapsbank/10/Support','_self')" >
						<div class="boxImage imageSupportBig" ></div>
						<h2 class="boxHeadline">Support</h2>
						<p class="boxTextBody" >Hur support fungerar</p>
					</div>
					-->
					<div class="columnSmallThree" onclick="window.open('https://www.egensajt.se/kunskapsbank/8/Publiceringssystem','_self')" >
						<div class="boxImage imageCmsBig" ></div>
						<h2 class="boxHeadline">Publiceringssystem</h2>
						<p class="boxTextBody" >Se hur kan installera och använda vår lättanda sidbyggare, Wordpress med eller utan webbshop!</p>
					</div>
					<div class="columnSmallThree" onclick="window.open('https://www.egensajt.se/kunskapsbank/12/Aterforsaljare','_self')" >
						<div class="boxImage imageResellerBig" ></div>
						<h2 class="boxHeadline">Återförsäljare</h2>
						<p class="boxTextBody" >Bli återförsäljare (reseller) och administrera enkelt och effektivt alla kunder och få hela 20% rabatt!</p>
					</div>
				</div>
			</div>
			<div class="homepageInfoBackground" >
				<div class="homepageInfoSection" >
					<h2 class="mainPageHeadline">Skapa hemsida med vår sajtbyggare eller med Wordpress</h2>
					<div class="homepageInfoSubSection homepageInfoSubSectionFirst" >
						<div class="webHostingImage1_1 boxImage" ></div>
						<h2 class="textCenteredHeadline" ></h2>
						<p class="boxTextBody">Vår sidbyggare är mycket enkel att använda. Det finns 200 olika utseenden att välja ifrån och du byter enkelt ut text och bilder. Det finns online-hjälp om du fastnar!</p>
					</div>
					<div class="homepageInfoSubSection homepageInfoSubSectionSecond" >
						<div class="webHostingImage2_1 boxImage" ></div>
						<h2 class="textCenteredHeadline" ></h2>
						<p class="boxTextBody">Wordpress är världens mest populära innehållshanteringssystem och hos oss aktiverar du det enkelt och kan sätta upp en riktigt proffsig hemsida!</p>
					</div>
					<div class="homepageInfoClearElement" ></div>
					<div class="homepageInfoSubSection homepageInfoSubSectionThird" >
						<div class="webHostingImage3_1 boxImage" ></div>
						<h2 class="textCenteredHeadline" ></h2>
						<p class="boxTextBody">Woocommerce är ett tillägg i Wordpress som transformerar om Wordpress till att bli en fantastisk webbshop som vårt system är optimerat och anpassat för.</p>
					</div>
				</div>
				<div class="readmoreHolder" >
					<div class="readmore"><a class="link" href="https://www.egensajt.se/webbhotell/">Läs mer <span class="rightarrow"
					><div class="rightarrow_kick" ></div><div class="rightarrow_stem" ></div></span></a></div>
				</div>
			</div>
			<div class="footerBackground">
				<div class="footer" >
					<p class="footerText" >© EgenSajt Hosting AB</p>
				</div>
			</div>
		</body>
	</html>
