<template>
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow align-items-center p-4">
                    <fieldset v-show="NumerNext==1">
                        <legend>Datos del Denunciante</legend>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Tipo de Denunciante</label>
                                <div class="input-group mb-3">
                                    <select name="" id="" class="form-select">
                                        <option value="" selected disabled>--Seleccionar--</option>
                                        <option value="1">Anónimo</option>
                                        <option value="2">Con reserva de datos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Tipo Persona</label>
                                <div class="input-group mb-3">
                                    <select name="" id="" class="form-select">
                                        <option value="" selected disabled>--Seleccionar--</option>
                                        <option value="1">Natural</option>
                                        <option value="2">Jurídica</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Tipo de Doc.</label>
                                <div class="input-group mb-3">
                                    <select name="" id="" class="form-select">
                                        <option value="" selected disabled>--Seleccionar--</option>
                                        <option value="1">DNI</option>
                                        <option value="2">RUC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="basic-url" class="form-label">N°. Doc.</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Numero Doc.">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="basic-url" class="form-label">Apellido Paterno</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Apellido Paterno">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="basic-url" class="form-label">Apellido Materno</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="basic-url" class="form-label">Nombres</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Nombres">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Telefono</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Telefono">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Celular</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Celular">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Correo</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Correo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="basic-url" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" placeholder="Descripcion">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset v-show="NumerNext==1">
                        <legend>Denuncias Previas</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">¿Ha realizado denuncia previa?</label>
                                <div class="input-group mb-3">
                                    <select name="" id="" class="form-select">
                                        <option value="" selected disabled>--Seleccionar--</option>
                                        <option value="1">NO</option>
                                        <option value="2">SI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">¿Ante que entidad?</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Ante que entidad ?">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">¿Obtuvo despuesta?</label>
                                <div class="input-group mb-3">
                                    <select name="" id="" class="form-select">
                                        <option value="" selected disabled>--Seleccionar--</option>
                                        <option value="1">NO</option>
                                        <option value="2">SI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">¿Cuál fue la respuesta?</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cuál fue la respuesta?">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mt-2" v-show="NumerNext==1">
                        <div class="col-md-4 offset-8 d-flex justify-content-end">
                            <button class="btn btn-primary" @click="next()">Siguiente <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>



                    <fieldset v-show="NumerNext==2">
                        <legend>Datos del Denunciado</legend>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Tipo de Denunciante</label>
                                <div class="input-group mb-3">
                                    <select name="" id="" class="form-select">
                                        <option value="" selected disabled>--Seleccionar--</option>
                                        <option value="1">Anónimo</option>
                                        <option value="2">Con reserva de datos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Tipo Persona</label>
                                <div class="input-group mb-3">
                                    <select name="" id="" class="form-select">
                                        <option value="" selected disabled>--Seleccionar--</option>
                                        <option value="1">Natural</option>
                                        <option value="2">Jurídica</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Tipo de Doc.</label>
                                <div class="input-group mb-3">
                                    <select name="" id="" class="form-select">
                                        <option value="" selected disabled>--Seleccionar--</option>
                                        <option value="1">DNI</option>
                                        <option value="2">RUC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="basic-url" class="form-label">N°. Doc.</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Numero Doc.">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="basic-url" class="form-label">Apellido Paterno</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Apellido Paterno">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="basic-url" class="form-label">Apellido Materno</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="basic-url" class="form-label">Nombres</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Nombres">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Telefono</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Telefono">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Celular</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Celular">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Correo</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Correo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="basic-url" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" placeholder="Descripcion">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset v-show="NumerNext==2">
                        <legend>DESCRIPCIÓN DE LOS HECHOS (Por favor ingrese la dirección y la descripción del daño ambiental)</legend>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Dirección</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Dirección">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Referencia</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Referencia">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="basic-url" class="form-label">Cargar archivos de capacidad 2MB(MAX)</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" placeholder="Referencia">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="basic-url" class="form-label">Descripcion</label>
                            <div class="col-md-12">
                                <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row" style="display: none;">
                            <table>
                            <tr>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            </tr>
                            <tr v-for="(item, index) in markers" :key="index" >
                                <td>
                                    <input type="text" id="MAPA_LONGITUD" v-model.number="item.position.lat"  name="MAPA_LONGITUD">
                                </td>
                                <td> 
                                    <input type="text" id="MAPA_LATITUD" v-model.number="item.position.lng"  name="MAPA_LATITUD">
                                </td>
                            </tr>
                        </table>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12" id="map-container">
                                <label for="basic-url" class="form-label">Marque la ubicación de los hechos</label>
                                <l-map :zoom="zoom" :center="center" style="height: 92%; width: 100%">
                                    <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
                                    <l-marker
                                        v-for="marker in markers"
                                        :key="marker.id"
                                        :visible="marker.visible"
                                        :draggable="marker.draggable"
                                        :lat-lng.sync="marker.position"
                                        :icon="marker.icon"
                                    >
                                        <l-popup :content="marker.tooltip" />
                                        <l-tooltip :content="marker.tooltip" />
                                    </l-marker>
                                </l-map>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mt-4" v-show="NumerNext==2">
                        <div class="col-md-4 offset-8 d-flex justify-content-end">
                            <button class="btn btn-info mx-2" @click="previus()">Atras <i class="fa-solid fa-arrow-left"></i></button>
                            <button class="btn btn-primary" @click="next()">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
   import { Icon } from 'leaflet';   
    import { LMap, LTileLayer, LMarker } from 'vue2-leaflet';
    import markerIcon2x from 'leaflet/dist/images/marker-icon-2x.png';
    export default {
        name:'enviromentalComponet',
        components:{
            LMap,
            LTileLayer,
            LMarker
        },
        data(){
            return {
                NumerNext:1,
                zoom: 15,
                center: [-11.86689943166356, -77.07686732141322],
                url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                attribution: '&copy; OpenStreetMap contributors',
                markers: [
                    {
                    id: 'm1',
                    position: { lat: -11.86689943166356, lng: -77.07686732141322 },
                    tooltip: 'Municipalidad de Puente Piedra',
                    draggable: true,
                    visible: true,
                    },
                ],
            }
        },
        mounted() {
            delete Icon.Default.prototype._getIconUrl;
            Icon.Default.mergeOptions({
                iconRetinaUrl: markerIcon2x,
                iconUrl:this.imgUrl,
                shadowUrl:this.imgShadow,
            });
        },
        methods:{
            next(){
                this.NumerNext = 2;
                setTimeout(() => {
                        this.$refs.mymap.mapObject.invalidateSize(); 
            }, 500);
            },
            previus(){
                this.NumerNext = 1;
            }
        }
    }
</script>
<style>
#map-container {
    height: 350px !important;
}
</style>