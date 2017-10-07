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

  @ViewChild('dice-side-1')
  @ViewChild('dice-side-2')
  @ViewChild('status')
  
  constructor (
    public navCtrl: NavController, 
    public navParams: NavParams
  ) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad ToolsDicePage');
  }

  lauchToolsDice() {

    const diceSide1 = document.getElementById('dice-side-1');
    const diceSide2 = document.getElementById('dice-side-2');
    const status = document.getElementById('status');
  
    const side1 = Math.floor(Math.random() * 6) + 1;
    const side2 = Math.floor(Math.random() * 6) + 1;
    const diceTotal = side1 + side2;
  
    diceSide1.innerHTML = side1;
    diceSide2.innerHTML = side2;
  
    status.innerHTML = 'You rolled ' + diceTotal + '.';
  
    if (side1 === side2) {
      status.innerHTML += ' Doubles! You get a free turn!';
    }
  }

}
