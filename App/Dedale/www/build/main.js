webpackJsonp([7],{

/***/ 101:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ActuFocusPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(13);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the ActuFocusPage page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
var ActuFocusPage = /** @class */ (function () {
    function ActuFocusPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    ActuFocusPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad ActuFocusPage');
    };
    ActuFocusPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["e" /* IonicPage */])(),
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
            selector: 'page-actu-focus',template:/*ion-inline-start:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/actu-focus/actu-focus.html"*/'<!--\n  Generated template for the ActuFocusPage page.\n\n  See http://ionicframework.com/docs/components/#navigation for more info on\n  Ionic pages and navigation.\n-->\n<ion-header>\n\n  <ion-navbar>\n    <ion-title>L\'actu</ion-title>\n  </ion-navbar>\n\n</ion-header>\n\n\n<ion-content>\n\n  <div class="news-block" padding>\n    <div class="head-news">\n      <ion-list>\n        <ion-item (click)=\'openActuFocusPage()\'>\n          <ion-avatar item-start>\n            <img src="assets/img/avatar-finn.png" #ficheImg />\n          </ion-avatar>\n          <h2 #ficheUser><a href="#">@Finn</a></h2>\n          <small>posté il y a 3jours</small>\n        </ion-item>\n      </ion-list>\n    </div><!-- .head-news -->\n    <div class="body-news">\n      <h3 #ficheTitle>Don\'t Know What To Do!</h3>\n      <p #ficheDescr>I\'ve had a pretty messed up day. If we just...</p>\n      <img src="assets/img/stay-hungry-stay-foolish.jpg" alt="news image" />\n    </div>\n  </div><!-- .news-block -->\n\n</ion-content>\n'/*ion-inline-end:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/actu-focus/actu-focus.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["k" /* NavParams */]])
    ], ActuFocusPage);
    return ActuFocusPage;
}());

//# sourceMappingURL=actu-focus.js.map

/***/ }),

/***/ 102:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return SearchPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(13);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the SearchPage page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
var SearchPage = /** @class */ (function () {
    function SearchPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    SearchPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad SearchPage');
    };
    SearchPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["e" /* IonicPage */])(),
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
            selector: 'page-search',template:/*ion-inline-start:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/search/search.html"*/'<!--\n  Generated template for the SearchPage page.\n\n  See http://ionicframework.com/docs/components/#navigation for more info on\n  Ionic pages and navigation.\n-->\n<ion-header>\n\n  <ion-navbar>\n  	<button ion-button menuToggle>\n		<ion-icon name="menu"></ion-icon>\n	</button>\n    <ion-title>SearchPage</ion-title>\n  </ion-navbar>\n\n</ion-header>\n\n\n<ion-content padding>\n\n</ion-content>\n'/*ion-inline-end:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/search/search.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["k" /* NavParams */]])
    ], SearchPage);
    return SearchPage;
}());

//# sourceMappingURL=search.js.map

/***/ }),

/***/ 103:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ToolsPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(13);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the ToolsPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var ToolsPage = /** @class */ (function () {
    function ToolsPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    ToolsPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad ToolsPage');
    };
    ToolsPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["e" /* IonicPage */])(),
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
            selector: 'page-tools',template:/*ion-inline-start:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/tools/tools.html"*/'<!--\n  Generated template for the ToolsPage page.\n\n  See http://ionicframework.com/docs/components/#navigation for more info on\n  Ionic pages and navigation.\n-->\n<ion-header>\n\n  <ion-navbar>\n  	<button ion-button menuToggle>\n		<ion-icon name="menu"></ion-icon>\n	</button>\n    <ion-title>ToolsPage</ion-title>\n  </ion-navbar>\n\n</ion-header>\n\n\n<ion-content>\n	<h3>Liste d\'outils pour le jeu</h3>\n</ion-content>\n'/*ion-inline-end:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/tools/tools.html"*/,
        }),
        __metadata("design:paramtypes", [typeof (_a = typeof __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* NavController */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* NavController */]) === "function" && _a || Object, typeof (_b = typeof __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["k" /* NavParams */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["k" /* NavParams */]) === "function" && _b || Object])
    ], ToolsPage);
    return ToolsPage;
    var _a, _b;
}());

