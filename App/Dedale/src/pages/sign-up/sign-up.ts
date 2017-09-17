import { Component, ViewChild } from '@angular/core';
import {
  IonicPage,
  NavController,
  NavParams,
  AlertController,
  ToastController
} from 'ionic-angular';

// page
import { ActuPage } from '../actu/actu';

@IonicPage()
@Component({
  selector: 'page-sign-up',
  templateUrl: 'sign-up.html',
})
export class SignUpPage {

  @ViewChild('login') login;
  @ViewChild('email') email;
  @ViewChild('password') password;

  constructor(
    public navCtrl: NavController,
    public navParams: NavParams,
    public alertCtrl: AlertController,
    public toastCtrl: ToastController
  ) {}

  SignUpAction() {
    if ( this.login.value == '' || this.email.value == '' || this.password.value == '' ) {
      let alert = this.alertCtrl.create({
        title: 'Error',
        subTitle: 'Une ou plusieur n\'ont pas été remplie.',
        buttons: ['OK']
      });
      alert.present();
    } else {
      let toast = this.toastCtrl.create({
        message: 'Vos infos on bien été ajouté',
        duration: 3000,
        position: 'bottom'
      });
      toast.present();
      this.navCtrl.push(ActuPage);
    }
  }

  ionViewDidLoad() {
    console.log('sign up');
  }

}
