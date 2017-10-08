import { Component, ViewChild } from '@angular/core';
import { Nav, Platform } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

//import { HomePage } from '../pages/home/home';
import { ActuPage } from '../pages/actu/actu';
import { SearchPage } from '../pages/search/search';
import { ToolsPage } from '../pages/tools/tools';
import { ToolsDicePage } from '../pages/tools-dice/tools-dice';

import { MapPage } from '../pages/map/map';


@Component({
  templateUrl: 'app.html'
})
export class MyApp {

  @ViewChild(Nav) nav: Nav;

  /*
    * ici placer la condition de connection ou non
    *
  **/
  //rootPage: any = HomePage;
  rootPage: any = ActuPage;

  pages: Array<{ title: string, component: any, icon: string}>;

  constructor (
    public platform: Platform,
    public statusBar: StatusBar,
    public splashScreen: SplashScreen
  ) {
    this.initializeApp();

    // used for an example of ngFor and navigation
    this.pages = [
      { title: 'Rechercher', component: SearchPage, icon: 'fa fa-search' },
      { title: 'Actualité', component: ActuPage, icon: 'fa fa-coffee' },
      { title: 'Jeux', component: ActuPage, icon: 'fa fa-gamepad' },
      { title: 'Carte événement', component: MapPage, icon: 'fa fa-map-o' },
      { title: 'Profil', component: ActuPage, icon: 'fa fa-user-o' },
      { title: 'Outils', component: ToolsPage, icon: 'fa fa-cog' }
    ];
  }

  initializeApp() {
    this.platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      this.statusBar.styleDefault();
      this.splashScreen.hide();
    });
  }

  openPage(page) {
    // Reset the content nav to have just this page
    // we wouldn't want the back button to show in this scenario
    this.nav.setRoot(page);
  }

  isItemActive(scope, location) {
    scope.isItemActive = (p) => {
      return location.path().indexOf(p.title) > -1;
    }
  }
}