//# sourceMappingURL=tools.js.map

/***/ }),

/***/ 104:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return MapPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__ionic_native_geolocation__ = __webpack_require__(157);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



/**
 * Generated class for the MapPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var MapPage = /** @class */ (function () {
    function MapPage(navCtrl, navParams, geo, platform) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
        this.geo = geo;
        this.platform = platform;
    }
    MapPage.prototype.ionViewDidLoad = function () {
        this.getUserPosition();
    };
    MapPage.prototype.getUserPosition = function () {
        var _this = this;
        this.options = {
            enableHighAccuracy: false
        };
        this.geo.getCurrentPosition(this.options).then(function (pos) {
            _this.currentPos = pos;
            _this.addMap(pos.coords.latitude, pos.coords.longitude);
        }, function (err) {
            console.log("error : " + err.message);
        });
    };
    MapPage.prototype.addMap = function (lat, lng) {
        var latLng = new google.maps.LatLng(lat, lng);
        var mapOptions = {
            center: latLng,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        this.map = new google.maps.Map(this.mapRef.nativeElement, mapOptions);
        this.addMarker();
    };
    MapPage.prototype.addMarker = function () {
        var _this = this;
        var marker = new google.maps.Marker({
            map: this.map,
            animation: google.maps.Animation.DROP,
            position: this.map.getCenter()
        });
        var content = "<p>This is your current position !</p>";
        var infoWindow = new google.maps.InfoWindow({
            content: content
        });
        google.maps.event.addListener(marker, 'click', function () {
            infoWindow.open(_this.map, marker);
        });
    };
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])('map'),
        __metadata("design:type", typeof (_a = typeof __WEBPACK_IMPORTED_MODULE_0__angular_core__["u" /* ElementRef */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_0__angular_core__["u" /* ElementRef */]) === "function" && _a || Object)
    ], MapPage.prototype, "mapRef", void 0);
    MapPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["e" /* IonicPage */])(),
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
            selector: 'page-map',template:/*ion-inline-start:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/map/map.html"*/'<!--\n  Generated template for the MapPage page.\n\n  See http://ionicframework.com/docs/components/#navigation for more info on\n  Ionic pages and navigation.\n-->\n<ion-header>\n\n  <ion-navbar>\n  	<button ion-button menuToggle>\n		<ion-icon name="menu"></ion-icon>\n	</button>\n    <ion-title>MapPage</ion-title>\n  </ion-navbar>\n\n</ion-header>\n\n\n<ion-content>\n  <div id="map" #map></div>\n</ion-content>\n'/*ion-inline-end:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/map/map.html"*/,
        }),
        __metadata("design:paramtypes", [typeof (_b = typeof __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* NavController */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* NavController */]) === "function" && _b || Object, typeof (_c = typeof __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["k" /* NavParams */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["k" /* NavParams */]) === "function" && _c || Object, typeof (_d = typeof __WEBPACK_IMPORTED_MODULE_2__ionic_native_geolocation__["a" /* Geolocation */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_2__ionic_native_geolocation__["a" /* Geolocation */]) === "function" && _d || Object, typeof (_e = typeof __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["l" /* Platform */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["l" /* Platform */]) === "function" && _e || Object])
    ], MapPage);
    return MapPage;
    var _a, _b, _c, _d, _e;
}());

//# sourceMappingURL=map.js.map

/***/ }),

/***/ 105:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return SignUpPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__actu_actu__ = __webpack_require__(40);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


// page

