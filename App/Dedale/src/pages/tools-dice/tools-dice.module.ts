import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { ToolsDicePage } from './tools-dice';

@NgModule({
  declarations: [
    ToolsDicePage,
  ],
  imports: [
    IonicPageModule.forChild(ToolsDicePage),
  ],
})
export class ToolsDicePageModule {}
