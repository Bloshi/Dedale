import { Component, ViewChild, ElementRef } from '@angular/core';
import { IonicPage, NavController, NavParams, Platform } from 'ionic-angular';

import { 
  Geolocation, 
  GeolocationOptions, 
  Geoposition, 
  PositionError } from '@ionic-native/geolocation';

declare var google: any;

/**
 * Generated class for the MapPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-map',
  templateUrl: 'map.html',
})
export class MapPage {

  // récupérer la div #map
  options: GeolocationOptions;
  currentPos: Geoposition;

  @ViewChild('map') mapRef: ElementRef;
  map: any;

  constructor(
    public navCtrl: NavController, 
    public navParams: NavParams,
    private geo: Geolocation,
    private platform: Platform) {}

  ionViewDidLoad() {
    this.getUserPosition();
  }

  getUserPosition(){
    this.options = {
    enableHighAccuracy : false
    };
    this.geo.getCurrentPosition(this.options).then((pos : Geoposition) => {

        this.currentPos = pos;
        this.addMap(pos.coords.latitude,pos.coords.longitude);

    },(err : PositionError)=> {
        console.log("error : " + err.message);
    })
  }

  addMap(lat, lng) {
    let latLng = new google.maps.LatLng(lat, lng);

    let mapOptions = {
      center: latLng,
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    this.map = new google.maps.Map(this.mapRef.nativeElement, mapOptions);
    this.addMarker();
  }

  addMarker() {
    let marker = new google.maps.Marker({
      map: this.map,
      animation: google.maps.Animation.DROP,
      position: this.map.getCenter()
    });

    let content = "<p>This is your current position !</p>";          
    let infoWindow = new google.maps.InfoWindow({
      content: content
    });

    google.maps.event.addListener(marker, 'click', () => {
      infoWindow.open(this.map, marker);
    });
  }

}