var SignUpPage = /** @class */ (function () {
    function SignUpPage(navCtrl, navParams, alertCtrl, toastCtrl) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
        this.alertCtrl = alertCtrl;
        this.toastCtrl = toastCtrl;
    }
    SignUpPage.prototype.SignUpAction = function () {
        if (this.login.value == '' || this.email.value == '' || this.password.value == '') {
            var alert_1 = this.alertCtrl.create({
                title: 'Error',
                subTitle: 'Une ou plusieur n\'ont pas été remplie.',
                buttons: ['OK']
            });
            alert_1.present();
        }
        else {
            var toast = this.toastCtrl.create({
                message: 'Vos infos on bien été ajouté',
                duration: 3000,
                position: 'bottom'
            });
            toast.present();
            this.navCtrl.push(__WEBPACK_IMPORTED_MODULE_2__actu_actu__["a" /* ActuPage */]);
        }
    };
    SignUpPage.prototype.ionViewDidLoad = function () {
        console.log('sign up');
    };
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])('login'),
        __metadata("design:type", Object)
    ], SignUpPage.prototype, "login", void 0);
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])('email'),
        __metadata("design:type", Object)
    ], SignUpPage.prototype, "email", void 0);
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])('password'),
        __metadata("design:type", Object)
    ], SignUpPage.prototype, "password", void 0);
    SignUpPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["e" /* IonicPage */])(),
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
            selector: 'page-sign-up',template:/*ion-inline-start:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/sign-up/sign-up.html"*/'<!--\n  Generated template for the SignUpPage page.\n\n  See http://ionicframework.com/docs/components/#navigation for more info on\n  Ionic pages and navigation.\n-->\n<ion-header>\n\n  <ion-navbar>\n    <ion-title>SignUp</ion-title>\n  </ion-navbar>\n\n</ion-header>\n\n\n<ion-content padding>\n\n  <p>Créer un compte</p>\n\n  <ion-list inset>\n\n    <ion-item>\n      <ion-label floating>Login</ion-label>\n      <ion-input type="text" #login></ion-input>\n    </ion-item>\n\n    <ion-item>\n      <ion-label floating>Email</ion-label>\n      <ion-input type="email" #email></ion-input>\n    </ion-item>\n\n    <ion-item>\n      <ion-label floating>Password</ion-label>\n      <ion-input type="password" #password></ion-input>\n    </ion-item>\n\n  </ion-list>\n\n  <div padding>\n    <button ion-button full margin-bottom color=\'primary\' (click)=\'SignUpAction()\'>Sign Up</button>\n    <button ion-button full color=\'facebook\'>avec facebook</button>\n  </div>\n\n</ion-content>\n'/*ion-inline-end:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/sign-up/sign-up.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* NavController */],
            __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["k" /* NavParams */],
            __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["a" /* AlertController */],
            __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["m" /* ToastController */]])
    ], SignUpPage);
    return SignUpPage;
}());

//# sourceMappingURL=sign-up.js.map

/***/ }),

/***/ 106:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return SignInPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__actu_actu__ = __webpack_require__(40);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


// page

var SignInPage = /** @class */ (function () {
    function SignInPage(navCtrl, navParams, alertCtrl) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
        this.alertCtrl = alertCtrl;
    }
    /*
      * fonction SignInAction
    **/
    SignInPage.prototype.SignInAction = function () {
        if (this.login.value == 'test' && this.password.value == "test") {
            // redirection
            this.navCtrl.push(__WEBPACK_IMPORTED_MODULE_2__actu_actu__["a" /* ActuPage */]);
        }
        else {
            // affichage de l'alerte
            var alert_1 = this.alertCtrl.create({
                title: 'Error',
                subTitle: 'Votre adresse Email ou votre mot de passe est incorrecte.',
                buttons: ['OK']
            });
            alert_1.present();
        }
    };
    SignInPage.prototype.ionViewDidLoad = function () {
        console.log('sign in');
    };
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])('login'),
        __metadata("design:type", Object)
    ], SignInPage.prototype, "login", void 0);
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])('password'),
        __metadata("design:type", Object)
    ], SignInPage.prototype, "password", void 0);
    SignInPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["e" /* IonicPage */])(),
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
            selector: 'page-sign-in',template:/*ion-inline-start:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/sign-in/sign-in.html"*/'<!--\n  Generated template for the SignInPage page.\n\n  See http://ionicframework.com/docs/components/#navigation for more info on\n  Ionic pages and navigation.\n-->\n<ion-header>\n\n  <ion-navbar>\n    <ion-title>SignIn</ion-title>\n  </ion-navbar>\n\n</ion-header>\n\n\n<ion-content padding>\n\n  <p>Se connecter à son compte</p>\n\n  <ion-list inset>\n\n    <ion-item>\n      <ion-label floating>Login</ion-label>\n      <ion-input type="text" #login></ion-input>\n    </ion-item>\n\n    <ion-item>\n      <ion-label floating>Password</ion-label>\n      <ion-input type="password" #password></ion-input>\n    </ion-item>\n\n  </ion-list>\n\n  <div padding>\n    <button ion-button full margin-bottom color=\'primary\' (click)=\'SignInAction()\'>Sign In</button>\n    <button ion-button full color=\'facebook\'>avec facebook</button>\n  </div>\n\n</ion-content>\n'/*ion-inline-end:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/sign-in/sign-in.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* NavController */],
            __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["k" /* NavParams */],
            __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["a" /* AlertController */]])
    ], SignInPage);
    return SignInPage;
}());

