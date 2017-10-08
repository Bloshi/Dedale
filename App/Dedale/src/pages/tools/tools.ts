import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

// link page
import { SignUpPage } from '../sign-up/sign-up';
import { ToolsDicePage } from '../tools-dice/tools-dice';

/**
 * Generated class for the ToolsPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-tools',
  templateUrl: 'tools.html',
})
export class ToolsPage {

  tools: Array<{ title: string, component: any, icon: string }>;

  constructor(
      public navCtrl: NavController,
      public navParams: NavParams
  ) {
    this.tools = [
      { title: 'Dés', component: ToolsDicePage, icon: 'fa fa-scissors' },
      { title: 'Chrono', component: ToolsDicePage, icon: 'fa fa-clock-o' },
      { title: 'Musique', component: ToolsDicePage, icon: 'fa fa-scissors' }
    ];
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad ToolsPage');
  }

  openTools(page) {
    this.navCtrl.push(page);
  }

}
