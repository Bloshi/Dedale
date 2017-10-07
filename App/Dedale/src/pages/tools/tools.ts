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

  constructor(
      public navCtrl: NavController,
      public navParams: NavParams
  ) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad ToolsPage');
  }

  lauchToolsDice() {
    this.navCtrl.push(ToolsDicePage);
  }

}
