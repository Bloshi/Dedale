import { Component, ViewChild } from '@angular/core';
import {
  IonicPage,
  NavController,
  NavParams,
  MenuController,
  ModalController
} from 'ionic-angular';

// pages
import { ActuFocusPage } from '../actu-focus/actu-focus';

@IonicPage()
@Component({
  selector: 'page-actu',
  templateUrl: 'actu.html',
})
export class ActuPage {

  @ViewChild('ficheImg') ficheImg;
  @ViewChild('ficheUser') ficheUser;
  @ViewChild('ficheTitle') ficheTitle;
  @ViewChild('ficheDescr') ficheDescr;
  @ViewChild('ficheDate') ficheDate;

  items = [];
  // infoModal: Array<{ img: string, user: string, title: string, descr: string, date: string }>;

  constructor(
    public navCtrl: NavController,
    public navParams: NavParams,
    public menuCtrl: MenuController,
    public modalCtrl: ModalController
  ) {
    for (let i = 0; i < 30; i++) {
      this.items.push(this.items.length);
    }
  }

  infinteScroll( infiniteScroll ) {
    console.log('Begin async operation');

    setTimeout( () => {
      for (let i = 0; i < 30; i++) {
        this.items.push(this.items.length);
      }

      console.log( 'Async operation has ended' );
      infiniteScroll.complete();
    }, 500);
  }

  openActuFocusPage() {
    this.navCtrl.push(ActuFocusPage);
  }

}
