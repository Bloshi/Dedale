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
  @ViewChild('map') mapRef: ElementRef;

  constructor(
    public navCtrl: NavController, 
    public navParams: NavParams,
    private geo: Geolocation,
    private platform: Platform) 
  {
    this.platform.ready().then( () => {

      // construction de la localisation
      var options = {
        timeout: 5000
      };
      let currentPos: Geoposition;

      this.geo.getCurrentPosition(options).then( resp => {
        console.log(resp.coords.latitude);
        console.log(resp.coords.longitude);
      }).catch((error) => {
        console.log('Error getting location', error); 
      });

    });
  }

  ionViewDidLoad() {
    //console.log(this.mapRef);
    this.showMap();
  }

  showMap() {
    // Location - lat long
    const location = new google.maps.LatLng(51.507351, -0.127758);

    // Map options 
    const options = {
      center: location,
      zoom: 10,
      streetViewControl: false,
      mapTypeId: 'roadmap'
    }

    const map = new google.maps.Map(this.mapRef.nativeElement, options);

    this.addMarker(location, map);
  }

  addMarker(position, map) {
    return new google.maps.Marker({
      position,
      map
    });
  }

  
  
  // let watch = this.geo.watchPosition();
  // watch.subscribe((data) => {
  //   // data can be a set of coordinates, or an error (if an error occurred).
  //   // data.coords.latitude
  //   // data.coords.longitude
  // });

}