//# sourceMappingURL=sign-in.js.map

/***/ }),

/***/ 115:
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncatched exception popping up in devtools
	return Promise.resolve().then(function() {
		throw new Error("Cannot find module '" + req + "'.");
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = 115;

/***/ }),

/***/ 156:
/***/ (function(module, exports, __webpack_require__) {

var map = {
	"../pages/actu-focus/actu-focus.module": [
		271,
		6
	],
	"../pages/actu/actu.module": [
		272,
		5
	],
	"../pages/map/map.module": [
		275,
		4
	],
	"../pages/search/search.module": [
		273,
		3
	],
	"../pages/sign-in/sign-in.module": [
		277,
		2
	],
	"../pages/sign-up/sign-up.module": [
		276,
		1
	],
	"../pages/tools/tools.module": [
		274,
		0
	]
};
function webpackAsyncContext(req) {
	var ids = map[req];
	if(!ids)
		return Promise.reject(new Error("Cannot find module '" + req + "'."));
	return __webpack_require__.e(ids[1]).then(function() {
		return __webpack_require__(ids[0]);
	});
};
webpackAsyncContext.keys = function webpackAsyncContextKeys() {
	return Object.keys(map);
};
webpackAsyncContext.id = 156;
module.exports = webpackAsyncContext;

/***/ }),

/***/ 200:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_dynamic__ = __webpack_require__(201);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__app_module__ = __webpack_require__(219);


Object(__WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_dynamic__["a" /* platformBrowserDynamic */])().bootstrapModule(__WEBPACK_IMPORTED_MODULE_1__app_module__["a" /* AppModule */]);
//# sourceMappingURL=main.js.map

/***/ }),

/***/ 219:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AppModule; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser__ = __webpack_require__(30);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_ionic_angular__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__ionic_native_geolocation__ = __webpack_require__(157);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__app_component__ = __webpack_require__(268);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__pages_home_home__ = __webpack_require__(269);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__pages_list_list__ = __webpack_require__(270);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__pages_sign_up_sign_up__ = __webpack_require__(105);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__pages_sign_in_sign_in__ = __webpack_require__(106);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__pages_actu_actu__ = __webpack_require__(40);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__pages_actu_focus_actu_focus__ = __webpack_require__(101);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__pages_search_search__ = __webpack_require__(102);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12__pages_tools_tools__ = __webpack_require__(103);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_13__pages_map_map__ = __webpack_require__(104);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_14__ionic_native_status_bar__ = __webpack_require__(198);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_15__ionic_native_splash_screen__ = __webpack_require__(199);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
















