function initialize() {
    
    var latlng = new GeoPoint(103.77433586917046, 1.3321894065222382);
    
    var myOptions = {
    
        zoom: 13,
        
        center: latlng,
        
        showCopyright: false
    
    };
    
    var map = new SD.genmap.Map(
    
        document.getElementById("map_canvas"), 
        
        myOptions
    
    );

}