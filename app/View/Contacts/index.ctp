<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5/leaflet.css" />
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5/leaflet.ie.css" />
<![endif]-->
<script src="http://cdn.leafletjs.com/leaflet-0.5/leaflet.js"></script>
<h1>Contact</h1>
<div class="row">
    <div class="contacts form">
        <?php echo $this->Form->create('Contact'); ?>
        <div class="span3">
            <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('email');
            echo $this->Form->input('phone');
            echo $this->Form->input('address');
            echo $this->Form->input('zip');
            ?>
        </div>
        <div class="span3">
            <?php
            echo $this->Form->input('subjet');
            echo $this->Form->input('message');
            ?>
            <?php echo $this->Form->end(__('Submit')); ?>
        </div>
        <div class="span6">
            <div id="map" style="height: 250px"></div>
            <address>
                <b>SOSOSO magazine</b>
                <br>
                Rue du Tunnel 12<br>
               1005 Lausanne, Switzerland<br>
                <abbr title="Email">E:</abbr> communication@sososomagazine.com
            </address>
        </div>
    </div>
</div>
<script>
    var map = L.map('map').setView([46.5251692, 6.633748700000069], 15);

             
    L.tileLayer('http://{s}.tile.cloudmade.com/77798a036f8d463995eb8d14335cfbc3/1491/256/{z}/{x}/{y}.png', {
                
        maxZoom: 18
    }).addTo(map);

    
    var greenIcon = L.icon({
        iconUrl: '../img/mini-logo-green.png',
        iconSize:     [30, 30]
    });
        
        

    var marker = L.marker([46.5251692, 6.633748700000069]).addTo(map).bindPopup("<b>SOSOSO magazine</b>");
    var popup = L.popup();
</script>