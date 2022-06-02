"use strict";
var plants = [
    {name: 'KOLKATA', coords: [22.5726, 88.3639]},
    {name: 'Ahmedabad', coords: [23.0225, 72.5714]},
    {name: 'Delhi', coords: [28.7041, 77.1025]},
    {name: 'Indore', coords: [22.7196, 75.8577]},
    {name: 'Hyderabad', coords: [17.3850, 78.4867]},
    {name: 'Nariman point', coords: [18.9256, 72.8242]},
    {name: 'Vashi', coords: [19.0745, 72.9978]},
    {name: 'Powai', coords: [19.1176, 72.9060]},
  ];
$('#visitorMap').vectorMap({
  map: 'in_merc',
//   backgroundColor: '#FFFFFF',
  borderColor: '#808080',
  borderOpacity: .8,
  borderWidth: 1,
  hoverColor: '#808080',
  hoverOpacity: .8,
  color: '#FF0000',
  normalizeFunction: 'linear',
  selectedRegions: true,
  showTooltip: true,
  pins: {
    id: '<div class="jqvmcleap-cir" style="height:30px;width:40px;"></div>',
    my: '<div class="jqvmap-circle"></div>',
    th: '<div class="jqvmap-circle"></div>',
    sy: '<div class="jqvmap-circle"></div>',
    eg: '<div class="jqvmap-circle"></div>',
    ae: '<div class="jqvmap-circle"></div>',
    nz: '<div class="jqvmap-circle"></div>',
    tl: '<div class="jqvmap-circle"></div>',
    ng: '<div class="jqvmap-circle"></div>',
    si: '<div class="jqvmap-circle"></div>',
    pa: '<div class="jqvmap-circle"></div>',
    au: '<div class="jqvmap-circle"></div>',
    ca: '<div class="jqvmap-circle"></div>',
    tr: '<div class="jqvmap-circle"></div>',
  },
  onRegionClick: function(element, code, region) {
    var opts = {
      title: 'Choosed',
      message: 'You clicked "'
      + region
      + '" which has the code: '
      + code.toUpperCase()
    };

    iziToast.info(opts);
  },
  markers: plants.map(function(h){ return {name: h.name, latLng: h.coords} }),
  labels: {
    markers: {
      render: function(index){
        return plants[index].name;
      } 
    }
},
});