var AppModule = /** @class */ (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_1__angular_core__["L" /* NgModule */])({
            declarations: [
                __WEBPACK_IMPORTED_MODULE_4__app_component__["a" /* MyApp */],
                __WEBPACK_IMPORTED_MODULE_5__pages_home_home__["a" /* HomePage */],
                __WEBPACK_IMPORTED_MODULE_6__pages_list_list__["a" /* ListPage */],
                __WEBPACK_IMPORTED_MODULE_7__pages_sign_up_sign_up__["a" /* SignUpPage */],
                __WEBPACK_IMPORTED_MODULE_8__pages_sign_in_sign_in__["a" /* SignInPage */],
                __WEBPACK_IMPORTED_MODULE_9__pages_actu_actu__["a" /* ActuPage */],
                __WEBPACK_IMPORTED_MODULE_10__pages_actu_focus_actu_focus__["a" /* ActuFocusPage */],
                __WEBPACK_IMPORTED_MODULE_11__pages_search_search__["a" /* SearchPage */],
                __WEBPACK_IMPORTED_MODULE_12__pages_tools_tools__["a" /* ToolsPage */],
                __WEBPACK_IMPORTED_MODULE_13__pages_map_map__["a" /* MapPage */]
            ],
            imports: [
                __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser__["a" /* BrowserModule */],
                __WEBPACK_IMPORTED_MODULE_2_ionic_angular__["d" /* IonicModule */].forRoot(__WEBPACK_IMPORTED_MODULE_4__app_component__["a" /* MyApp */], {}, {
                    links: [
                        { loadChildren: '../pages/actu-focus/actu-focus.module#ActuFocusPageModule', name: 'ActuFocusPage', segment: 'actu-focus', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/actu/actu.module#ActuPageModule', name: 'ActuPage', segment: 'actu', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/search/search.module#SearchPageModule', name: 'SearchPage', segment: 'search', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/tools/tools.module#ToolsPageModule', name: 'ToolsPage', segment: 'tools', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/map/map.module#MapPageModule', name: 'MapPage', segment: 'map', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/sign-up/sign-up.module#SignUpPageModule', name: 'SignUpPage', segment: 'sign-up', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/sign-in/sign-in.module#SignInPageModule', name: 'SignInPage', segment: 'sign-in', priority: 'low', defaultHistory: [] }
                    ]
                }),
            ],
            bootstrap: [__WEBPACK_IMPORTED_MODULE_2_ionic_angular__["b" /* IonicApp */]],
            entryComponents: [
                __WEBPACK_IMPORTED_MODULE_4__app_component__["a" /* MyApp */],
                __WEBPACK_IMPORTED_MODULE_5__pages_home_home__["a" /* HomePage */],
                __WEBPACK_IMPORTED_MODULE_6__pages_list_list__["a" /* ListPage */],
                __WEBPACK_IMPORTED_MODULE_7__pages_sign_up_sign_up__["a" /* SignUpPage */],
                __WEBPACK_IMPORTED_MODULE_8__pages_sign_in_sign_in__["a" /* SignInPage */],
                __WEBPACK_IMPORTED_MODULE_9__pages_actu_actu__["a" /* ActuPage */],
                __WEBPACK_IMPORTED_MODULE_10__pages_actu_focus_actu_focus__["a" /* ActuFocusPage */],
                __WEBPACK_IMPORTED_MODULE_11__pages_search_search__["a" /* SearchPage */],
                __WEBPACK_IMPORTED_MODULE_12__pages_tools_tools__["a" /* ToolsPage */],
                __WEBPACK_IMPORTED_MODULE_13__pages_map_map__["a" /* MapPage */]
            ],
            providers: [
                __WEBPACK_IMPORTED_MODULE_14__ionic_native_status_bar__["a" /* StatusBar */],
                __WEBPACK_IMPORTED_MODULE_15__ionic_native_splash_screen__["a" /* SplashScreen */],
                __WEBPACK_IMPORTED_MODULE_3__ionic_native_geolocation__["a" /* Geolocation */],
                { provide: __WEBPACK_IMPORTED_MODULE_1__angular_core__["v" /* ErrorHandler */], useClass: __WEBPACK_IMPORTED_MODULE_2_ionic_angular__["c" /* IonicErrorHandler */] }
            ]
        })
    ], AppModule);
    return AppModule;
}());

//# sourceMappingURL=app.module.js.map

/***/ }),

