import { Component, ViewChild } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

/**
 * Generated class for the ToolsDicePage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-tools-dice',
  templateUrl: 'tools-dice.html',
})
export class ToolsDicePage {

  @ViewChild('diceSide1') diceSide1: any;
  @ViewChild('diceSide2') diceSide2: any;
  @ViewChild('status') status: any;
  
  constructor (
    public navCtrl: NavController, 
    public navParams: NavParams
  ) {}

  ionViewDidLoad() {
    this.diceSide1 = 0;
    this.diceSide2 = 0;
    this.status = '';
  }

  lauchToolsDice() {
  
    const side1 = Math.floor(Math.random() * 6) + 1;
    const side2 = Math.floor(Math.random() * 6) + 1;
    const diceTotal = side1 + side2;
  
    this.diceSide1 = side1;
    this.diceSide2 = side2;
  
    this.status = 'You rolled ' + diceTotal + '.';
  
    if (side1 === side2) {
      this.status += ' Doubles! You get a free turn!';
    }
  }

}
