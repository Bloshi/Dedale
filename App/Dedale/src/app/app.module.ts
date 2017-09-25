import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { Geolocation } from '@ionic-native/geolocation';

import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';
import { ListPage } from '../pages/list/list';
import { SignUpPage } from '../pages/sign-up/sign-up';
import { SignInPage } from '../pages/sign-in/sign-in';
import { ActuPage } from '../pages/actu/actu';
import { ActuFocusPage } from '../pages/actu-focus/actu-focus';

import { SearchPage } from '../pages/search/search';
import { ToolsPage } from '../pages/tools/tools';
import { MapPage } from '../pages/map/map';

import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

@NgModule({
  declarations: [
    MyApp,
    HomePage,
    ListPage,

    SignUpPage,
    SignInPage,
    ActuPage,
    ActuFocusPage,

    SearchPage,
    ToolsPage,
    MapPage
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp),
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    ListPage,

    SignUpPage,
    SignInPage,
    ActuPage,
    ActuFocusPage,

    SearchPage,
    ToolsPage,
    MapPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    Geolocation,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}