/***/ 268:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return MyApp; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__ionic_native_status_bar__ = __webpack_require__(198);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__ionic_native_splash_screen__ = __webpack_require__(199);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__pages_actu_actu__ = __webpack_require__(40);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__pages_search_search__ = __webpack_require__(102);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__pages_tools_tools__ = __webpack_require__(103);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__pages_map_map__ = __webpack_require__(104);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




//import { HomePage } from '../pages/home/home';




var MyApp = /** @class */ (function () {
    function MyApp(platform, statusBar, splashScreen) {
        this.platform = platform;
        this.statusBar = statusBar;
        this.splashScreen = splashScreen;
        /*
          * ici placer la condition de connection ou non
          *
        **/
        // si non loggé
        //rootPage: any = HomePage;
        // si loggé
        this.rootPage = __WEBPACK_IMPORTED_MODULE_4__pages_actu_actu__["a" /* ActuPage */];
        this.initializeApp();
        // used for an example of ngFor and navigation 
        this.pages = [
            { title: 'Rechercher', component: __WEBPACK_IMPORTED_MODULE_5__pages_search_search__["a" /* SearchPage */], icon: 'fa fa-search' },
            { title: 'Actualité', component: __WEBPACK_IMPORTED_MODULE_4__pages_actu_actu__["a" /* ActuPage */], icon: 'fa fa-coffee' },
            { title: 'Jeux', component: __WEBPACK_IMPORTED_MODULE_4__pages_actu_actu__["a" /* ActuPage */], icon: 'fa fa-gamepad' },
            { title: 'Carte événement', component: __WEBPACK_IMPORTED_MODULE_7__pages_map_map__["a" /* MapPage */], icon: 'fa fa-map-o' },
            { title: 'Profil', component: __WEBPACK_IMPORTED_MODULE_4__pages_actu_actu__["a" /* ActuPage */], icon: 'fa fa-user-o' },
            { title: 'Outils', component: __WEBPACK_IMPORTED_MODULE_6__pages_tools_tools__["a" /* ToolsPage */], icon: 'fa fa-cog' },
        ];
    }
    MyApp.prototype.initializeApp = function () {
        var _this = this;
        this.platform.ready().then(function () {
            // Okay, so the platform is ready and our plugins are available.
            // Here you can do any higher level native things you might need.
            _this.statusBar.styleDefault();
            _this.splashScreen.hide();
        });
    };
    MyApp.prototype.openPage = function (page) {
        // Reset the content nav to have just this page
        // we wouldn't want the back button to show in this scenario
        this.nav.setRoot(page);
    };
    MyApp.prototype.isItemActive = function (scope, location) {
        scope.isItemActive = function (p) {
            return location.path().indexOf(p.title) > -1;
        };
    };
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])(__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["i" /* Nav */]),
        __metadata("design:type", __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["i" /* Nav */])
    ], MyApp.prototype, "nav", void 0);
    MyApp = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({template:/*ion-inline-start:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/app/app.html"*/'<ion-menu [content]="content">\n\n  <ion-content>\n    <div class="profile">\n      <button class="item-icon-left" no-lines menuClose ion-item (click)="openPage(profile)">\n        <div class="stage up">\n          <ion-avatar item-center>\n            <img src="assets/img/avatar-finn.png" #ficheImg />\n          </ion-avatar>\n        </div>\n        <div class="stage down">\n          <h2 #ficheUser><a href="#">@Finn</a></h2>\n          <h3 #ficheTitle>Don\'t Know What To Do!</h3>\n        </div>\n      </button>\n    </div><!-- .search -->\n    <ion-list no-lines\n      *ngFor="let p of pages"\n      class=\'item-navMenu\'\n      ng-class="{active: isItemActive(p)}"\n    >\n      <button class="item-icon-left nav-btn" menuClose ion-item (click)="openPage(p.component)">\n        <i class="{{ p.icon }}" aria-hidden="true"></i> {{ p.title }}\n      </button>\n    </ion-list>\n  </ion-content>\n\n</ion-menu>\n\n\n<!-- Disable swipe-to-go-back because it\'s poor UX to combine STGB with side menus -->\n<ion-nav [root]="rootPage" #content swipeBackEnabled="false"></ion-nav>\n'/*ion-inline-end:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/app/app.html"*/
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["l" /* Platform */],
            __WEBPACK_IMPORTED_MODULE_2__ionic_native_status_bar__["a" /* StatusBar */],
            __WEBPACK_IMPORTED_MODULE_3__ionic_native_splash_screen__["a" /* SplashScreen */]])
    ], MyApp);
    return MyApp;
}());

