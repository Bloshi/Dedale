import { Component, ViewChild } from '@angular/core';
import { IonicPage, NavController, NavParams, AlertController } from 'ionic-angular';

// page
import { ActuPage } from '../actu/actu';

@IonicPage()
@Component({
  selector: 'page-sign-in',
  templateUrl: 'sign-in.html',
})
export class SignInPage {

  /*
    * récupération des différents champs
  **/
  @ViewChild('login') login;
  @ViewChild('password') password;

  constructor(
    public navCtrl: NavController,
    public navParams: NavParams,
    public alertCtrl: AlertController
  ) {}

  /*
    * fonction SignInAction
  **/
  SignInAction() {
    if (this.login.value == 'test' && this.password.value == "test") {
      // redirection
      this.navCtrl.push(ActuPage);
    } else {
      // affichage de l'alerte
      let alert = this.alertCtrl.create({
        title: 'Error',
        subTitle: 'Votre adresse Email ou votre mot de passe est incorrecte.',
        buttons: ['OK']
      });
      alert.present();
    }
  }

  ionViewDidLoad() {
    console.log('sign in');
  }

}
