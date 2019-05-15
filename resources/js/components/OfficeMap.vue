<template>
    <l-map style="width: 100%; height: 350px" :zoom="zoom" :center="center">
        <l-tile-layer :url="url"></l-tile-layer>
        <l-marker :lat-lng="markerLatLng" @add="openPopup">
            <l-popup>
                <strong>
                    Wolney Araújo Dias
                    <br>Advogados Associados
                </strong>
                <br>Rua Major Feliciano, 185
            </l-popup>
        </l-marker>
    </l-map>
</template>

<script>
    import { LMap, LTileLayer, LMarker, LPopup } from "vue2-leaflet";
    import { Icon } from "leaflet";

    export default {
        name: "OfficeMap",

        components: { LMap, LTileLayer, LMarker, LPopup },

        data() {
            return {
                url: "http://{s}.tile.osm.org/{z}/{x}/{y}.png",
                zoom: 16,
                center: [-21.674709, -45.92178],
                markerLatLng: [-21.674709, -45.92178]
            };
        },

        methods: {
            openPopup(event) {
                this.$nextTick(() => {
                    event.target.openPopup();
                });
            }
        }
    };
</script>