//# sourceMappingURL=app.component.js.map

/***/ }),

/***/ 269:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return HomePage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__sign_up_sign_up__ = __webpack_require__(105);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__sign_in_sign_in__ = __webpack_require__(106);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


// page


var HomePage = /** @class */ (function () {
    function HomePage(navCtrl) {
        this.navCtrl = navCtrl;
    }
    HomePage.prototype.openSignUpPage = function () {
        this.navCtrl.push(__WEBPACK_IMPORTED_MODULE_2__sign_up_sign_up__["a" /* SignUpPage */]);
    };
    HomePage.prototype.openSignInPage = function () {
        this.navCtrl.push(__WEBPACK_IMPORTED_MODULE_3__sign_in_sign_in__["a" /* SignInPage */]);
    };
    HomePage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
            selector: 'page-home',template:/*ion-inline-start:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/home/home.html"*/'<ion-content padding>\n  <h1>Dedal</h1>\n  <h2>Jeux de plateaux</h2>\n\n  <p>Vous n\'êtes pas encore connecté à Dedal</p>\n\n	<div padding>\n    <button ion-button full margin-bottom color=\'primary\' (click)=\'openSignInPage()\'>Sign In</button>\n		<button ion-button full color="default" (click)=\'openSignUpPage()\'>Sign Up</button>\n	</div>\n</ion-content>\n'/*ion-inline-end:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/home/home.html"*/
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* NavController */]])
    ], HomePage);
    return HomePage;
}());

//# sourceMappingURL=home.js.map

/***/ }),

/***/ 270:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ListPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(13);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var ListPage = /** @class */ (function () {
    function ListPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
        // If we navigated to this page, we will have an item available as a nav param
        this.selectedItem = navParams.get('item');
        // Let's populate this page with some filler content for funzies
        this.icons = ['flask', 'wifi', 'beer', 'football', 'basketball', 'paper-plane',
            'american-football', 'boat', 'bluetooth', 'build'];
        this.items = [];
        for (var i = 1; i < 11; i++) {
            this.items.push({
                title: 'Item ' + i,
                note: 'This is item #' + i,
                icon: this.icons[Math.floor(Math.random() * this.icons.length)]
            });
        }
    }
    ListPage_1 = ListPage;
    ListPage.prototype.itemTapped = function (event, item) {
        // That's right, we're pushing to ourselves!
        this.navCtrl.push(ListPage_1, {
            item: item
        });
    };
    ListPage = ListPage_1 = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
            selector: 'page-list',template:/*ion-inline-start:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/list/list.html"*/'<ion-header>\n  <ion-navbar>\n    <button ion-button menuToggle>\n      <ion-icon name="menu"></ion-icon>\n    </button>\n    <ion-title>List</ion-title>\n  </ion-navbar>\n</ion-header>\n\n<ion-content>\n  <ion-list inset>\n    <button ion-item *ngFor="let item of items" (click)="itemTapped($event, item)">\n      <ion-icon [name]="item.icon" item-left></ion-icon>\n      {{item.title}}\n      <div class="item-note" item-right>\n        {{item.note}}\n      </div>\n    </button>\n  </ion-list>\n  <div *ngIf="selectedItem" padding>\n    You navigated here from <b>{{selectedItem.title}}</b>\n  </div>\n</ion-content>\n'/*ion-inline-end:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/list/list.html"*/
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["k" /* NavParams */]])
    ], ListPage);
    return ListPage;
    var ListPage_1;
}());

//# sourceMappingURL=list.js.map

/***/ }),

/***/ 40:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ActuPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__actu_focus_actu_focus__ = __webpack_require__(101);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


// pages

var ActuPage = /** @class */ (function () {
    // infoModal: Array<{ img: string, user: string, title: string, descr: string, date: string }>;
    function ActuPage(navCtrl, navParams, menuCtrl, modalCtrl) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
        this.menuCtrl = menuCtrl;
        this.modalCtrl = modalCtrl;
        this.items = [];
        for (var i = 0; i < 30; i++) {
            this.items.push(this.items.length);
        }
    }
    ActuPage.prototype.infinteScroll = function (infiniteScroll) {
        var _this = this;
        console.log('Begin async operation');
        setTimeout(function () {
            for (var i = 0; i < 30; i++) {
                _this.items.push(_this.items.length);
            }
            console.log('Async operation has ended');
            infiniteScroll.complete();
        }, 500);
    };
    ActuPage.prototype.openActuFocusPage = function () {
        this.navCtrl.push(__WEBPACK_IMPORTED_MODULE_2__actu_focus_actu_focus__["a" /* ActuFocusPage */]);
    };
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])('ficheImg'),
        __metadata("design:type", Object)
    ], ActuPage.prototype, "ficheImg", void 0);
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])('ficheUser'),
        __metadata("design:type", Object)
    ], ActuPage.prototype, "ficheUser", void 0);
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])('ficheTitle'),
        __metadata("design:type", Object)
    ], ActuPage.prototype, "ficheTitle", void 0);
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])('ficheDescr'),
        __metadata("design:type", Object)
    ], ActuPage.prototype, "ficheDescr", void 0);
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_14" /* ViewChild */])('ficheDate'),
        __metadata("design:type", Object)
    ], ActuPage.prototype, "ficheDate", void 0);
    ActuPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["e" /* IonicPage */])(),
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["n" /* Component */])({
            selector: 'page-actu',template:/*ion-inline-start:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/actu/actu.html"*/'<!--\n  Generated template for the ActuPage page.\n\n  See http://ionicframework.com/docs/components/#navigation for more info on\n  Ionic pages and navigation.\n-->\n<ion-header>\n  <ion-navbar>\n    <button ion-button menuToggle>\n			<ion-icon name="menu"></ion-icon>\n		</button>\n    <ion-title>File d\'actu</ion-title>\n  </ion-navbar>\n</ion-header>\n\n\n<ion-content>\n\n  <ion-list>\n    <ion-item-sliding *ngFor="let i of items" class="actu_fiche">\n      <ion-item (click)=\'openActuFocusPage()\'>\n        <ion-avatar item-start>\n          <img src="assets/img/avatar-finn.png" #ficheImg />\n        </ion-avatar>\n        <h2 #ficheUser><a href="#">@Finn</a></h2>\n        <h3 #ficheTitle>Don\'t Know What To Do!</h3>\n        <p #ficheDescr>I\'ve had a pretty messed up day. If we just...</p>\n        <small #ficheDate>ajouté il y à 2h</small>\n      </ion-item>\n      <ion-item-options side="left">\n        <button ion-button color="danger">\n          <ion-icon name="trash"></ion-icon>\n          Supprimer\n        </button>\n      </ion-item-options>\n      <ion-item-options side="right">\n        <button ion-button color="dark">\n          <ion-icon name="ios-more"></ion-icon>\n          Plus\n        </button>\n        <button ion-button color="secondary">\n          <ion-icon name="heart"></ion-icon>\n          Suivre\n        </button>\n      </ion-item-options>\n    </ion-item-sliding>\n  </ion-list>\n\n  <ion-infinite-scroll (ionInfinite)="infinteScroll($event)">\n    <ion-infinite-scroll-content></ion-infinite-scroll-content>\n  </ion-infinite-scroll>\n\n</ion-content>\n'/*ion-inline-end:"/Users/maximebartier/Sites/Client/BloshiCorp/Dedale/App/Dedale/src/pages/actu/actu.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["j" /* NavController */],
            __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["k" /* NavParams */],
            __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* MenuController */],
            __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["h" /* ModalController */]])
    ], ActuPage);
    return ActuPage;
}());

//# sourceMappingURL=actu.js.map

/***/ })

},[200]);
//# sourceMappingURL=main.js.map